<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content">
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; ?>

<?php if (is_category()) { ?><h2><? if($_GET['lang'] == "en") echo "News"; else echo "Novinky"; ?><!--'<?php //echo single_cat_title(); ?>'--></h2>
<?php } elseif (is_day()) { ?><h2>Archive for <?php the_time('F jS, Y'); ?></h2>
<?php } elseif (is_month()) { ?><h2>Archive for <?php the_time('F, Y'); ?></h2>
<?php } elseif (is_year()) { ?><h2>Archive for the year <?php the_time('Y'); ?></h2>
<?php } elseif (is_tag()) { ?><h2>Tag: <?php single_tag_title(''); ?></h2>
<?php } elseif (is_search()) { ?><h2>Search results</h2>
<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?><h2>Archives</h2>
<?php } ?>

<?php while (have_posts()) : the_post(); ?>
<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

<p class="postinfo">
<?php if($_GET['lang'] == "en") the_time('jS F Y'); 
else the_time('j. n. Y'); ?> - <?php the_category(', ') ?><br />
<?php the_tags('Tags: ', ', ', '<br />'); ?>
<!--<a href="<?php comments_link(); ?>"><strong>Comments:</strong> <?php comments_number('none','1','%'); ?></a>--> 
<?php edit_post_link('[edit]',' | ',''); ?>
</p>

<div class="contenttext">
<?php the_excerpt('<p>Read more &raquo;</p>'); ?>
</div>

<?php endwhile; ?>
<div class="navigation">
<p><span class="prevlink">
<?php
if($_GET['lang'] == "en") next_posts_link('&laquo; Previous entries');
else next_posts_link('&laquo; Předchozí aktuality');
?>
</span>
<span class="nextlink">
<?php
if($_GET['lang'] == "en") previous_posts_link('Next entries &raquo;');
else previous_posts_link('&laquo; Následující aktuality');
?>
</span>
</p>
</div>

<?php else : ?>
<h2>Page not found!</h2>
<p>The page you trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.</p>
<?php endif; ?>

</div>
<?php get_footer(); ?>