<?php include_once '../../../functions/get_error.php' ?>
<?php include_once '../../../functions/get_class_name.php' ?>
<?php include_once '../../../functions/get_value.php' ?>
<?php include_once '../../../functions/show_alert.php' ?>
<?php include_once '../../layouts/top_bun.php' ?>

<?php session_start();

show_alert();

$firstname = 'firstname';

$firstname = [
  get_class_name($firstname), 
  get_value($firstname),
  get_error($firstname)
];

$lastname = 'lastname';

$lastname = [
  get_class_name($lastname), 
  get_value($lastname),
  get_error($lastname)
];

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
        class="<?php echo $firstname[0] ?>"
        value="<?php echo $firstname[1] ?>"
      >
      <p class="error-message"><?php echo $firstname[2] ?></p>
    </div>
    <div class="form-group">
      <label for="lastname">Lastname</label>
      <input 
        type="text"
        name="lastname"
        class="<?php echo $lastname[0] ?>"
        value="<?php echo $lastname[1] ?>"
      >
      <p class="error-message"><?php echo $lastname[2] ?></p>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input 
        type="email"
        name="email"
        class="<?php echo $email[0] ?>"
        value="<?php echo $email[1] ?>"
      >
      <p class="error-message"><?php echo $email[2] ?></p>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input 
        type="password"
        name="password"
        class="<?php echo $password[0] ?>"
        value="<?php echo $password[1] ?>"
      >
      <p class="error-message"><?php echo $password[2] ?></p>
    </div>
    <div class="form-group">
      <label>Role</label>
      <select name="role">
        <option value="admin">admin</option>
        <option value="subscriber">subscriber</option>
      </select>
    </div>
    <div class="form-group">
      <label>User image</label>
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
<?php include_once '../../layouts/bottom_bun.php' ?>