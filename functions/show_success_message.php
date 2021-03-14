<?php include 'session_close.php' ?>

<?php
function show_success_message() {
  if (isset($_SESSION['success_message'])) {
    echo "<div class='alert alert-success'>$_SESSION[success_message]</div>";

    session_close();
  }
}
?>