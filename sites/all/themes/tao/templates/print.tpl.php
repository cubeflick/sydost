<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>">
  <head>
    <?php print $head; ?>
    <base href='<?php print $url ?>' />
    <title><?php print $print_title; ?></title>
    <?php print $scripts; ?>
    <?php if (isset($sendtoprinter)) print $sendtoprinter; ?>
    <?php print $robots_meta; ?>
    <?php if (theme_get_setting('toggle_favicon')): ?>
      <link rel='shortcut icon' href='<?php print theme_get_setting('favicon') ?>' type='image/x-icon' />
    <?php endif; ?>
    <?php print $css; ?>
  </head>
  <body style="width: 920px;">
    <?php if (!empty($message)): ?>
      <div class="print-message"><?php print $message; ?></div><p />
    <?php endif; ?>

    <div class="print-content"><?php print $content; ?></div>
 
 
 
   <?php if ($page['pagebottom']): ?>
    <div id='yBottom' class='clearfix'><?php print render($page['pagebottom']) ?></div>
	<div class="yc"></div>
  <?php endif; ?>

  <?php if ($page['pagebottomnoboat']): ?>
    <div id='yBottomNoBoat' class='clearfix'><?php print render($page['pagebottomnoboat']) ?></div>
	<div class="yc"></div>
  <?php endif; ?>

  <?php if ($page['sidebar_first']): ?>
    <div id='yBottomFirst' class='clearfix'><?php print render($page['sidebar_first']) ?></div>
	<div class="yc"></div>
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
    <div id='yBottomSecond' class='clearfix'><?php print render($page['sidebar_second']) ?></div>
	<div class="yc"></div>
  <?php endif; ?>
  
  
  
  
  
  
  
  
  
    <?php print $footer_scripts; ?>
  </body>
</html>
