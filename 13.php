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
function prime($a)
{
    $count=0;
    for ($i = 2; $i < $a; $i++)
    {
    if($a % $i == 0)
    {
        $count++;
    }
    }

    if($count>0)
    {
        return false;
    }
    else
    {
        return true;
    }

}
if(isset($_GET['num']))
{
    $n=intval($_GET['num']);

    for ($i=$n; $i>=3; $i--)
    {
        if(prime($i))
        {
            echo "$i ";
        }
    }
}
?>
</body>
</html>

