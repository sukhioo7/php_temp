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
    
    if (!empty($content1) and !empty($content2) and !empty($content3) and !empty($content4) and !empty($sub_head1)
    or !empty($sub_head2) and !empty($sub_head3) and !empty($sub_head4) and !empty($intro) and !empty($title)){

        $insert_blog = "INSERT INTO `blogs`( `title`, `intro`, `sub_heading1`, `content1`, `sub_heading2`, `content2`, `sub_heading3`, `content3`, `sub_heading4`, `content4`)
            VALUES ('$title','$intro','$sub_head1','$content1','$sub_head2','$content2','$sub_head3','$content3','$sub_head4','$content4')";

        $result = mysqli_query($connection,$insert_blog);

        if ($result){
            setcookie("success",'Blog Uploaded Successfully',time()+3,'/');
            header("Location: blog_form.php");
        }else{
            setcookie("error",'Something Bad Happend :( ',time()+3,'/');
            header("Location: blog_form.php");
        }
    } else{
        setcookie("error",'All Fields Are Required.',time()+3,'/');
        header("Location: blog_form.php");
    }

}

?>

<?php 
    if (isset($_GET['blog_id'])){
        $id = $_GET['blog_id'];

        $delete_query = "delete from blogs where blog_id=$id";

        $result = mysqli_query($connection,$delete_query);

        if ($result){
            setcookie("success","Blog No. $id Deleted Successfuly.",time()+3,'/');
            header('location:blogs.php');
        }else{
            setcookie("error",'Something Bad Happend.',time()+3,'/');
            header("Location: view_blog.php");
        }
    }
?>

<?php

if (isset($_POST['update_blog'])){
    $blog_id = $_POST['id'];
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
    
    if (!empty($content1) and !empty($blog_id) and !empty($content2) and !empty($content3) and !empty($content4) and !empty($sub_head1)
    or !empty($sub_head2) and !empty($sub_head3) and !empty($sub_head4) and !empty($intro) and !empty($title)){

        $update_query = "update blogs set title='$title',intro='$intro',sub_heading1='$sub_head1',sub_heading2='$sub_head2'
        ,sub_heading3='$sub_head3',sub_heading4='$sub_head4',content1='$content1',content2='$content2',content3='$content3',
        content4='$content4' where blog_id=$blog_id";

        $result = mysqli_query($connection,$update_query);

        if ($result){
            setcookie("success",'Blog Updated Successfully',time()+3,'/');
            header("Location: blog_form.php");
        }else{
            setcookie("error",'Something Bad Happend :( ',time()+3,'/');
            header("Location: blog_form.php");
        }
    } else{
        setcookie("error",'All Fields Are Required.',time()+3,'/');
        header("Location: blog_form.php");
    }

}

?>