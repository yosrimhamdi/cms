<?php include '../../db/execute.php' ?>

<div class="col-xs-12">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>posts title</th>
        <th>category title</th>
        <th>description</th>
        <th>created_at</th>
        <th>image</th>
        <th>keywords</th>
        <th>approved</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query  = 'SELECT posts.title AS post_title, ';
      $query .= 'categories.title AS category_title, ';
      $query .= 'description, ';
      $query .= 'created_at, ';
      $query .= 'image, ';
      $query .= 'keywords, ';
      $query .= 'approved ';
      $query .= 'FROM posts ';
      $query .= 'INNER JOIN categories ';
      $query .= 'ON posts.category_id = categories.id ';
      $query .= 'ORDER BY created_at DESC';

      $posts = execute($query);

      while ($post = mysqli_fetch_assoc($posts)) {
        $approved = $post['approved'] ? 'true': 'false';
      ?>
        <tr>
          <td><?php echo $post['post_title'] ?></td>
          <td><?php echo $post['category_title'] ?></td>
          <td><?php echo $post['description'] ?></td>
          <td><?php echo $post['created_at'] ?></td>
          <td>
            <img 
              src="/static/images/<?php echo $post['image'] ?>" 
              class="img-responsive"
              width="100"
              alt="post image" 
            >
          </td>
          <td><?php echo $post['keywords'] ?></td>
          <td><?php echo $approved ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>