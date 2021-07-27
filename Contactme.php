<?php 
    if(isset($_POST['submit']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Msg = $_POST['message'];

       if(empty($UserName) || empty($Email) || empty($Msg))
       {
           echo "<h1>Please Provide Your information Properly.</h1>";
       }
       else
       {
           $to = "samplephpsendmail@gmail.com";
            $subject = "wants to contact";
           if(mail($to,$subject,$Msg,$Email))
           {
            echo "<h1>Your Feedback has been sent successfully.</h1>";
        }
       }
    }
    else
    {
        header("location:index.html");
    }
?>