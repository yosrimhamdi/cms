<?php include '../../functions/get_param.php' ?>
<?php include '../../functions/time_elapsed_string.php' ?>
<?php include '../../db/execute.php' ?>
<?php
$id = get_param();

$query  = "SELECT * FROM posts ";
$query .= "WHERE id = $id";

$post = execute($query);

$post = mysqli_fetch_assoc($post);

$query  = "SELECT * FROM comments ";
$query .= "WHERE post_id = $id ";
$query .= "ORDER BY created_at DESC";

$comments = execute($query);
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
      <form action="/posts/actions/new_comment.php" method="post" class="panel-body">
        <input type="hidden" name="post_id" value="<?php echo $post['id'] ?>">
        <textarea class="form-control" rows="2" placeholder="What are you thinking?" name="comment"></textarea>
        <div class="mar-top clearfix" style="margin-top: 1em;">
          <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
        </div>
      </form>
    </div>
    <div class="panel">
      <div class="panel-body">
        <?php
        while ($comment = mysqli_fetch_assoc($comments)) {
        ?>
          <div class="media-block">
            <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
            <div class="media-body">
              <div class="mar-btm">
                <a href="#" class="btn-link text-semibold media-heading box-inline">Lisa D.</a>
                <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - <?php echo time_elapsed_string($comment['created_at']) ?></p>
              </div>
              <p><?php echo $comment['content'] ?></p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  </div>
</body>

</html>