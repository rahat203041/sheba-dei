<form method="POST" action="" enctype="multipart/form-data"/>
<input type="file" name="image"/>
<input type="submit" Value="Submit"/>
</form>

<?php

if(isset($_FILES['image'])){
    $filename = $_FILES['image']['name'];
    $filetmp = $_FILES['image']['tmp_name'];
    
    move_uploaded_file($filetmp, "upload/".$filename);
    echo"Image uploaded Successfully";
}
else{
    echo 'file not found';
}

?>