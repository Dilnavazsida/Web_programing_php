<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form action="innerp16.php" method="GET">
    <table border="3px" height="200px" width="400px">
        <tr>
            <td>check the vovels in sentance</td>
            <td> <input type="text" name="vov"></td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" name="sub"></center></td>
        </tr>
    </table>
    </form> -->
    <?php
$sentence = "Hello World!";
$vowelsCount = preg_match_all('/[aeiouAEIOU]/', $sentence);
echo "Number of vowels: " . $vowelsCount;
?>
</body>
</html>