<?

$a=$_GET['fi'];
$b=$_GET['se'];
$c=$_GET['th'];

if($a>$b&&$a>$c)
{
    echo 'First number is largest',$a;
}
else if ($b>$a&&$b>$c)
{
    echo 'second number is largest',$b;
}
else{
echo 'Third number is largest',$c;
}