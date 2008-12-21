<?php
/* SVN FILE: $Id: default.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 21:16:01 -0500 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title> NetOffice3 :: <?php echo $title_for_layout; ?></title>
	<?php
		echo $html->meta('icon') . "\n";
		echo $html->css('VectorLover') . "\n";
		echo $scripts_for_layout . "\n";
	?>
		
	<script type="text/JavaScript" src="/netoffice3/js/prototype.js"></script>
	<script type="text/JavaScript" src="/netoffice3/js/scriptaculous.js?load=effects"></script>
	<script type="text/javascript">
		setTimeout("new Effect.Opacity('flashWrapper', { from: 1, to: 0 });",1500);
		setTimeout("new Effect.BlindUp('flashWrapper');",1500);
	</script>

</head>
<body>
<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">			
				
		<h1 id="logo-text"><?php echo $html->link('NetOffice3', 'http://NetOffice.org'); ?></h1>		
		<p id="slogan"><?php echo __('the consulting client relation manager', true); ?></p>		
		
		<div id="top-menu">
			<p><a href="index.html">rss feed</a> | <a href="index.html">contact</a> | <?php echo $html->link('login', '/users/login'); ?></p>
		</div>		
					
	<!--header ends-->					
	</div>
		
	<!-- navigation starts-->	
	<div  id="nav">
		<ul>
			<li><?php echo $html->link('Clients', '/clients/'); ?></li>
			<li><?php echo $html->link('Projects', '/projects/'); ?></li>
		</ul>
	<!-- navigation ends-->	
	</div>
	
	<?php echo $html->getCrumbs(); ?>
	
	<!-- content starts -->
	<div id="content">
	
		<div id="main">		
			<div id="flashWrapper"><?php $session->flash(); ?></div>
			<?php echo $content_for_layout; ?>
		<!-- main ends -->	
		</div>
				
		<div id="sidebar">
			<h3>About</h3>			
			
			<p>&nbsp;</p>
		<!-- sidebar ends -->		
		</div>		
		
	<!-- content ends-->	
	</div>
	
	<!-- footer starts -->		
	<div id="footer">
						
		<p>
		&copy; 2008 <a href="http://indemnity83.com" >Indemnity83</a>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		Design by : <a href="http://www.styleshout.com/">styleshout</a> | 
		Valid <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | 
		<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<a href="./index.php">Home</a>
		</p>				
	
	<!-- footer ends-->
	</div>

<!-- wrap ends here -->
</div>	

<div id="debug">
	<?php echo $cakeDebug; ?>
</div>

</body>
</html>