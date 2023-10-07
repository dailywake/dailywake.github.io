<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/transparent.ico" />
<link rel="icon" href="images/animated_favicon1.gif" type="image/gif" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:: Mate Company :: Contact Us ::</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="js/tooltip.js"></script>
<meta name="keywords" content="Design,logo,graphic,web, developing, applications,maintenance,networks,network,website,web site,sites,posters,brochure,flash design, flash, flash programming,flyer ,web design, presentation, introductions,flash introductions,company care, hosting,host, domain,software,programming,sales,offers" />
<meta name="description" content="Design,logo,graphic,web, developing, applications,maintenance,networks,network,website,web site,sites,posters,brochure,flash design, flash, flash programming,flyer ,web design, presentation, introductions,flash introductions,company care, hosting,host, domain,software,programming,sales,offers" />
<script language="JavaScript" type="text/javascript">
<!--
// -----------------------------------------------------------------------------
// Globals
// Major version of Flash required
var requiredMajorVersion = 8;
// Minor version of Flash required
var requiredMinorVersion = 0;
// Revision of Flash required
var requiredRevision = 0;
// the version of javascript supported
var jsVersion = 1.0;
// -----------------------------------------------------------------------------
// -->
</script>
<script language="VBScript" type="text/vbscript">
<!-- // Visual basic helper required to detect Flash Player ActiveX control version information
Function VBGetSwfVer(i)
  on error resume next
  Dim swControl, swVersion
  swVersion = 0
  
  set swControl = CreateObject("ShockwaveFlash.ShockwaveFlash." + CStr(i))
  if (IsObject(swControl)) then
    swVersion = swControl.GetVariable("$version")
  end if
  VBGetSwfVer = swVersion
End Function
// -->
</script>
<script language="JavaScript1.1" type="text/javascript">
<!--
<!-- // Detect Client Browser type
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;
jsVersion = 1.1;
// JavaScript helper required to detect Flash Player PlugIn version information
function JSGetSwfVer(i){
	// NS/Opera version >= 3 check for Flash plugin in plugin array
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
      		var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
			descArray = flashDescription.split(" ");
			tempArrayMajor = descArray[2].split(".");
			versionMajor = tempArrayMajor[0];
			versionMinor = tempArrayMajor[1];
			if ( descArray[3] != "" ) {
				tempArrayMinor = descArray[3].split("r");
			} else {
				tempArrayMinor = descArray[4].split("r");
			}
      		versionRevision = tempArrayMinor[1] > 0 ? tempArrayMinor[1] : 0;
            flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
      	} else {
			flashVer = -1;
		}
	}
	// MSN/WebTV 2.6 supports Flash 4
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
	// WebTV 2.5 supports Flash 3
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
	// older WebTV supports Flash 2
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
	// Can't detect in all other cases
	else {
		
		flashVer = -1;
	}
	return flashVer;
} 
// If called with no parameters this function returns a floating point value 
// which should be the version of the Flash Player or 0.0 
// ex: Flash Player 7r14 returns 7.14
// If called with reqMajorVer, reqMinorVer, reqRevision returns true if that version or greater is available
function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision) 
{
 	reqVer = parseFloat(reqMajorVer + "." + reqRevision);
   	// loop backwards through the versions until we find the newest version	
	for (i=25;i>0;i--) {	
		if (isIE && isWin && !isOpera) {
			versionStr = VBGetSwfVer(i);
		} else {
			versionStr = JSGetSwfVer(i);		
		}
		if (versionStr == -1 ) { 
			return false;
		} else if (versionStr != 0) {
			if(isIE && isWin && !isOpera) {
				tempArray         = versionStr.split(" ");
				tempString        = tempArray[1];
				versionArray      = tempString .split(",");				
			} else {
				versionArray      = versionStr.split(".");
			}
			versionMajor      = versionArray[0];
			versionMinor      = versionArray[1];
			versionRevision   = versionArray[2];
			
			versionString     = versionMajor + "." + versionRevision;   // 7.0r24 == 7.24
			versionNum        = parseFloat(versionString);
        	// is the major.revision >= requested major.revision AND the minor version >= requested minor
			if ( (versionMajor > reqMajorVer) && (versionNum >= reqVer) ) {
				return true;
			} else {
				return ((versionNum >= reqVer && versionMinor >= reqMinorVer) ? true : false );	
			}
		}
	}	
	return (reqVer ? false : 0.0);
}
// -->

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<script type="text/javascript" language="JavaScript1.2" src="stmenu.js"></script>
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
<script type="text/javascript">
		var djConfig = {
					isDebug: false
		};
	</script>
	<script type="text/javascript" src="dojo.js"></script>
	<script type="text/javascript">
		dojo.require("dojo.widget.Editor");
		
	</script>
	<script language="javascript">
	function doflag(xx){
	//alert(xx);
	if(xx!=""){
	document.getElementById('flagimg').src="images/flags/"+xx+".png"
	//document.getElementById('flagimg').src="images/flags/JO.PNG";
	}else {
	document.getElementById('flagimg').src="images/flags/spacer.png"
	}
	}
	</script>

