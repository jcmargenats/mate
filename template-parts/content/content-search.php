<?php
/**
 * Template Part: Search loop
 * Description: Loop code for search results.
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#content-slug-php
 */
?>
<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php if (have_posts()) : ?>

<header class="page-header">
    <h1 class="page-title">
        <?php _e( 'Search results for:', 'mate' ); ?>
    </h1>
    <div class="page-description"><?php echo get_search_query(); ?></div>
</header><!-- .page-header -->

<?php while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <header class="article-header entry-header">

        <?php get_template_part( 'template-parts/content/post/header', 'title'); ?>

        <?php get_template_part( 'template-parts/content/post/postmeta'); ?>

    </header>

    <div class="entry-content">


        <?php get_template_part( 'template-parts/content/post/post-thumbnail'); ?>

        <?php the_excerpt(); echo mate_excerpt_more_link(); ?>

    </div>

    <footer class="article-footer">

        <?php get_template_part( 'template-parts/content/category/category-tags'); ?>

        <?php get_template_part( 'template-parts/content/post/comment', 'count'); ?>

    </footer>

</article>

<?php endwhile; ?>

<?php get_template_part( 'template-parts/content/post/post-navigation'); ?>

<?php else : ?>

<?php get_template_part( 'template-parts/content/content','none'); ?>

<?php endif;