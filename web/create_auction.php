<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Create Auction</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/scrolling-start-smooth.js"></script>
<!-- start-smoth-scrolling -->
</head>

<body>

	<?php include('header.php'); ?>

<!-- navigation -->
	<?php include('navigation.php'); ?>
<!-- //navigation -->
<!-- breadcrumbs -->
  <?php include('breadcrumbs.php'); ?>
<!-- //breadcrumbs -->
<!--profile-->

<div class="container">
 
    <h1 class="userp">Auction Creation</h1>
  	<hr>
    <style>
    .userp{
      padding-top:60px;
      text-align: center;
      margin-bottom: 60px;
    }
</style>
	<div class="row">
      <!-- left column -->
      <!-- edit form column -->
      <div class="col-md-9 personal-info">        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Auction title:</label>
            <div class="col-lg-8">
               <input class="form-control" type="text" value="auction title">
            </div>
          </div>
          
               

          
          <div class="form-group">
            <label class="col-lg-3 control-label">Minimum Bid:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Min Bid">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Auction time :</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="auction time">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Minimum Bid:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Min Bid">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Category:</label>
            <div class="col-lg-8">
               <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Category1</a></li>
                    <li><a class="dropdown-item" href="#">Category2</a></li>
                    <li><a class="dropdown-item" href="#">Category3</a></li>
                  </div>
                </div>

            </div>
          </div>
          <div class="form-group input-img">
              <label class="col-lg-3 control-label">Select Images</label>
              <label class="btn btn-default btn-file">
                  Select Item Photos<input type="file" style="display: none;">
              </label>
          </div>    
          <div class="form-group desc">
            <label class="col-lg-3 control-label">Auction Description:</label>
            <textarea class="form-control input-description" rows="5">Add a description</textarea>
          </div>

               <style>
                    .input-description {
                        width:550px;  
                    }

                     .desc, .input-img{
                        padding-left: 25px;
                    }

                    .btn-file, .btn-default{
                      background-color: #FFF;
                    }

                    .btn-file:hover, .btn-default:hover{
                      background-color: #00BFFF;
                    }

                </style>



          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Create Auction">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
<!--//profile-->

<!-- //footer -->
<?php include('footer.php'); ?>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
<script src="js/scrolling-icon-start.js"></script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script src="js/scrolling-icon-end.js"></script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script src="js/main-slider-banner.js"></script>
<!-- //main slider-banner -->
</body>
</html>
