@extends('templates.login')
@section('title', 'Login')
@section('content')
    <body>
        <!-- ===== Start Login ===== -->
        <section id="Login" class="min-h-[100vh] flex justify-center items-center">
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
                    <form action="{{route('login')}}" method="POST" class="flex flex-col items-center gap-4">
                    @csrf
                    {{-- @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach --}}
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
                    </form>
                </div>
            </div>
        </section>
        <!-- ===== End Login ===== -->
    <script>
        const msgError = document.querySelector('.msg-error');
        const msgParent = document.querySelector('.msg-parent');
        msgError.addEventListener('click', function(){
            msgParent.classList.add('hidden');
        });
    </script> 
    </body>
@endsection
