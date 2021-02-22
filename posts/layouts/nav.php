<?php include_once '../db/execute.php' ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="text-transform: uppercase;">
        <?php
        $query = 'SELECT title FROM categories';

        $categories = execute($query);

        while ($category = mysqli_fetch_assoc($categories)) {
          $title = $category['title'];

          echo "<li><a href='home?keywords=$title'>$title</a></li>";
        }
        ?>
        <li><a href="/admin">admin</a></li>
      </ul>
    </div>
  </div>
</nav>