<x-admin_dashboard>
   
    <header class="bg-white shadow">
       
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Register User</h1>
            <p class="mt-2 text-sm text-gray-700">Admin can add users from this page</p>
        </div>
        
    </header>
    @if (session()->has('success'))
    <div id="success-alert" class="alert alert-success ml-3 ext-sm font-medium text-green-800">
        {{ session('success') }}
    </div>
    @endif
        <div class="border-b border-gray-900/10 pb-12 t-2 xl:mx-auto max-w-xl xl:max-w-xl ">
            <form class="space-py-12" action="{{ route('admin_add_user') }}" method="POST">
                @csrf
                {{-- or_no --}}
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                        <label for="or_no" class="block text-sm font-medium leading-6 text-gray-900">OR NO</label>
                            <input type="number" name="or_no"  
                            class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                            @error('or_no') ring-red-500 @enderror">
                            @error('or_no')
                                <p class="error text-red-500 text-xs">{{$message}}
                            @enderror</p>
                        </div>  
                    </div>

                    {{-- Email --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                            <input type="text" name="email" value="{{old('email')}}" 
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                            @error('email') ring-red-500 @enderror">
                            @error('email')
                                <p class="error text-red-500 text-xs">{{$message}}
                            @enderror</p>
                        </div>
                    </div>
                </div>
                {{-- field fullname --}}
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        {{-- lastname --}}
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Lastname</label>
                        <div class="mt-2">
                            <input type="text" name="lastname" value="{{old('lastname')}}"  
                            class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                            @error('lastname') ring-red-500 @enderror">
                            @error('lastname')
                                <p class="error text-red-500 text-xs">{{$message}}
                            @enderror</p>
                        </div>
                    </div>
                    {{-- firstname --}}
                    <div class="sm:col-span-2">
                        <label for="region" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                        <div class="mt-2">
                            <input type="text" name="firstname" value="{{old('firstname')}}"  
                            class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                            @error('firstname') ring-red-500 @enderror">
                            @error('firstname')
                                <p class="error text-red-500 text-xs">{{$message}}
                            @enderror</p>
                        </div>
                    </div>
                        {{-- middle name --}}
                        <div class="sm:col-span-2">
                            <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Middle Name</label>
                            <div class="mt-2">
                                <input type="text" name="middlename" value="{{old('middlename')}}"  
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                @error('middlename') ring-red-500 @enderror">
                                @error('middlename')
                                    <p class="error text-red-500 text-xs">{{$message}}
                                @enderror</p>
                            </div>
                        </div>
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <div class="mb-4">
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                    <input type="password" name="password" class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                    @error('password') ring-red-500
                                    @enderror">
                                    @error('password')
                                        <p class="error error text-red-500 text-xs">{{$message}} 
                                    @enderror</p>
                            </div>
                        </div>
                        {{-- Confirm_Password --}}
                        <div class="sm:col-span-3">
                            <div class="mb-4">
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                                    <input  type="password" name="password_confirmation" 
                                    class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                    @error('password') ring-red-500 @enderror">
                                    @error('password')
                                        <p class="error error text-red-500 text-xs">{{$message}} 
                                    @enderror</p>
                            </div>            
                        </div>
                    </div>
                    {{-- role --}}
                    <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <div class="mb-4">
                                <label for="role" 
                                class="block text-sm font-medium leading-6 text-gray-900">Role</label>
                                <select name="role" type="text" value="{{old('role')}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option  class="px-4  bg-gray-100">Customer</option>
                                    <option  class="px-4  bg-gray-100">Encoder</option>
                                    <option class="px-4  bg-gray-100">Admin</option>
                                </select>
                            </div>
                        </div>
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="bday" class="block text-sm font-medium leading-6 text-gray-900">Date of Birth</label>
                                <input type="date" name="bday" value="{{old('bday')}}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                @error('bday') ring-red-500 @enderror">
                                @error('bday')
                                    <p class="error text-red-500 text-xs">{{$message}}
                                @enderror</p>
                        </div>  
                    </div>    
                </div>        
                {{-- role and bday--}}
                {{-- New form fields --}}
                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Age --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                            <input type="number" name="age" value="{{ old('age') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('age') ring-red-500 @enderror">
                            @error('age')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Place of Birth --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="place_of_birth" class="block text-sm font-medium leading-6 text-gray-900">Place of Birth</label>
                            <input type="text" name="place_of_birth" value="{{ old('place_of_birth') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('place_of_birth') ring-red-500 @enderror">
                            @error('place_of_birth')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Gender --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                            <input type="text" name="gender" value="{{ old('gender') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('gender') ring-red-500 @enderror">
                            @error('gender')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Civil Status --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="civil_status" class="block text-sm font-medium leading-6 text-gray-900">Civil Status</label>
                            <input type="text" name="civil_status" value="{{ old('civil_status') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('civil_status') ring-red-500 @enderror">
                            @error('civil_status')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Employment Type --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="employment_type" class="block text-sm font-medium leading-6 text-gray-900">Employment Type</label>
                            <input type="text" name="employment_type" value="{{ old('employment_type') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('employment_type') ring-red-500 @enderror">
                            @error('employment_type')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Occupation --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="occupation" class="block text-sm font-medium leading-6 text-gray-900">Occupation</label>
                            <input type="text" name="occupation" value="{{ old('occupation') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('occupation') ring-red-500 @enderror">
                            @error('occupation')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Nationality --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="nationality" class="block text-sm font-medium leading-6 text-gray-900">Nationality</label>
                            <input type="text" name="nationality" value="{{ old('nationality') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('nationality') ring-red-500 @enderror">
                            @error('nationality')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Religion --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="religion" class="block text-sm font-medium leading-6 text-gray-900">Religion</label>
                            <input type="text" name="religion" value="{{ old('religion') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('religion') ring-red-500 @enderror">
                            @error('religion')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Height --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="height" class="block text-sm font-medium leading-6 text-gray-900">Height</label>
                            <input type="number" step="0.01" name="height" value="{{ old('height') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('height') ring-red-500 @enderror">
                            @error('height')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Weight --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="weight" class="block text-sm font-medium leading-6 text-gray-900">Weight</label>
                            <input type="number" step="0.01" name="weight" value="{{ old('weight') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('weight') ring-red-500 @enderror">
                            @error('weight')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Bloodtype --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="bloodtype" class="block text-sm font-medium leading-6 text-gray-900">Blood Type</label>
                            <input type="text" name="bloodtype" value="{{ old('bloodtype') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('bloodtype') ring-red-500 @enderror">
                            @error('bloodtype')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Present Address --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="present_address" class="block text-sm font-medium leading-6 text-gray-900">Present Address</label>
                            <input type="text" name="present_address" value="{{ old('present_address') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('present_address') ring-red-500 @enderror">
                            @error('present_address')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Permanent Address --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="permanent_address" class="block text-sm font-medium leading-6 text-gray-900">Permanent Address</label>
                            <input type="text" name="permanent_address" value="{{ old('permanent_address') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('permanent_address') ring-red-500 @enderror">
                            @error('permanent_address')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Contact Number --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="contact_no" class="block text-sm font-medium leading-6 text-gray-900">Contact Number</label>
                            <input type="text" name="contact_no" value="{{ old('contact_no') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('contact_no') ring-red-500 @enderror">
                            @error('contact_no')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Spouse Name --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="spouse_name" class="block text-sm font-medium leading-6 text-gray-900">Spouse Name</label>
                            <input type="text" name="spouse_name" value="{{ old('spouse_name') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('spouse_name') ring-red-500 @enderror">
                            @error('spouse_name')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Spouse Date of Birth --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="spouse_bday" class="block text-sm font-medium leading-6 text-gray-900">Spouse Date of Birth</label>
                            <input type="date" name="spouse_bday" value="{{ old('spouse_bday') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('spouse_bday') ring-red-500 @enderror">
                            @error('spouse_bday')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Spouse Place of Birth --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="spouse_place_of_birth" class="block text-sm font-medium leading-6 text-gray-900">Spouse Place of Birth</label>
                            <input type="text" name="spouse_place_of_birth" value="{{ old('spouse_place_of_birth') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('spouse_place_of_birth') ring-red-500 @enderror">
                            @error('spouse_place_of_birth')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Spouse Age --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="spouse_age" class="block text-sm font-medium leading-6 text-gray-900">Spouse Age</label>
                            <input type="number" name="spouse_age" value="{{ old('spouse_age') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('spouse_age') ring-red-500 @enderror">
                            @error('spouse_age')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Primary Beneficiary Name --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="prim_beneficiary_name" class="block text-sm font-medium leading-6 text-gray-900">Primary Beneficiary Name</label>
                            <input type="text" name="prim_beneficiary_name" value="{{ old('prim_beneficiary_name') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('prim_beneficiary_name') ring-red-500 @enderror">
                            @error('prim_beneficiary_name')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Primary Beneficiary Date of Birth --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="prim_bday" class="block text-sm font-medium leading-6 text-gray-900">Primary Beneficiary Date of Birth</label>
                            <input type="date" name="prim_bday" value="{{ old('prim_bday') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('prim_bday') ring-red-500 @enderror">
                            @error('prim_bday')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Primary Beneficiary Age --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="prim_age" class="block text-sm font-medium leading-6 text-gray-900">Primary Beneficiary Age</label>
                            <input type="number" name="prim_age" value="{{ old('prim_age') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('prim_age') ring-red-500 @enderror">
                            @error('prim_age')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Primary Beneficiary Contact --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="prim_contact" class="block text-sm font-medium leading-6 text-gray-900">Primary Beneficiary Contact</label>
                            <input type="text" name="prim_contact" value="{{ old('prim_contact') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('prim_contact') ring-red-500 @enderror">
                            @error('prim_contact')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Secondary Beneficiary Name --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="sec_beneficiary_name" class="block text-sm font-medium leading-6 text-gray-900">Secondary Beneficiary Name</label>
                            <input type="text" name="sec_beneficiary_name" value="{{ old('sec_beneficiary_name') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('sec_beneficiary_name') ring-red-500 @enderror">
                            @error('sec_beneficiary_name')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Secondary Beneficiary Date of Birth --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="sec_bday" class="block text-sm font-medium leading-6 text-gray-900">Secondary Beneficiary Date of Birth</label>
                            <input type="date" name="sec_bday" value="{{ old('sec_bday') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('sec_bday') ring-red-500 @enderror">
                            @error('sec_bday')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    {{-- Secondary Beneficiary Age --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="sec_age" class="block text-sm font-medium leading-6 text-gray-900">Secondary Beneficiary Age</label>
                            <input type="number" name="sec_age" value="{{ old('sec_age') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('sec_age') ring-red-500 @enderror">
                            @error('sec_age')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Secondary Beneficiary Contact --}}
                    <div class="sm:col-span-3">
                        <div class="mb-4">
                            <label for="sec_contact" class="block text-sm font-medium leading-6 text-gray-900">Secondary Beneficiary Contact</label>
                            <input type="text" name="sec_contact" value="{{ old('sec_contact') }}"
                                class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('sec_contact') ring-red-500 @enderror">
                            @error('sec_contact')
                                <p class="error text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            



                {{-- button --}}
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md mt-3
                         bg-indigo-500 px-3 py-1.5 text-sm font-semibold leading-6
                          text-white shadow-sm hover:bg-indigo-400 focus-visible:outline 
                          focus-visible:outline-2 focus-visible:outline-offset-2
                           focus-visible:outline-indigo-500">
                           Add User
                    </button>
                </div>
            </form>
          
        </div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const successAlert = document.getElementById('success-alert');
        if (successAlert) {
            setTimeout(() => {
                successAlert.style.display = 'none';
            }, 5000); // 5000ms = 5 seconds
        }
    });
</script>
</x-admin_dashboard>