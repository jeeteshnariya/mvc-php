<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <!-- component -->

  <?php 
  dd($users);
  ?>
  <section class="container px-4 mx-auto mt-[100px]">
    <div class="sm:flex sm:items-center sm:justify-between">
      <div>
        <div class="flex items-center gap-x-3">
          <h2 class="text-xl font-medium text-gray-800 dark:text-white">Users</h2>

          <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">
            <?= count($users) ?> Users</span>
        </div>

        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">These companies have purchased in the last 12 months.</p>
      </div>

      <div class="flex items-center mt-4 gap-x-3">
        <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_3098_154395)">
              <path d="M13.3333 13.3332L9.99997 9.9999M9.99997 9.9999L6.66663 13.3332M9.99997 9.9999V17.4999M16.9916 15.3249C17.8044 14.8818 18.4465 14.1806 18.8165 13.3321C19.1866 12.4835 19.2635 11.5359 19.0351 10.6388C18.8068 9.7417 18.2862 8.94616 17.5555 8.37778C16.8248 7.80939 15.9257 7.50052 15 7.4999H13.95C13.6977 6.52427 13.2276 5.61852 12.5749 4.85073C11.9222 4.08295 11.104 3.47311 10.1817 3.06708C9.25943 2.66104 8.25709 2.46937 7.25006 2.50647C6.24304 2.54358 5.25752 2.80849 4.36761 3.28129C3.47771 3.7541 2.70656 4.42249 2.11215 5.23622C1.51774 6.04996 1.11554 6.98785 0.935783 7.9794C0.756025 8.97095 0.803388 9.99035 1.07431 10.961C1.34523 11.9316 1.83267 12.8281 2.49997 13.5832" stroke="currentColor" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round" />
            </g>
            <defs>
              <clipPath id="clip0_3098_154395">
                <rect width="20" height="20" fill="white" />
              </clipPath>
            </defs>
          </svg>

          <span>Import</span>
        </button>

        <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <a href="?url=users/show">

            <span>Add Users</span>
          </a>
        </button>
      </div>
    </div>

    <div class="mt-6 md:flex md:items-center md:justify-between">
      <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
        <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
          View all
        </button>

        <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
          Monitored
        </button>

        <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
          Unmonitored
        </button>
      </div>

      <div class="relative flex items-center mt-4 md:mt-0">
        <span class="absolute">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
          </svg>
        </span>

        <input type="text" placeholder="Search" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
      </div>
    </div>

    <div class="flex flex-col mt-6">
      <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
              <thead class="bg-gray-50 dark:bg-gray-800">
                <tr>
                  <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    Id
                  </th>
                  <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    Name
                  </th>
                  <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">

                    email



                  </th>

                  <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    Status
                  </th>

                  <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    Address
                  </th>

                  <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Phone</th>

                  <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">License use</th>

                  <th scope="col" class="relative py-3.5 px-4">
                    <span class="sr-only">Edit</span>
                  </th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                <?php foreach ($users as $user) : ?>

                  <tr>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap"><?= $user['id'] ?></td>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap"><?= $user['fullname'] ?></td>
                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap"><?= $user['email'] ?></td>

                    <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                      <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                        <?= $user['status'] ?>
                      </div>
                    </td>
                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                      <div>

                        <p class="text-gray-500 dark:text-gray-400">
                          <?= $user['address'] ?>


                        </p>
                      </div>
                    </td>
                    <td>
                      <?= $user['contact'] ?>
                    </td>

                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                      <div class="w-48 h-1.5 bg-blue-200 overflow-hidden rounded-full">
                        <div class="bg-blue-500 w-2/3 h-1.5"></div>
                      </div>
                    </td>

                    <td class="px-4 py-4 text-sm whitespace-nowrap">

                      <a href="<?= set_url(sprintf('users/edit/%s',$user['id'])) ?>" class="text-blue-500 font-bold ">
                        Edit
                      </a>

                      <a href="<?= set_url('users/delete/' . $user['id']) ?>" class="text-red-500   font-bold  ml-1">
                        Delete
                      </a>

                    </td>
                  </tr>

                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-6 sm:flex sm:items-center sm:justify-between ">
      <div class="text-sm text-gray-500 dark:text-gray-400">
        Page <span class="font-medium text-gray-700 dark:text-gray-100">1 of 10</span>
      </div>

      <div class="flex items-center mt-4 gap-x-4 sm:mt-0">
        <a href="#" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
          </svg>

          <span>
            previous
          </span>
        </a>

        <a href="#" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
          <span>
            Next
          </span>

          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
          </svg>
        </a>
      </div>
    </div>
  </section>
  <pre>


</body>

</html>