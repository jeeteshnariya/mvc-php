 <form method="post" action="<?= set_url('products/create') ?>" class="bg-white rounded   p-4 px-4 md:p-8 mb-6 mx-64" enctype="multipart/form-data">
   <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
     <div class="text-gray-600">
       <h1 class="text-3xl font-bold">
         <?php
          if (is_null($id)) {
            echo "Add Product";
          } else {
            echo "Edit Product /";;
          }

          ?>


         <?= $id ?></h1>
       <p class="font-medium text-lg">Personal Details</p>
       <p>Please fill out all the fields.</p>
     </div>

     <div class="lg:col-span-2">
       <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
         <div class="md:col-span-5">
           <label for="fullname">Name</label>
           <input type="text" name="name" id="fullname" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?= isset($name) ? $name : '' ?>" />
         </div>

         <div class="md:col-span-3">
           <label for="detail">Detail</label>
           <input type="text" name="detail" id="detail" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?= isset($detail) ? $detail : '' ?>" />
         </div>

         <div class="md:col-span-2">
           <label for="price">Price</label>
           <input type="text" name="price" id="contact" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="<?= isset($price) ? $price : '' ?>" />
         </div>


         <div class="md:col-span-5">
           <label for="image">Product Image</label>
           <input type="file" name="image" id="image" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
         </div>




         <div class="md:col-span-5 text-right">
           <div class="inline-flex items-end">

             <button class="bg-gray-100 hover:bg-gray-200 text-black font-bold py-2 px-4 rounded mr-2">
               <a href="<?= set_url('products/index') ?>">

                 Cancle

               </a>
             </button>
             <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit"> Submit</button>
           </div>
         </div>

       </div>
     </div>
   </div>
 </form>