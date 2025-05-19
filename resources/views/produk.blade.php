@extends('layouts.master')

@section('content')
    <section class="bg-white dark:bg-gray-900 pt-20">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Daftar Produk
                </h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">
                    Temukan berbagai pilihan produk perikanan yang sesuai dengan kebutuhan Anda dan nikmati manfaat dari
                    hasil laut Indonesia yang melimpah.
                </p>
            </div>
            <div class="grid gap-8 lg:grid-cols-1">
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">
                            Muara Pakan Ikan
                        </a>
                    </h2>
                    <div class="pt-5">
                        <p class="mb-3 font-light text-justify text-gray-500 dark:text-gray-400">
                            Bahan baku pakan ikan terdiri dari Bekatul, Fish Meal Impor, Blood meal, PMM, SBM, Wheat
                            Industri, MBM, Wheat Bran, Flour Grade A, Cassava Chip, dll. sebagai sumber protein untuk
                            kualitas Ikan yang telah melalui uji Lab sehingga akan menghasilkan produk pakan dengan
                            kualitas yang tinggi meningkatkan pertumbuhan ikan tahan terhadap penyakit dan perubahan
                            cuaca yang akan menurunkan kualitas, kwantitas hasil tambak.
                        </p>
                    </div>
                    <img src="{{ asset('assets/img/produk-1.jpeg') }}" class="pt-5 mx-auto" alt="">
                </div>
                <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">
                            Muara Pakan Udang
                        </a>
                    </h2>
                    <div class="pt-5">
                        <p class="mb-3 font-light text-justify text-gray-500 dark:text-gray-400">
                            Bahan baku pakan ikan terdiri dari Bekatul, Fish Meal Impor, Blood meal, PMM, SBM, Wheat
                            Industri, MBM, Wheat Bran, Flour Grade A, Cassava Chip, dll. sebagai sumber protein untuk
                            kualitas Ikan yang telah melalui uji Lab sehingga akan menghasilkan produk pakan dengan kualitas
                            yang tinggi meningkatkan pertumbuhan ikan tahan terhadap penyakit dan perubahan cuaca yang akan
                            menurunkan kualitas, kwantitas hasil tambak.
                        </p>
                    </div>
                    <img src="{{ asset('assets/img/produk-2.jpeg') }}" class="pt-5 mx-auto" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
