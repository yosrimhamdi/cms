<?php include '../../../db/execute.php' ?>

<?php
function display_categories() {
  $query = "SELECT * FROM categories";
  $categories = execute($query);

  while ($catogory = mysqli_fetch_assoc($categories)) {
    echo "<option value='$catogory[id]'>$catogory[title]</option>";
  }
}
