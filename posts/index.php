<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blog Home - Start Bootstrap Template</title>
  <link href="static/css/bootstrap.min.css" rel="stylesheet" />
  <link href="static/css/blog-home.css" rel="stylesheet" />
</head>

<body>
  <?php include "layouts/nav.php" ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="page-header">Page Heading <small>Secondary Text </small></h1>
        <?php include "components/posts.php" ?>
      </div>
      <div class="col-md-4">
        <?php include "components/search.php" ?>
        <div class="well">
          <h4>Side Widget Well</h4>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Inventore, perspiciatis adipisci accusamus laudantium odit aliquam
            repellat tempore quos aspernatur vero.
          </p>
        </div>
      </div>
    </div>
    <?php include "layouts/footer.php" ?>
  </div>
  <script src="static/js/jquery.js"></script>
  <script src="static/js/bootstrap.min.js"></script>
</body>

</html>