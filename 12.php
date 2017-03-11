<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if(isset($_GET['num']))
{
    $n=intval($_GET['num']);
    $curNum=0;
    $num=0;
    $num2=1;
    $fib=0;
    echo "$num2 ";
    for ($i=0; $i<$n-1; $i++)
    {
        $fib=$num+$curNum+$num2;
        $curNum=$num;
        $num=$num2;
        $num2=$fib;
        echo "$fib ";
    }
}
?>
</body>
</html>

