<?php  
 require_once __DIR__ . '/../db/Database.php';				   
 $db=new Database();
 $users=$db->select1(); 
 $userslatest=$db->selectLatest();
 ?>
	
	<style>
	#indexslide{
		MARGIN-TOP:13px;
	}
	#p{
		margin-top:-10px;
	}
	#o{
	height:300px;
		width:350px;
	}
	#e{
		width:40px;
		height:37px;
		border-radius:80px;
	}
	
	#imgslide{
		height: 350px;
	}
	#photo{
		width:25px;
		height:25px;
		background-color:white;
		margin-left:-10px;
		margin-bottom:5px;

	}
    #photo1{
		width:25x;
		height:25px;
		background-color:white;
		margin-left:-10px;
		margin-bottom:5px;
	}
	#photo2{
		width:25px;
		height:25px;
		background-color:white;
		margin-left:-10px;
		margin-bottom:5px;
	}
	</style>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
</head>

<body>
	<!--================ Start header Top Area =================-->
	
	<!-- Top Stories Area -->
	
	<!-- End Stories Area -->

	<!-- Start Post Silder Area -->
	<section id="indexslide" class="post-slider-area">
		<div class="container-fluid">
			<div class="row justify-content-center">
		
				<div class="col-lg-12" >
					<div class="owl-carousel active-post-carusel">
						<!-- single carousel item -->
						<div class="single-post-carousel" id="k">
							<div class="post-thumb">
								<img id="imgslide" class="img-fluid"  src="<?php echo $users[0]['photo'];?>" alt="">
							</div>
							<div class="post-details">
								<h2><a href="/blogdetails?id=<?php echo $users[0]['blog_id'];?>"><?php echo $users[0]['header'];?></a></h2>
								<div class="post-content d-flex justify-content-between">
									<div class="post-meta">
										<div class="thumb"><img  id="e" src="<?php echo $users[0]['user_photo'];?>" alt=""></div>
										<div class="c-desc">
											<h6><?php echo $users[0]['name'];?></h6>
											<p><span class="lnr lnr-calendar-full"></span><?php echo $users[0]['post_date'];?></p>
										</div>
									</div>
								
								</div>
							</div>
						</div>
						<!-- single carousel item -->
						<div class="single-post-carousel" id="k">
							<div class="post-thumb">
								<img id="imgslide" class="img-fluid" src="<?php echo $users[1]['photo'];?>" alt="">
							</div>
							<div class="post-details">
								<h2><a href="/blogdetails?id=<?php echo $users[1]['blog_id'];?>"><?php echo $users[1]['header'];?></a></h2>
								<div class="post-content d-flex justify-content-between">
									<div class="post-meta">
										<div class="thumb"><img  id="e" src="<?php echo $users[1]['user_photo'];?>" alt=""></div>
										<div class="c-desc">
											<h6><?php echo $users[1]['name'];?></h6>
											<p><span class="lnr lnr-calendar-full"></span><?php echo $users[1]['post_date'];?></p>
										</div>
									</div>
								
								</div>
							</div>
						</div>
						<!-- single carousel item -->
						<div class="single-post-carousel" id="k">
							<div class="post-thumb">
								<img id="imgslide" class="img-fluid" src="<?php echo $users[2]['photo'];?>" alt="">
							</div>
							<div class="post-details">
								<h2><a href="/blogdetails?id=<?php echo $users[2]['blog_id'];?>"><?php echo $users[2]['header'];?></a></h2>
								<div class="post-content d-flex justify-content-between">
									<div class="post-meta">
										<div class="thumb"><img  id="e" src="<?php echo $users[2]['user_photo'];?>" alt=""></div>
										<div class="c-desc">
											<h6><?php echo $users[2]['name'];?></h6>
											<p><span class="lnr lnr-calendar-full"></span><?php echo $users[2]['post_date'];?></p>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Start Post Silder Area -->

	<!-- Start main body Area -->
	<div class="main-body section-gap">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start Post Area -->
					<section class="post-area">
					
						<div class="row">
						<?php foreach($users as $user):?>
							<div class="col-lg-6 col-md-6">
		
								<div class="single-post-item">
									<div class="post-thumb">
										<img class="img-fluid" id="o" src="<?php echo $user['photo'];?>" alt="">
									</div>
									<div class="post-details">
										<?php if($user['category']=='International'):?>
									<img  id="photo"src="https://cdn1.iconfinder.com/data/icons/business-264/100/07-512.png"><?php echo $user['category'];?>
<?php endif;?>
<?php if($user['category']=='Cooking Tips'):?>
									<img  id="photo2"src="https://seaboardfoods.com/Images%20Icons/Knife_Fork_Icon.png"><?php echo $user['category'];?>
<?php endif;?>
<?php if($user['category']=='Tours and Travel'):?>
									<img  id="photo1"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTItbfpIOEaRX7k1KybpesCluHZAZReG4QlG3U17itjmMkc41XF"><?php echo $user['category'];?>
