<?php include_once 'get_keywords_query_param.php' ?>

<?php
function construct_where_clause() {
  $keywords = get_keywords_query_param();

  if ($keywords === '') {
    return 'WHERE TRUE';
  }

  $keywords = str_replace(',', ' ', $keywords);
  $keywords = explode(' ', $keywords);

  $where = 'WHERE ';

  foreach ($keywords as $keyword) {
    $where .= " keywords LIKE '%$keyword%' OR ";
    $where .= " posts.title LIKE '%$keyword%' OR ";
    $where .= " categories.title LIKE '%$keyword%' OR ";
    $where .= " description LIKE '%$keyword%' OR ";
  }

  return $where . ' FALSE';
}
?>