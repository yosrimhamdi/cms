<?php
function get_keywords_query_param() {
  return isset($_GET['keywords']) ? $_GET['keywords'] : '';
}
