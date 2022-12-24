@extends('templates.main')
@section('title', 'Detail Aspirasi')
@section('content')
<div class="container">
    <div class="mt-28 text-center text-xl font-light text-gray-500">
        <h1 class="text-center text-4xl mt-5 text-gray-600 uppercase">Detail Aspirasi</h1>
    </div>
    <div class="container flex pt-10 gap-10">
        <div class="card-img w-[40%]">
            <img src="{{asset('foto/' . $aspirasi->foto)}}" alt="" class="h-[400px] w-full object-cover">
        </div>
        <div class="card-description w-[60%]">
            <h5 class="text-3xl mb-3">Nama : {{$aspirasi->nama}}</h5>
            <p class="text-xl mb-3 overflow-y-scroll h-[290px] scroll-bar">{{ $aspirasi->cerita }}</p>
            <div class="mt-5">
                <a class="bg-blue-700 hover:bg-blue-900 p-3 rounded-lg text-white" href="{{ url ('/aspirasi') }} ">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
