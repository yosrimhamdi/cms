<div class="well">
  <h4>Post Search</h4>
  <form method="get" class="input-group">
    <input 
      type="text" 
      name="keywords" 
      class="form-control" 
      value="<?php echo get_keywords_query_param() ?>" 
    />
    <span class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <span class="glyphicon glyphicon-search"></span>
      </button>
    </span>
  </form>
</div>