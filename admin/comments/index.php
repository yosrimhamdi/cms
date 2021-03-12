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
      </tr>
    </thead>
    <tbody>
      <?php
      $query  = 'SELECT * FROM comments';

      $comments = execute($query);

      while ($comment = mysqli_fetch_assoc($comments)) {
        $approved = $comment['approved'] ? 'true' : 'false';
        $id = $comment['id'];
      ?>
        <tr>
          <td><?php echo $comment['content'] ?></td>
          <td><?php echo 'post tile in here' ?></td>
          <td><?php echo 'yosri' ?></td>
          <td><?php echo time_elapsed_string($comment['created_at']) ?></td>
          <td><?php echo $approved ?></td>
          <td><a href="/admin/comments/actions/approve.php?id=<?php echo $id ?>">approve</a></td>
          <td><a href="/admin/comments/actions/unapprove.php?id=<?php echo $id ?>">unapprove</a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
<?php include '../layouts/bottom_bun.php' ?>