</head>

<body>
<div id="toolTipLayer" style="position:absolute; visibility: hidden"></div>


<script language="JavaScript" type="text/javascript">
<!--
function writeJS(){
var str='';
str+='<form name="form1" method="post" action="mailrequest.php">';
document.write(str);
}
writeJS();
//-->
</script>
<noscript><form name="form1" method="post" action="errorjava.php" target="_blank"></noscript>
  <table width="752" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="312" height="71"><a href="index.php"><img src="images/homepage_02.gif" alt="Mate Logo" width="311" height="71" border="0" /></a></td>
      <td width="440" align="right" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="right" valign="bottom" class="rightpadding5px"><img src="images/dot.gif" width="10" height="8" /><a href="index.php" class="menu">Home</a> <span class="codetag"><img src="images/dot.gif" width="10" height="8" /><a href="about_us.php" class="menu">About Us </a><img src="images/dot.gif" width="10" height="8" /><a href="contact_us.php" class="menu">Contact Us </a><img src="images/dot.gif" width="10" height="8" /></span><a href="site_map.php" class="menu">Site Map </a></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="179" colspan="2"><img src="images/contact_us.jpg" width="752" height="179" /></td>
    </tr>
    <tr>
      <td height="41" colspan="2"><table width="752" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="11" height="41"><img src="images/homepage_07.gif" width="11" height="41" /></td>
            <td width="5" class="movemenu">&nbsp;</td>
            <td height="41" valign="middle" class="movemenu"><table height="30" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="3" align="center" valign="middle"><img src="images/spacer_red.gif" width="3" height="32" /></td>
                  <td width="50" align="center" valign="middle"><a href="hosting.php" class="menu_silver">Hosting</a></td>
                  <td width="3" align="center" valign="middle"><img src="images/spacer_red.gif" width="3" height="32" /></td>
                  <td width="50" align="center" valign="middle"><a href="offers.php" class="menu_silver">Offers</a></td>
                  <td width="3" align="center" valign="middle"><img src="images/spacer_red.gif" width="3" height="32" /></td>
                  <td width="50" align="center" valign="middle"><a href="careers.php" class="menu_silver">Careers</a></td>
                  <td width="3" align="center" valign="middle"><img src="images/spacer_red.gif" width="3" height="32" /></td>
                  <td width="50" align="center" valign="middle"><a href="portfolio.php" class="menu_silver">Portfolio</a></td>
                  <td width="3" align="center" valign="bottom"><img src="images/spacer_red.gif" width="3" height="32" /></td>
                  <td width="70" align="center" valign="middle"><a href="clients.php" class="menu_silver">Our Clients </a></td>
                  <td width="3" align="center" valign="middle"><img src="images/spacer_red.gif" width="3" height="32" /></td>
                  <td width="75" align="center" valign="middle"><a href="news.php" class="menu_silver">Events/News</a></td>
                  <td width="3" align="center" valign="middle"><img src="images/spacer_red.gif" width="3" height="32" /></td>
                  <td width="85" align="center" valign="middle"><script id="Sothink Widgets:index.pgt" type="text/javascript" language="JavaScript1.2">
