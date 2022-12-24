@extends('templates.main')
@section('title', 'Detail Aspirasi')

@section('content')
<div class="mt-20 text-center font-poppins text-xl font-bold text-gray-500">
    <h1>Create Aspirasi</h1>
</div>
<div class="bg-gray-200 mt-10 p-5">

    <form method="POST" action="{{url('/store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 ">
            Nama : {{$aspirasi->nama}}
        </div>
        <div class="mb-6 ">
          <img class="rounded-t-lg w-96 h-64 object-cover " src="{{asset('foto/' . $aspirasi->foto)}}" alt="" />
        </div>
        

        <div class="mb-6">
            {{$aspirasi->cerita}}
        </div>
    </form>

</div>
@endsection
