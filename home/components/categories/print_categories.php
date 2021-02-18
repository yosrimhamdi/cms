<?php
function print_categories($offset = 0) {
  global $categories, $num_rows;

  for ($i = 0; $i < intdiv($num_rows, 2) + $offset; $i++) {
    $category = mysqli_fetch_assoc($categories);

    echo "<li><a href='#'>$category[title]</a></li>";
  }
}
