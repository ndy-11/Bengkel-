@extends('dealer.header')

@section('title', 'Delaer - Data transaksi')

@section('main-content')
<div class="p-4 border border-purple dark:border-none rounded-lg mt-14 shadow-md bg-gray-100 dark:bg-secondary">
    <div class="flex justify-between">
        <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">Data Transaksi Bulan {{$month}}</div>
        <div class="mt-10 mb-4 w-1/2">
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Customer Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Plat Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jam
                    </th>
                </tr>
            </thead>
            <tbody class="text-xs md:text-base">
                @php
                $total = 0; // Inisialisasi variabel total
                $serviceCount = count($services); // Jumlah service
                @endphp
            
                @foreach ($services as $index => $service)
                    <tr class="bg-gray-100 dark:bg-primary border-b border-primary dark:border-purple last:border-0 text-primary dark:text-purple">
                        <th scope="row" class="px-4 text-center py-4 font-medium whitespace-nowrap dark:text-white">
                            {{ $index + 1 }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $service->user->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $service->plat_num }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $service->price }}
                            @php
                            $total += $service->price; // Menambahkan harga ke total
                            @endphp
                        </td>
                        <td class="px-6 py-4">
                            {{ $service->plan_date }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $service->time }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex flex-col items-center mt-6 mb-4">
            <span class="text-sm text-primary dark:text-purple">
                Jumlah Service: {{ $serviceCount }}
            </span>
            <span class="text-sm text-primary dark:text-purple">
                Total Biaya: Rp. {{ $total }}
            </span>
        </div>
    </div>
</div>


            
            
            

<div class="flex flex-col items-center mt-6">
        <div class="mt-5 md:mt-0">
            {{ $services->links('dealer.pagination') }}
        </div>
    </div>

</div>
@endsection