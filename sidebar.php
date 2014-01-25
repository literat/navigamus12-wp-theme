<div id="extras">
<div class="news">	
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Right Sidebar') ) : else : ?>

<h2 class="hide">Main menu:</h2>
<ul class="page">
<?php if (is_page()) { $highlight = "page_item"; } else {$highlight = "page_item current_page_item"; } ?>
<li class="<?php echo $highlight; ?>"><a href="<?php bloginfo('url'); ?>">Home</a></li>
<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
</ul>

<?php endif; ?>

</div>
<div class="separator">
		<!--<img src="wp-content/themes/navigamus12_theme/img/separator_red.png" />-->
</div>
</div>