<!--
stm_bm(["tubtehr",660,"","blank.gif",0,"","",0,0,0,0,100,1,0,0,"","",0,0,1,1,"default","hand",""],this);
stm_bp("p0",[0,4,0,0,0,2,6,0,100,"",-2,"",-2,90,0,0,"#000000","#EDE6E0","",3,0,0,"#FFFFFF"]);
stm_ai("p0i0",[0,"Design Section","","",-1,-1,0,"","_self","","","arrow1.gif","arrow1.gif",6,6,0,"","",0,0,0,0,1,"#EDE6E0",0,"#eeeeee",1,"","",3,3,0,0,"#FFFFFF","#FFFFFF","#333333","#990000","8pt Arial","8pt Arial",0,5],0,20);
stm_bp("p1",[1,4,0,8,1,3,10,0,90,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=forward,enabled=0,Duration=0.50)",5,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=reverse,enabled=0,Duration=0.50)",4,60,2,3,"#CCCCCC","#FFFFFF","",3,1,1,"#dddddd"]);
stm_ai("p1i0",[0,"Web Design","","",-1,-1,0,"webdesign.php","_self","","","dot1.gif","dot1.gif",8,8,0,"","",0,0,0,0,1,"#EDE6E0",0,"#eeeeee",0,"","",3,3,0,0,"#FFFFFF","#FFFFFF","#333333","#000000","8pt Arial","8pt Arial",0,0],130,0);
stm_ai("p1i1",[6,1,"#CCCCCC","",-1,-1,0]);
stm_aix("p1i2","p1i0",[0,"Web Developing","","",-1,-1,0,"webdev.php","_self","","","dot.gif","dot.gif",10,8,0,"","",0,0,0,0,1,"#EDE6E0",0,"#eeeeee",0,"","",3,3,0,0,"#FFFFFF","#FFFFFF","#333333","#333333"],130,0);
stm_aix("p1i3","p1i1",[]);
stm_aix("p1i8","p1i2",[0,"Flash Presentation","","",-1,-1,0,"flashpres.php"],130,0);
stm_aix("p1i9","p1i1",[]);
stm_aix("p1i10","p1i2",[0,"Printing Works Design","","",-1,-1,0,"printing.php"],130,0);
stm_aix("p1i11","p1i1",[]);
stm_aix("p1i12","p1i2",[0,"Logo Design","","",-1,-1,0,"logodesign.php"],130,0);
stm_ep();
stm_ep();
stm_em();
//-->
            </script></td>
                  <td width="3" align="center" valign="middle"><img src="images/spacer_red.gif" width="3" height="32" /></td>
                  <td width="98" align="center" valign="middle"><script id="Sothink Widgets:index1.pgt" type="text/javascript" language="JavaScript1.2">
