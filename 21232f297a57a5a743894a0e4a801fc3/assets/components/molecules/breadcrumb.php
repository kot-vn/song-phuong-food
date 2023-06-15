<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
    <?php $path = getPath(); ?>
    <?php foreach ($path as $index => $location) : ?>
      <?php if ($index < count($path) - 1) : ?>
        <li class="breadcrumb-item text-sm">
          <a class="opacity-5 text-dark" href="<?= getPageFloor(0) ?>">
            <?= $location ?>
          </a>
        </li>
      <?php else : ?>
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
          <?= $location ?>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ol>
  <h6 class="font-weight-bolder mb-0">
    <?= end($path) ?>
  </h6>
</nav>