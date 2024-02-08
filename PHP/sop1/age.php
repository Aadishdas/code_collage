<?php
if(isset($_POST['submit']))
{
    $age=$_POST['age'];
    if($age>=18)
    echo "<br><br>You are Eligible to vote";
    else
    echo "<br><br>You are not Eligible to vote";
}
?>
