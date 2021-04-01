<?php include_once '../db/execute.php' ?>
<?php include_once '../login/functions/is_logged_in.php' ?>
<?php include_once '../login/functions/is_admin.php' ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav" style="text-transform: uppercase;">
        <li><a href='/posts'>all</a></li>
        <?php
        $query = 'SELECT title FROM categories';

        $categories = execute($query);

        while ($category = mysqli_fetch_assoc($categories)) {
          $title = $category['title'];

          echo "<li><a href='/posts?keywords=$title'>$title</a></li>";
        }

        if (is_logged_in()) {
          echo '<li><a href="/login/actions/logout.php">logout</a></li>';

          if (is_admin()) {
            echo "<li style='margin-left: 450px'><a href='/admin'>admin</a></li>";
          }
        } else {
          echo "<li style='margin-left: 450px'><a href='/login'>login</a></li>";
        }
        ?>
      </ul>
    </div>
  </div>
</nav>