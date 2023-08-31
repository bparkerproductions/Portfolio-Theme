<?php if (get_field('technologies') ): ?>
  <div class="technologies d-flex flex-wrap align-items-start">
    <?php foreach(get_field('technologies') as $technology): ?>
      <div class="technologies__column d-flex flex-column align-items-center my-2 me-0 me-xl-4">
        <i class="<?= get_field('fa_icon_class', $technology) ?> fa-2x"></i>
        <span class="fs-sm text-nowrap"><?= get_the_title($technology) ?></span>
      </div>
    <?php endforeach ?>
  </div>
<?php endif; ?>