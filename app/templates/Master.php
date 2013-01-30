<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<base href="<?php echo $ro->getBaseHref(); ?>" />
		<title><?php if(isset($t['_title'])) echo htmlspecialchars($t['_title']) . ' - '; echo AgaviConfig::get('core.app_name'); ?></title>
        <link media="screen" href="style.css"  type="text/css" rel="stylesheet" />
		<link media="screen" href="main.css"  type="text/css" rel="stylesheet" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
		<script src="js/najva.js" type="text/javascript"></script>
        <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
		<!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script--> 
		<script type="text/javascript" src="js/jquery-ui.min.js"></script> 
		<script type="text/javascript" src="js/showhide.js"></script> 
		<script type="text/JavaScript" src="js/jquery.mousewheel.js"></script> 
		<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
		<script type="text/javascript">
		ddsmoothmenu.init({
		mainmenuid: "templatemo_menu", //menu DIV id
		orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
		classname: 'ddsmoothmenu', //class added to menu's outer DIV
		//customtheme: ["#1c5a80", "#18374a"],
		contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
		})
		</script>         
		<div class="middle">
        <?php echo $slots['header'];?>
        <?php echo $slots['sidebar'];?>
        <?php echo $slots['content'];?>
        <?php echo $slots['footer'];?>
        </div>
	</head>
	<body>
	<?php echo $inner; ?>
	</body>
</html>
