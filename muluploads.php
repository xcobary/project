<?php
    if(isset($_POST['submit'])){
//        echo '<pre>';
//        print_r($_FILES);
//        echo '</pre>';
        echo $_FILES['image']['name'][0];
        echo $_FILES['image']['size'][0];
        echo $_FILES['image']['error'][0];
        echo $_FILES['image']['name'][3];
    }

?>
<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="image[]"> <br>
    <input type="file" name="image[]"> <br>
    <input type="file" name="image[]"> <br>
    <input type="file" name="image[]"> <br>
    <input type="submit" name="submit" value="Submit">
</form>