<!--
stm_bm(["tubtehr",660,"","blank.gif",0,"","",0,0,0,0,100,1,0,0,"","",0,0,1,1,"default","hand",""],this);
stm_bp("p0",[0,4,0,0,0,2,6,0,100,"",-2,"",-2,90,0,0,"#000000","#EDE6E0","",3,0,0,"#FFFFFF"]);
stm_ai("p0i0",[0,"Technical Section","","",-1,-1,0,"","_self","","","arrow1.gif","arrow1.gif",6,6,0,"","",0,0,0,0,1,"#EDE6E0",0,"#eeeeee",1,"","",3,3,0,0,"#FFFFFF","#FFFFFF","#333333","#990000","8pt Arial","8pt Arial",0,5],0,20);
stm_bp("p1",[1,4,0,8,1,3,10,0,90,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=forward,enabled=0,Duration=0.50)",5,"progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=1,motion=reverse,enabled=0,Duration=0.50)",4,60,2,3,"#CCCCCC","#FFFFFF","",3,1,1,"#dddddd"]);
stm_ai("p1i0",[1,"Networks","","",-1,-1,0,"networks.php","_self","","","dot1.gif","dot1.gif",8,8,0,"","",0,0,0,0,1,"#EDE6E0",0,"#eeeeee",0,"","",3,3,0,0,"#FFFFFF","#FFFFFF","#333333","#000000","8pt Arial","8pt Arial",0,0],130,0);
stm_ai("p1i1",[6,1,"#CCCCCC","",-1,-1,0]);
stm_aix("p1i2","p1i0",[0,"Maintenance","","",-1,-1,0,"maintenance.php","_self","","","dot.gif","dot.gif",10,8,0,"","",0,0,0,0,1,"#EDE6E0",0,"#eeeeee",0,"","",3,3,0,0,"#FFFFFF","#FFFFFF","#333333","#333333"],130,0);
stm_aix("p1i3","p1i1",[]);
stm_aix("p1i4","p1i2",[0,"Hardware Sales","","",-1,-1,0,"sales.php"],130,0);
stm_ep();
stm_ep();
stm_em();
//-->
            </script></td>
                  <td width="3" align="center" valign="middle"><img src="images/spacer_red.gif" width="3" height="32" /></td>
                </tr>
            </table></td>
            <td align="right" class="movemenu"></td>
            <td width="11" height="41"><img src="images/homepage_11.gif" width="11" height="41" /></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="100%" colspan="2" valign="top" class="topmargine"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="500" valign="top"><table width="500" height="233" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="11" height="11" align="right" valign="bottom"><img src="images/homepage_15.gif" width="11" height="11" /></td>
                  <td height="11" class="rectop"></td>
                  <td width="11" height="11" align="left" valign="bottom"><img src="images/homepage_19.gif" width="11" height="11" /></td>
                </tr>
                <tr>
                  <td width="11" align="right" class="leftrec"></td>
                  <td width="478" height="570" align="left" valign="top" bgcolor="#F7F7F7"><table width="100%" border="0" align="center" cellpadding="10" cellspacing="0">
                      <tr>
                        <td valign="top"><table cellspacing="0" cellpadding="0" width="100%" border="0">
                            <tbody>
                              <tr>
                                <td height="35"><div class="titlediv"><strong>Contact Mate</strong></div></td>
                              </tr>
                              <tr>
                                <td height="100" valign="middle"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="cellborder">
                                    <tr>
                                      <td height="25" bgcolor="#FFFFFF" class="leftpad"><span class="paragraph">Sarh Al-Shaheed - Amman, Jordan </span></td>
                                    </tr>
                                    <tr>
                                      <td height="25" bgcolor="#FFFFFF" class="leftpad"><span class="paragraph">Tel.: +962 6 515 8494 </span></td>
                                    </tr>
                                    <tr>
                                      <td height="25" bgcolor="#FFFFFF" class="leftpad"><span class="paragraph">Fax: +962 6 515 8495 </span></td>
                                    </tr>
                                    <tr>
                                      <td height="25" bgcolor="#FFFFFF" class="leftpad"><span class="paragraph">P.O.Box: 960529 </span></td>
                                    </tr>
                                    <tr>
                                      <td height="25" bgcolor="#FFFFFF" class="leftpad"><span class="paragraph">Amman - 11196, Jordan</span></td>
                                    </tr>
                                    <tr>
                                      <td height="25" bgcolor="#FFFFFF" class="leftpad"><span class="paragraph">e-mail: <a href="mailto:info@focalpointconsult.com">info@mate-co.com</a></span></td>
                                    </tr>
                                    <tr>
                                      <td height="3" bgcolor="#FFFFFF" class="titlediv">About Yourself</td>
                                    </tr>
                                    <tr>
                                      <td height="3" bgcolor="#FFFFFF"><TABLE width="95%" border=0 align="center" cellPadding=0 cellSpacing=0>
                                        <TBODY>
                                          
                                          <TR>
                                            <TD vAlign=bottom colSpan=2 height=60><span class="required">* = Required 
                                              Fields </span><br>
                                      <table>
                                        <tbody>
                                          <tr>
                                            <td class="paragraph">Title</td>
                                            <td><table class=input id=rbSalutation border=0>
                                                <tbody>
                                                  <tr>
                                                    <td class="paragraph"><input id=rbSalutation_0 type=radio value=Mr. 
                              name=rbSalutation>
                                                        <label 
                              for=rbSalutation_0></label></td>
                                                    <td class="paragraph">Mr. </td>
                                                    <td><input id=rbSalutation_1 type=radio value=Ms. 
                              name=rbSalutation>
                                                        <label 
                              for=rbSalutation_1></label></td>
                                                    <td><span class="paragraph">Ms.</span></td>
                                                    <td><input id=rbSalutation_2 type=radio value=Mrs. 
                              name=rbSalutation>
                                                        <label 
                              for=rbSalutation_2></label></td>
                                                    <td><span class="paragraph">Mrs</span>.</td>
                                                    <td><input id=rbSalutation_3 type=radio value=Eng. 
                              name=rbSalutation>
                                                        <label 
                              for=rbSalutation_3></label></td>
                                                    <td><span class="paragraph">Eng</span>.</td>
                                                  </tr>
                                                </tbody>
                                            </table></td>
                                          </tr>
                                        </tbody>
                                    </table></TD>
                                          </TR>
                                          <TR>
                                            <TD width=223><span class="paragraph">First Name</span><SPAN class=required>*</SPAN></TD>
                                            <TD width=227><span class="paragraph">Last Name</span><SPAN class=required>*</SPAN> </TD>
                                          </TR>
                                          <TR>
                                            <TD height="30" bgcolor="#FFFFFF"><INPUT class=fieldstyle id=First_Name 
                   maxLength=50 size=35 
                  name=First_Name></TD>
                                            <TD bgcolor="#FFFFFF"><INPUT class=fieldstyle id=Last_Name 
                   maxLength=50 size=35 
                  name=Last_Name></TD>
                                          </TR>
                                          <TR>
                                            <TD colSpan=2><IMG height=10 alt=spacer 
                  src="ContactForm_files/spacer.gif" width=1></TD>
                                          </TR>
                                          <TR>
                                            <TD><span class="paragraph">Company Name</span><SPAN class=required>*</SPAN></TD>
                                            <TD><span class="paragraph">Job Title</span><SPAN class=required>*</SPAN></TD>
                                          </TR>
                                          <TR>
                                            <TD height="30" bgcolor="#FFFFFF"><INPUT class=fieldstyle id=Company 
                   maxLength=100 size=35 
                  name=Company></TD>
                                            <TD bgcolor="#FFFFFF"><INPUT class=fieldstyle id=Job_Title 
                   maxLength=100 size=35 
                  name=Job_Title></TD>
                                          </TR>
                                          <TR>
                                            <TD colSpan=2><IMG height=10 alt=spacer 
                  src="ContactForm_files/spacer.gif" width=1></TD>
                                          </TR>
                                          <TR>
                                            <TD><span class=required><span class="paragraph">Phone Number</span>* </span></TD>
                                            <TD><span class="paragraph">Fax Number</span><span class=required>*</span></TD>
                                          </TR>
                                          <TR>
                                            <TD height="30" bgcolor="#FFFFFF"><input class=fieldstyle id=Phone 
                   maxlength=50 size=35 
                  name=Phone></TD>
                                            <TD height="30" bgcolor="#FFFFFF"><input class=fieldstyle id=fax 
                   maxlength=100 size=35 
                  name=fax></TD>
                                          </TR>
                                          <TR>
                                            <TD colSpan=2>&nbsp;</TD>
                                          </TR>
                                          <TR>
                                            <TD colSpan=2 valign="bottom"><span class="paragraph">Email Address</span><span class=required>*</span></TD>
                                          </TR>
                                          <TR>
                                            <TD height="30" colSpan=2 bgcolor="#FFFFFF"><input class=fieldstyle id=Email_address 
                   maxlength=50 size=35 style="width:414"
                  name=Email_address></TD>
                                          </TR>
                                        </TBODY>
                                      </TABLE></td>
                                    </tr>
                                    <tr>
                                      <td height="3" bgcolor="#FFFFFF"><TABLE width="95%" border=0 align="center" cellPadding=0 cellSpacing=0>
                                        <TBODY>
                                          <TR>
                                            <TD colspan="2" vAlign=bottom><span class="paragraph">City</span><SPAN class=required>*</SPAN></TD>
                                            </TR>
                                          <TR>
                                            <TD height="30" colspan="2" bgcolor="#FFFFFF"><INPUT class=fieldstyle2 id=City maxLength=50 size=25 style="width:414" 
                  name=City></TD>
                                            </TR>
                                          <TR>
                                            <TD colspan="2"></TD>
                                          </TR>
                                          <TR>
                                            <TD colspan="2" noWrap><span class="paragraph">Country</span><SPAN class=required>*</SPAN></TD>
                                          </TR>
                                          <TR>
                                            <TD width="88%" height="30" noWrap bgcolor="#FFFFFF"><select name="Country" id="Country" onChange="doflag(this.value);">
      <option value="Jordan" >Jordan</option>
  
                     </select></TD>
                                            <TD width="12%" align="center" valign="middle" noWrap><table width="75%" height="23" border="0" align="left" cellpadding="0" cellspacing="2">
                                              <tr>
                                                <td align="center" valign="middle" bgcolor="#EEEEEE"><img name="flagimg" width="16" height="11" id="flagimg" src="images/flags/spacer.gif"></td>
                                                </tr>
                                            </table></TD>
                                          </TR>
                                          <TR>
                                            <TD colspan="2" noWrap>&nbsp;</TD>
                                          </TR>
                                        </TBODY>
                                      </TABLE></td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#FFFFFF" class="titlediv"> About Your Business</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#FFFFFF"><TABLE width="95%" border=0 align="center" cellpadding="0" cellspacing="0" id=cbInterest >
                                        <TBODY>
                                          <TR>
                                            <TD colspan="2" bgcolor="#FFFFFF" class="paragraph"><span class="style1">
                                              What are you interested in? 
                                            </span></TD>
                                            </TR>
                                          <TR>
                                            <TD height="25" bgcolor="#FFFFFF" class="paragraph">
                                              <input 
                  name=ch3 type=checkbox id=cbInterest_0 value="Web Design.">
