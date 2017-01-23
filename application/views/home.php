<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang='en-US'>
<head>
	<title><?php echo $title; ?></title>
	<meta charset='UTF-8' />
	<script src = "<?php echo base_url()?>assets/js/jQuery3.js"></script> 
  	<link rel='stylesheet' href="<?php echo base_url() ?>assets/css/bootstrap.css" />
  	<script src = "<?php echo base_url()?>assets/js/bootstrap.js"></script>
  	<link rel='stylesheet' href="<?php echo base_url() ?>assets/css/style.css" /> 
  	<script src = "<?php echo base_url()?>assets/js/js_page.js"></script>
  	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
  	<script>
    	/*var message = "Function Disabled";
    	function rtclickcheck(keyp){ 
    		if (navigator.appName == "Netscape" && keyp.which == 3){ 
    			alert(message); 
    			return false; 
    		}
    		if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { 
    			alert(message); return false; 
    		} 	
    	}
    	document.onmousedown = rtclickcheck; */
  	</script>
</head>
<body>
<div class='container-fluid'>
<input id="baseurl" type="hidden" value="<?php echo base_url() ?>" />
