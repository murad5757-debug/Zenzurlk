<?php

if(isset($_POST['btn-send']))
{
    
    $UserName = $_POST['UName'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Msg = $_POST['msg'];

    /*if the blanks are empty the errors message will show */
    if(empty($UserName) || empty($Email) ||empty($Subject) || empty($Msg))
    
    {
        /*this used as a --error-- in index as a class in side--- if(isset($_GET['error']))-----*/
        header('location:signing.php?error');

    }
    else
    {
        $to = "im.muradctl@gmail.com";

        if(mail($to,$Subject,$Msg,$Email))
        {
            /*this used as a --success-- in index as a class inside--- if(isset($_GET['success']))-----*/
            header("location:signing.php?success");
        }
    }

}

else
{
    header("location:signing.php");
}

?>