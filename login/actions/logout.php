<?php include_once '../../functions/redirect/redirect.php' ?>
<?php include_once '../../functions/redirect/redirect_if_not_legal.php' ?>

<?php
setcookie('jwt', null, -1, '/');

redirect('/login');