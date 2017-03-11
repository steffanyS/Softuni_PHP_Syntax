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
    $num=1;
    $fib=0;
    echo "$num ";
    for ($i=0; $i<$n; $i++)
    {
        $fib=$num+$curNum;
        $curNum=$num;
        $num=$fib;
        echo "$fib ";
    }
}
?>
</body>
</html>

