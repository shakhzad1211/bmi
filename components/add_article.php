<?php
    session_start();
    include '../_database/database.php';
    if(isset($_REQUEST['add-article'])){
        $article_theme=$_REQUEST['Theme'];
        $article_text=$_REQUEST['editor1'];
        $article_category=$_REQUEST['Category'];
        $article_author=$_REQUEST['Author'];
        // $sqlq="SELECT * FROM author";

        $sql="INSERT INTO article( `Author`,`Theme`, `Article_text`, `Data_published`,`Category`) VALUES('$article_author','$article_theme','$article_text',CURRENT_TIMESTAMP,'$article_category')";

        mysqli_query($database,$sql) or die(mysqli_error($database));
        header("location: ../success.php");

    }
    else die(mysqli_error($database))


?>