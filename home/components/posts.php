<?php
$keywords = isset($_GET['keywords']) ? $_GET['keywords'] : '';

$query  = 'SELECT title, created_at, description, image ';
$query .= 'FROM posts ';
$query .= "WHERE keywords LIKE '%$keywords%'";

$posts  = execute($query);

while ($post = mysqli_fetch_assoc($posts)) {
?>
  <div class="post">
    <h2><a href="#"><?php echo $post['title'] ?></a></h2>
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