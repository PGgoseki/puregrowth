<?php get_header(); ?>

<?php
  $query_object = get_queried_object();
  $page_name = $query_object->name;
  $cat_slug = $query_object->category_nicename; 
  $cat_name = $query_object->cat_name;
  $tag_name = $query_object->slug;
  $tag_id = $query_object->term_id;
?>

<div class="lower-mv --articles">
  <div class="lower-mv__inner inner">
    <div class="lower-mv__txt">
      <div class="lower-mv__heading english">Articles</div>
      <h1 class="lower-mv__ttl">
        <span class="lower-mv__ttl-ja"><?php echo $page_name; ?>の一覧</span>
      </h1>
    </div>
  </div>
</div>

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
  <div class="breadcrumbs__inner inner">
    <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
  </div>
</div>

<section class="l-articles section">
  <div class="l-articles__inner inner">
    <div class="l-articles__slider c-card__container">
      <?php 
        get_template_part('components/c-card', null, $args = array(
          'posts_per_page' => 12,
          'cat' => $cat_slug,
          'tag_name' => $tag_name,
          'list' => true,
          'tag' => true,
          'sp-tag' => true,
          'id' => 1,
        )); 
      ?>
      
      <?php my_custom_pagination('tag' ,$tag_id , false ); ?>

      
    </div>
  </div>
</section>


<?php 
get_footer();