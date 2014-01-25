<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php bloginfo('name'); wp_title(); ?></title>

    <meta name="description" content="Use no more than 255 characters">
    <meta name="keywords" content="12 unique search terms separated by a comma and space">
    <meta name="copyright" content="Copyright YourCompany - 2008">
    <meta name="author" content="Author: Your Name/Company">
    <meta name="email" content="Email: suppport@yoursite.com">
    
    <meta name="Charset" content="UTF-8">
    <meta name="Distribution" content="Global">
    <meta name="Rating" content="General">
    <meta name="Robots" content="INDEX,FOLLOW">
    <meta name="Revisit-after" content="1 Day">
    <meta name="expires" content="never">

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
<style type="text/css">
	html { margin-top: 0px !important; }
	* html body { margin-top: 0px !important; }

<?php if(preg_match('/.*o-akci.*/',$_SERVER['REQUEST_URI']) or preg_match('/.*camp.*/',$_SERVER['REQUEST_URI'])){
			echo "li#menu-item-119 ul#sub-menu {display:block;} li#menu-item-133 ul#sub-menu {display:block;}";
		}
		elseif(preg_match('/.*predprogram.*/',$_SERVER['REQUEST_URI'])) {
			echo "li#menu-item-114 ul#sub-menu {display:block;}";
		}
		elseif(preg_match('/.*registrace.*/',$_SERVER['REQUEST_URI'])) {
			echo "li#menu-item-113 ul#sub-menu {display:block;}";
		}
		elseif(preg_match('/.*registration.*/',$_SERVER['REQUEST_URI'])) {
			echo "li#menu-item-127 ul#sub-menu {display:block;}";
		}
		else {;}
?>
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<!-- FB Apps -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/cs_CZ/all.js#xfbml=1&appId=322493817766205";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- FB Apps End -->

<div id="wrap" class="shadow">

<div id="header" >
	<div style="float:right;">
		<?php do_action('icl_language_selector'); ?>
	</div>
	<div style="float:left;">
		<a href="<?php bloginfo('url'); ?>" title="Domů">
		<img src="http://<?php if($_SERVER['HTTP_HOST'] == "localhost") echo "localhost/navigamus"; else echo $_SERVER['HTTP_HOST']; ?>/wp-content/themes/navigamus12_theme/img/logo_notrp.png" alt="logo" />
		</a>
	</div>
	<div style="margin-top:14px;text-align:center;width:550px;float:right;font-size:24px;padding-right:40px;color:#95c0e8;font-weight:bold;">
	    <?php 
		if($_GET['lang'] == "en") {echo "7th national camp of water scouts<br /> Czech Republic, Plzeň, 7th - 10th June 2012";}
		else {echo "7. celostátní setkání vodních skautů<br />Plzeň, 7. - 10. červen 2012";}
		?>
	</div>
<!--h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<p><strong><?php bloginfo('description'); ?></strong><br/></p-->
</div>
<!--<div style="width:920px; text-align:center; margin-bottom:0px; margin-left:0px; border-bottom:0px solid #CCC;"><img src="./wp-content/themes/navigamus12_theme/img/Nav12_testlinka2.gif" /></div>-->
<div id="leftside">
<script type='text/Javascript'>
  function zobrazSkryj(id){el = document.getElementById(id).style;
	                                 el.display=(el.display == 'none')?'none':'block';}
</script>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Main Sidebar') ) : else : ?>

<?php get_calendar(1); ?>
<h2>Categories</h2>
<ul>
<?php wp_list_cats('sort_column=name&list=1&optioncount=0&hierarchical=1&children=1&hide_empty=1&feed=RSS'); ?>
</ul>
<h2>Tags</h2>
<ul>
<li><?php wp_tag_cloud('unit=em&smallest=0.8&largest=1.8&number=40'); ?></li>
</ul>
<?php wp_list_bookmarks('title_li=&category_before=&category_after=&show_images=0&show_description=0'); ?> 
<?php wp_meta(); ?>
<?php endif; ?>

<?php //if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Right Sidebar') ) : else : ?>

<!--<h2 class="hide">Main menu:</h2>
<ul class="page">
<?php //if (is_page()) { $highlight = "page_item"; } else {$highlight = "page_item current_page_item"; } ?>
<li class="<?php //echo $highlight; ?>"><a href="<?php //bloginfo('url'); ?>">Home</a></li>
<?php //wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
</ul>

<?php //endif; ?>-->

</div>