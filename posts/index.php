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
  <?php include_once "layouts/nav.php" ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="page-header">Page Heading <small>Secondary Text </small></h1>
        <?php include_once "components/posts.php" ?>
      </div>
      <div class="col-md-4">
        <?php include_once "components/search.php" ?>
      </div>
    </div>
    <?php include_once "layouts/footer.php" ?>
  </div>
  <script src="static/js/jquery.js"></script>
  <script src="static/js/bootstrap.min.js"></script>
</body>

</html>