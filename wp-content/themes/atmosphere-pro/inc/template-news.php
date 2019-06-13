<?php
/*
 *  Template name: News
 */
?>
<?php get_header(); ?>
<h1 class="entry-title" itemprop="headline">IN THE NEWS</h1>
 <h2>Allegiance Protection Group In the News</h2>
<div class="container">
<div class="row">

<section id="blog">
	<div class="col-md-8">
		

		<?php 
		$query = new WP_Query( 
			array('post_type' => 'news')
		);

 


		// The Loop
		if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
		$query->the_post();
		$subDetails = get_post_custom( $post->ID);
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ,'large');
		?> 
          <div class="blog news-section">
			<div class="archive-description taxonomy-archive-description taxonomy-description"></div>			 
			<div class="detail">
			<header class="entry-header">
				<!--h2 class="entry-title" itemprop="headline">
					
				<a class="entry-title-link" rel="bookmark" href="">Posted By <?//php the_author(); ?> on</a>
				</h2-->
				<p class="entry-meta">
					
                       <span class="entry-comments-link">
                        <span class="entry-title-link" rel="bookmark"><?php echo CFS()->get('Publication');?></span></span>
                          &nbsp;  
                         <time class="entry-time"><?php the_date(); ?></time>
				</p>
				<h2 class="entry-title-link">
				<!--a href="<?php //the_permalink();  ?>"--><?php the_title(); ?><!--/a--></h2>
				
			</header>
              <!--div class="blogg">Posted By <?php // the_author(); ?> on--> <!--a href="#"><?php // the_date(); ?></a--> 

              <!--a href="<?php // the_permalink(); ?>">Leave a comment</a></div-->

            </div>
			<div class="entry-content">
				<p><img src="<?php echo $url; ?>"/></p>
				<p><?php echo the_content(); ?></p>
			</div>
          </div>

		<?php 	} } wp_reset_query(); ?> 

		
	</div>
</section>

</div>
</div>
<?php get_footer(); ?>
