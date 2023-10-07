<?php
require("class.phpmailer.php");
$mail = new PHPMailer();
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
//ini_set('SMTP','mail.mate-co.com');
//ini_set('sendmail_from','info@mate-co.com');
error_reporting(0);
$timeStamp=date("d/M/Y:H:i:s O");
$ipadd=getenv('REMOTE_ADDR');
$message="";
$message="
<table width='100%' border='0' cellpadding='3' cellspacing='0' class='cellborder'>
                                    <tr>
                                      <td height='3' bgcolor='#FFFFFF'><TABLE width='95%' border=0 align='center' cellPadding=0 cellSpacing=0>
                                        <TBODY>
                                          
                                          <TR>
                                            <TD vAlign=bottom colSpan=2 height=60><span class='required'>* = Required 
                                              Fields </span><br>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class='paragraph'>Title</td>
                                            <td bgcolor='#eeeeee'><strong>".$_POST['rbSalutation']."</strong></td>
                                          </tr>
                                        </tbody>
                                    </table></TD>
                                          </TR>
                                          <TR>
                                            <TD width=223><span class='paragraph'>First Name</span><SPAN class=required>*</SPAN></TD>
                                            <TD width=227><span class='paragraph'>Last Name</span><SPAN class=required>*</SPAN> </TD>
                                          </TR>
                                          <TR>
                                            <TD height='30' bgcolor='#eeeeee'><strong>".$_POST['First_Name']."</strong></TD>
                                            <TD bgcolor='#eeeeee'><strong>".$_POST['Last_Name']."</strong></TD>
                                          </TR>
                                          <TR>
                                            <TD colSpan=2><IMG height=10 alt=spacer 
                  src='ContactForm_files/spacer.gif' width=1></TD>
                                          </TR>
                                          <TR>
                                            <TD><span class='paragraph'>Company Name</span><SPAN class=required>*</SPAN></TD>
                                            <TD><span class='paragraph'>Job Title</span><SPAN class=required>*</SPAN></TD>
                                          </TR>
                                          <TR>
                                            <TD height='30' bgcolor='#eeeeee'><strong>".$_POST['Company']."</strong></TD>
                                            <TD bgcolor='#eeeeee'><strong>".$_POST['Job_Title']."</strong></TD>
                                          </TR>
                                          <TR>
                                            <TD colSpan=2><IMG height=10 alt=spacer 
                  src='ContactForm_files/spacer.gif' width=1></TD>
                                          </TR>
                                          <TR>
                                            <TD><span class=required><span class='paragraph'>Phone Number</span>* </span></TD>
                                            <TD><span class='paragraph'>Fax Number</span><span class=required>*</span></TD>
                                          </TR>
                                          <TR>
                                            <TD height='30' bgcolor='#eeeeee'><strong>".$_POST['Phone']."</strong></TD>
                                            <TD bgcolor='#eeeeee'><strong>".$_POST['fax']."</strong></TD>
                                          </TR>
                                          <TR>
                                            <TD colSpan=2>&nbsp;</TD>
                                          </TR>
                                          <TR>
                                            <TD colSpan=2 valign='bottom'><span class='paragraph'>Email Address</span><span class=required>*</span></TD>
                                          </TR>
                                          <TR>
                                            <TD colSpan=2 bgcolor='#eeeeee'><strong>".$_POST['Email_address']."</strong></TD>
                                          </TR>
                                        </TBODY>
                                      </TABLE></td>
                                    </tr>
                                    <tr>
                                      <td height='3' bgcolor='#FFFFFF'><TABLE width='95%' border=0 align='center' cellPadding=0 cellSpacing=0>
                                        <TBODY>
                                          <TR>
                                            <TD vAlign=bottom><span class='paragraph'>City</span><SPAN class=required>*</SPAN></TD>
                                            </TR>
                                          <TR>
                                            <TD bgcolor='#eeeeee'><strong>".$_POST['City']."</strong></TD>
                                            </TR>
                                          <TR>
                                            <TD></TD>
                                          </TR>
                                          <TR>
                                            <TD noWrap><span class='paragraph'>Country</span><SPAN class=required>*</SPAN></TD>
                                          </TR>
                                          <TR>
                                            <TD noWrap bgcolor='#eeeeee'><strong>".$_POST['Country']."</strong></TD>
                                          </TR>
                                          <TR>
                                            <TD noWrap>&nbsp;</TD>
                                          </TR>
                                        </TBODY>
                                      </TABLE></td>
                                    </tr>
                                    <tr>
                                      <td bgcolor='#FFFFFF' class='titlediv'> About Your Business</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor='#FFFFFF'><TABLE width='95%' border=0 align='center' cellpadding='3' cellspacing='0' id=cbInterest >
                                        <TBODY>
                                          <TR>
                                            <TD bgcolor='#eeeeee'><span class='style1'>
                                              <LABEL for=cbInterest_0>What are you interested in? </LABEL>
                                            </span></TD>
                                            </TR>
                                          <TR>
                                            <TD bgcolor='#eeeeee' class='paragraph'><label for=cbInterest_0>
                                              <strong>".$_POST['ch1']."</strong></label></TD>
                                            </TR>
                                          <TR>
                                            <TD bgcolor='#eeeeee'><strong>".$_POST['ch2']."</strong></TD>
                                            </TR>
                                          <TR>
                                            <TD bgcolor='#eeeeee'><strong>".$_POST['ch3']."</strong>
                                              <label for=cbInterest_0></label></TD>
                                            </TR>
                                          <TR>
                                            <TD bgcolor='#eeeeee'><strong>".$_POST['ch4']."</strong>
                                              <LABEL for=cbInterest_1></LABEL></TD>
                                            </TR>
                                          <TR>
                                            <TD bgcolor='#eeeeee'><strong>".$_POST['ch5']."</strong>
                                              <LABEL for=cbInterest_2></LABEL></TD>
                                            </TR>
                                          <TR>
                                            <TD bgcolor='#eeeeee'><LABEL 
              for=cbInterest_3 class='paragraph'>
                                              <strong>".$_POST['ch6']."</strong></LABEL></TD>
                                            </TR>
                                          <TR>
                                            <TD bgcolor='#eeeeee'><span class='paragraph'>
                                              <strong>".$_POST['ch7']."</strong></span></TD>
                                            </TR>
                                          <TR>
                                            <TD bgcolor='#eeeeee'><label 
              for=cbInterest:3 class='paragraph'>
                                              <strong>".$_POST['ch81']."</strong></label></TD>
                                            </TR>
                                          <TR>
                                            <TD bgcolor='#eeeeee'><strong></strong>
                                              <label 
              for=cbInterest:3 class='paragraph'></label></TD>
                                            </TR>
                                          </TBODY>
                                      </TABLE></td>
                                    </tr>
                                    
                                    <tr>
                                      <td bgcolor='#FFFFFF'><table width='95%' border='0' align='center' cellpadding='3' cellspacing='0'>
                                        <tr>
                                          <td valign='middle'><span class='paragraph'><strong>Comments:</strong></span></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor='#eeeeee'><strong>".$_POST['Comments']."</strong>
                                            <label 
            for=chkMailing class='paragraph'></label></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor='#eeeeee'><strong>".$_POST['chkMailing']."</strong>
                                            <label 
            for=chkMailing class='paragraph'></label></td>
                                        </tr>
                                        <tr>
                                          <td align='right'>&nbsp;</td>
                                        </tr>
                                      </table>                                      
                                        <label 
            for=chkMailing class='paragraph'></label>                                        <label 
            for=chkMailing class='paragraph'></label></td>
                                    </tr>
									<tr><td bgcolor='#e2e2e2'>".$timeStamp."  ".$ipadd."</td></tr>
                                </table>


