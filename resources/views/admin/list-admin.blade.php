@extends('templates.main')
@section('title', 'List Admin')

@section('content')
<div class="container py-20 ">
        <h2 class="text-center text-4xl mt-5 text-gray-600 uppercase">List Admin</h2>
        <div class="my-8 font-semibold text-white text-md bg-blue-400 w-[110px] h-[40px] rounded-lg flex justify-center items-center">
            <a href="{{route('add-admin')}}">Add Admin</a>
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
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$loop->iteration}}
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item ->nama}}
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$item->email}}
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium flex justify-center text-red-400 hover:underline whitespace-nowrap dark:text-white">
                            <a href="{{ route('destroy', ['id' => $item->id]) }}">Hapus</a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection