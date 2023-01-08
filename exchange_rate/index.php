<!--Main-->


<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF8"/>
    <title>Exchange Rates</title>
</head>
<body>
<?php
require_once "exchange_rates_view.php";  // Copying view


// OPTIONAL. Uncomment to see all exchange rates and full currency names
/*
echo "<hr>";

$rate = new ExchangeRate();

$rate->show_all_exchange_rates();

$names = $rate->get_currency_names();
foreach ($names as $abbreviation => $name) {
    echo $abbreviation . " - " . $name, "<br>";
}
*/
?>
</body>
</html>
