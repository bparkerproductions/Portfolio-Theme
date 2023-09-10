<div class="mt-3 mb-4">
  <?php if (get_field('bs_list_title')): ?>
    <div class="bg-primary px-3 py-2">
      <h6 class="fw-light text-white mb-0"><?= get_field('bs_list_title'); ?></h6>
    </div>
  <?php endif ?>

  <ul class="list-group">
    <?php foreach(get_field('bs_list') as $list): ?>
      <li class="list-group-item rounded-0 list-group-item-primary d-flex align-items-start">
        <?= $list['item'] ?>
      </li>
    <?php endforeach; ?>
  </ul>
</div>