<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class=" bg-slate-100 font-semibold">

    <nav class="container mx-auto flex p-6 justify-between">

      <span>
        <a href="<?= set_url('users/index') ?>">Dashboard</a>
      </span>


      <span class="space-x-6">
        <a href="<?= set_url('users/index') ?>">Users</a>
        <a href="<?= set_url('products/index') ?>">Product</a>
    

      </span>


      <span>
        <a href="<?= set_url('auth/logout') ?>">Logout</a>
      </span>

    </nav>
  </div>

  <section class="container px-4 mx-auto mt-[100px]">
    {{child}}
  </section>
</body>

</html>