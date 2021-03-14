<?php include '../functions/get_error.php' ?>
<?php include '../functions/get_value.php' ?>
<?php include '../functions/get_class_name.php' ?>
<?php include '../functions/session_close.php' ?>

<?php session_start();
$email = 'email';
$email = [
    get_class_name($email), 
    get_value($email),
    get_error($email)
];

$password = 'password';
$password = [
    get_class_name($password), 
    get_value($password),
    get_error($password)
];

session_close();
?>

<div class="well">
  <h4>Login</h4>
  <form method="post" action="/posts/actions/login.php">
    <div class="form-group">
      <input 
        name="email"
        type="text" 
        class="<?php echo $email[0] ?>" 
        value="<?php echo $email[1] ?>"
        placeholder="Enter Email"
      >
      <p class="error-message"><?php echo $email[2] ?></p>
    </div>
    <div class="input-group">
      <input 
        name="password"
        type="password"
        class="<?php echo $password[0] ?>" 
        value="<?php echo $password[1] ?>"
        placeholder="Enter Password"
      >
      <span class="input-group-btn">
        <button 
        class="btn btn-primary"
        name="login"
        type="submit"
        >Log in</button>
      </span>
    </div>
    <p class="error-message"><?php echo $password[2] ?></p>
  </form>
</div>