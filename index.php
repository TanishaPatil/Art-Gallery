<?php
	$page="index";
	$title="Home";
	require_once('header.php');
?>		
		<div class="container-fluid">
		  <div class="row slider">
			<div class="col-lg-14">			
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="images/exterior.png" alt="Chania">
					</div>
					<div class="item">
					  <img src="images/interior.jpg" alt="Chania">
					</div>
					<div class="item">
					  <img src="images/slider1.png" alt="Flower">
					</div>
				  </div>
				  
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		  </div>
		
		  <div class="row home_info">
			<div class="col-md-9 artists">
                <div class="panel panel-default">
				    <div class="panel-heading">Artists</div>
				        <div class="panel-body">
                            <div class="container artists_container">
                              <div class="row recent_img">
                                <div class="col-md-4"><img src="images/agnes1.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><figcaption> Agnes Cecile </figcaption></div>
                                <div class="col-md-4"><img src="images/a2.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><figcaption> Jenny Tomlin </figcaption></div>
                                <div class="col-md-4"><img src="images/a3.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><figcaption> Jungsook Hyun </figcaption></div>
                                <div class="col-md-4"><img src="images/a4.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><figcaption>Leonid Afremov  </figcaption></div>
                                 <div class="col-md-4"><img src="images/a5.png" class="img-thumbnail home_img" alt="Cinque Terre"><figcaption>Camille Selhorst  </figcaption></div>
                                 <div class="col-md-4"><img src="images/a6.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><figcaption>Micheal Kagan  </figcaption></div>



                               
                                </div>
                               
                               
                            </div>
                        </div>
                </div>
			</div>
			
		  </div>
<?php

	require('footer.php');
?>	
