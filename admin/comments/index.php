<?php include '../../db/execute.php' ?>
<?php include '../../functions/time_elapsed_string.php' ?>

<?php include '../layouts/top_bun.php' ?>
<div class="col-xs-12">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>comment</th>
        <th>in response to(post title)</th>
        <th>user name</th>
        <th>created at</th>
        <th>approved</th>
        <th>approve</th>
        <th>unapprove</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query  = 'SELECT content, ';
      $query .= '       comments.created_at AS created_at, ';
      $query .= '       comments.approved AS approved, ';
      $query .= '       comments.id AS id, ';
      $query .= '       posts.id AS post_id, ';
      $query .= '       posts.title AS post_title ';
      $query .= 'FROM comments ';
      $query .= 'INNER JOIN posts ';
      $query .= 'ON comments.post_id = posts.id ';
      $query .= 'ORDER BY comments.created_at DESC ';

      $comments = execute($query);

      while ($comment = mysqli_fetch_assoc($comments)) {
        $approved = $comment['approved'] ? 'true' : 'false';
        $id = $comment['id'];
      ?>
        <tr>
          <td><?php echo $comment['content'] ?></td>
          <td><a href="/posts/view/<?php echo $comment['post_id'] ?>" target="_blank"><?php echo $comment['post_title'] ?></a></td>
          <td><?php echo 'yosri' ?></td>
          <td><?php echo time_elapsed_string($comment['created_at']) ?></td>
          <td><?php echo $approved ?></td>
          <td><a href="/admin/comments/actions/approve.php?id=<?php echo $id ?>">approve</a></td>
          <td><a href="/admin/comments/actions/unapprove.php?id=<?php echo $id ?>">unapprove</a></td>
          <td><a href="/admin/comments/actions/delete.php?id=<?php echo $id ?>">delete</a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
<?php include '../layouts/bottom_bun.php' ?>