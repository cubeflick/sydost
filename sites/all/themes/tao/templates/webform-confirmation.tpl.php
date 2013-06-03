<div class="webform-confirmation">
  <?php if ($confirmation_message): ?>
    <?php print $confirmation_message ?>
  <?php else: ?>
    <p><?php print t('Thank you, your submission has been received.'); ?></p>
  <?php endif; ?>
</div>

