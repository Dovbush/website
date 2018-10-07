<?php
  $post = $wp_query->post;
 
  if ((in_category('vacancies'))||(in_category('jobb'))) { 
      include(TEMPLATEPATH.'/single-vacancies.php');
  } else {
      include(TEMPLATEPATH.'/single-news.php');
  }
?>