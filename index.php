<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
  </head>
  <body>
    <nav>
      <?php include('navbar.php'); ?>
      <div class='nav-main'>
        <div class='nav-content'>
            <h1><Span>Build</Span> Your <span>Body</span> Strong</h1>
            <p>Transform Your Body, Transform Your Life</p>
        </div>
      </div>
    </nav>
    <main> 
      <div class="box1">
        <div class="box1-img">
          <img src="img/model2.jpg" alt="">
        </div>
        <div class="box1-content">
          <dl>
            <dt>Weight Lifting</dt>
            <dd>Weightlifting, also called Olympic weightlifting, is an athletic discipline in the modern Olympic programme in which the athlete attempts a maximum-weight single lift of a barbell loaded with weight plates.</dd>
            <dt>Running</dt>
            <dd>Running is a method of terrestrial locomotion allowing humans and other animals to move rapidly on foot. Running is a type of gait characterized by an aerial phase in which all feet…</dd>
            <dt>Yoga</dt>
            <dd>Yoga, is a meditative means of discovering dysfunctional perception and cognition, as well as overcoming it for release from suffering, inner peace and salvation.</dd>
          </dl>
        </div>
      </div>
      <div class="box2">
        <h3>LATEST BLOGS</h3>
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
          <a class="card">
            <div class="card-img-holder">
              <img src="img/blog2.jpg" alt="Blog image">
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
          <a class="card">
            <div class="card-img-holder">
              <img src="img/blog3.jpg" alt="Blog image">
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
        <a href="">Read More...</a>
      </div>
      <div class="box3">
        
      </div>
    </main>
    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
