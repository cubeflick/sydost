<?php if ($page['help'] || ($show_messages && $messages)): ?>
  <div id='console'><div class='limiter clearfix'>
    <?php print render($page['help']); ?>
    <?php if ($show_messages && $messages): print $messages; endif; ?>
  </div></div>
<?php endif; ?>

<?php if ($page['header']): ?>
  <div id='header'><div class='limiter clearfix'>
    <?php print render($page['header']); ?>
  </div></div>
<?php endif; ?>

<div id="page-container">

<?php if ($page['ymenu']): ?>
  <div id='ymenu'><div class='limiter clearfix'>
    <?php print render($page['ymenu']); ?>
  </div></div>
<?php endif; ?>

<?php if ($page['highlighted']): ?>
  <div id='highlighted'><div class='limiter clearfix'>
    <?php print render($page['highlighted']); ?>
  </div></div>
<?php endif; ?>

<div id='page'><div class='limiter clearfix'>

  <div id='main-content' class='clearfix'>
    <?php print render($title_prefix); ?>

    <?php print render($title_suffix); ?>
    <?php if ($primary_local_tasks): ?><ul class='yTabs links clearfix'><?php print render($primary_local_tasks) ?></ul><?php endif; ?>
    <?php if ($secondary_local_tasks): ?><ul class='links clearfix'><?php print render($secondary_local_tasks) ?></ul><?php endif; ?>
    <?php if ($action_links): ?><ul class='links clearfix'><?php print render($action_links); ?></ul><?php endif; ?>

  <?php if ($page['pagetop']): ?>
    <div id='yTop' class='clearfix'><?php print render($page['pagetop']) ?></div>
	<div class="yc"></div>
  <?php endif; ?>

	<div class="yKreska">
		<div id='content' class='clearfix'><?php print render($page['content']) ?></div>
		<?php if ($page['hidden']): ?>
			<div id='yHidden' class='clearfix'><?php print render($page['hidden']) ?></div>
		<?php endif; ?>
	</div>

	<div class="yc"></div>
  </div>

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

</div></div>

<div id="footer"><div class='limiter clearfix'>
  <?php print $feed_icons ?>
  <?php print render($page['footer']) ?>
</div></div>

</div><!-- #page-container -->

<?php print render($page['bottom']); ?>