<?php include_once '../functions/get_error.php' ?>
<?php include_once '../functions/get_value.php' ?>
<?php include_once '../functions/get_class_name.php' ?>
<?php include_once '../functions/redirect_if_logged_in.php' ?>

<?php session_start();

redirect_if_logged_in();

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:LL400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/login/assets/styles/styles.css">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="/login/assets/images/logo.svg" alt="logo" class="logo">
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Log in</h1>
            <form 
              action="/login/actions/login.php"
              method="post"
            >
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  text="email" 
                  name="email" 
                  placeholder="email@example.com"
                  class="<?php echo $email[0] ?>" 
                  value="<?php echo $email[1] ?>"
                >
                <p class="error-message"><?php echo $email[2] ?></p>
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input 
                  type="password" 
                  name="password" 
                  placeholder="enter your passsword"
                  class="<?php echo $password[0] ?>" 
                  value="<?php echo $password[1] ?>"
                >
                <p class="error-message"><?php echo $password[2] ?></p>
              </div>
              <input 
                name="submit" 
                class="btn btn-block login-btn"
                type="submit"
                value="Login"
              >
            </form>
            <a class="forgot-password-link">Forgot password?</a>
            <p class="login-wrapper-footer-text">
              Don't have an account? 
              <a href="#!" class="text-reset">Register here</a>
            </p>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img 
            src="/login/assets/images/login.jpg" 
            alt="login image" 
            class="login-img"
          >
        </div>
      </div>
    </div>
  </main>
</body>
</html>
