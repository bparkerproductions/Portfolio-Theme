<a 
  href="<?= get_field('button_link')['url'] ?>"
  class="btn <?= get_field('classes') ?>"
>
  <span class="position-relative d-flex">
    <?= get_field('button_link')['title']; ?>
    <?php if (get_field('button_icon_class') ): ?>
      <div class="btn__icon">
        <i class="<?= get_field('button_icon_class') ?> ms-3 fa-lg"></i>
      </div>
    <?php endif; ?>
  </span>
</a>