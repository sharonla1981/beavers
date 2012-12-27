<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?=$this->title?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css" media="screen">
body {font: normal 12px Verdana,Arial,Helvetica,sans-serif;	width:600px; color:#6B6B6B; background:#FFFFFF; line-height:170%;}
table {font: normal 12px Verdana,Arial,Helvetica,sans-serif; width:100%;text-align:left; border-collapse: collapse;}
td {padding:0 10px 0 10px;}
th {padding:0 10px 0 10px;}
.t16 {font-size:16px;}
h2 {font-size:14px;}
.good_bg {background:#00AE00;color:#FFFFFF;} .good_ct {color:#00AE00;}
.fail_bg {background:#DF0000;color:#FFFFFF;} .fail_ct {color:#DF0000;}
.warn_bg {background:#FF8000;color:#FFFFFF;} .warn_ct {color:#FF8000;}
.note_bg {background:#009EEA;color:#FFFFFF;} .note_ct {color:#008ED2;}
.list {padding:6px 0 6px 10px; vertical-align:text-top}
img {border:0;}
</style>
</head>
<body>
	<table style='width:600px'>
	<!--GREEN STRIPE-->
	<tr>
		<td style='width:5px;'><a href="http://grbac.gemisoft.com/" target="_blank"><h2>logo</h2></a></td>
		<td style='width:100px;vertical-align:bottom'>
			<b class='t16'><?=$this->result?></b>
		</td>
		<td class='<?=$this->state?>_bg'> <b><?=$this->short_msg?></b> </td>
	</tr>
	</table><br />
	

	<table style='width:600px;border-top:1px solid #e4e4e4;'>
	<tr>
		<td valign="top">
<!--header-ends -->