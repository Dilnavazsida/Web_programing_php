<html>
    <head>
        <title> sum of all numbers  from 10 to 100</title>
        <style>
            body{
                margin-top: 15%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <?php
        $sum=0;
        for($i=1;$i<=100;$i++)
        {
            $sum +=$i;
        }
        echo 'THE SUM OF ALL NUMBERS FROM 1 TO 100 = ',$sum;
        ?>
    </body>
</html>