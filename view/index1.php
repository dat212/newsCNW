<!DOCTYPE html>
<html>
<head>
	<title>NewsFeed</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font.css">
	<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style type="text/css">
		a,h1  {
			font-family: "arial" !important;
		}
	</style>
</head>
<body onload="setRootCategory(); setLatestPost(); setChildCategory();setCategorySidebar();setMainContent();">

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

<div class="container">
<?php

include 'header.php';
include 'navArea.php';
include 'newsSection.php';
include 'sliderSection.php';
include 'contentSection.php';
// include 'mainContentSection.php';
// include 'sidebarContentSection.php';
include 'footer.php';

?>

</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
<script src="ajax/setRootCategory.js"></script>
<script src="ajax/setLatestPost.js"></script>
<script src="ajax/setChildCategory.js"></script>
<script src="ajax/setCategorySidebar.js"></script>
<script src="ajax/setMainContent.js"></script>
</body>
</html>