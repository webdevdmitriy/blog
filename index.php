<!DOCTYPE html>
<html lang="ru">

<head>
  <?
  $website_title = "PHP блог";
  require_once './blocks/head.php'
  ?>
</head>

<body>
  <?php require 'blocks/header.php'; ?>

  <main class="container mt-5">
    <div class="row">
      <div class="col-md-8 mb-3">
        Основная часть сайта
      </div>

      <?php require 'blocks/aside.php'; ?>
    </div>
  </main>

  <?php require 'blocks/footer.php'; ?>
</body>

</html>