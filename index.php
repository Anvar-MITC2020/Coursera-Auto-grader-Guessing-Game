<!DOCTYPE html>
<html>
<head lang="uz-UZB">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title> Anvar Narzulloev 85b648a8 </title>
<h1> Welcome to my guessing game</h1>

<?php
$correctnumber = 28; //change this number //
if(isset($_GET['guess']))
{
  if (is_numeric($_GET['guess'])===FALSE)
 {
echo "Your guess is not a number";
}
else if ($_GET['guess']<$correctnumber)
 {
echo "Your guess is too low";
}
else if ($_GET['guess']>$correctnumber)
 {
echo "Your guess is too high";
}
else if ($_GET['guess']==$correctnumber)
 {
echo "Congratulations - You are right";
}
}
else
{
echo "Missing guess parameter <br> Your guess is too short";
}
?>
</body>
</html>
