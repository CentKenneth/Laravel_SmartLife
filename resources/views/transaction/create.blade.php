<x-admin_dashboard>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Add Transaction </h1>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details of user's account</p>
        </div>
    </header>
 
    <div class="mt-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('transaction.store') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
 
                        <div class="grid grid-cols-1 gap-6">
                            {{-- <div>
                                <label for="or_no" class="block text-sm font-medium text-gray-700">OR No.</label>
                                <input type="text" name="or_no" id="or_no" value="{{$user->or_no}}" class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div> --}}

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                    <label for="or_no" class="block text-sm font-medium leading-6 text-gray-900">OR NO</label>
                                        <input type="number" name="or_no" value="{{$user->or_no}}" readonly
                                        class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                        @error('or_no') ring-red-500 @enderror">
                                        @error('or_no')
                                            <p class="error text-red-500 text-xs">{{$message}}
                                        @enderror</p>
                                    </div>  
                                </div>
            
                                {{-- account_name --}}
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                    <label for="account_name" class="block text-sm font-medium leading-6 text-gray-900">Account Name</label>
                                        <input type="text" name="account_name" value="{{$user->lastname.', '. $user->firstname}}" readonly
                                        class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                        @error('account_name') ring-red-500 @enderror">
                                        @error('account_name')
                                            <p class="error text-red-500 text-xs">{{$message}}
                                        @enderror</p>
                                    </div>
                                </div>
                            </div>
                            {{-- plan type --}}
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                        <label for="plan_type" 
                                        class="block text-sm font-medium leading-6 text-gray-900">Plan Type</label>
                                        <select name="plan_type" type="text" value="{{old('plan_type')}}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option  class="px-4  bg-gray-100">Mercury 1</option>
                                            <option  class="px-4  bg-gray-100">Mercury 2</option>
                                            <option class="px-4  bg-gray-100">Emmanuel</option>
                                        </select>
                                    </div>  
                                </div>
            
                                {{-- account_name --}}
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                    <label for="contract_price" class="block text-sm font-medium leading-6 text-gray-900">Contract Price</label>
                                        <input type="number" name="contract_price" value="{{old('contract_price')}}"
                                        class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                        @error('contract_price') ring-red-500 @enderror">
                                        @error('contract_price')
                                            <p class="error text-red-500 text-xs">{{$message}}
                                        @enderror</p>
                                    </div>
                                </div>
                            </div>


                            {{-- balance --}}
                           
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                    <label for="balance" class="block text-sm font-medium leading-6 text-gray-900">Balance</label>
                                        <input type="number" name="balance" value="{{old('balance')}}"
                                        class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                        @error('balance') ring-red-500 @enderror">
                                        @error('balance')
                                            <p class="error text-red-500 text-xs">{{$message}}
                                        @enderror</p>
                                    </div>  
                                </div>
            
                                {{-- effectivity_date --}}
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                    <label for="effectivity_date" class="block text-sm font-medium leading-6 text-gray-900">Effectivity Date</label>
                                        <input type="date" name="effectivity_date" value="{{old('effectivity_date')}}"
                                        class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                        @error('effectivity_date') ring-red-500 @enderror">
                                        @error('effectivity_date')
                                            <p class="error text-red-500 text-xs">{{$message}}
                                        @enderror</p>
                                    </div>
                                </div>
                            </div>

                            {{-- expiration date --}}
                           
                             <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                    <label for="expiration_date" class="block text-sm font-medium leading-6 text-gray-900">Expiration Date</label>
                                        <input type="date" name="expiration_date" value="{{old('expiration_date')}}"
                                        class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                        @error('expiration_date') ring-red-500 @enderror">
                                        @error('expiration_date')
                                            <p class="error text-red-500 text-xs">{{$message}}
                                        @enderror</p>
                                    </div>  
                                </div>
            
                                {{-- Quota Comm --}}
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                    <label for="quota_comm" class="block text-sm font-medium leading-6 text-gray-900">Quota Comm</label>
                                    <select name="quota_comm" type="number" value="{{old('quota_comm')}}"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option  class="px-4  bg-gray-100">575</option>
                                    <option  class="px-4  bg-gray-100">1150</option>
                                    <option  class="px-4  bg-gray-100">1725</option>
                                    <option  class="px-4  bg-gray-100">475</option>
                                    <option  class="px-4  bg-gray-100">950</option>
                                    <option  class="px-4  bg-gray-100">1425</option>
                                </select>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Installment --}}
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                    <label for="installment" class="block text-sm font-medium leading-6 text-gray-900">Installment</label>
                                        <input type="text" name="installment" value="{{old('installment')}}"
                                        class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                        @error('installment') ring-red-500 @enderror">
                                        @error('installment')
                                            <p class="error text-red-500 text-xs">{{$message}}
                                        @enderror</p>
                                    </div>  
                                </div>
            
                                {{-- Status --}}
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                        <label for="status" 
                                        class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                                        <select name="status" type="text" value="{{old('status')}}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option  class="px-4  bg-gray-100">30 days</option>
                                            <option  class="px-4  bg-gray-100">60 days</option>
                                            <option class="px-4  bg-gray-100">90 days</option>
                                            <option class="px-4  bg-gray-100">Lapsed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            

                            {{-- mode of payment --}}
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                    <label for="mode_of_payment" class="block text-sm font-medium leading-6 text-gray-900">Mode of Payment</label>
                                        <input type="text" name="mode_of_payment" value="{{old('mode_of_payment')}}"
                                        class="block w-full px-4 py-1.5 rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6
                                        @error('mode_of_payment') ring-red-500 @enderror">
                                        @error('mode_of_payment')
                                            <p class="error text-red-500 text-xs">{{$message}}
                                        @enderror</p>
                                    </div>  
                                </div>
            
                                {{-- Status --}}
                                <div class="sm:col-span-3">
                                    <div class="mb-4">
                                        <label for="account_type" 
                                        class="block text-sm font-medium leading-6 text-gray-900">Account Type</label>
                                        <select name="account_type" type="text" value="{{old('account_type')}}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option  class="px-4  bg-gray-100">Comm</option>
                                            <option  class="px-4  bg-gray-100">Non Comm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
 
                        <div class="mt-6">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add Transaction</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 </x-admin_dashboard>
 