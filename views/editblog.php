<?PHP 
require_once __DIR__ . '/../helpers.php';
$db=new Database();
$id=$_GET['id'];
$blogs=$db->finduserbyId($id);
if (!empty($_FILES)){
  move_uploaded_file($_FILES['photo']['tmp_name'], __DIR__ . "/../public/photo/$id.png");
  }
if(isset($_POST['submit'])){
$db = new Database();
$photo="photo/$id.png";
$blogid=$id;
$d=$db->updateblog($_POST['field1'],$_POST['select'],$photo,$_POST['text'],$_POST['field4'],$blogid);
redirect('/viewblogs');
}
?>
<style>
    #p{
        margin-top:10px;
    }
    #k{
        font-size:20px;
    }
   body{
/* background-image: url("https://i.ytimg.com/vi/jkEL-9TlN8Y/maxresdefault.jpg"); */
background-size:100%;
   }
   #field1{
       width:300px;
       /* border:1px solid whitesmoke; */
   }
</style>
<!DOCTYPE html>
<head>

</head>
 <body>

<div class="content">
<div class="container">
<h2 class="text-center"></h2>
<form method="post" enctype="multipart/form-data" action="/editblog?id=<?php echo $blogs['blog_id'];?>"  >
     <div class="form-group" id="p">
    <label for="field1" id="k">Header</label>
    <input type="text" class="form-control" value="<?php echo $blogs['header'];  ?> " name="field1" id="field1" placeholder="Insert header">
  </div>
  
  <div class="container py-2">
   <div class="row">
       <div class="col-4">
     
       </div>
   </div>
</div>
  <div class="form-group">
    <label for="field1" id="k">Blog category</label></br>
   <select class="browser-default custom-select" name="select" id="field1">
 <option selected>Select Category</option>
 <option  value="International">International</option>
 <option  value="Tours and Travel">Tours and Travels</option>
 <option value="Cooking Tips">Cooking Tips</option>
</select>
  </div>

  <div class="form-group">
   <!-- <label for="field1">Photo</label> -->
   <input type="file" name="photo" id="file" >
  </div>
  <div class="form-group">
    <label for="text">Text</label> 
    <textarea class="form-control" name="text" id="text" placeholder="Введите данные" > <?php echo $blogs['text'];?></textarea>
   </div>
 
   <div class="form-group">
    <label for="field1">Video Link</label>
    <input type="text" class="form-control" name="field4" id="field1" value="<?php echo $blogs['link'];?>" placeholder="example: https://www.youtube.com/watch?v=_xeVAjOCNzI">
  </div>
  <button type="submit" name='submit' class="btn btn-primary">Update</button>
</form>

</div> 

</div>     

 </body>
 
</html>