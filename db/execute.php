<?php include "link.php" ?>
<?php
function execute(string $query) {
  global $link;

  return mysqli_query($link, $query);
}
