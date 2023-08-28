<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
      <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
      HMS
    </a>
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
          Sign in to your account
        </h1>
        <form class="space-y-4 md:space-y-6" action="<?= set_url('auth/signin') ?>" method="post">
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
            <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900   rounded-lg  block w-full p-2.5 " placeholder="name@company.com" >
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900  rounded-lg   block w-full p-2.5" >
          </div>
        
          <button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700  font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
          <p class="text-sm font-light text-gray-500 dark:text-gray-400">
            Don’t have an account yet? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</section>