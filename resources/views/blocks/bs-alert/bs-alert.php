<div class="alert alert-<?= get_field('alert_color') ?> d-flex flex-column flex-lg-row align-items-start">
  <?php if(get_field('alert_icon_class')): ?>
    <i class="<?= get_field('alert_icon_class') ?> mt-0 mt-lg-2 me-0 me-lg-3 mb-2 mb-lg-0"></i>
  <?php endif; ?>

  <p class="mb-0"><?= get_field('alert_text'); ?></p>
</div>