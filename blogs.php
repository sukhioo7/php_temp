<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/footer.css">
  </head>
  <body>
    <nav>
      <?php include('navbar.php'); ?>
    </nav>
    <main>
      <h1 class="text-center mt-5">OUR BLOGS</h1>
      <div class="letest-blog">
          <a class="card">
            <div class="card-img-holder">
              <img src="img/blog1.jpg" alt="Blog image">
            </div>
            <h3 class="blog-title">Learn Microinteraction</h3>
            <span class="blog-time">Monday Jan 20, 2020</span>
            <p class="description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis viverra turpis, non cursus ex accumsan at.
            </p>
            <div class="options">
              <span>
                Read Full Blog
              </span>
              <button class="btn">Blog</button>
            </div>
          </a>
        </div>
      </div>
    </main>
    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>