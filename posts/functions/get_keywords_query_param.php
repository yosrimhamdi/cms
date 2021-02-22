<?php
function get_keywords_query_param() {
  if (isset($_GET['keywords'])) {
    return  $_GET['keywords'];
  }

  return '';
}
