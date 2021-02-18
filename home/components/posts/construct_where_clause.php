<?php include "get_keywords_query_param.php" ?>
<?php
function construct_where_clause() {
  $keywords = get_keywords_query_param();
  $keywords = str_replace(',', ' ', $keywords);
  $keywords = explode(' ', $keywords);

  $where = 'WHERE ';

  foreach ($keywords as $keyword) {
    $where .= " keywords LIKE '%$keyword%' OR ";
  }

  return $where . ' FALSE';
}
?>