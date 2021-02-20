<?php
if (isset($message)) {
  $alert_class = $message === 'added.' || $message === 'deleted.' ? 'success' : 'danger'; ?>

  <div class="alert alert-<?php echo $alert_class; ?>" role="alert">
    <?php echo $message; ?>
  </div>
<?php
}
?>