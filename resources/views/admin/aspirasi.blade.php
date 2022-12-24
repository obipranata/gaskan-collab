@extends('templates.main')
@section('title', 'Beranda || Aspirasi')

@section('content')
<div class="flex container flex-wrap gap-14 mt-20 mb-20">
    @foreach ($aspirasi as $item)
    <div class=" pt-2">
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
