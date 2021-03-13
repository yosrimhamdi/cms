<?php include '../functions/show_error.php' ?>
<?php include '../functions/show_class.php' ?>
<?php include '../../layouts/top_bun.php' ?>;

<style>
  .is-invalid {
    border: 1px solid red;
  }
</style>

<?php session_start(); ?>

<div class="col-xs-6">
  <form 
    action="/admin/users/actions/new.php"
    enctype="multipart/form-data"
    method="post" 
  >
    <div class="form-group">
      <label for="firstname">Firstname</label>
      <input 
        type="text"
        name="firstname"
        class="<?php show_class('firstname'); ?>"
      >
      <?php show_error('firstname'); ?>
    </div>
    <div class="form-group">
      <label for="lastname">Lastname</label>
      <input 
        type="text"
        name="lastname"
        class="<?php show_class('lastname'); ?>"
      >
      <?php show_error('lastname'); ?>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input 
        type="email"
        name="email"
        class="<?php show_class('email'); ?>" 
      >
      <?php show_error('email'); ?>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input 
        type="password"
        name="password"
        class="<?php show_class('password'); ?>"
      >
      <?php show_error('password'); ?>
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
      <input 
        class="btn btn-primary"
        type="submit"
        name="create_post"
        value="Register User"
      >
    </div>
  </form>
</div>
<?php include '../../layouts/bottom_bun.php' ?>

<?php session_unset(); session_destroy(); ?>