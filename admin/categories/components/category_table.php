<?php include '../../db/execute.php' ?>

<div class="col-xs-6">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>category</th>
        <th>delete</th>
        <th>update</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $categories = execute('SELECT * FROM categories');

      while ($category = mysqli_fetch_assoc($categories)) {
        $id = $category['id'];
        $title = $category['title'];
      ?>
        <tr>
          <td><?php echo $id; ?></td>
          <td><?php echo $title ?></td>
          <td>
            <a href="/admin/categories/actions/delete.php?id=<?php echo $id ?>">
              delete
            </a>
          </td>
          <td>
            <a href="?update_id=<?php echo $id ?>&category_title=<?php echo $title ?>">
              update
            </a>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>