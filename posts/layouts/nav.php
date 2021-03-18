<?php session_start(); ?>
<?php $root = $_SERVER['DOCUMENT_ROOT'] ?>
<?php include_once $root . '/db/execute.php' ?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="text-transform: uppercase;">
        <li><a href='/posts'>all</a></li>
        <?php
        $query = 'SELECT title FROM categories';

        $categories = execute($query);

        while ($category = mysqli_fetch_assoc($categories)) {
          $title = $category['title'];

          echo "<li><a href='/posts?keywords=$title'>$title</a></li>";
        }
        ?>
        <?php 
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
          echo "<li><a href='/admin'>admin</a></li>"; 
        } else {
          echo "<li><a href='/login'>login</a></li>";
        }
        ?>
      </ul>
    </div>
  </div>
</nav>