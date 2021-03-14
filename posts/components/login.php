<?php include '../functions/show_error_if_any.php' ?>

<div class="well">
  <h4>Login</h4>
  <form method="post" action="/posts/actions/login.php">
    <div class="form-group">
      <input name="email" type="text" class="form-control" placeholder="Enter Email" value="bavary1515@gmail.com">
      <?php show_error_if_any('email') ?>
    </div>

    <div class="input-group">
      <input name="password" type="text" class="form-control" placeholder="Enter Password" value="pass1234">
      <span class="input-group-btn">
        <button class="btn btn-primary" name="login" type="submit">Log in</button>
      </span>
    </div>
  </form>
</div>