<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KerryEyre Cleaning</title>
<link rel="stylesheet" type="text/css"  href="css/style.css"/>

<script type="text/javascript">
function validate()
{
	var x=document.forms["contact"]["youremail"].value
	var atpos=x.indexOf("@");
    var dotpos=x.lastIndexOf(".");
	
	if(document.contact.yourname.value=='')
	{
		alert("Please enter your name");	
		document.contact.yourname.focus();
		return false;
	}
	else if(document.contact.yourtelno.value=='')
	{
		alert("Please enter telephone number");	
		document.contact.yourtelno.focus();
		return false;
	}
	else if(document.contact.youremail.value=='')
	{
		alert("Please enter email address");	
		document.contact.youremail.focus();
		return false;
	}
	else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
    {
		alert("Please enter a valid email address");
		document.contact.youremail.focus();
		return false;
    }
	else if(document.contact.message.value=='')
	{
		alert("Please enter your message");	
		document.contact.message.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>

</head>

<body>
<div class="wrapper">
<div id="maindiv">
<div class="header">
   <div class="logo"><img src="images/logo.png"/></div>
   <div class="telno">
   <p class="cal">Call now<br />
     00353 878 154 362</p>
   </div>
  </div>
<div class="menu">
<ul class="nbar">
<li class="first active"><a href="index.html">Home</a></li>
<li><a href="testimonial.html">Testimonials</a></li>
<li><a href="contacts.php">Contact</a></li>
<!--<li><a href="#">Our Service</a></li>
<li><a href="#">Our Clients</a></li>
<li><a href="#">Downloads</a></li>
<li><a href="#">Web Platform</a></li>
<li><a href="#">Tools</a></li>
--></ul>
</div>
<div class="container">

<p class="head">Contact Kerry</p>
<p class="headsmall">Telephone : 00353 878 154 362</p>
<p class="headsmall">E-Mail : <a href="mailto:kerry@kerryeyrecleaning.com">kerry@kerryeyrecleaning.com</a></p>
<form id="contact" name="contact" method="post" onsubmit="return validate();">
  <table width="600" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td colspan="2"><span style="color:#F00"></span></td>
    </tr> 
    <tr>
      <td><p>Your name</p></td>
      <td><input type="text" name="yourname" id="yourname" /></td>
    </tr>
    <tr>
      <td><p>Your telephone number</p></td>
      <td><input type="text" name="yourtelno" id="yourtelno" /></td>
    </tr>
    <tr>
      <td><p>Your email address</p></td>
      <td><input type="text" name="youremail" id="youremail" /></td>
    </tr>
    <tr>
      <td><p>Your message</p></td>
      <td><textarea name="message" id="message" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /> <input type="reset" name="button2" id="button2" value="Reset" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>


<div class="call" style="margin-top:193px;">
  <div class="call1">Call 00353 878 154 362</div>
  <div class="com1">Belfast, Derry/Londonderry and Inishowen</div>
</div>
</div>

 
</div>
</div>
<div class="footer">
<div class="wrapper">
<div class="footer_inner">
 <div class="ft">Premium cleaning services in Belfast,  Derry/Londonderry and Inishowen<br />
 Email:<font color="#9AB1B1">kerry@kerryeyrecleaning.com</font> | Phone:<font color="#9AB1B1"> 00353 878 154 362</font></div>
<div class="ft1">&#169; 2012 Kerry Eyre Cleaning All right reserved.<br />
<font color="#9AB1B1">Site designed and developed by Pixel House Design.</font></div>
</div>
</div>
</div>
</body>
</html>
