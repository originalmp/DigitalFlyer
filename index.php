<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
<title>Using turn.js and the new zoom feature</title>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<script type="text/javascript" src="./js/jquery.min.1.7.js"></script>
<script type="text/javascript" src="./js/modernizr.2.5.3.min.js"></script>
<script type="text/javascript" src="./js/hash.js"></script>
<script type="text/javascript" src="./js/main.js"></script>
<style>

div#content {
    width: 300px;
    height: 100px;
    background: aqua;
	    z-index: 10;
		display:none;
}
</style>
</head>
<body>
<div id="content"></div>
<div id="canvas">

<div class="zoom-icon zoom-icon-in"></div>

<div class="magazine-viewport">
	<div class="container">
		<div class="magazine">
			<!-- Next button -->
			<div ignore="1" class="next-button"></div>
			<!-- Previous button -->
			<div ignore="1" class="previous-button"></div>
		</div>
	</div>
</div>

<!-- Thumbnails -->
<div class="thumbnails">
	<div>
		<ul>
			<li class="i">
				<img src="pages/1-thumb.jpg" width="76" height="100" class="page-1">
				<span>1</span>
			</li>
			<li class="d">
				<img src="pages/2-thumb.jpg" width="76" height="100" class="page-2">
				<img src="pages/3-thumb.jpg" width="76" height="100" class="page-3">
				<span>2-3</span>
			</li>

			<li class="i">
				<img src="pages/4-thumb.jpg" width="76" height="100" class="page-4">
				<span>12</span>
			</li>
		<ul>
	<div>	
</div>
</div>

<script type="text/javascript">


// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['./js/turn.js'],
	nope: ['./js/turn.html4.min.js'],
	both: ['./js/zoom.min.js', './js/magazine.js', './css/magazine.css'],
	complete: loadApp
});

</script>

</body>
</html>