";

//$message=stripslashes($message);
$mail->IsSMTP();                                      // set mailer to use SMTP
//$mail->Host = "mail.mate-co.com";
//$mail->From = "webmaster@mate-co.com";
$mail->FromName = $_POST['First_Name']." ".$_POST['Last_Name'];
//$mail->AddAddress("tech@mate-co.com");
$mail->Subject = "Mate Contact Site";
$mail->Body    = $message;
$mail->AltBody = "Your Email non-HTML mail clients";
if(!$mail->Send())
{
   echo "<html>
<head><link rel='shortcut icon' href='images/transparent.ico' />
<link rel='icon' href='images/animated_favicon1.gif' type='image/gif' />
<meta http-equiv='refresh' content='1; URL=contact_us.php''>
<title>:: mate company::</title>
<link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body bgcolor='#ffffff'>
<table width='100%' height='100%' border='0' align='center' cellpadding='3' cellspacing='0'>
  <tr>
    <td align='center' valign='middle'><div align='center'>
      <p><strong><font size='4' face='Verdana, Arial, Helvetica, sans-serif'><br>
              <img src='images/LOGO.jpg' alt='Nissan' width='100' height='47'> <br>
              <span class='whitetxt'>------------------------------------------------------------</span><br>
        Thank You</font></strong><br>
        <strong><font size='4' face='Verdana, Arial, Helvetica, sans-serif'><span class='whitetxt'>------------------------------------------------------------</span></font></strong></p>
     <br>Error Sending Msg<br> <p><a href='index.php'>Home</a>&nbsp; |&nbsp;<a href='javascript:history.go(-1)' >Back </a></p>
    </div></td>
  </tr>
</table>
</body>
</html>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}else{
//echo "<p align='center'>Message has been sent</p>";
echo "<html>
<head><link rel='shortcut icon' href='images/transparent.ico' />
<link rel='icon' href='images/animated_favicon1.gif' type='image/gif' />
<meta http-equiv='refresh' content='1; URL=contact_us.php'>
<title>::mate company ::</title>
<link href='css/style.css' rel='stylesheet' type='text/css'>
</head>
<body bgcolor='#ffffff'>
<table width='100%' height='100%' border='0' align='center' cellpadding='3' cellspacing='0'>
  <tr>
    <td align='center' valign='middle'><div align='center'>
      <p><strong><font size='4' face='Verdana, Arial, Helvetica, sans-serif'><br>
              <img src='images/LOGO.jpg' alt='Nissan' width='100' height='47'> <br>
              <span class='whitetxt'>------------------------------------------------------------</span><br>
        Thank You</font></strong><br>
        <strong><font size='4' face='Verdana, Arial, Helvetica, sans-serif'><span class='whitetxt'>------------------------------------------------------------</span></font></strong></p>
     <br>Message has been sent<br> <p><a href='index.php'>Home</a>&nbsp; |&nbsp;<a href='javascript:history.go(-1)' >Back </a></p>
    </div></td>
  </tr>
</table>
</body>
</html>
";
}
//mail($to,$title,$message);
?>

