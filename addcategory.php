<?php
    $dir = $_POST['exampleInputCategory'];
    if (!is_dir($dir)) {
        mkdir("category/$dir", 0777);
    } else {
        echo "<b>ERROR! Category: <i>$dir</i> exist!</b>";
    }
    mkdir("category/$dir/photo", 0777);
    mkdir("category/$dir/media", 0777);
    
    if(isset($_FILES['exampleInputFile'])){
      $errors= array();
      $file_name = $_FILES['exampleInputFile']['name'];
      $file_size =$_FILES['exampleInputFile']['size'];
      $file_tmp =$_FILES['exampleInputFile']['tmp_name'];
      $file_type=$_FILES['exampleInputFile']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['exampleInputFile']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"category/$dir/photo/".$file_name);
         header("location:admin.php");
      }else{
         print_r($errors);
      }
   }
?>