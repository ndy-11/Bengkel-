@extends('layouts.sidebar')

@section('role', 'Admin')

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
       <a href="{{ route('admin.dashboard') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
          <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75 group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
          <span class="ml-3">Dashboard</span>
       </a>
    </li>
    <li>
       <a href="{{ route('admin.dataUser') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
          <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
          <span class="flex-1 ml-3 ">Data User</span>
       </a>
    </li>
    <li>
       <a href="{{ route('admin.dataDealer') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
         <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
          <span class="flex-1 ml-3 ">Data Dealer</span>
       </a>
    </li>
    <li>
      <a href="{{ route('admin.dataMechanic') }}" class="text-sm flex items-center p-3 mb-2 dark:hover:text-primary text-primary dark:text-purple rounded-lg hover:bg-dark-purple hover:text-primary hover:font-semibold">
         <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 hover:text-primary transition duration-75  group-hover:text-primary " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
         <span class="flex-1 ml-3 ">Data Mekanik</span>
      </a>
   </li>
@endsection

@section('main')
    @yield('main-content')
@endsection