@extends('layouts.sidebar')

@section('role', 'Customer')

@section('list-menu')
<div class="flex items-center justify-center flex-col">
   @if ($user->avatar)
      <img class="h-32 w-32 rounded-full" src="{{ asset('storage/' . $user->avatar) }}">
   @else
      <img class="h-32 w-32 rounded-full" src="{{ asset('img/default user.png' . $user->avatar) }}">
   @endif
   <div class="text-primary dark:text-purple m-4 text-center">{{ $user->name }}</div>
</div>
   <li>
      <a href="{{ route('customer.dashboard') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
         <svg aria-hidden="true" class="text-sm flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
         <span class="ml-3 ">Dashboard</span>
      </a>
   </li>
   <li>
       <a href="{{ route('dealer.yamaha') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
          {{-- <svg aria-hidden="true" class="text-sm flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg> --}}
          <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
          <span class="flex-1 ml-3 ">Yamaha</span>
       </a>
    </li>
    <li>
       <a href="{{ route('dealer.honda') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
         <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
          <span class="flex-1 ml-3 ">Honda</span>
       </a>
    </li>
    <li>
       <a href="{{ route('dealer.suzuki') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
           {{-- <svg aria-hidden="true" class="text-sm w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg> --}}
           <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
           <span class="flex-1 ml-3 ">Suzuki</span>
       </a>
    </li>
    <li>
      <a href="{{ route('customer.profilku') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
         <svg aria-hidden="true" class="text-sm flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
         <span class="flex-1 ml-3 ">Profil Ku</span>
      </a>
   </li>
    <li>
       <a href="{{ route('customer.allservisku') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
         <svg aria-hidden="true" class="text-sm flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
          <span class="flex-1 ml-3 ">Servis Ku</span>
       </a>
    </li>
    <li>
       <a href="{{ route('customer.historyservis') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
         <svg aria-hidden="true" class="text-sm flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
         <span class="flex-1 ml-3 ">History Servis</span>
       </a>
    </li>
    <li>
       <a href="{{ route('customer.panduansistem') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
          <svg aria-hidden="true" class="text-sm flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
          <span class="flex-1 ml-3 ">Panduan Sistem</span>
       </a>
    </li>
@endsection

@section('main')
    @yield('main-content')
@endsection