<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"
  <?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
	<?php print $head; ?>
	<title><?php print $head_title; ?></title>
	<?php print $styles; ?>
	<?php print $scripts; ?>
	<script type="text/javascript" src="//use.typekit.net/bzh8ilh.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<meta name="google-site-verification" content="TSUfSWBUlCZC6ex3yo2OLMm5nJdKQImNEysWQNGSBfM" />
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=330103070407382";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="yALL"><?php
	print $page_top;
	print $page;
	print $page_bottom;
?>
</div>

<script type="text/javascript">
( function($) {
$(document).ready(function(){
	$('#popup-element-0 .popup-element-title span').disableTextSelect();
});
} ) ( jQuery );
</script>
<!-- Google Analytics:  -->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38875972-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>