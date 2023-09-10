<div class="block__list mt-3 mb-4">
  <?php if (get_field('bs_list_title')): ?>
    <div class="bg-<?= get_field('bs_list_color') ?> px-3 py-2">
      <h6 class="mb-0 <?= get_field('bs_list_title_classes') ?>">
        <?= get_field('bs_list_title'); ?>
      </h6>
    </div>
  <?php endif ?>

  <ul class="list-group">
    <?php foreach(get_field('bs_list') as $list): ?>
      <li class="list-group-item rounded-0 list-group-item-light">
        <?php if ($list['type'] == 'Link'): ?>
          <a
            href="<?= $list['link']['url'] ?>"
            target="<?= $list['link']['target'] ?>"
            title="<?= $list['link']['title'] ?>"
          >
            <?= $list['link']['title'] ?>
          </a>
        <?php else: echo $list['item']; endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>