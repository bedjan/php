<?php
$name = $_POST['name'];
$mailfrom=$_POST['customer_mail']; 
$subject=$_POST['subject'];
$detail=$_POST['detail']; 
$header="from: $name <$mailfrom>";
// Enter your email address
$to ='bedjan@gmail.com';
$send_contact=mail($to,$subject,$detail,$header);
// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact)
 {
   ?>
     <table border=0 cellspacing=1 cellpadding=1 align=center align=center  style="border:1px solid; background-color: lightblue;  border-color: lightblue;  width:60%;height:60%">
<tr><td>Drahá(ý) <?php echo $name ?> ,</td></tr>

<tr><td>Vážíme si Vaší zpětné vazby</td></tr>

<tr><td>Váš e-mail byl úspěšně odeslán.</td></tr>
<tr><td>Ak.</td></tr>

<tr><td>Regards,</td></tr>
<tr><td>Support Team.</td></tr>
<div align=center STYLE="font-size: 12px; color: #dadada;">
<a href="http://www.hscripts.com" style="text-decoration:none; color: #dadada;">provided by &nbsp;&nbsp;<b>&copy; hscripts.com</b></a>
</div>
</table>
 <?php
   }
        else
         {
           ?>  <table border=0 align=center align=center  style="border:1px solid;color:red; background-color: lightblue;  border-color: lightblue;  width:80%;height:80%">
<tr><td>Drahá(ý) <?php echo $name ?> ,</td></tr>
<tr><td>Omlouvám se email nemohu odeslat, zkuste to znovu</td></tr>
<tr><td>Pozdravuje,</td></tr>
<tr><td>AK.</td></tr>

</table>
         <?php
          }
?>



