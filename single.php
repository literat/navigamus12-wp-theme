<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post">

<h2><?php the_title(); ?></h2>

<div class="contenttext">
<?php the_content('<p>Read more &raquo;</p>'); ?>
</div>
<?php //if(function_exists('wp_print')) { print_link(); } ?> 
<?php link_pages('<p><strong>Pages:<strong> ', '</p>', 'number'); ?>
<p class="postinfo">
<?php
if($_GET['lang'] == "en") the_time('jS F Y'); 
else the_time('j. n. Y');
?> - <?php the_category(', ') ?><br />
<?php the_tags('Tags: ', ', ',''); ?><?php edit_post_link('[edit]',' | ',''); ?></p>

<div class="navigation">
<p><span class="prevlink">
<?php
if($_GET['lang'] == "en") previous_post_link('&laquo; %link','Previous post','');
else previous_post_link('&laquo; %link','Předchozí novinka','');
?></span>
<span class="nextlink">
<?php 
if($_GET['lang'] == "en") next_post_link('%link &raquo;','Next post','');
else next_post_link('%link &raquo;','Další novinka','');
?></span></p>
</div>

<?php endwhile; else: ?>
<p>No matching entries found.</p>
<?php endif; ?>
</div>
</div>

<?php get_footer(); ?>