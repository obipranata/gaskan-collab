@extends('templates.main')
@section('title', 'Aspirasi')

@section('content')
<div class="container py-20 ">
        <h2 class="text-center text-[45px] text-gray-600">Aspirasi</h2>
        <div class="my-10 font-neuton font-semibold text-white text-2xl">
            <a href="{{ url('/aspirasi/create')}}" class=" p-2 rounded-lg bg-blue-600" role="button">Create Aspirasi</a>
        </div>
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            No
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nama
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Foto
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Cerita
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aspirasi as $item)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                            {{$loop->iteration}}
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{(strlen($item->nama) > 5) ? substr ($item ->nama, 0, 15). "..." : $item ->nama}}
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{(strlen($item->email) > 5) ? substr ($item ->email, 0, 15). "..." : $item ->email}}
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white rounded-3xl text-center">
                            <img src="{{asset('foto/'.$item->foto)}}" alt="" width="250">
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{(strlen($item->cerita) > 5) ? substr ($item ->cerita, 0, 15). "..." : $item ->cerita}}
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection