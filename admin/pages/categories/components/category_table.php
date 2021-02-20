<div class="col-xs-6">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>category</th>
        <th>actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $categories = execute('SELECT * FROM categories');

      while ($category = mysqli_fetch_assoc($categories)) { ?>
        <tr>
          <td><?php echo $category['id']; ?></td>
          <td><?php echo $category['title']; ?></td>
          <td><a href="?category_id=<?php echo $category['id']; ?>">delete</a></td>
        </tr>
      <?php }
      ?>
    </tbody>
  </table>
</div>