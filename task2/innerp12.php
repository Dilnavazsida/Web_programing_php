<html>
    <head>
        <style>
            
body{
    font-size: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 15%;
}
            
        </style>
    </head>
<body>

<?php
$celsius= $_GET['cel'];
$celsi=($celsius*9/5)+32;

echo ' Convert into into celsius',$celsi;
?>
</body>
</html>