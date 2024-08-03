<x-layout>
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-40 w-auto" src="{{asset('images/SmartLife_Logo.png ')}}"
                alt="Your Company" />
                <h1 class="text-center">SmartLife</h1>
            <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-white">Register account
            </h2>
        </div>

        <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="{{ route('register') }}" method="POST">
                @csrf

                {{-- username --}}
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium leading-6 text-white">Username</label>
                        <input type="text" name="username" value="{{old('username')}}" class="input w-full rounded-md border-0 bg-white/5 py-1.5 text-white  ring-1
                        @error('username') ring-red-500 @enderror">
                        @error('username')
                            <p class="error text-red-500 text-xs">{{$message}}
                        @enderror</p>
                </div>

                {{-- Email --}}
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
                        <input type="text" name="email" value="{{old('email')}}" class="input w-full rounded-md border-0 bg-white/5 py-1.5 text-white  ring-1
                        @error('email') ring-red-500 @enderror">
                        @error('email')
                            <p class="error text-red-500 text-xs">{{$message}}
                        @enderror</p>
                </div>

                {{-- Password --}}
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                        <input type="password" name="password" class="input w-full rounded-md border-0 bg-white/5 py-1.5 text-white  ring-1
                        @error('password') ring-red-500
                        @enderror">
                        @error('password')
                            <p class="error error text-red-500 text-xs">{{$message}} 
                        @enderror</p>
                    
                </div>
                {{-- Confirm_Password --}}
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium leading-6 text-white">Confirm Password</label>
                        <input  type="password" name="password_confirmation" class="input w-full rounded-md border-0 bg-white/5 py-1.5 text-white  ring-1
                        @error('password') ring-red-500 @enderror">
                        @error('password')
                            <p class="error error text-red-500 text-xs">{{$message}} 
                        @enderror</p>

                </div>
                {{-- role --}}
                <div>
                    <label for="role" class="block text-sm font-medium leading-6 text-white">Role</label>
                    <select name="role" type="text" value="{{old('role')}}"
                        class="input w-full rounded-md border-0 bg-white/5 py-1.5 text-white  ring-1">
                        <option  class=" bg-gray-900">Customer</option>
                        <option  class=" bg-gray-900">Encoder</option>
                        <option class=" bg-gray-900">Admin</option>
                    </select>
                </div>
              
                {{-- role end --}}

                
                {{-- OR_No --}}
                <div class="mb-4">
                    <label for="or_no" class="block text-sm font-medium leading-6 text-white">OR NO:</label>
                        <input type="number" name="or_no" value="{{old('or_no')}}" class="input w-full rounded-md border-0 bg-white/5 py-1.5 text-white  ring-1
                        @error('or_no') ring-red-500 @enderror">
                        @error('or_no')
                            <p class="error text-red-500 text-xs">{{$message}}
                        @enderror</p>
                </div>
               
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md
                         bg-indigo-500 px-3 py-1.5 text-sm font-semibold leading-6
                          text-white shadow-sm hover:bg-indigo-400 focus-visible:outline 
                          focus-visible:outline-2 focus-visible:outline-offset-2
                           focus-visible:outline-indigo-500">
                           Sign up
                    </button>
                </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-400">
                Already have an account?
                
                <a href="{{ route('login') }}" class="font-semibold leading-6 text-indigo-400 hover:text-indigo-300">Sign In</a>
            </p>
        </div>
    </div>
   
</x-layout>
       