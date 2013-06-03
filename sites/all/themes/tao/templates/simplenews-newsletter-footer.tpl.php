<?php if (!$opt_out_hidden): ?>
  <?php if ($format == 'html'): ?>
    <p class="newsletter-footer" style="background: #2C2C2C; padding: 10px 0; margin: 0px auto; width: 100%; text-align: center;"><a href="[simplenews-subscriber:unsubscribe-url]" style="color: #ffffff; text-decoration: underline;">Avsluta prenumeration</a></p>
  <?php else: ?>
  -- <?php print $unsubscribe_text ?>: [simplenews-subscriber:unsubscribe-url]
  <?php endif ?>
<?php endif; ?>


<?php if ($key == 'test'): ?>
- - - <?php //print $test_message ?> - - -
<?php endif ?>
