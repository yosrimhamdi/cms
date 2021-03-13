<?php include '../../layouts/top_bun.php' ?>
<?php echo $_GET['message'] ?>

<div class="col-xs-6">
  <form action="/admin/users/actions/new.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="firstname">Firstname</label>
      <input type="text" class="form-control" name="firstname">
    </div>
    <div class="form-group">
      <label for="lastname">Lastname</label>
      <input type="text" class="form-control" name="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
      <label for="category" style="display: block;">Role</label>
      <select name="role">
        <option value="admin">admin</option>
        <option value="subscriber">subscriber</option>
      </select>
    </div>
    <div class="form-group">
      <label for="image">User image</label>
      <input type="file" name="image" accept="image/*">
    </div>
    <div class="form-group">
      <input class="btn btn-primary" type="submit" name="create_post" value="Register User">
    </div>
  </form>
</div>
<?php include '../../layouts/bottom_bun.php' ?>