Web Design.</TD>
                                            <TD height="25" bgcolor="#FFFFFF" class="paragraph"><input 
                  name=ch4 type=checkbox id=cbInterest_1 value="Web Developing and Programming. ">
                                              Web Developing and Programming.                                             </TD>
                                          </TR>
                                          <TR>
                                            <TD height="25" bgcolor="#FFFFFF" class="paragraph">
                                              <input 
                  name=ch1 type=checkbox id=cbInterest_7 value="Networks. ">
Networks. </TD>
                                            <TD height="25" bgcolor="#FFFFFF" class="paragraph">
                                              <input 
                  name=ch2 type=checkbox id=ch_0001 value="Hardware Sales and Maintenance. ">
Hardware Sales and Maintenance.</TD>
                                          </TR>
                                          <TR>
                                            <TD height="25" bgcolor="#FFFFFF" class="paragraph">
                                              <input 
                  name=ch5 type=checkbox id=cbInterest_2 value="Flash Design and Developing. ">
Flash Design and Developing. </TD>
                                            <TD height="25" bgcolor="#FFFFFF" class="paragraph"><input 
                  name=ch6 type=checkbox id=cbInterest_8 value="Graphic and Printing Design. ">
Graphic and Printing Design. </TD>
                                          </TR>
                                          <TR>
                                            <TD height="25" bgcolor="#FFFFFF" class="paragraph">
                                              <input 
                  name=ch7 type=checkbox id=cbInterest_9 value="Logo Design. ">
