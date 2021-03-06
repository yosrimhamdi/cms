<?php include_once '../db/execute.php' ?>
<?php include_once 'functions/construct_where_clause.php' ?>

<?php
$query  = 'SELECT posts.title AS post_title, ';
$query .= '       posts.created_at created_at, ';
$query .= '       posts.id AS id, ';
$query .= "       CONCAT(SUBSTRING(description, 1, 150), '...') AS description, ";
$query .= '       image ';
$query .= 'FROM posts ';
$query .= 'INNER JOIN categories ';
$query .= 'ON posts.category_id = categories.id ';
$query .= construct_where_clause();

$posts  = execute($query);

while ($post = mysqli_fetch_assoc($posts)) {
?>
  <div class="post">
    <h2><?php echo $post['post_title'] ?></h2>
    <p class="lead">by <a href="index.php">yosri</a></p>
    <p>Posted on <?php echo $post['created_at'] ?></p>
    <hr />
    <img class="img-responsive" src="/static/images/posts/<?php echo $post['image'] ?>" />
    <hr />
    <p><?php echo $post['description'] ?></p>
    <a class="btn btn-primary" href="/posts/view/<?php echo $post['id'] ?>">Read More</a>
  </div>
<?php
}
?>