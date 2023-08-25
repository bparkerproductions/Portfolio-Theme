<?php if (get_field('technologies') ): ?>
  <div class="technologies d-flex flex-wrap">
    <?php foreach(get_field('technologies') as $technology): ?>
      <div class="d-flex flex-column align-items-center me-3">
        <i class="<?= get_field('fa_icon_class', $technology) ?> fa-2x"></i>
        <span class="fs-small text-nowrap"><?= get_the_title($technology) ?></span>
      </div>
    <?php endforeach ?>
  </div>
<?php endif; ?>