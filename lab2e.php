<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab 2e</title>
</head>
<body>
    <table border="1"cellspacing=0 cellpadding=15>
        <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Rate</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>Hamburger</td>
            <?php
                $quantity = 2;
                $rateHam = 150.99;
                $rateSand = 100.95;
                $THam = $quantity * $rateHam;
                $TSand = $quantity * $rateSand;
                $Total = $THam + $TSand;
                $sCharge = ($Total * 10)/100;
                $Total += $sCharge;
                $dis = ($Total * 7)/100;
                $Total -= $dis;
                echo ("<td>$quantity</td>
                        <td>$rateHam</td>
                        <td>$THam</td>
                    </tr>
                    <tr>
                        <td>Sandwich</td>
                        <td>$quantity</td>
                        <td>$rateSand</td>
                        <td>$TSand</td>
                    </tr>
                    <tr>
                        <td>Service Chanrge</td>
                        <td></td>
                        <td>10%</td>
                        <td>$sCharge</td>
                    </tr>
                    <tr>
                        <td>Discount</td>
                        <td></td>
                        <td>7%</td>
                        <td>$dis</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Grand Total</td>
                        <td>$Total</td>
                    </tr>"
                );
            ?>
    </table>
</body>
</html>