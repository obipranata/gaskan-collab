@extends('templates.login')
@section('title', 'Login')
@section('content')
<!-- ===== Start Login ===== -->
<section id="Login" class="bg-gray-100 min-h-[100vh] flex justify-center items-center">
    <div class="container">
        <div class="bg-white shadow-xl mx-auto rounded-[38px] w-[40%] py-10 px-10">
            <div class="font-poopins font-bold text-gray-900 text-center text-[24px] md:text-[50px]">
                LOGIN
            </div>

            @if ($errors->any())
            <div class="msg-parent flex justify-between items-center bg-red-400 py-3 px-4 mt-5 rounded-lg mb-4 text-white">
                <h1 class="text-danger"> {{$errors->first()}}</h1>
                <p class="font-bold msg-error cursor-pointer">X</p>
            </div>
            @endif
            <form action="{{route('login')}}" method="POST" class="flex flex-col gap-4">
            @csrf
                <div class="flex flex-col gap-4">
                    <div class="w-full flex flex-col gap-1">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email" name="email"
                            class="border border-[#EEE6C3] text-[12px] rounded-lg shadow-inner w-full"
                            placeholder="Please insert your email" required />
                    </div>
                    <div class="w-full flex flex-col gap-1">
                        <label for="password" class="block mb-2  text-sm font-medium text-gray-900">Password</label>
                        <input type="password" id="password" name="password"
                            class="border border-[#EEE6C3] w-full text-[12px] rounded-lg shadow-inner "
                            placeholder="Please insert your password" required />
                    </div>
                </div>
                <div class="flex gap-4">
                    <button type="submit"
                        class="text-gray-500 bg-[#EEE6C3] hover:bg-[#FFE15D] px-8 py-2 font-poopins font-bold rounded-lg">
                        Login
                    </button>
                    <a href="{{ url ('/') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Back
                        </span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ===== End Login ===== -->
@endsection
