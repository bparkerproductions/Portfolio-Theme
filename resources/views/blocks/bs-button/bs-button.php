<a
  href="<?= get_field('button_link')['url'] ?>"
  class="btn <?= get_field('classes') ?>"
>
  <?= get_field('button_link')['title']; ?>
  
  <?php if (get_field('button_icon_class') ): ?>
    <i class="<?= get_field('button_icon_class') ?> ms-3 fa-lg"></i>
  <?php endif; ?>
</a>