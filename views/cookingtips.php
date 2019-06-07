<?php
    require_once __DIR__ . '/../db/Database.php';	
   $category=$_GET['category'];	   
    $db=new Database();
$blogcategory=$db->selectCategory($category);
    ?>
    
    <style>
    #p{
        margin-top:20px;
        display:flex; 

    }
    
    #o{
		width:450px; 
		height:300px
    }
    
	#photo{
		width:40px;
		background-color:white;
		margin-left:-10px;
		margin-bottom:5px;

	}
    </style>

<h1 >Cooking Tips</h1>
                 
    <div class="row" id="p">
	<?php foreach($blogcategory as $category):?>
							<div class="col-lg-6 col-md-6">
		
								<div class="single-post-item">
									<div class="post-thumb">
        
										<img class="img-fluid" id="o" src="<?php echo $category['photo'];?>" alt="">
									</div>
									<div class="post-details">
									<img  id="photo"src="https://seaboardfoods.com/Images%20Icons/Knife_Fork_Icon.png"><?php echo $category['category'];?>
										<h4><a href="/blogdetails?id=<?php echo $category['blog_id'];?>"><?php echo $category['header'];?></a></h4>
										<!-- <p><?php echo $user['text']?></p> -->
										<div class="blog-meta">
											<a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span>March 14, 2018</a>
											<?php echo $category['name'];?>
										</div>
				
									</div>
							
								</div>
						
							</div>
							<?php endforeach;?>
						
