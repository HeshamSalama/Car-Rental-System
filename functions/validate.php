<form method="POST">
    <input type="text" name="text">
    <input type="submit" name="submit">
</form>

<?php
function chechText($var)
{
    if (!preg_match('/[^A-Za-z0-9]/',$var )) 
        return true;
    else
        return false;
}
function checkLetters($var)
{
    if (!preg_match('/[^A-Za-z]/',$var )) 
               return true;
    else
        return false;

}
function checkNumber($var)
{
    if (!preg_match('/[^0-9]/',$var )) 
               return true;
    else
        return false;

}
function checkEDigits($var,$num)
{
    if(strlen($var)==$num)
}
if(isset($_POST['submit']))
{
    $text = $_POST['text'];
    if(checkNumber($text)==true)
        echo "true";
    else
    echo "false";
}


?>