<!doctype html>
<?php include('connection.php'); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/footer.css">
  </head>
  <body>
    <nav>
      <?php include('navbar.php'); ?>
      <?php include('search.php'); ?>
    </nav>
    <main class="d-flex justify-content-center align-items-center flex-column">
      <h1 class="text-center mt-5">OUR BLOGS</h1>
      <div class=" row masonry letest-blog ">
        <?php
            $select_blog_query = "select * from blogs;";

            $raw_data = mysqli_query($connection,$select_blog_query);

            if ($raw_data->num_rows!=0){
                while($blog = mysqli_fetch_assoc($raw_data)){ 
                    $nums = [1,2,3,4]; 
                    $random_number = $nums[array_rand($nums)];
                    $timestamp = strtotime($blog['post_time']);
        ?>          
                    <a class="card" href="view_blog.php?blog_id=<?php echo $blog['blog_id'] ?>">
                      <div class="card-img-holder">
                        <img src="img/blog<?php echo $random_number; ?>.jpg" alt="Blog image">
                      </div>
                      <h3 class="blog-title"><?php echo $blog['title'] ?></h3>
                      <span class="blog-time"><?php echo date("l, M d Y",$timestamp) ?></span>
                      <p class="description"><?php echo $blog['intro'] ?></p>
                      <div class="options">
                        <span>
                          Read Full Blog
                        </span>
                        <button class="btn">Blog</button>
                      </div>
                    </a>
        <?php
                }
            }

        ?>
        </div>
      </div>
    </main>
    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script>
      var masonry = new Masonry('.masonry', {
        itemSelector: '.card',
        columnWidth: '.card',
        percentPosition: true
      });
    </script>
  </body>
</html>