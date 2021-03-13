<?php include '../layouts/top_bun.php' ?>
<?php include '../../db/execute.php' ?>
<?php include '../../functions/time_elapsed_string.php' ?>

<div class="col-xs-12">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>posts title</th>
        <th>category title</th>
        <th>description</th>
        <th>created_at</th>
        <th>image</th>
        <th>keywords</th>
        <th>comments num</th>
        <th>approved</th>
        <th>delete</th>
        <th>edit</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query  = 'SELECT posts.title AS post_title, ';
      $query .= 'categories.title AS category_title, ';
      $query .= 'description, ';
      $query .= 'posts.id id, ';
      $query .= 'created_at, ';
      $query .= 'image, ';
      $query .= 'keywords, ';
      $query .= 'approved ';
      $query .= 'FROM posts ';
      $query .= 'INNER JOIN categories ';
      $query .= 'ON posts.category_id = categories.id ';
      $query .= 'ORDER BY created_at DESC';

      $posts = execute($query);

      while ($post = mysqli_fetch_assoc($posts)) {
        $approved = $post['approved'] ? 'true' : 'false';
        $post_id = $post['id'];

        $query  = "SELECT COUNT(*) AS nbr_comments FROM comments ";
        $query .= "WHERE post_id = $post_id";

        $nbr_comments = execute($query);
        $nbr_comments = mysqli_fetch_row($nbr_comments)[0];
      ?>
        <tr>
          <td><a href="/posts/view/<?php echo $post['id'] ?>" target="_blank"><?php echo $post['post_title'] ?></a></td>
          <td><?php echo $post['category_title'] ?></td>
          <td><?php echo $post['description'] ?></td>
          <td><?php echo time_elapsed_string($post['created_at']) ?></td>
          <td>
            <img src="/static/images/<?php echo $post['image'] ?>" class="img-responsive" width="100" alt="post image">
          </td>
          <td><?php echo $post['keywords'] ?></td>
          <td><?php echo $nbr_comments ?></td>
          <td><?php echo $approved ?></td>
          <td><a href="/admin/posts/actions/delete.php?id=<?php echo $post_id ?>">delete</a></td>
          <td><a href="/admin/posts/edit/<?php echo $post_id ?>" target="_blank">edit</a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
<?php include '../layouts/bottom_bun.php' ?>