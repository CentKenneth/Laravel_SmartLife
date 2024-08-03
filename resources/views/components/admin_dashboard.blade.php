<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-white-100 text-slate-100">
  <div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-8 w-8" src="{{asset('images/SmartLife_Logo.png')}}" alt="SmartLife">
            </div>
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="{{ route('admin_dash') }}" 
                 class="rounded-md px-3 py-2 text-sm font-medium {{ Request::routeIs('admin_dash') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" 
                 aria-current="{{ Request::routeIs('admin_dash') ? 'page' : '' }}">Dashboard</a>
              
              <a href="{{ route('admin_users') }}" 
                 class="rounded-md px-3 py-2 text-sm font-medium {{ Request::routeIs('admin_users') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" 
                 aria-current="{{ Request::routeIs('admin_users') ? 'page' : '' }}">Users</a>

              <a href="{{ route('admin_transactions') }}" 
                 class="rounded-md px-3 py-2 text-sm font-medium {{ Request::routeIs('admin_transactions') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}" 
                 aria-current="{{ Request::routeIs('admin_transactions') ? 'page' : '' }}">Transactions</a>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <div class="px-3">
              <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
              </button>
            </div>
            <div class="px-4">
              <button type="button" class="relative rounded-full px-2 bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View email</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.387-5.346A2 2 0 0112 2c.56 0 1.094.214 1.613.654L21 8m0 0v10a2 2 0 01-2 2H5a2 2 0 01-2-2V8m0 0l9 6 9-6" />
                </svg>
              </button>
            </div>

              <div class="relative ml-3">
                <div>
                  <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </button>
                </div>
                
                <div class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" id="user-menu">
                  <a href="#" class="block px-4 py-2 text-sm hover:bg-slate-200 text-gray-700" role="menuitem" id="user-menu-item-0">{{auth()->user()->lastname}}, {{auth()->user()->firstname}}</a>
                  <a href="#" class="block px-4 py-2 text-sm hover:bg-slate-200 text-gray-700" role="menuitem" id="user-menu-item-1">Settings</a>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="block px-4 py-2 text-sm hover:bg-slate-200 text-gray-700">Sign out</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <main>
      <div>
       {{$slot}}
      </div>
    </main>
  </div>
</body>
</html>