Logo Design. </TD>
                                            <TD height="25" bgcolor="#FFFFFF" class="paragraph"><input 
                  name=ch8 type=checkbox id=cbInterest_3 value="Customer Service &amp; Consulting.">
Customer Service &amp; Consulting.</TD>
                                          </TR>
                                          <TR>
                                            <TD colspan="2" bgcolor="#FFFFFF" class="paragraph">
                                              <input name="ch9" type="hidden" id="ch9">
                                            </TD>
                                            </TR>
                                          </TBODY>
                                      </TABLE></td>
                                    </tr>
                                    
                                    <tr>
                                      <td bgcolor="#FFFFFF"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td valign="middle"><span class="paragraph"><strong>Comments:</strong></span></td>
                                        </tr>
                                        <tr>
                                          <td><span class="topbottomcell">
                                            <textarea name="Comments" rows="5" style="border:solid 1px #dddddd; padding-left:10px" id="Comments" dojotype="Editor" items="insertunorderedlist;insertorderedlist;|;bold;italic;underline;strikethrough;|;createLink;|;justifyleft;justifycenter;justifyright;|;insertimage;" minheight="5em" onClick="if(this.value=='Type Your Message Here'){this.value=''}"><font face="Arial, Helvetica, sans-serif" color="#666666" size="2">Type Your Message Here</font><br><br></textarea>
                                            </span>
                                            <label 
            for=chkMailing class="paragraph"></label></td></tr>
                                        <tr>
                                          <td><input name=chkMailing type=checkbox 
            id=chkMailing value="Yes, please send me communication about new products, free research and special events.">
                                            <label 
            for=chkMailing class="paragraph">Yes, please send to me latest works you have done.</label></td>
                                        </tr>
                                        <tr>
                                          <td align="right"><input name="Submit" type="submit" onClick="MM_validateForm('First_Name','','R','Last_Name','','R','Company','','R','Job_Title','','R','Phone','','RisNum','fax','','RisNum','Email_address','','RisEmail','City','','R');return document.MM_returnValue" value="Send"></td>
                                        </tr>
                                      </table>                                      
                                        <label 
            for=chkMailing class="paragraph"></label>                                        <label 
            for=chkMailing class="paragraph"></label></td>
                                    </tr>
                                    
                                    
                                </table></td>
                              </tr>
                            </tbody>
                        </table></td>
                      </tr>
                      
                  </table></td>
                  <td width="11" align="left" class="rightrec"></td>
                </tr>
                <tr>
                  <td width="11" height="11" align="right" valign="top"><img src="images/homepage_28.gif" width="11" height="11" /></td>
                  <td height="11" class="bottomrec"></td>
                  <td width="11" height="11" align="left" valign="top"><img src="images/homepage_30.gif" width="11" height="11" /></td>
                </tr>
            </table></td>
            <td height="100%" align="right" valign="top"><table width="250" height="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="11" height="11" align="right" valign="bottom"><img src="images/homepage_15.gif" width="11" height="11" /></td>
                  <td height="11" class="rectop"></td>
                  <td width="11" height="11" align="left" valign="bottom"><img src="images/homepage_19.gif" width="11" height="11" /></td>
                </tr>
                <tr>
                  <td width="11" rowspan="4" align="right" class="leftrec"></td>
                  <td width="228" height="25" align="center" valign="top" bgcolor="#F7F7F7" class="redheaders"><br>                  </td>
                  <td width="11" rowspan="4" align="left" class="rightrec"></td>
                </tr>
                <tr>
                  <td height="279" align="center" valign="top" bgcolor="#F7F7F7" class="redheaders"><img src="images/contact_us2.jpg" alt="contact us now" width="170" height="279"></td>
                </tr>
                <tr>
                  <td height="30" align="center" valign="middle" bgcolor="#F7F7F7" class="redheaders"><!--
