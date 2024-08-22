<?php include('connection.php'); ?>
<?php

if (isset($_POST['add_blog'])){
    $title = $_POST['title'];
    $intro = $_POST['intro'];
    $sub_head1 = $_POST['sub_head1'];
    $sub_head2 = $_POST['sub_head2'];
    $sub_head3 = $_POST['sub_head3'];
    $sub_head4 = $_POST['sub_head4'];
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];
    $content3 = $_POST['content3'];
    $content4 = $_POST['content4'];
    

    $insert_blog = "INSERT INTO `blogs`( `title`, `intro`, `sub_heading1`, `content1`, `sub_heading2`, `content2`, `sub_heading3`, `content3`, `sub_heading4`, `content4`)
        VALUES ('$title','$intro','$sub_head1','$content1','$sub_head2','$content2','$sub_head3','$content3','$sub_head4','$content4')";

    $result = mysqli_query($connection,$insert_blog);

    if ($result){
        echo 'Blog Uploaded';
    }else{
        echo 'ERROR';
    }


}

?>