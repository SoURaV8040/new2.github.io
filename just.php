<?php
$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];
if(empty($name) && empty($email) && empty($message))
{
   mail("souravbarui999@gmail.com", "My WebPag Mail", $message, "From: $name <$email>");
   echo "<script type='text/javascript'>
            alert('Your Message Send Successfilly');
            window.history.log(-1);
         </script>";
}else{
   echo "Plese Fill All The Fields";
}
?>