<?php include_once '../../db/execute.php' ?>
<?php include_once '../../functions/time_elapsed_string.php' ?>
<?php include_once '../../functions/show_alert.php' ?>

<?php include_once '../layouts/top_bun.php' ?>
<div class="col-xs-12">
  <?php show_alert(); ?>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>role</th>
        <th>created_at</th>
        <th>image</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query   = 'SELECT * FROM users ';
      $query  .= 'ORDER BY created_at DESC ';

      $users = execute($query);

      while ($user = mysqli_fetch_assoc($users)) {
      ?>
        <tr>
          <td><?php echo $user['firstname'] ?></td>
          <td><?php echo $user['lastname'] ?></td>
          <td><?php echo $user['email'] ?></td>
          <td><?php echo $user['role'] ?></td>
          <td><?php echo time_elapsed_string($user['created_at']) ?></td>
          <td><?php echo $user['image'] ?></td>
          <td><a href="/admin/users/actions/delete.php?id=<?php echo $user['id'] ?>">delete</a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
<?php include_once '../layouts/bottom_bun.php' ?>