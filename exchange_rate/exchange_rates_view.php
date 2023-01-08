<?php
require_once "ExchangeRate.php";  // Importing "ExchangeRate" class
$rate = new ExchangeRate();

// Needed val
$from = "USD";
$amount = 1;
$decimal = "%.3f";
$usd_decimal = "%2.f";
?>

<form name="rates" action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
    <fieldset>
        <legend><img src="img/buck.png" alt=""/>Currency Exchange Rates</legend>
        <table>
            <tr>
                <?php $to = "EUR";  // Changing only "to" var ?>
                <td>
                    $
                    <!--Adding empty label tags to avoid warnings-->
                    <label>
                        <input type="text" name="usd1" value="1"
                               onchange="document.rates.eur.value=document.rates.usd1.value*<?php printf($usd_decimal, $rate->convert_currency($from, $to, $amount)); ?>"/>
                    </label>
                    USD =
                </td>
                <td>
                    <label>
                        <input type="text" name="eur"
                               value="<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>"
                               onchange="document.rates.usd1.value=document.rates.eur.value*(1/<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>)"/>
                    </label>
                    EUR <img src="img/eu.gif" alt=""/>
                </td>
            </tr>

            <tr>
                <?php $to = "GBP"; ?>
                <td>
                    $
                    <label>
                        <input type="text" name="usd2" value="1"
                               onchange="document.rates.gbp.value=document.rates.usd2.value*<?php printf($usd_decimal, $rate->convert_currency($from, $to, $amount)); ?>"/>
                    </label>
                    USD =
                </td>
                <td>
                    <label>
                        <input type="text" name="gbp"
                               value="<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>"
                               onchange="document.rates.usd2.value=document.rates.gbp.value*(1/<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>)"/>
                    </label>
                    GBP <img src="img/uk.gif" alt=""/>
                </td>
            </tr>

            <tr>
                <?php $to = "CAD"; ?>
                <td>
                    $
                    <label>
                        <input type="text" name="usd3" value="1"
                               onchange="document.rates.cad.value=document.rates.usd3.value*<?php printf($usd_decimal, $rate->convert_currency($from, $to, $amount)); ?>"/>
                    </label>
                    USD =
                </td>
                <td>
                    <label>
                        <input type="text" name="cad"
                               value="<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>"
                               onchange="document.rates.usd3.value=document.rates.cad.value*(1/<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>)"/>
                    </label>
                    CAD <img src="img/ca.gif" alt=""/>
                </td>
            </tr>

            <tr>
                <?php $to = "HKD"; ?>
                <td>
                    $
                    <label>
                        <input type="text" name="usd4" value="1"
                               onchange="document.rates.hkd.value=document.rates.usd4.value*<?php printf($usd_decimal, $rate->convert_currency($from, $to, $amount)); ?>"/>
                    </label>
                    USD =
                </td>
                <td>
                    <label>
                        <input type="text" name="hkd"
                               value="<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>"
                               onchange="document.rates.usd4.value=document.rates.hkd.value*(1/<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>)"/>
                    </label>
                    HKD <img src="img/hk.gif" alt=""/>
                </td>
            </tr>

            <tr>
                <?php $to = "AUD"; ?>
                <td>
                    $
                    <label>
                        <input type="text" name="usd5" value="1"
                               onchange="document.rates.aud.value=document.rates.usd5.value*<?php printf($usd_decimal, $rate->convert_currency($from, $to, $amount)); ?>"/>
                    </label>
                    USD =
                </td>
                <td>
                    <label>
                        <input type="text" name="aud"
                               value="<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>"
                               onchange="document.rates.usd5.value=document.rates.aud.value*(1/<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>)"/>
                    </label>
                    AUD <img src="img/au.gif" alt=""/>
                </td>
            </tr>

            <tr>
                <?php $to = "SGD"; ?>
                <td>
                    $
                    <label>
                        <input type="text" name="usd6" value="1"
                               onchange="document.rates.sgd.value=document.rates.usd6.value*<?php printf($usd_decimal, $rate->convert_currency($from, $to, $amount)); ?>"/>
                    </label>
                    USD =
                </td>
                <td>
                    <label>
                        <input type="text" name="sgd"
                               value="<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>"
                               onchange="document.rates.usd6.value=document.rates.sgd.value*(1/<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>)"/>
                    </label>
                    SGD <img src="img/sg.gif" alt=""/>
                </td>
            </tr>

            <tr>
                <?php $to = "CNY"; ?>
                <td>
                    $
                    <label>
                        <input type="text" name="usd7" value="1"
                               onchange="document.rates.cny.value=document.rates.usd7.value*<?php printf($usd_decimal, $rate->convert_currency($from, $to, $amount)); ?>"/>
                    </label>
                    USD =
                </td>
                <td>
                    <label>
                        <input type="text" name="cny"
                               value="<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>"
                               onchange="document.rates.usd7.value=document.rates.cny.value*(1/<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>)"/>
                    </label>
                    CNY <img src="img/cn.gif" alt=""/>
                </td>
            </tr>

            <tr>
                <?php $to = "INR"; ?>
                <td>
                    $
                    <label>
                        <input type="text" name="usd8" value="1"
                               onchange="document.rates.inr.value=document.rates.usd8.value*<?php printf($usd_decimal, $rate->convert_currency($from, $to, $amount)); ?>"/>
                    </label>
                    USD =
                </td>
                <td>
                    <label>
                        <input type="text" name="inr"
                               value="<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>"
                               onchange="document.rates.usd8.value=document.rates.inr.value*(1/<?php printf($decimal, $rate->convert_currency($from, $to, $amount)); ?>)"/>
                    </label>
                    INR <img src="img/in.gif" alt=""/>
                </td>
            </tr>
        </table>
    </fieldset>

    <p>
        Source: <a href="<?= $rate->get_exchange_rates_url(); ?>"><?= $rate->get_exchange_rates_url(); ?></a>
    </p>
    <p>Valid for: <?= $rate->get_exchange_rates_time(); ?></p>
    <input type="button" name="rates" value="Get rates" onclick="location.reload()"/>
    <input type="reset" name="reset" value="Reset"/>
</form>
