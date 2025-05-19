@extends('layouts.master')

@section('content')
    <section class="bg-white dark:bg-gray-900 pt-20">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Publikasi & Informasi
                </h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    Temukan berita terbaru, acara mendatang, dan berbagai publikasi resmi yang relevan dengan industri
                    perikanan di Indonesia.
                </p>
            </div>
            <div class="grid gap-8 lg:grid-cols-1">
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            Berita
                        </span>
                        <span class="text-sm">7 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">
                            Pengumuman Penjualan Aset dengan Cara Penawara Umum (Lelang)
                        </a>
                    </h2>
                    <div class="grid grid-cols-2">
                        <img src="{{ asset('assets/img/artikel-2.jpg') }}" class="pt-5 pr-5" alt="">
                        <div class="pt-5 pl-5">
                            <p class="mb-3 font-light text-gray-500 dark:text-gray-400">
                                PT Perikanan Indonesia mengundang Perorangan/Badan Usaha yang berminat untuk mengikuti
                                pelaksanaan penjualan aset berupa kendaraan/alat angkut melalui Penawaran Umum (Lelang)
                                dengan penyampaian harga secara tertulis tanpa kehadiran peserta lelang, pada:

                            </p>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                Hari/Tanggal : Senin, 29 April 2024
                                <br>Batas Akhir Penawaran : Senin, 06 Mei 2024 pukul 11.30 WITA
                                <br>Penetapan Pemenang : Senin, 06 Mei 2024 pukul 14.00 WITA
                            </p>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                Adapun objek yang akan dijual melalui Penawaran Umum (Lelang) adalah 1 (satu) unit Daihatsu
                                Zebra (593 RV – Pickup), 1 (satu unit) Isuzu Elf (NHR 55 – Minibus) dan 2 (dua) unit Honda
                                Supra X (NF 100D - Sepeda Motor). Info lebih lanjut mengenai syarat dan ketentuan penjualan
                                serta kondisi objek lelang dapat mengakses
                            </p>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                <a href="https://drive.google.com/drive/folders/1a-WswQ2Q6CHAIOULJL7jz18F7UmtYVbW?usp=drive_link"
                                    class="hover:underline">
                                    https://drive.google.com/drive/folders/1a-WswQ2Q6CHAIOULJL7jz18F7UmtYVbW?usp=drive_link
                                </a>
                            </p>
                            <div class="flex justify-between items-center">
                                <a href="#"
                                    class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    Read more
                                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg>
                            Berita
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">
                            PT Perikanan Indonesia Perkuat Jalinan Silaturahmi dengan Menggelar Halal Bihalal Idul Fitri
                            1445 H
                        </a>
                    </h2>
                    <div class="grid grid-cols-2">
                        <img src="{{ asset('assets/img/artikel-1.jpeg') }}" class="pt-5 pr-5" alt="">
                        <div class="pt-5 pl-5">
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                PT Perikanan Indonesia perkuat jalinan silaturahmi dengan menggelar Halal Bihalal Idul Fitri
                                1445 H.
                                Acara digelar di Kantor Pusat PT Perikanan Indonesia dan dihadiri langsung oleh Jajaran
                                Direksi,
                                Komisaris dan karyawan.
                            </p>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                Halal Bihalal diisi dengan penyampaian tausiyah dan saritilawah serta penyampaian ucapan
                                selamat
                                idul fitri dari Komisari, Direksi, Kepala Cabang, VP dan karyawan PT Perikanan Indonesia
                                baik
                                secara
                                langsung maupun melalui daring.
                            </p>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                Taqabbalallhu minna wa minkum, semoga Allah menerima amal ibadah kita selama satu bulan
                                puasa
                                dan
                                dapat meraih kemenangan hakiki dengan selalu memperbaiki diri menjadi pribadi yang
                                berakhlak.

                            </p>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                Selamat Hari Raya Idul Fitri 1445 H, mari saling memaafkan.
                            </p>
                            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                PT Perikanan Indonesia
                                Quality Fishery for Everyone. Member of ID FOOD
                            </p>
                            <div class="flex justify-between items-center">
                                <a href="#"
                                    class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    Read more
                                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
