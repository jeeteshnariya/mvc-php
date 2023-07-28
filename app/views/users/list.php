<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1><?= $msg; ?></h1>
  <table>
    <tr>
      <th>Name</th>
    </tr>
    <?php foreach ($users as $user) : ?>
      <tr>
        <td><?= $user['name']; ?></td>
      </tr>
    <?php endforeach; ?>

  </table>
  <h1><?= $id; ?></h1>

</body>

</html>