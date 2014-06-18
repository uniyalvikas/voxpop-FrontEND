<!DOCTYPE HTML>
<html>
<head>

<title>VoXPoP</title>
    <link rel="stylesheet" type="text/css" href="style/css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style/css/custome.css"/>
    <link rel="stylesheet" type="text/css" href="style/css/media-queries.css" />
    <link rel="stylesheet" type="text/css" href="style/js/player/mediaelementplayer.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,700,700italic|Open+Sans+Condensed:300,700' rel="stylesheet" type='text/css'>
    <script src="jquery.js"> </script>
    <script src="javascript.js"> </script>
    
    <script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="style/js/retina.js"></script>
    <script type="text/javascript" src="style/js/selectnav.js"></script>
    <script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="style/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="style/js/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="style/js/mediaelement.min.js"></script>
    <script type="text/javascript" src="style/js/mediaelementplayer.min.js"></script>
    <script type="text/javascript" src="style/js/jquery.dcflickr.1.0.js"></script>

<script>
$(document).ready(function() {

	$('#content').scrollPagination({

		nop     : 10, // The number of posts per scroll to be loaded
		offset  : 0, // Initial offset, begins at 0 in this case
		error   : 'No More Posts!', // When the user reaches the end this is the message that is
		                            // displayed. You can change this if you want.
		delay   : 500, // When you scroll down the posts will load after a delayed amount of time.
		               // This is mainly for usability concerns. You can alter this as you see fit
		scroll  : true // The main bit, if set to false posts will not load as the user scrolls. 
		               // but will still load if the user clicks.
		
	});
	
});
</script>
    
<script type="text/javascript">
	$.backstretch("style/images/bg/1.jpg");
</script>
    
</head>
<body>
<div class="scanlines"></div>

<?php 
    include("head.php");
?>
<!-- Begin Wrapper -->
<div class="wrapper"><!-- Begin Intro -->
<div class="intro">VoxPop is a platform for sharing events, crimes, happnings, arround you, have a look at the current happnings arround you , we are the KII team working for public issues to supoort you, share with us and we will raise voice for your concern to the goverment or any accountable person. Don't worry about your privacy , just share from your smart phone and we will get your location without even distrubing your privacy. Keep Sharing. <br/> We are also on </div>
    
    <ul class="social">
        <li><a class="rss" href="#"></a></li><li><a class="facebook" href="#"></a></li>
    </ul><!-- End Intro --> 
    <div class="blog-wrap">
	<!-- Begin Blog -->
	   <div class="blog-grid">
	        <div  id="content">
            </div>
	   </div>
	<!-- End Blog -->
    </div>
<!-- End Blog Grid -->

<!-- Begin Page-navi -->
    <div id="navigation">
      <div class="nav-previous"><a href="#" ><span class="meta-nav-prev">&larr; Older posts</span></a></div>
      <!-- 
			<div class="nav-next"><a href="#" ><span class="meta-nav-next">Newer posts &rarr;</span></a></div>
			 --> 
    </div>
    <!-- End Page-navi --> 

</div>
<!-- End Wrapper -->

    
<!-- Begin Footer -->
<?php 
    include("footer.php");
?>
<!-- End Footer --> 
<script type="text/javascript" src="style/js/scripts.js"></script>

</body>
</html>