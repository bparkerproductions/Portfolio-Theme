<?php if (get_field('technologies') ): ?>
  <div class="technologies row">
    <?php foreach(get_field('technologies') as $technology): ?>
      <div class="technologies__column col-2 col-lg-1 d-flex flex-column align-items-center my-2 me-3 me-xl-4">
        <i class="<?= get_field('fa_icon_class', $technology) ?> fa-2x"></i>
        <span class="fs-sm text-nowrap"><?= get_the_title($technology) ?></span>
      </div>
    <?php endforeach ?>
  </div>
<?php endif; ?>