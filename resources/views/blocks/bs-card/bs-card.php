<div class="card card-body white-gradient d-flex justify-content-between">
  <div>
    <?php if (get_field('card_icon') ): ?>
      <i class="<?= get_field('card_icon') ?> text-secondary fa-2x"></i>
    <?php endif; ?>

    <?php if (get_field('card_title') ): ?>
      <h3 class="fs-4 text-dark mt-3"><?= get_field('card_title') ?></h3>
    <?php endif; ?>

    <?php if (get_field('card_content') ): ?>
      <p class="fw-light"><?= get_field('card_content') ?></p>
    <?php endif; ?>
  </div>

  <?php if ( get_field('card_link') ): ?>
    <a
      class="btn btn-secondary px-4 py-2 btn-sm rounded-3 text-white mt-3"
      href="<?= get_field('card_link')['url'] ?>"
      target="<?= get_field('card_link')['target'] ?>"
    >
      <?= get_field('card_link')['title'] ?>
    </a>
  <?php endif; ?>
</div>