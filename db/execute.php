<?php include "link.php" ?>
<?php
function execute(string $query) {
  global $link;

  $result  = mysqli_query($link, $query);

  if(!$result) {
    exit('<h1>' . mysqli_error($link) . '</h1>');
  }

  return $result;
}
