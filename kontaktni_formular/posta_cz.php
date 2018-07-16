<html>
	<head>
<meta charset="utf-8">
		<title>Kontaktní formulář</title>
		<link href='style.css' rel='stylesheet' type="text/css"> 
<script type="text/javascript">
    function checkchar()
	{
      var namdv=document.getElementById('namdiv'); 
      var alphaExp = /^[a-zA-Z]+$/;
            var namee=document.form1.name.value;
      if(namee=="")
      {
             namdv.innerHTML="<font color='red'>Invalid Name</font>";
             return false;   
      }
	  else
	  {
		namdv.innerHTML="";
		return true;   
	  }
    }

    function emailvalid()
    {
       var emal=document.form1.customer_mail.value;
       var ealt=document.getElementById('maildiv');
       if(emal!="")
        {
              var emailExp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([com\co\.\in])+$/;
              if(!emal.match(emailExp))
                {
	               document.form1.customer_mail.focus();
                  ealt.innerHTML="<font color='red'>Invalid Email id </font>";
				document.getElementById('customer_mail').value='';
		              return false; 	
	                }else{
		             ealt.innerHTML="";
                 //document.getElementById('customer_mail').focus();
                  return true;
                   }
             }    
             else if(emal.length==0)
            {
              ealt.innerHTML="<font color='red'>Invalid Email</font>";
               return false; 
               }
     }
   
   function chkcmd()
 {
  var sub=document.form1.subject.value;
  var cmd=document.form1.detail.value;
   if(sub.length==0)
     {
      document.getElementById('subdiv').innerHTML="<font color='red'>Subject Please</font>";
	  document.getElementById('comdiv').innerHTML="";
      return false;
     
     }
  else  if(cmd.length==0)
     {
      document.getElementById('subdiv').innerHTML="";
      document.getElementById('comdiv').innerHTML="<font color='red'>Comment Please</font>";
      return false;
      }
  else 
     {
       document.getElementById('subdiv').innerHTML="";
       document.getElementById('comdiv').innerHTML="";
       return true;
     }
 }  


function checkform()
{
    //if(checkchar())
    //  {
    //     if(emailvalid())  
    //       {
    //           if(chkcmd())
    //              {
    //                   	document.form1.submit();
    //            
    //               }
    //                      
    //       }
    //  }
		var name = document.getElementById('name').value;
		var mail = document.getElementById('customer_mail').value;
		var sub = document.getElementById('subject').value;
		var desc =document.getElementById('detail').value;
		if(name!='' && mail!='' && sub!='' && desc!='')
		{
			document.form1.submit();
		}
		else
		{
			document.getElementById('status').innerHTML="<font color='red'><b>Enter Details Properly!!</b></font>";
		}
		
}
function clearform()
{
	  	  document.getElementById('name').value='';
		document.getElementById('customer_mail').value='';
		document.getElementById('subject').value='';
		document.getElementById('detail').value='';
		document.getElementById('maildiv').innerHTML='';
		document.getElementById('status').innerHTML='';
}
function ctck()
{
    var sds = document.getElementById("dum");
    if(sds == null){
        alert("You are using a free package.\n You are not allowed to remove the tag.\n");
    }
    var sdss = document.getElementById("dumdiv");
    if(sdss == null){
        alert("You are using a free package.\n You are not allowed to remove the tag.\n");
    }
}
document.onload="ctck()";
</script>
	</head>
	<body>
		<div class='resp_code'>
			<div class='frms' style='border:none;'>
			<div align='center'><b>Kontaktní formulář</b></div><br>
			<form name="form1" method="post" action="contac.php" accept-charset="UTF-8">
			<b>Jméno * </b><br><input type="text" name="name" id="name" onBlur="checkchar()" maxlength=15 size="35" onkeyup='checnum(this)'><span  id='namdiv'></span><br>
			<b>Email *</b><br><input type="text" name="customer_mail" id="customer_mail" onBlur="emailvalid()" size="35"><span id='maildiv'></span><br>
			<b>Předmět *</b><br><input type="text" name="subject" id="subject" maxlength=20 size="35"><span id='subdiv' onBlur="chkcmd()"></span><br>
			<b>Text *</b><br><textarea name="detail" cols="40" rows="5" id="detail"></textarea><span id='comdiv' onBlur="chkcmd()"></span><br>
			<div align='center'>
			<input type="button" name="Submit" value="Poslat" onClick="checkform()" >
			<input type="reset" name="Submit2" value="Vymazat" onclick="clearform()">
			</div>
			</form>
			<div id='status' align=center></div>
			</div>
			<div align=center STYLE="font-size: 12px; color: #dadada;">
			<a href="#" style="text-decoration:none; color: #dadada;">&nbsp;&nbsp;<b>&copy; Home</b></a>
			</div>
		</div>
	</body>
</html>
 
