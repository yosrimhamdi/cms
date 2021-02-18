<?php include "get_keywords_query_param.php" ?>
<?php
function construct_where_clause() {
  $keywords = get_keywords_query_param();

  $where = 'WHERE ';

  foreach (explode(' ', $keywords) as $keyword) {
    $where .= " keywords LIKE '%$keyword%' OR ";
  }

  return $where . ' FALSE';
}
?>