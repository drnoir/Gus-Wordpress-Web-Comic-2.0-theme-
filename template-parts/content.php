<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webcomic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->  

<div class="container-fluid site" class = "viewport">
	<div class="row-fluid">
		<button type="button" onclick="openNav()" id="backward" class="btn btn-default back"><i class="fa fa-bars fa-3x" aria-hidden="true"></i></button>
			<div class="row-fluid" />
				<div class='strip scrollmenu' > 
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'webcomic' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) ); 

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'webcomic' ),
						'after'  => '</div>',
					) );
				?>
				</div><!-- strip scroll --> 
					</div> <!-- strip scroll -->
					<?php
					$nextpage = get_permalink( get_adjacent_post(false,'',false)->ID ); 
					$prevpage = get_permalink( get_adjacent_post(false,'',true)->ID );

					$connected = new WP_Query( array(
						'connected_type' => 'posts_to_pages',
						'connected_items' => get_queried_object(),
						'nopaging' => true,
					  ) );

					$the_count = $connected->found_posts;
					
					if ( ( $connected->have_posts() ) && ( $the_count > 1 ) ) {
						echo "<button type='button' id = 'for' class='btn btn-default forward'><a href =$nextpage><h4>Next Chapter</h4></a></button>";
						
					}
					else{
					echo "<button type='button' id = 'for' class='btn btn-default forward'><h4>Nothing to show</h4></button>";
					}
					?>

					</div>
	</div>

</article><!-- #post-## -->
