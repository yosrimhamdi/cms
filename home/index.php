<?php include "../db/execute.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blog Home - Start Bootstrap Template</title>
  <link href="../static/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../static/css/blog-home.css" rel="stylesheet" />
</head>

<body>
  <?php include "layouts/nav.php" ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="page-header">Page Heading <small>Secondary Text </small></h1>
        <?php include "components/posts/posts.php" ?>
        <ul class="pager">
          <li class="previous"><a href="#">&larr; Older</a></li>
          <li class="next"><a href="#">Newer &rarr;</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <div class="well">
          <h4>Post Search</h4>
          <form method="get" class="input-group">
            <input type="text" name="keywords" class="form-control" />
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </span>
          </form>
        </div>
        <?php include "components/categories/categories.php" ?>
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
  <script src="../static/js/jquery.js"></script>
  <script src="../static/js/bootstrap.min.js"></script>
</body>

</html>