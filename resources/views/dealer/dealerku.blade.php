@extends('dealer.header')

@section('title', 'Dealer - Dealerku')

@section('main-content')
@if(session('success'))
    <div class="flex justify-center fixed top-0 left-1/2 transform -translate-x-1/2 z-50 mt-6">
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-primary bg-success rounded-lg shadow" role="alert" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="mx-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 rounded-lg focus:ring-2 focus:ring-green-100 p-1.5 inline-flex h-8 w-8 text-green-500 hover:text-green-500 bg-green-100 hover:bg-green-300" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
@endif
<div class="p-4 border border-purple dark:border-none rounded-lg mt-14 shadow-md bg-gray-100 dark:bg-secondary">
    <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide ">Profil Dealer Ku</div>
    <div class="text-xs md:text-lg md:px-10">
        <label for="dealer_name" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Nama Dealer</label>
        <input type="text" id="disabled-input" aria-label="disabled input" class="mb-4 bg-gray-100 dark:bg-primary border border-primary text-primary dark:text-purple text-sm md:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-6" value="{{ $user->dealer->dealer_name }}" disabled>
        
        <label for="dealer_address" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Alamat Dealer</label>
        <input type="text" id="disabled-input" aria-label="disabled input" class="mb-4 bg-gray-100 dark:bg-primary border border-primary text-primary dark:text-purple text-sm md:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-6" value="{{ $user->dealer->dealer_address }}" disabled>
        
        <label for="company" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Company</label>
        <input type="text" id="disabled-input" aria-label="disabled input" class="mb-4 bg-gray-100 dark:bg-primary border border-primary text-primary dark:text-purple text-sm md:text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-6" value="{{ $user->dealer->company }}" disabled>
        
        <iframe src="{{ $user->dealer->maps }}" width="500" height="300" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <button data-modal-target="staticModal" data-modal-toggle="staticModal" class="block text-white bg-blue-700 md:mx-8 my-6 hover:bg-blue-800 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs md:text-sm px-5 py-2.5 text-center" type="button">
        Ubah Data
    </button>
    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <div class="relative bg-gray-100 dark:bg-secondary rounded-lg shadow">
                <div class="flex items-start justify-between p-4 rounded-t">
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-400 dark:hover:bg-primary hover:text-purple rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="staticModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form id="editProfileForm" action="{{ route('dealer.update', $user->id_user)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-6 mx-6">
                        <label for="dealer_name" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Nama Dealer</label>
                        <input type="text" id="dealer_name" name="dealer_name" value="{{ auth()->user()->dealer->dealer_name }}" class="bg-gray-100 dark:bg-primary border border-secondary text-primary dark:text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $user->dealer->dealer_name }}">
                    </div>
                    <div class="mb-6 mx-6">
                        <label for="dealer_address" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Alamat Dealer</label>
                        <input type="text" id="dealer_address" name="dealer_address" value="{{ auth()->user()->dealer->dealer_address }}" class="bg-gray-100 dark:bg-primary border border-secondary text-primary dark:text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $user->dealer->dealer_address }}">
                    </div>
                    <div class="mb-6 mx-6">
                        <label for="company" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Company</label>
                        <select id="company" name="company" value="{{ auth()->user()->dealer->company}}" class="bg-gray-100 dark:bg-primary border border-secondary text-primary dark:text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $user->dealer->dealer_address }}">
                            <option selected="">{{ auth()->user()->dealer->company}}</option>
                            <option value="yamaha">Yamaha</option>
                            <option value="suzuki">Suzuki</option>
                            <option value="honda">Honda</option>
                        </select>
                    </div>
                    <div class="mb-6 mx-6">
                        <label for="maps" class="block mb-2 text-sm font-medium text-primary dark:text-purple">Link Maps</label>
                        <input type="text" id="maps" name="maps" value="{{ auth()->user()->dealer->maps }}" class="bg-gray-100 dark:bg-primary border border-secondary text-primary dark:text-purple text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $user->dealer->maps}}">
                    </div>
                    {{-- <div class="mb-2 mx-6">
                        <label class="block mb-2 text-sm font-medium text-purple" for="image">Avatar</label>
                        <input class="block w-full mb-5 text-sm text-purple rounded-lg cursor-pointer bg-primary border border-purple" id="avatar" type="file" name="avatar" value="{{auth()->user()->avatar}}">
                    </div> --}}
                    <div class="flex items-center px-6 pb-2 border-gray-200 rounded-b ">
                        <button data-modal-hide="staticModal" type="submit" class="text-primary bg-dark-purple hover:bg-violet-600 focus:ring-1 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                    </div>
                </form> 
            </div>
        </div>
        {{-- value="{{ auth()->user()->dealer->dealer_name }}" --}}
    </div>
</div>

<script>
    setTimeout(function() {
        var toastElement = document.getElementById('toast-success');
        if (toastElement) {
            toastElement.remove();
        }
    }, 3000);
</script>


@endsection