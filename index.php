<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.nysa
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app 		= JFactory::getApplication();
$doc 		= JFactory::getDocument();
$user 	= JFactory::getUser();

// Output as HTML5
$doc->setHtml5(true);

// Detecting Active Variables
$option 	= $app->input->getCmd('option', '');
$itemid 	= $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

// Add Stylesheets
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/style.css');

// Add JavaScript
$doc->addScriptVersion($this->baseurl . '/templates/' . $this->template . '/js/bootstrap.min.js');
$doc->addScriptVersion($this->baseurl . '/templates/' . $this->template . '/js/custom.js');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
	
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<jdoc:include type="head" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body class="site <?php echo $option . ($itemid ? ' itemid-' . $itemid : '') ?>">

		<header id="header">
			<?php if ($this->countModules('main-nav')) : ?>
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Nysa Template</a>
					</div>
					<div class="collapse navbar-collapse" id="main-nav">
						<jdoc:include type="modules" name="main-nav" />
					</div>
				</nav>
			<?php endif; ?>
		</header><!--/#header-->

		<div id="main-wrapp">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="main">
							<jdoc:include type="modules" name="breadcrumbs-position" />
							<jdoc:include type="message" />
							<jdoc:include type="component" />
						</div><!--/.main-->
					</div>
					<div class="col-md-3">
						<?php if ($this->countModules('sidebar')) : ?>
						<div class="sidebar">
							<jdoc:include type="modules" name="sidebar" style="well" />
						</div><!--/.sidebar-->
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div><!--/#main-wrapp-->

		<footer id="footer">
			<div class="container">
				<jdoc:include type="modules" name="footer" style="none" />
				<p>&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?></p>
			</div>
		</footer><!--/#footer-->
		
		<jdoc:include type="modules" name="debug" style="none" />

	</body>
</html>
