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

// Output document as HTML5.
if (is_callable(array($doc, 'setHtml5')))
{
	$doc->setHtml5(true);
}

$sitename = $app->get('sitename');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>

		<!-- Add Stylesheets -->
		<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/style.css" rel="stylesheet" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body class="error-404">

		<header id="header">

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
						<?php echo $doc->getBuffer('modules', 'main-nav', array('style' => 'none')); ?>
					</div>
				</nav>

		</header><!--/#header-->

		<div id="main-wrapp">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="main">
							<p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
							<p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
							<ul>
								<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
								<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
								<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
								<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
							</ul>
							<p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
							<p><a href="<?php echo $this->baseurl; ?>/index.php" class="btn"><span class="icon-home"></span> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></p>

							<div class="well">
								<p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
								<?php echo $doc->getBuffer('modules', 'search-module-404', array('style' => 'none')); ?>
							</div>
							
						</div><!--/.main-->
					</div>
					<div class="col-md-3">
							<div class="sidebar">
								<?php echo $doc->getBuffer('modules', 'sidebar', array('style' => 'well')); ?>
							</div><!--/.sidebar-->
					</div>
				</div>
			</div>
		</div><!--/#main-wrapp-->

		<footer id="footer">
			<div class="container">
				<?php echo $doc->getBuffer('modules', 'footer', array('style' => 'none')); ?>
				<p>&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?></p>
			</div>
		</footer><!--/#footer-->
		
		<?php echo $doc->getBuffer('modules', 'debug', array('style' => 'none')); ?>

	</body>
</html>
