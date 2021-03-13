<?php include '../../db/execute.php' ?>
<?php include '../../functions/time_elapsed_string.php' ?>

<?php include '../layouts/top_bun.php' ?>
<div class="col-xs-12">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>firstname</th>
        <th>lastname</th>
        <th>email</th>
        <th>role</th>
        <th>created_at</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query  = 'SELECT * FROM users';

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
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
<?php include '../layouts/bottom_bun.php' ?>