<?php
    require_once __DIR__ . '/../db/Database.php';	
   $category=$_GET['category']; 
    $db=new Database();
$blogcategory=$db->selectCategory($category);
    ?>
    
    <style>
		body{
			background-color:whitesmoke;
		}
    #p{
        margin-top:20px;
             
    }
    
    #o{
	
		width:450px; 
		height:300px
    
    }
    
	#i{
		width:400px;
	}
	#photo{
		width:20px;
		background-color:white;
		margin-left:-10px;
		margin-bottom:5px;

	}#l{
		margin-bottom:-10px;
	}
    </style>
	<h1 >Tours And Travels</h1>      
        
    <div class="row" id="p">
	
<?php foreach($blogcategory as $category):?>  
							<div class="col-lg-6 col-md-6">

								<div class="single-post-item" id="i">
									<div class="post-thumb" >
        
										<img class="img-fluid" id="o" src="<?php echo $category['photo'];?>" alt="">
									</div>
									<div class="post-details">
										<img  id="photo"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTItbfpIOEaRX7k1KybpesCluHZAZReG4QlG3U17itjmMkc41XF"><?php echo $category['category'];?>
										<h4><a href="/blogdetails?id=<?php echo $category['blog_id'];?>"><?php echo $category['header'];?></a></h4>
										<!-- <p><?php echo $user['text']?></p> -->
										<div class="blog-meta">
											<a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span><?php echo $category['post_date'];?></a>
											<?php echo $category['name'];?>
										</div>
				
									</div>
								</div>
							</div>
							<?php endforeach;?>
