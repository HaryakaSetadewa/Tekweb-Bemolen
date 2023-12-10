<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <body class="bg-gray-100 p-6">
     <h2 class="text-center pt-10 text-3xl font-bold tracking-tight text-gray-900">Detail Pertunjukkan <span class="text-purple-700">Kecak</span></h2>
     <div class="max-w-md mx-auto mt-6 bg-white rounded-lg overflow-hidden">
         <div class="text-center">
             <img src="images/uluwatu.jpg"
                 class="w-full h-auto object-cover rounded-lg" alt="">
         </div>
         <p class="font-bold">Availability : <span class="text-green-500">Tersedia</span></p>
         <div class="">
             <p class=""><strong>Lokasi:</strong> Kota Badung, Bali (Pura Uluwatu,Badung)</p>
             <p class=""><strong>Waktu:</strong> 17.00 WITA - 20.00 WITA (Saat matahari terbenam)</p>
 
             <h3 class="py-2 text-xl font-bold">Rp. 150.000</h3>
             <p class="mb-2 mt-2">
                 Pertunjukan Kecak di Pura Uluwatu adalah tarian tradisional Bali yang menakjubkan, seringkali dilakukan saat matahari terbenam di latar belakang laut. Para penari tampil dengan gerakan tangan dan melantunkan suara cak-cak yang khas, menghadirkan adegan epik dari kisah Ramayana, termasuk pertempuran antara kebaikan dan kejahatan. Pertunjukan ini menggabungkan seni dan pesan spiritual, menciptakan pengalaman budaya yang unik.
             </p>
             <h3 class=" font-bold">Highlight:</h3>
             <ul>
                 <li class="">Adegan pertempuran Rama dan Ravana</li>
                 <li class="">Pemandangan matahari terbenam</li>
             </ul>
             <div class="mb-4">
                 <label for="quantity" class="block text-gray-700 font-bold mb-2">Jumlah:</label>
                 <input type="number" id="quantity" name="quantity" class="block  px-4 py-2 rounded-lg text-gray-700 border focus:border-indigo-500 focus:outline-none" min="1" placeholder="jumlah tiket" required>
             </div>
             <div class="pt-5 flex">
                 <button class="bg-purple-700 hover:bg-purple-500 px-6 h-10 rounded-lg text-white">Pesan Sekarang</button>
                 <button class=" border border-black mx-4 px-4 h-10 rounded-lg ">Tambah Keranjang</button>
             </div>
             
         </div>
     </div>
 </body>
  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH D:\CRUD LARAVEL\breeze\breeze\resources\views/frontpage/notflix2.blade.php ENDPATH**/ ?>