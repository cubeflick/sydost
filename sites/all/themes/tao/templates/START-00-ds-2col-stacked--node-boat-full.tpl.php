<?php

/**
 * @file
 * Display Suite 2 column stacked template.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="yBoat <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <<?php print $header_wrapper ?> class="group-header<?php print $header_classes; ?>">
    <?php print $header; ?>
		<div class="yc"></div>
  </<?php print $header_wrapper ?>>

	<div class="yLine"></div>

  <<?php print $left_wrapper ?> class="group-left<?php print $left_classes; ?>">
    <?php print $left; ?>
  </<?php print $left_wrapper ?>>

  <<?php print $right_wrapper ?> class="group-right<?php print $right_classes; ?>">
    <?php print $right; ?>
  </<?php print $right_wrapper ?>>

  <<?php print $footer_wrapper ?> class="group-footer<?php print $footer_classes; ?>">
		<div class="footer_right">
			<div class="yB yPR">
				<script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if('https:' == document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script><a href="http://www.printfriendly.com" class="button" onclick="window.print();return false;" title="Skriv ut sidan">Skriv ut sidan</a>
			</div>
			<div class="yB yPR">
				<?php print print_insert_link(); ?>
			</div>
			<div class="yB yK">
				<a href="/node/22" class="button">KONTAKTA OSS</a>
			</div>
    </div>
    <?php print $footer; ?>	
 		<div class="yc"></div> 
 		
  </<?php print $footer_wrapper ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
