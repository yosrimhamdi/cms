<?php include "link.php" ?>
<?php
function execute(string $query) {
  global $link;

  $result = mysqli_query($link, $query);

  mysqli_close($link);

  return $result;
}
