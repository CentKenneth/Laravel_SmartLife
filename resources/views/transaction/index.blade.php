<x-admin_dashboard>
  <header class="bg-white shadow">
     
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-base font-semibold leading-6 text-gray-900">Transactions</h1>
          <p class="mt-2 text-sm text-gray-700">A table of placeholder stock market data that does not make any sense.
          </p>
      </div>
      
  </header>
  <div class="px-4 sm:px-6 lg:px-8">
      <div class="mt-8 flow-root">
          <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                  <table class="min-w-full divide-y divide-gray-300">
                      <thead>
                          <tr>
                              <th scope="col"
                                  class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                  Transaction ID</th>
                              <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  OR NO.</th>
                              <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  Account Name</th>
                              <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  Plan Type</th>
                              <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  Contract Price</th>
                              <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  Balance</th>
                              <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  Effective Date</th>
                                  <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  Expiration Date</th>
                                  <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  Qouta Comm</th>
                                  <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  Installment</th>
                                  <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  Status</th>
                                  <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  Mode of Payment</th>
                                  <th scope="col"
                                  class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                  Account Type</th>
                              <th scope="col" class="relative whitespace-nowrap py-3.5 pl-3 pr-4 sm:pr-0">
                                  <span class="sr-only">View</span>
                              </th>
                          </tr>
                      </thead>
                      <tbody class="divide-y divide-gray-200 bg-white">
                          @foreach ($transactions as $transaction)
                          <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{
                                    $transaction->id }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->or_no }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->account_name }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->plan_type }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->contract_price }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->balance }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->effectivity_date }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->expiration_date }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->quota_comm }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->installment }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->status }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->mode_of_payment }}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $transaction->account_type }}</td>
                                
                                
                                
                                <td
                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                <a href="{{ route('admin_transactions', ['id' => $transaction->id]) }}" class="text-indigo-600 hover:text-indigo-900"></i> View<span class="sr-only">, {{ $transaction->id }}</span></a>
                                </td>
                          </tr>
                          
                      @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  
</x-admin_dashboard>