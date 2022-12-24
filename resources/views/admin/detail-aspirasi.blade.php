@extends('templates.main')

@section('title', 'Detail Aspirasi')
@section('content')
<section class="pt-28">
    <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 mr-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
    </a>
    <div class="container">
        <h1 class="text-center uppercase text-4xl font-light mb-10">Detail Aspirasi</h1>
        <div class="flex flex-col mx-auto items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://picsum.photos/200/300" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hanif Akmaludin</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <p class="mb-3 font-light text-gray-700 dark:text-gray-400">Tanggal dibuat : 12 Desember 2022</p>
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
            </div>
        </div>
    </div>
</section>
@endsection