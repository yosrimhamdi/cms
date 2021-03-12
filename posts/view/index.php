<?php include '../../functions/get_param.php' ?>
<?php include '../../db/execute.php' ?>
<?php
$id = get_param();

$query  = "SELECT * FROM posts ";
$query .= "WHERE id = $id";

$post = execute($query);

$post = mysqli_fetch_assoc($post);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/static/css/post.css">
  <link rel="stylesheet" href="/static/css/bootstrap.min.css">
  <title>post</title>
</head>

<body>
  <?php include '../layouts/nav.php' ?>
  <div class="col-md-6 bootstrap snippets" style="margin-left: 110px; margin-top: 52px;">
    <div class="post">
      <h2>post <?php echo $post['title'] ?></h2>
      <p class="lead">by <a href="index.php">yosri</a></p>
      <p>Posted on <?php echo $post['created_at'] ?></p>
      <hr />
      <img class="img-responsive" src="/static/images/<?php echo $post['image'] ?>" />
      <hr />
      <p><?php echo $post['description'] ?></p>
    </div>
    <div class="panel">
      <form action="/posts/actions/new_comment.php" class="panel-body">
        <textarea class="form-control" rows="2" placeholder="What are you thinking?"></textarea>
        <div class="mar-top clearfix" style="margin-top: 1em;">
          <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
          <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
          <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>
          <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
        </div>
      </form>
    </div>
    <div class="panel">
      <div class="panel-body">
        <!-- Newsfeed Content -->
        <!--===================================================-->
        <div class="media-block">
          <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
          <div class="media-body">
            <div class="mar-btm">
              <a href="#" class="btn-link text-semibold media-heading box-inline">Lisa D.</a>
              <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
            </div>
            <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>