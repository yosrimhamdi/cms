<?php include "construct_where_clause.php" ?>
<?php
$query  = 'SELECT posts.title AS post_title, created_at, description, image ';
$query .= 'FROM posts ';
$query .= 'INNER JOIN categories ';
$query .= 'ON posts.category_id = categories.id ';
$query .= construct_where_clause();

$posts  = execute($query);

while ($post = mysqli_fetch_assoc($posts)) {
?>
  <div class="post">
    <h2><a href="#"><?php echo $post['post_title'] ?></a></h2>
    <p class="lead">by <a href="index.php">yosri</a></p>
    <p>Posted on <?php echo $post['created_at'] ?></p>
    <hr />
    <img class="img-responsive" src="/static/images/<?php echo $post['image'] ?>" />
    <hr />
    <p><?php echo $post['description'] ?></p>
    <a class="btn btn-primary" href="#">Read More</a>
  </div>
<?php
}
?>