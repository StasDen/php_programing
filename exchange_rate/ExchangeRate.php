<h1 style="text-align: center;">Exchange Rates</h1>

<?php

class ExchangeRate
{
    private string $exchange_rates_cache_folder;
    private string $exchange_rates_url;
    private string $exchange_rates_time;
    private array $exchange_rates;  // Arr to store all exchange rates
    private string $exchange_rates_cache_file = "cached_rates.xml";  // File with cached exchange rates

    // Associative arr with full currency names
    private array $currency_names = [
        "USD" => "United States Dollar",
        "EUR" => "European Euro",
        "GBP" => "Great Britain Pound",
        "CAD" => "Canadian Dollar",
        "JPY" => "Japanese Yen",
        "HKD" => "Hong Kong Dollar",
        "CNY" => "Chinese Yuan",
        "INR" => "Indian Rupee",
        "AUD" => "Australian Dollar",
        "SGD" => "Singapore Dollar"
    ];

    public function __construct()
    {
        $this->exchange_rates_url = "https://www.ecb.int/stats/eurofxref/eurofxref-daily.xml";  // Url to get data from
        $this->exchange_rates_cache_folder = dirname(__FILE__);  // Setting full path to current folder

        // Getting data
        $this->get_exchange_rates();
    }

    // Performing currency convert operation
    public function convert_currency($from, $to, $amount): float
    {
        // Special case(because of European Central Bank data)
        if ($to == "EUR") {
            if ($this->exchange_rates[$from] == 0 or $this->exchange_rates[$to] == 0) {
                echo "Unable to convert. Please, set currency";
                $value = 0;  // Output var
            }
            $value = $amount * (1 / $this->exchange_rates[$from]) / $this->exchange_rates[$to];
        } else {
            if ($this->exchange_rates[$from] == 0) {
                $value = 0;
            }
            $value = $amount * $this->exchange_rates[$to] / $this->exchange_rates[$from];
        }
        return $value;
    }

    // Getting exchange rates from ECB
    private function get_exchange_rates(): void
    {
        // Setting def values
        $current_time = time();
        $cache = $this->exchange_rates_cache_folder . "/" . $this->exchange_rates_cache_file;  // Cache location
        $amount = 1;
        $interval = 0;  // Time interval
        $this->exchange_rates["EUR"] = 1.00;

        // Checking if there are recent exchange rates cache file
        if (file_exists($cache)) {
            $interval = $current_time - filemtime($cache);
            // If cache file doesn't exist or cache is expired
            if ($interval > 0 or !file_exists($cache)) {
                $new_cache = file($this->exchange_rates_url);
                if (is_writable($cache)) {
                    $opened_cache = fopen($cache, "w+");
                    foreach ($new_cache as $row) {
                        // Writing data
                        fputs($opened_cache, $row);
                    }
                } else {
                    die("File is not writable. Please, check folder permissions");
                }
            } else {
                $new_cache = file($cache);
            }

            // Extracting exchange rates
            foreach ($new_cache as $row) {
                // Time regex
                if (preg_match("/time='([[:graph:]]+)'/", $row, $got_time)) {
                    $this->exchange_rates_time = $got_time[1];
                }
                // Currency name regex
                preg_match("/currency='([[:alpha:]]+)'/", $row, $got_currency);
                // Rate regex
                if (preg_match("/rate='([[:graph:]]+)'/", $row, $got_rate)) {
                    $this->exchange_rates[$got_currency[1]] = $got_rate[1];  // Filling arr with currency-rate pairs
                }
            }
        }
    }

    // Printing all exchange rates
    public function show_all_exchange_rates(): void
    {
        echo "<pre>";
        print_r($this->exchange_rates);  // Formatted text
        echo "</pre>";
    }

    // Getters
    public function get_exchange_rates_time(): string
    {
        return $this->exchange_rates_time;
    }

    public function get_exchange_rates_url(): string
    {
        return $this->exchange_rates_url;
    }

    public function get_currency_names(): array
    {
        return $this->currency_names;
    }
}

?>
