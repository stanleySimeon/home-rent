@extends('home')
@section('content')
<div class="container w-full flex flex-col space-y-4 px-8 py-8 overflow-y-auto overflow-x-hidden">
    <div class="flex space-x-6 mb-4 p-3 shadow-md rounded">
        <img src="https://www.whitehouse.gov/wp-content/uploads/2021/01/white-house-sunrise.jpg?w=1400&h=1060&crop=1" alt="" class="w-40 h-auto object-cover rounded">
        <div class="flex flex-col space-y-4">
            <span class=" flex flex-col space-y-1">
                <h1 class="home_title font-semibold text-lg">The white house</h1>
                <h1 class="home_address text-gray-600">1234, 5th Avenue, New York</h1>
            </span>
            <div class="flex space-x-32">
                <div class="flex flex-col space-y-1">
                    <p class="text-gray-500">No. units</p>
                    <span class="flex items-center space-x-2">
                        <i class="fa fa-home text-gray-500 text-md"></i>
                        <p class="count text-gray-700 text-md">5</p>
                    </span>
                </div>

                <div class="flex flex-col space-y-1">
                    <p class="text-gray-500">Total area</p>
                    <span class="flex items-center space-x-2">
                        <i class="fa fa-ruler-combined text-gray-500 text-md"></i>
                        <p class="count text-gray-700 text-md">1578 m<sup>2</sup></p>
                    </span>
                </div>

                <div class="flex flex-col space-y-1">
                    <p class="text-gray-500">Start date</p>
                    <span class="flex items-center space-x-2">
                        <i class="fa fa-calendar text-gray-500 text-md"></i>
                        <p class="count text-gray-700 text-md">12/12/2021</p>
                    </span>
                </div>

                <div class="flex flex-col space-y-1">
                    <p class="text-gray-500">Cut of date</p>
                    <span class="flex items-center space-x-2">
                        <i class="fa fa-calendar text-gray-500 text-md"></i>
                        <p class="count text-gray-700 text-md">12/12/2021</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center space-x-8">
        <div class="w-6/12 h-64 bg-[#fdfdfd] rounded shadow-md px-3 py-3 space-y-4">
            <span class="flex justify-between items-center">
                <h2 class="text-xl font-normal text-[#179fdf]">Receipts</h2>
                <button type="button" id="add-receipt">
                    <i class="fa fa-add text-[#15236c] text-md border-2 border-[#179fdf] px-2 py-1 cursor-pointer rounded"></i>
                </button>
            </span>
            <div class="flex flex-col space-y-3">
                <span class="flex justify-between items-center text-gray-500">
                    <p>Name</p>
                    <p>Amount</p>
                </span>
                <span>
                    <ul class="flex flex-col space-y-2 text-[#141c41] h-36 overflow-y-auto">
                        <li class="flex justify-between items-center">
                            <p>Electricity</p>
                            <p>$900.40</p>
                        </li>
                        <li class="flex justify-between items-center">
                            <p>Water</p>
                            <p>$600.95</p>
                        </li>
                        <li class="flex justify-between items-center">
                            <p>Gas</p>
                            <p>$373.75</p>
                        </li>
                        <li class="flex justify-between items-center">
                            <p>Internet</p>
                            <p>$200.00</p>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
        <div class="w-6/12 h-64 bg-[#fdfdfd] rounded shadow-md px-3 py-3 space-y-4">
            <span class="flex justify-between items-center">
                <h2 class="text-xl font-normal text-[#179fdf]">Utility Billing</h2>
            </span>
            <div class="flex flex-col space-y-3">
                <div class="flex flex-col space-y-2 pb-3 border-b border-gray-400">
                    <p class="text-gray-500">Last billing period</p>
                    <p class="text-[#0A1A72]">Jan 12 2023 - Dec 12 2023</p>
                    <span class="w-44">
                        <button type="button" class="bg-[#179fdf] hover:bg-[#1d89bb] px-4 py-2.5 text-white text-md rounded-sm">Start utility billing</button>
                    </span>
                </div>
                <span class="flex flex-col space-y-2">
                    <p class="text-gray-500">Current billing period</p>
                    <p class="text-[#0A1A72]">Jan 12 2022 - Dec 12 2022</p>
                </span>
            </div>
        </div>
    </div>
    <div class="container w-full h-full flex flex-col px-0 mt-4 space-y-2">
        <h1 class="font-semibold text-lg">Rental Units</h1>
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead class="whitespace-nowrap">
                    <tr class="bg-[#179fdf] text-white font-thin">
                        <th class="px-4 py-2">Unit</th>
                        <th class="px-4 py-2">Tenant</th>
                        <th class="px-4 py-2">Phone</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Rent</th>
                        <th class="px-4 py-2">Deposit</th>
                        <th class="px-4 py-2">Start date</th>
                        <th class="px-4 py-2">End date</th>
                        <th class="px-4 py-2">Status</th>
                    </tr>
                </thead>
                <tbody class="whitespace-nowrap">
                    <tr class="bg-white">
                        <td class="border px-4 py-2">Unit 1</td>
                        <td class="border px-4 py-2">John Doe</td>
                        <td class="border px-4 py-2">+234 803 123 4567</td>
                        <td class="border px-4 py-2">
                            <a href="mailto:johndoe@gmail.com" class="text-[#179fdf]">
                                johndoe@gmail.com
                            </a>
                        </td>
                        <td class="border px-4 py-2">$1,000.00</td>
                        <td class="border px-4 py-2">$1,000.00</td>
                        <td class="border px-4 py-2">12/12/2021</td>
                        <td class="border px-4 py-2">12/12/2021</td>
                        <td class="border px-4 py-2 text-green-600">Active</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="border px-4 py-2">Unit 2</td>
                        <td class="border px-4 py-2">John Doe</td>
                        <td class="border px-4 py-2">+234 803 123 4567</td>
                        <td class="border px-4 py-2">
                            <a href="mailto:mail@example.com" class="text-[#179fdf]">
                                mail@example.com
                            </a>
                        </td>
                        <td class="border px-4 py-2">$1,000.00</td>
                        <td class="border px-4 py-2">$1,000.00</td>
                        <td class="border px-4 py-2">12/12/2021</td>
                        <td class="border px-4 py-2">12/12/2021</td>
                        <td class="border px-4 py-2 text-green-600">Active</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="border px-4 py-2">Unit 3</td>
                        <td class="border px-4 py-2">John Doe</td>
                        <td class="border px-4 py-2">+234 803 123 4567</td>
                        <td class="border px-4 py-2">
                            <a href="mailto:mstanley.me@gmail.com" class="text-[#179fdf]">
                                mstanley.me@gmail.com
                            </a>
                        </td>
                        <td class="border px-4 py-2">$1,000.00</td>
                        <td class="border px-4 py-2">$1,000.00</td>
                        <td class="border px-4 py-2">12/12/2021</td>
                        <td class="border px-4 py-2">12/12/2021</td>
                        <td class="border px-4 py-2 text-green-600">Active</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
