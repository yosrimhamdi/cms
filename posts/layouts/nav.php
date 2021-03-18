<?php session_start() ?>
<?php include_once '../db/execute.php' ?>

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
        ?>
        <?php 
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
        ?>
          <li style="margin-left: 450px"><a href='/admin'>admin</a></li> 
          <li><a href='/login/actions/logout.php'>logout</a></li> 
        <?php 
        } else {
          echo "<li><a href='/login'>login</a></li>";
        }
        ?>
      </ul>
    </div>
  </div>
</nav>