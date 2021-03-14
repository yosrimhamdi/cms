<?php include '../functions/show_error_if_any.php' ?>
<?php include '../functions/show_class.php' ?>
<?php include '../functions/session_close.php' ?>
<?php session_start() ?>

<div class="well">
  <h4>Login</h4>
  <form method="post" action="/posts/actions/login.php">
    <div class="form-group">
      <input name="email" type="text" class="<?php show_class('email') ?>" placeholder="Enter Email" value="bavary1515@gmail.com">
      <?php show_error_if_any('email') ?>
    </div>

    <div class="input-group">
      <input name="password" type="text" class="<?php show_class('password') ?>" placeholder="Enter Password" value="pass1234">
      <?php show_error_if_any('password') ?>
      <span class="input-group-btn">
        <button class="btn btn-primary" name="login" type="submit">Log in</button>
      </span>
    </div>
  </form>
</div>
<?php session_close() ?>