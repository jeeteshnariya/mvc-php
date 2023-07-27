<!-- app/views/home.php -->

<!DOCTYPE html>
<html>

<head>
  <title>Home Page</title>
</head>

<body>
  <h1>Welcome to the homepage!</h1>
  <ul>
    <?php foreach ($users as $user) : ?>
      <li><?= $user['name']; ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>