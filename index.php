 <?php include_once("includes/header.php"); ?>

<?php if($page=='home'){ include_once("includes/banner.php"); }	else{ } ?>

<?php include("$page.php"); ?>

<?php if($page=='home'){ include_once("includes/services.php"); } else{ } ?>

<?php if($page=='home'){ include_once("includes/projects.php"); } else{ } ?>

<?php if($page=='home'){ include_once("includes/pricing.php"); } else{ } ?>

<?php if($page=='home'){ include_once("includes/testimonails.php"); } else{ } ?>

<?php if($page=='home'){ include_once("includes/free-estimates.php"); } else{ } ?>

<?php if($page=='home'){ include_once("includes/googlemap.php"); } else{ } ?>

<?php include_once("includes/contact.php"); ?>

<?php include_once("includes/footer.php"); ?>