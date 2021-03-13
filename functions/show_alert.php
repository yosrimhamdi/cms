<style>
  .alert {
    width: 50%;
    position: absolute;
    top: 15%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1;
    text-align: center;

  }
</style>

<?php
function show_alert($status, $message) {
  echo "<div class='alert alert-$status'>$message</div>";
}
?>