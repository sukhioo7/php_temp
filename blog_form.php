<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
  </head>
  <body>
    <nav>
      <?php include('navbar.php'); ?>
    </nav>
    <main>
      <h1 class="text-center m-2">ADD NEW BLOG</h1>
      <div class="blog-form m-5">
        <form method="post" action="action.php" class="form-floating">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="title" id="floatingInput">
            <label for="floatingInput">Title</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" name="intro" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Introduction</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="sub_head1" id="floatingInput" >
            <label for="floatingInput">Sub Heading 1</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" name="content1" id="floatingTextarea2" style="height: 200px"></textarea>
            <label for="floatingTextarea2">Content</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="sub_head2" id="floatingInput" >
            <label for="floatingInput">Sub Heading 2</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" name="content2" id="floatingTextarea2" style="height: 200px"></textarea>
            <label for="floatingTextarea2">Content</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="sub_head3" id="floatingInput" >
            <label for="floatingInput">Sub Heading 3</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" name="content3" id="floatingTextarea2" style="height: 200px"></textarea>
            <label for="floatingTextarea2">Content</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="sub_head4" id="floatingInput" >
            <label for="floatingInput">Sub Heading 4</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" name="content4" id="floatingTextarea2" style="height: 200px"></textarea>
            <label for="floatingTextarea2">Content</label>
          </div>
          <div class="mb-2">
            <button type="submit" style="backgroud-color: " name="add_blog"  class="btn btn-dark w-100 ">ADD BLOG</button>
          </div>
        </form>
      </div>
    </main>
    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>


<!-- INSERT INTO example_table (event_name, event_timestamp) VALUES ('Event Name', CURRENT_TIMESTAMP); -->

<!-- CREATE TABLE blogs (
    blog_id INT not null UNIQUE AUTO_INCREMENT, 
    title varchar(150) not null UNIQUE,
    intro varchar(300) not null,
    sub_heading1 varchar(150) not null UNIQUE,
    content1 varchar(50000) not null,
    sub_heading2 varchar(150) not null UNIQUE,
    content2 varchar(50000) not null,
    sub_heading3 varchar(150) not null UNIQUE,
    content3 varchar(50000) not null,
    sub_heading4 varchar(150) not null UNIQUE,
    content4 varchar(50000) not null,
    post_time datetime not null
);  -->