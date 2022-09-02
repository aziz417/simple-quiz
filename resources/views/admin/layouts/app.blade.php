<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    @vite('resources/js/app.js')
    <style>
        .height {
            height: calc(100% - 52px) !important;
        }
    </style>
</head>
<body>
<div id="app" class="h-screen">
    <nav class="px-2 bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 col-span-12">
        <div class=" flex flex-wrap justify-between items-center mx-auto">
            <a href="#" class="flex items-center">
                <img
                    src="https://s3.amazonaws.com/files.freshteam.com/production/152508/attachments/6004819781/logo/1519866454088.jpg?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=ASIARX2EI6XT3SZH2Y2C%2F20220830%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20220830T234904Z&X-Amz-Expires=604800&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEMT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2FwEaCXVzLWVhc3QtMSJGMEQCID%2BPI3LSCsSUCDzNUwfWfphD1dVLZsilPm81h1QVBikkAiAFz4T2TmynhR%2Bl%2FgRDkLI8vGtRUHpGWTEpofeCy7OKbCrSBAhNEAQaDDExOTg2NTQwNjk1MSIMndWrXaVvT2SKX%2BUcKq8ERMuPAX5gASYwPPw96xs7LQhvNKKs3N0DKS9fVCXuTzBDFZLU2xVvvLy5UfXn9%2FUNqQaB2hc6X52RQ34FXQcstkFyUkIcXvzivudtgwXyZ8DcI9cvPb1Xf1zjhVJrnC2%2BddTEuVN4qcaPqtggvxJvOi5t5hYOSnf7RsIttsPXK0aBNmiknnBGDaIFPCUD2f2ooKtm0rHdtZ4r5GESMDXgZacbvGXvk4er%2BHHW5XZeM7ZhJfpaw96uirQa4P1n4N2oDaJcFvX9kiByZD7Lev8sOJa%2FtoNMNHRoaPoaYWZnSxvJL6tYq8M0hkwZ13GeYNdbN2ZfsY0rz5XMMBUCqJXTsrJOBux%2FL5kRA7XNB91IJ1p8HlOe1IYH21TJkUS92yWHe9uJT9%2B2R8LESVFspOdk3Wl4IrKbaEw%2FFIrfyW%2BIabIrErDVZZsIk8%2FvY5hzWvNKW6Aj6vYCC5xjJUsSrq00k7QpukUy7l0BxsLRzEUN2U8SATJUJPAu4bXCs0JkNlTyuZ4ODF2osbLyfudaIVpx2dWsckkHUSrxK%2B92T5F8voeokc8nkG2o07WxG4LQEmnBntS0Q%2B%2Frl7TpH87XoZwQ%2BCcGpiITR4mOngreBPnC%2Bh%2BP5mADYIDS%2FHQTLp%2Bdt0glU4q0NkeMf5VU4d6nyWtjMO4ugvo7%2FVjLISmoMQ%2BgQ5U7VaqZhk4OVKvqEG%2BtGwUx%2FGwSiY06D9Pp5FRFCdz%2Beh6Sa71wlCMQSMu9gN%2B4UTD3yrmYBjqqAZz2sTtr3ukiGl0pTRLKFtUgIqAjEQhn%2FHJ1GWbA2Z2dcIfLjl0HE4xS34g4GgYAEZKDQauxlLg%2BVfL3myRCO7PeXa2XbsCaTj1dsHQ3fS3pwTE503zd1cD86t3HgrQeKqEPetPSpnoEN7BezOpUs5PWXu3KY41VboPXxgepZELrCjJwMFzBxjAEyxRDpfWESGV8mNzKCv7b6loWPKRWjZ%2FWbOLCIJ1nM3l6&X-Amz-SignedHeaders=host&X-Amz-Signature=af6dd9641eb3403b8ebd575dd41206aa52bc4efbee1f604d9f21e2ae01a389ab"
                    class="mr-3 h-6 sm:h-10" alt="Analyzen Logo">
                <span
                    class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Analyzen Careers</span>
            </a>
            <button data-collapse-toggle="mobile-menu" type="button"
                    class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                           class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="height grid grid-cols-12 bg-red-300">
        <aside class="bg-red-300 col-span-2">
            <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800 h-full">
                <ul class="space-y-2">
                    <li>
                        <a href="#"
                           class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true"
                                 class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.index') }}"
                           class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true"
                                 class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true"
                                 class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true"
                                 class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true"
                                 class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                 fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <main class="p-4 col-span-10">
           <div class="w-full mb-3">
               @if(session('success'))
                   <div class="py-4 w-full bg-green-200 px-2">
                       <span> <b>Success ! </b> {{ session('success') }} </span>
                   </div>
               @endif

               @if(session('error'))
                   <div class="py-4 w-full bg-red-200 px-2">
                       <span> <b>Error ! </b> {{ session('error') }} </span>
                   </div>
               @endif

               @if(session('warning'))
                   <div class="py-4 w-full bg-orange-200 px-2">
                       <span> <b>Warning ! </b> {{ session('warning') }} </span>
                   </div>
               @endif
           </div>

            @yield('admin-content')
        </main>
    </div>
</div>

@stack('scripts')
</body>
</html>
