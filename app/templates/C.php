<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<base href="<?php echo $ro->getBaseHref(); ?>" />
		<title><?php echo AgaviConfig::get('core.app_name'); ?></title>
        <link media="screen" href="style.css"  type="text/css" rel="stylesheet" />
		<link media="screen" href="main.css"  type="text/css" rel="stylesheet" />
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
  
		<?php
			if (is_array($rq->getAttribute('js')))
			foreach (array_unique($rq->getAttribute('js')) as $src) {
				echo "<script type='text/javascript' src='$src'></script>\n";
			}
		
		?>        
		
	</head>
	<body>
    <?php echo $slots['cp'];?>
      <?php echo $inner; ?>
      <div style="margin-right:160px;">
      <?php echo $slots['footer'];?>
      </div>
      
	</body>
</html>
