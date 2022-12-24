@extends('templates.login')
@section('title', 'Login')
    @section('content')
        <body class="bg-[#EEE6C3]">
            <!-- ===== Start Login ===== -->
            <section id="Login">
                <div class="container py-8 md:py-10">
                    <div class="bg-[#FCAAAA] mx-auto rounded-[38px] w-[335px] md:w-[470px] md:pb-12">
                        <div class="font-poopins font-bold text-white text-center pt-10 pb-10 text-[24px] md:pt-24 md:pb-10 md:text-[50px]">
                            LOGIN
                        </div>

                        <form action="{{ route('') }}" method="POST">
                        @csrf
                        {{-- @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach --}}
                            <div class="mb-6">
                                <label for="email" class="block mb-2 ml-5 md:ml-10 text-sm font-medium text-white">Email</label>
                                <input type="email" id="email" name="email"
                                    class="border border-[#EEE6C3] w-[295px] text-[12px] rounded-lg shadow-inner ml-5 md:ml-10  md:w-[392px]"
                                    placeholder="Please insert your email" required />
                            </div>
                            <div class="mb-6">
                                <label for="password" class="block mb-2 ml-5 md:ml-10 text-sm font-medium text-white">Password</label>
                                <input type="password" id="password" name="password"
                                    class="border border-[#EEE6C3] w-[295px] text-[12px] rounded-lg shadow-inner ml-5 md:ml-10  md:w-[392px]"
                                    placeholder="Please insert your password" required />
                            </div>
                            <div class="mb-2 mr-5 text-sm font-medium text-right text-blue-600 hover:text-blue-800">
                                <a href="">
                                    <p>Lupa Password?</p>
                                </a>
                            </div>
                            {{-- <div class="flex items-start mb-6">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value=""
                                        class="w-4 h-4 ml-6 md:ml-10 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                        required />
                                </div>
                                <label for="remember" class="ml-2 text-sm font-medium text-white dark:text-gray-300">Remember
                                    me</label>
                            </div> --}}
                            <div class="text-center">
                                <button type="submit"
                                    class="text-gray-500 bg-[#EEE6C3] hover:bg-[#FFE15D] px-8 py-2 font-poopins font-bold rounded-lg">
                                    Login
                                </button>
                            </div>
                            <div class="mt-8 pb-16 px-10 text-sm font-medium  text-center text-blue-600 hover:text-blue-800">
                                <a href="{{  ('')}}">
                                    <p>Belum punya akun? Daftar</p>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- ===== End Login ===== -->
        </body>
@endsection
