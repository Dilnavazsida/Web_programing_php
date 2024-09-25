<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15%;
        }
    </style>
</head>
<body>
    <form action="innerp10.php" method="GET">
    <table border="3px" height="200px" width="400px">
        <tr>
            <td>Enter The Length</td>
            <td> <input type="text" name="len"></td>
        </tr>
        <tr>
            <td>Enter the Width</td>
            <td><input type="text" name="wid"></td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" name="submit"></center></td>
        </tr>
    </table>
    </form>
</body>
</html>