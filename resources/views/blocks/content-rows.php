<section class="content-rows hard-center">
  <?php foreach(get_field('content_rows') as $row) { ?>
    <div class="content-row column-center">
      <div class="inner-container">
        <div class="header-container">
          <h2 class="row-title"><?= $row['title'] ?></h2>
        </div>
        <div class="row-content-container">
          <?= $row['blurb'] ?>

          <?php if($row['button']) { ?>
            <div class="button-container">
              <a href="<?= $row['button']['url'] ?>"
                target="<?= $row['button']['target'] ?>">
                <button class="button border white">
                  <?= $row['button']['title'] ?>
                </button>
              </a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  <?php } ?>
</section>