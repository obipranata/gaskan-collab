@extends('templates.main')

@section('title', 'Detail Aspirasi')

@section('content')

<div class="container">
    
    <div class="mt-28 text-center font-poppins text-xl font-bold text-gray-500">
        <h1>Detail Aspirasi</h1>
    </div>
    <div class="flex container flex-wrap gap-14">
        <div class=" py-5 mx-auto">
            <div class="w-[750px] mt-5 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 hover:delay-150 hover:scale-110 transition-all duration-500">
                <a href="#">
                    <img class="rounded-t-lg w-96 h-64 object-covert mx-auto " src="{{asset('foto/' . $aspirasi->foto)}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            Nama : {{$aspirasi->nama}}
                        </h5>
                    </a>
                    <p class="mb-2 font-normal text-gray-700 dark:text-gray-400">
                        {{ $aspirasi->cerita }}
                    </p>
                    <div class="mt-5">
                        <a class="bg-blue-700 hover:bg-blue-900 p-3 rounded-lg text-white" href="{{ url ('/aspirasi') }} ">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection
