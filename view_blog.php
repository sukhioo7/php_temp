<!doctype html>
<?php include ('connection.php'); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/view_blog.css">
    <link rel="stylesheet" href="css/footer.css">
    <?php
            if (isset($_GET['blog_id'])){
                $nums = [1,2,3,4]; 
                $random_number = $nums[array_rand($nums)];
                $blog_id = $_GET['blog_id'];
                $select_blog = "select * from blogs where blog_id=$blog_id";

                $raw_data = mysqli_query($connection, $select_blog);
                $blog = mysqli_fetch_assoc($raw_data);
            }

    ?>
    <style>
        .blog-header {
            background-image: url("img/blog<?php echo $random_number; ?>.jpg");
            background-size: cover;
        }
    </style>
  </head>
  <body>
    <nav>
      <?php include('navbar.php'); ?>
    </nav>
    <main>
        <div class="blog-header">
            <H1><?php echo $blog['title'] ?></H1>
        </div>
        <div class="container edit-btn">
          <?php
              if (isset($_COOKIE['error'])){
          ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong><?php echo $_COOKIE['error'] ?> !</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
          <?php
              }
          ?>
                  <?php
                      if (isset($_SESSION['admin_id'])){
                  ?>       
                                <a class="btn btn-success" href="update_blog.php?blog_id=<?php echo $blog['blog_id']; ?>">Edit</a>
                                <a class="btn btn-danger" href="action.php?blog_id=<?php echo $blog['blog_id']; ?>">Delete</a>
                  <?php
                      }
                  ?>
        </div>
        <div class="blog-content mt-5 mb-5 container">
            <h3>Introduction</h3>
            <p><?php echo $blog['intro'] ?></p>
            <h3><?php echo $blog['sub_heading1'] ?></h3>
            <p><?php echo $blog['content1'] ?></p>
            <h3><?php echo $blog['sub_heading2'] ?></h3>
            <p><?php echo $blog['content2'] ?></p>
            <h3><?php echo $blog['sub_heading3'] ?></h3>
            <p><?php echo $blog['content3'] ?></p>
            <h3><?php echo $blog['sub_heading4'] ?></h3>
            <p><?php echo $blog['content4'] ?></p>
        </div>
    </main>
    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>