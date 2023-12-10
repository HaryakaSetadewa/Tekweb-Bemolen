<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section class="pb-20 pt-5">
    <div class="grid grid-cols-7 gap-6 xl:grid-cols-2 pb-5">
      <div class="p-2  mt-6 xl:mt-1 rounded-lg">

        <div class="card-body flex items-center"> 
          <div class="border border-primary rounded-full p-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-check-fill text-primary" viewBox="0 0 16 16">
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
              </svg>
          </div>
          <a href="<?php echo e(route('adminpackage.create')); ?>" class="font-semibold text-sm ml-2 text-primary hover:text-blue-600 transition-colors">Tambahkan</a>
      </div>      
      
      
      </div>
    </div>
    
    <div class="flex items-center mb-4 mx-4 pt-4">
      <div class="flex space-x-2 mb-5">
          <input type="text" id="search" class="mt-1 p-2 w-full border rounded-md" placeholder="Search...">
          <button type="button" class="bg-gray-400 text-gray-700 px-2 py-1 rounded-md">Search</button>
      </div>

  </div>
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="w-full text-sm text-left rtl:text-right text-gray-700 dark:text-gray-700">
              <thead class="text-xs text-gray-700 uppercase bg-gray-600 dark:bg-gray-700 dark:text-gray-200">
              
                  <tr>
                    <th scope="col" class="px-6 py-3 text-white">
                          Barang
                    </th>
                      <th scope="col" class="px-6 py-3 text-white">
                          Kode Barang
                      </th>
                      <th scope="col" class="px-6 py-3 text-white">
                          Nama
                      </th>
                      <th scope="col" class="px-6 py-3 text-white">
                          Deskripsi
                      </th>
                      <th scope="col" class="px-6 py-3 text-white">
                          Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                  <tr class="bg-gray-400 border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        <img src="<?php echo e($item->feature_img); ?>"
                        width="40px" height="40px" class="rounded-lg inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9" alt="user1" />
                        
                     </td>
                      <td class="px-6 py-4">
                         <?php echo e($item->package_code); ?>

                      </td>
                      <td class="px-6 py-4">
                         <?php echo e($item->package_name); ?>

                      </td>
                      <td class="px-6 py-4">
                          <?php echo e($item->package_desc); ?>

                      </td>
                      <td class="px-6 py-4">
                          <a href="<?php echo e(route('adminpackage.edit', $item->package_id)); ?>"  class="font-medium text-yellow-500 dark:text-blue-500 hover:underline mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                          </a>
                          <form action="<?php echo e(route('adminpackage.destroy', $item->package_id)); ?>" class="font-medium text-red-600 dark:text-blue-500 hover:underline mr-2
                            " method="POST">
                              <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                              <button type="submit" onclick="return confirm('Anda Yakin')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                                </svg>
                              </button>
                          </form>
                      </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
          <div class="m-4">
            <?php echo e($packages->appends(request()->query())->links()); ?>

          </div>
      </div>
    </section>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH D:\CRUD LARAVEL\breeze\breeze\resources\views/backpage/adminpackage.blade.php ENDPATH**/ ?>