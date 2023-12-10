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
        <h2 class="text-center pt-10 text-3xl font-bold tracking-tight text-gray-900">KEMEGAHAN <span class="text-indigo-800">TARI KECAK BALI</span></h2>
        <div class="max-w-screen-lg mx-auto mt-6 p-6 bg-white rounded-lg overflow-hidden lg:flex">
            <div class="lg:w-1/2 lg:pl-8 bg-gray-100 p-4 rounded-lg">
                <p class="font-bold text-green-500 mt-4">Availability: Tersedia</p>
                <div class="mb-4">
                    <p><strong>Lokasi:</strong> Uluwatu, Bali (Pura Uluwatu, Desa Pecatu, Kuta Sel.)</p>
                    <p><strong>Waktu:</strong> 18.30 WITA - 20.30 WITA</p>
                    <div class="mb-4">
                        <p class="mt-4 text-xl font-bold text-indigo-800">Harga Tiket :</p>
                        <p class="mt-2">Dewasa : <strong>Rp. 120.000</strong></p>
                        <p>Anak-anak (di bawah 12 tahun) :<strong> Rp. 60.000</strong></p>
                    </div>
                    <h3 class="text-xl font-bold text-indigo-800">Highlight:</h3>
                    <ul class="list-disc pl-4 text-gray-700">
                        <li class="mt-2">Tari Kecak Uluwatu adalah tari tradisional Bali yang diselipkan penampilan drama, tari ini seringkali dilakukan oleh laki-laki dan melibatkan pertunjukan api. Tari ini disebut untuk menangkal bala.</li>
                        <li class="mt-2">Tari Kecak khas Bali dengan pertunjukan api yang mendebarkan!</li>
                        <li class="mt-2">Pertunjukan langsung di teater terbuka</li>
                        <li class="mt-2">Lokasi yang indah: di pinggir pulau menghadap laut.</li>
                        <li class="mt-2">Cocok untuk: <strong>Penikmat Budaya, Keluarga Asyik,</strong> dan <strong>Geng Asyik.</strong></li>
                    </ul>
                    <div class="mb-4 p-4 rounded-lg border mt-4 border-indigo-800">
                        <h3 class="text-xl font-bold text-indigo-800">Diskon :</h3>
                        <p class="mt-2">Dapatkan diskon sebesar <strong>10%</strong> untuk pemesanan tiket sebelum tanggal 15 November 2023.</p>
                    </div>

                </div>
                <div class="flex items-center mt-4">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 20a2 2 0 01-2-2h2a2 2 0 002-2h6a2 2 0 002-2h2a2 2 0 01-2 2H7z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </div>
                <div class="mb-4 mt-6">
                    <label for="quantity" class="block text-gray-700 font-bold mb-2">Jumlah:</label>
                    <input type="number" id="quantity" name="quantity"
                        class="block w-full px-4 py-2 rounded-lg text-gray-700 border focus:border-indigo-500 focus:outline-none"
                        min="1" placeholder="Jumlah tiket" required>
                </div>
                <div class="pt-5 flex">
                    <button class="bg-indigo-800 hover-bg-indigo-700 px-6 h-10 rounded-lg text-white"
                        id="pesanSekarangButton">Pesan Sekarang</button>
                    <button class="border border-black mx-4 px-4 h-10 rounded-lg text-gray-700 hover:text-indigo-800 hover-bg-indigo-800"
                        id="tambahKeranjangButton">Tambah Keranjang</button>
                </div>
            </div>
            <div class="lg:w-1/2">
                <div class="text-center">
                    <img src="https://www.baliaround.com/wp-content/uploads/2014/05/kecakdance.jpg"
                        class="w-full h-auto object-cover rounded-lg" alt="">
                </div>
                <h3 class="text-xl font-bold text-indigo-800 mt-6">Deskripsi</h3>
                <p class="mt-2 text-gray-700">Tari Kecak Uluwatu merupakan pertunjukan tari tradisional khas Bali yang terkenal, melibatkan penari laki-laki dan pertunjukan api serta menceritakan ulang kisah Ramayana. Tari Kecak disebut juga untuk menangkal bala. Ada begitu banyak pesona di Bali yang tak boleh kamu lewatkan, dan Uluwatu Kecak & Fire Dance Show adalah salah satunya!

                Kamu bisa menyaksikan tari Kecak dari Bali yang legendaris dan menakjubkan, lengkap dengan pertunjukan api yang keren. Tentu saja untuk pertunjukan dan pencahayaan kontras yang maksimal, acara ini harus digelar setelah matahari terbenam. Kamu pun bisa datang sedikit lebih awal untuk menikmati pemandangan matahari terbenam dari pinggir pulau sebelum acara dimulai.</p>
            </div>
        </div>

        <section class="max-w-screen-lg mx-auto mt-6 p-6 bg-white rounded-lg">
            <h2 class="text-xl font-bold text-indigo-800">Ulasan :</h2>
            <div class="mt-4">
                <div id="daftarUlasan" class="mt-4">
                </div>
            </div>
        </section>

        <section class="max-w-screen-lg mx-auto mt-6 p-6 bg-white rounded-lg">
            <h2 class="text-xl font-bold text-indigo-800">Kirim Ulasan</h2>
            <form class="mt-4">
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-bold mb-2">Nama :</label>
                    <input type="text" id="nama" name="nama"
                        class="block w-full px-4 py-2 rounded-lg text-gray-700 border focus-border-indigo-500 focus:outline-none"
                        required>
                </div>
                <div class="mb-4">
                    <label for="komentar" class="block text-gray-700 font-bold mb-2">Ulasan Anda :</label>
                    <textarea id="komentar" name="komentar"
                        class="block w-full px-4 py-2 rounded-lg text-gray-700 border focus-border-indigo-500 focus:outline-none"
                        rows="4" required></textarea>
                </div>
                <button id="kirimKomentarButton"
                    class="bg-indigo-800 hover-bg-indigo-500 px-6 py-2 rounded-lg text-white">Kirim Ulasan</button>
            </form>
        </section>
    </body>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\JIK PRA\Downloads\breeze\breeze\resources\views/frontpage/notflix.blade.php ENDPATH**/ ?>