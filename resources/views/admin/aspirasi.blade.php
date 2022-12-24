@extends('templates.main')
@section('title', 'Beranda || Aspirasi')

@section('content')
<section class="pt-28">
    <div class="container">
        {{-- <h1 class="font-light text-3xl uppercase mb-10">Welcome to Dashboard, Admin</h1>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Foto
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nama
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Tanggal
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aspirasi as $as)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td>
                            <img src="" alt="">
                        </td>
                        {{-- <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th> --}}
                        {{-- <td class="py-4 px-6">
                            {{ $as->nama }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $as->email }}
                        </td>
                        <td class="py-4 px-6">
                            $2999
                        </td>
                        <td class="flex gap-4 py-4 px-6">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}

<div class="flex container flex-wrap gap-14">
    @foreach ($aspirasi as $item)
    <div class=" py-20">
        <div class="max-w-sm mt-10 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 hover:delay-150 hover:scale-110 transition-all duration-500">
            <a href="{{ route('detail-aspirasi', $item->email ) }}">
                <img class="rounded-t-lg w-96 h-64 object-cover " src="{{asset('foto/' . $item->foto)}}" alt="" />
            </a>
            <div class="p-5">
                <a href="{{ route('detail-aspirasi', $item->email ) }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{(strlen($item->nama) > 2) ? substr ($item -> nama, 0, 2). "..." : $item -> product_name}}
                    </h5>
                </a>
                <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
                    {{ $item -> created_at }}
                </p>
                <h6 class="mb-2 font-semibold text-gray-700 dark:text-gray-400">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{(strlen($item->cerita) > 5) ? substr ($item -> cerita, 0, 5). "..." : $item -> product_name}}
                    </h5>
                </h6>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
