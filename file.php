<form enctype="multipart/form-data" action="" method="post">
    <input type="file" name="image"><br>
    <input type="submit" value="submit file" name="submit">
</form>
<pre>
<?php
    if(isset($_POST['submit'])){
        print_r($_FILES);
        $destination = "upload/";
        move_uploaded_file($_FILES['image']['tmp_name'], $destination.$_FILES['image']['name']);
    }
?>
    </pre>