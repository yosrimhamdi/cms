<?php
function get_keywords_query_param() {
  if (!isset($_GET['keywords'])) {
    return '';
  }

  return str_replace(',', ' ', $_GET['keywords']);
}
