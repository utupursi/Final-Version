<?php
    require_once __DIR__ . '/../db/Database.php';	   
    $db=new Database();
$userblogs=$db->selectUserBlogs(currentUser()['id']);
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
	#f{
		margin-right:10px;
	
	
	}
	#z{
		color:white;
	}
	#f{
		background-color:whitesmoke;
	margin-left:-1px;
	margin-top:7px;
	}
    
    </style>


           <h1 >My Blogs</h1>      
    <div class="row" id="p">
	<?php foreach($userblogs as $category):?>
							<div class="col-lg-6 col-md-6">
		
								<div class="single-post-item">
									<div class="post-thumb">
        
										<img class="img-fluid" id="o" src="<?php echo $category['photo'];?>" alt="">
									</div>
									<div id="f" >
										<h4><a href="/blogdetails?id=<?php echo $category['blog_id'];?>"><?php echo $category['header'];?></a>
										 <span id="f"><a  href="/editblog?id=<?php echo $category['blog_id'];?>"><button  class="btn btn-primary">Edit</button></a>
										 </span><span id="f"><a href="/deleteblog?id=<?php echo $category['blog_id'];?>"><button class="btn btn-primary">Delete</button></a></span></h4>
										<!-- <p><?php echo $user['text']?></p> -->
										<div class="blog-meta">
											<a href="#" class="m-gap"><span class="lnr lnr-calendar-full"></span><?php echo $category['post_date'];?></a>
											<?php echo $category['name'];?> 
										</div>
				
									</div>
								</div>
							</div>
							<?php endforeach;?>
