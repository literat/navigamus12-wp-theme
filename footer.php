<div id="footer">
	<div style="padding:20px;margin-top:140px;">
		<ul style="padding:0px; margin:0px;">
			<li style="display:inline;">
				<a target="_blank" href="<?php bloginfo('rss2_url'); ?>">
					<img id="rss" width="30" height="30" name="rss" alt="RSS" src="<?php if($_SERVER['HTTP_HOST'] == "localhost") echo "http://localhost/navigamus"; else echo "http://".$_SERVER['HTTP_HOST']; ?>/wp-content/themes/navigamus12_theme/img/rss.png">
				</a>
			</li>
			<li style="display:inline;">
				<a target="_blank" href="http://www.facebook.com/pages/Navigamus-2012/153037998096843">
					<img id="facebook" width="30" height="30" name="facebook" alt="Facebook" src="<?php if($_SERVER['HTTP_HOST'] == "localhost") echo "http://localhost/navigamus"; else echo "http://".$_SERVER['HTTP_HOST']; ?>/wp-content/themes/navigamus12_theme/img/facebook.png">
				</a>
			</li>
			<li style="display:inline;">
				<a target="_blank" href="http://www.youtube.com/navigamus2012">
					<img id="rss" width="30" height="30" name="rss" alt="RSS" src="<?php if($_SERVER['HTTP_HOST'] == "localhost") echo "http://localhost/navigamus"; else echo "http://".$_SERVER['HTTP_HOST']; ?>/wp-content/themes/navigamus12_theme/img/youtube_small.png">
				</a>
			</li>
			<!--<li style="display:inline; width:100px;">
				<h4 class="title">...Žijeme na Internetu</h4>
			</li>-->
		</ul>
	
<!--		<a class="rss" href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a><br />-->
		<?php
		if($_SERVER['HTTP_HOST'] == "localhost") $host = "http://localhost/navigamus";
		else $host = $_SERVER['HTTP_HOST'];
		if($_GET['lang'] == "en"){
			echo "<a class='lang' href='http://".$host."/mapa-stranek?lang=en'>Sitemap</a><br />";
			echo "<a href='mailto:international@navigamus.cz' title='info mail about Navigamus'>international@navigamus.cz</a><br />";}
		else {
			echo "<a class='lang' href='http://".$host."/mapa-stranek'>Mapa stránek</a><br />";
			echo "<a href='mailto:info@navigamus.cz' title='info mail o Navigamu'>info@navigamus.cz</a><br />";}
		?>
		© 2011  <a href="http://krjplzen.cz/" target="_blank">Junák - svaz skautů a skautek ČR, Plzeňský kraj</a>
		<span style="float:right;"><?php wp_loginout(); ?></span>
	</div>

<!--<p><span class="credits">&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a> - <a href="<?php bloginfo('rss2_url'); ?>" rel="nofollow" >Entries (RSS)</a> - <a href="<?php bloginfo('comments_rss2_url'); ?>" rel="nofollow">Comments (RSS)</a> - <?php wp_loginout(); ?></span><br /><a href="http://lorem-ipsum-dolor-sit-amet.com/wooden-mannequin/">Theme design</a> by <a href="http://lorem-ipsum-dolor-sit-amet.com/" title="Design by Lorem Ipsum">Lorem Ipsum</a> - Powered by <a href="http://wordpress.org/" rel="nofollow" >WordPress</a> | <a href="http://navigamus.skauting.cz/mapa-stranek">Sitemap</a></p>-->

</div>
<?php //do_action('wp_footer'); ?>
</div>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23261249-1']);
  _gaq.push(['_trackPageview']);
   (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-325304-11']);
  _gaq.push(['_trackPageview']);
   (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</body>
</html>