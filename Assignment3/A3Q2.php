
<html>
<body>
<form  name="FORM" action="A3Q2.php"  method="post">
Enter First Variable:<input type="text" name="var1" required><br>
Enter Second Variable:<input type="text" name="var2" required><br>
<input type="submit" name="submit" value="Caclulate">
</form>
</body>
 </html>
<?php
if(isset($_POST['submit']))
{
    $var1=$_POST['var1'];
    $var2=$_POST['var2'];
    if(empty($_POST['var1'])||empty($_POST['var1']))
    echo "please input some values";
    else
    {$sum=$var1+$var2;
        echo "sum of two variables is $sum";
    }
}
?>
