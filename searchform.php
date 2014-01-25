<div style="display:inline;margin-right:10px;margin-left:20px;">
<form style="display:inline;" method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" value="<?php //echo wp_specialchars($s, 1); ?>Hledat..." name="s" id="s" size="14" onfocus="if(this.value == 'Hledat...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Hledat...';}" />
<input type="hidden" id="searchsubmit" value="Search" />
</form>
</div>