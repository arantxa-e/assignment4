

<?php

//upload.php

if(!empty($_FILES))
{
 if(is_uploaded_file($_FILES['uploadFile']['tmp_name']))
 {

  $source_path = $_FILES['uploadFile']['tmp_name'];
  $target_path = 'upload/' . $_FILES['uploadFile']['name'];
   if(move_uploaded_file($source_path, $target_path))
  {
   echo '<img src="'.$target_path.'" class="img-thumbnail" width="300" height="250" />';

}else {
 echo '<span style="color:red">You cannot upload files of this type!</span>';
 }
}
}
?>
