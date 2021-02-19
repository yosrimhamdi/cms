<?php
$alert_class = 'success';

if ($message !== 'added.') {
  $alert_class = 'danger';
}
?>

<div class="alert alert-<?php echo $alert_class ?>" role="alert">
  <?php echo $message ?>
</div>