<x-layout>
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            {{-- <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=green&shade=500" --}}
            <img class="mx-auto h-40 w-auto " src="{{asset('images/SmartLife_Logo.png ')}}"
                alt="SmartLife" />
            <h2 class="mt-20 text-center text-2xl font-bold leading-9 tracking-tight text-white">
                Login account
            </h2>
        </div>

        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm ">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                {{-- Email --}}
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
                        <input type="text" name="email" value="{{old('email')}}" class="input w-full px-4 rounded-md border-0 bg-white/5 py-1.5 text-white  ring-1
                        @error('email') ring-red-500 
                        @enderror">

                        <p class="error text-red-500 text-xs">@error('email')
                            {{$message}}
                        @enderror</p>
                </div>

                {{-- Password --}}
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                        <input type="password" name="password" class="input w-full px-4 rounded-md border-0 bg-white/5 py-1.5 text-white  ring-1
                        @error('password') ring-red-500 @enderror">

                        @error('password')
                        <p class="error error text-red-500 text-xs">
                            {{$message}}
                        @enderror</p>
                </div>
                {{-- remember checkbox --}}
                <div class="mb-4">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                @error('failed')
                    <p class="error error text-red-500 text-xs">{{$message}}</p>
                @enderror
                {{-- submit btn --}}
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md
                         bg-indigo-500 px-3 py-1.5 text-sm font-semibold leading-6
                          text-white shadow-sm hover:bg-indigo-400 focus-visible:outline 
                          focus-visible:outline-2 focus-visible:outline-offset-2
                           focus-visible:outline-indigo-500">
                           Sign in
                    </button>
                </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-400">
                Don't have an account?
                
                <a href="{{ route('register') }}" class="font-semibold leading-6 text-indigo-400 hover:text-indigo-300">Sign up</a>
            </p>
        </div>
    </div>
   
</x-layout>
       