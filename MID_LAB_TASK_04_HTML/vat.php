<?php

$vat=0;
$amount="";
if(isset($_POST["calcBtn"]))
{
    $amount= $_POST["amount"];

    $vat = ($amount*0.15) + $amount
}

?>
<!doctype html>
<html>
    <head>
        <title>Vat Calculator</title>
        <style>
            label{
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Vat Calculator</h1>
        <h2>Vat: <?php= $vat ?></h2>
        <form action="" method="post">
            <label for="amount">Amount:
                <input type="text" name="amount" value="<?=$amount?>">
            </label>
            <button name="calcBtn" type="submit">Calculate</button>
        </form>
    </body>
</html>