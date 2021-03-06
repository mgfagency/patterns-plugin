<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $pattern->name() ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Pattern description">
  <?= Bnomei\Fingerprint::css($css) ?>
  <?php if($background): ?>
  <style>
    html, body {
      background: <?= $background ?> !important;
    }
  </style>
  <?php endif ?>
  
  <?php if($script): ?>
  <script>
    <?= $script ?>
  </script>
  <?php endif ?>

  <?php if($head): ?>
  <?= $head ?>
  <?php endif ?>
</head>
<body <?= Html::attr($bodyattributes) ?>>
  <?= $html ?>
  <?php if (is_array($js)): ?>
    <?php foreach ($js as $item): ?>
      <?= Bnomei\Fingerprint::js($item) ?>
    <?php endforeach ?>
  <?php else: ?>
    <?= Bnomei\Fingerprint::js($js) ?>
  <?php endif ?>
</body>
</html>