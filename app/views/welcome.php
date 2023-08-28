<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $data['title'] ?></title>
</head>

<body>
  <h1><?php echo $data['title'] ?></h1>
 

  <section class="container grid grid-cols-4 gap-4 mt-12">
    <?php foreach ($data['rows'] as $product) : ?>

      <div class="product bg-gray-100">
        <img src="<?= $product['image'] ?>" alt="" class="w-full">
        <p class="text-xl"><?= $product['name'] ?></p>
        <p class="text-base"><?= $product['detail'] ?></p>
      </div>
    <?php endforeach; ?>

  </section>
</body>

</html>