<div class="block__alert alert alert-<?= get_field('alert_color') ?>">
  <?php if (get_field('alert_title')): ?>
    <p class="text-dark h6 mb-3"><?= get_field('alert_title') ?></p>
  <?php endif; ?>

  <div class="d-flex align-items-start">
    <?php if(get_field('alert_icon_class')): ?>
      <i class="<?= get_field('alert_icon_class') ?> mt-2 me-3"></i>
    <?php endif; ?>

    <div class="alert-content"><?= get_field('alert_text'); ?></div>
  </div>
</div>