Skype 'Skype Me™!' button
http://www.skype.com/go/skypebuttons
-->
<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
&nbsp;</td>
                </tr>
                <tr>
                  <td height="100%" align="center" valign="middle" bgcolor="#F7F7F7" class="redheaders"></td>
                </tr>
                <tr>
                  <td width="11" height="11" align="right" valign="top"><img src="images/homepage_28.gif" width="11" height="11" /></td>
                  <td height="11" class="bottomrec"></td>
                  <td width="11" height="11" align="left" valign="top"><img src="images/homepage_30.gif" width="11" height="11" /></td>
                </tr>
            </table></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td height="41" colspan="2" valign="bottom"><table width="752" height="14" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="11"><img src="images/homepage_34.gif" width="11" height="41" /></td>
            <td width="9" valign="middle" class="bottombarstyle">&nbsp;</td>
            <td width="433" valign="bottom" class="bottombarstyle"><a href="index.php" class="menu">Home</a> <span class="codetag">| <a href="hosting.php" class="menu">Hosting</a> | <a href="offers.php" class="menu">Offers</a> | <a href="careers.php" class="menu">Careers</a> | <a href="portfolio.php" class="menu">Portfolio</a> | <a href="about_us.php" class="menu">About Us </a>| <a href="contact_us.php" class="menu"> Contact Us </a>|</span> <a href="site_map.php" class="menu">Site Map </a></td>
            <td width="215" align="right" valign="bottom" class="bottombarstyle"><div class="copyrightstyle">©2006 Mate</div></td>
            <td width="84"><img src="images/homepage_38.gif" width="83" height="41" /></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>

</html>


