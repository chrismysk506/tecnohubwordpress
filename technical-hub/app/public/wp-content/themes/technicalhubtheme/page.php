<?php
   get_header();
  while(have_posts())
  {
      the_post();?>
 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>;"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title();?></h1>
      <div class="page-banner__intro">
        <p>Replace me</p>
      </div>
    </div>  
  </div>
  <div class="container container--narrow page-section">
<?php 
      $parentid=wp_get_post_parent_id(get_the_ID());
            if(wp_get_post_parent_id(get_the_ID()))
         {   ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php  echo get_permalink($parentid); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to<?php echo get_the_title($parentid);?></a> <span class="metabox__main"><?php the_title()?></span></p>
    </div>
  
            <?php   }

?>
<?php 
 $testarray=get_pages(array('child_of'=>get_the_ID()));
if( $parentid or $testarray){  ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php   echo get_permalink($parentid);?>"><?php echo get_the_title($parentid);?></a></h2>
      <ul class="min-list">
        <?php
      
     $parentid=wp_get_post_parent_id(get_the_ID());
           if($parentid)
               {
                 $findchild=$parentid;
                 echo $findchild;
                   }else {
                               $findchild=get_the_ID();
                      }
             wp_list_pages(array(
                        'title_li'=>NULL,
                          'child_of'=>$findchild
                    ));
        ?>
      </ul>
    </div>
                <?php } ?>
    <div class="generic-content">
   <?php the_content();?>
    </div>

  </div>


  <?php  }
  get_footer();
?>