<?php endif;?>
										<h4><a href="/blogdetails?id=<?php echo $user['blog_id'];?>"><?php echo $user['header'];?></a></h4>
										<!-- <p><?php echo $user['text']?></p> -->
										<div class="blog-meta">
											<a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span><?php echo $user['post_date']?></a>
											<?php echo $user['name'];?>
										</div>
				
									</div>
								</div>
								
							</div>
							<?php endforeach;?>
                        
						
							<!-- <div class="col-lg-12"> -->
								<!-- <nav class="blog-pagination justify-content-center d-flex">
									<ul class="pagination">
										<li class="page-item">
											<a href="#" class="page-link" aria-label="Previous">
												<span aria-hidden="true">
													<span class="lnr lnr-arrow-left"></span>
												</span>
											</a>
										</li> -->
										 <!-- <li class="page-item"><a href="#" class="page-link">01</a></li>
										<li class="page-item active"><a href="#" class="page-link">02</a></li>
										<li class="page-item"><a href="#" class="page-link">03</a></li>
										<li class="page-item"><a href="#" class="page-link">04</a></li>
										<li class="page-item"><a href="#" class="page-link">09</a></li>
										<li class="page-item"> -->
											 <!-- <a href="#" class="page-link" aria-label="Next">
												<span aria-hidden="true">
													<span class="lnr lnr-arrow-right"></span>
												</span>
											</a>
										</li>
									</ul>
								</nav>   -->
							<!-- </div>
						</div> -->
				
					</section>
					<!-- Start Post Area -->
				</div>
 
				<div class="col-lg-4 sidebar">
				<div class="card my-4">
				<form action="/indexsearch" >
         
          <div class="card-body">
            <div class="input-group">
		<img src="http://halamadrid.ge/templates/Hala/images/blockad.png">
               
              </span>
			  </form>
            </div>

          </div>
        </div>
				<div class="single-widget category-widget">
						<h4 class="title">Post Categories</h4>
						<ul>
							<li>
								<a href="/international?category=international" class="justify-content-between align-items-center d-flex">
									<p><img src="img/bullet.png" alt="">International</p>
								</a>
							</li>
							<li>
								<a href="/ToursAndTravels?category=Tours And Travel" class="justify-content-between align-items-center d-flex">
									<p><img src="img/bullet.png" alt="">Tours and Travels </p>
								</a>
							</li>
							<li>
								<a href="/cookingtips?category=Cooking Tips" class="justify-content-between align-items-center d-flex">
									<p><img src="img/bullet.png" alt="">Cooking Tips</p>
								</a>
							</li>
					
						</ul>
					</div>

					<div class="single-widget protfolio-widget">
						<img class="img-fluid" src="https://i.ytimg.com/vi/nqAMyKyFk_s/hqdefault.jpg" alt="">
						<a href="#">
							<h4>Sponsored by: SERGIA</h4>
						</a>
						<p class="p-text">
							SERGIA IS KOLORITI OF KUTAISI AND PROBABLY OF GEORGIA ASS WELL , HE HAS KILLED BEAR WITH COOKING KNIFE!
						</p>
					
						<img src="img/sign.png" alt="">
					</div>

					<div class="single-widget popular-posts-widget">
						<div class="jq-tab-wrapper" id="horizontalTab">
							<div class="jq-tab-menu">
								<div class="jq-tab-title">Latest</div>
							</div>
							<?php foreach( $userslatest as $user):?>
							<div class="jq-tab-content-wrapper">
								<div class="jq-tab-content active" >
									<div class="single-popular-post d-flex flex-row">
										<div class="popular-thumb">
											<img class="img-fluid" width="120px"  src="<?php echo $user['photo'];?>" alt="">
										</div>
										<div class="popular-details">
											<h6><a href="/blogdetails?id=<?php echo $user['blog_id'];?>"><?php echo $user['header'];?></a></h6>
											<p><?php echo $user['post_date'];?></p>
										</div>
									</div>
									
								</div>
                            <?php endforeach;?>
								<div class="jq-tab-content active" data-tab="2">

									
								
								
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="single-widget tags-widget">
						<h4 class="title">Post Tags</h4>
						<ul>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Art</a></li>
							<li><a href="#">Adventure</a></li>
							<li><a href="#">Food</a></li>
							<li><a href="#">Techlology</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Architecture</a></li>
							<li><a href="#">Food</a></li>
							<li><a href="#">Technology</a></li>
						</ul>
					</div> -->

				</div>
			</div>
		</div>
	</div>
	<!-- Start main body Area -->

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6 class="footer_title">About Us</h6>
						<p>This Website is made just for fun by Mr.Linder Bakhbaia & Mr.Nika Liparteliani it was pleasure weorking with you Zura I hope it will not happened again(i mean again in web ll course :) )</p>
					</div>
				</div>
		
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-footer-widget instafeed">
						<h6 class="footer_title">Instagram Feed</h6>
						<ul class="list instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget f_social_wd">
						<h6 class="footer_title">Follow Us</h6>
						<p>Let us be social</p>
						<div class="f_social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>

</body>

</html>