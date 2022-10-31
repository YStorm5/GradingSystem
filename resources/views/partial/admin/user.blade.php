@extends('layout')
@section('content')
    {{-- header --}}
    <form action="#" method="GET" class="lg:block">
        <div class="mt-2 relative flex lg:w-[32rem] gap-2">
            <select id="campus"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                <option selected>Choose campus</option>
                <option value="1">UC1</option>
                <option value="2">UC2</option>
            </select>
            <select id="shift"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                <option selected>Choose shift</option>
                <option value="Morning">Morning</option>
                <option value="Afternoon">Afternoon</option>
                <option value="Evening">Evening</option>
            </select>

        </div>

        <div class="mt-2 relative lg:w-64">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" name="email" id="topbar-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                placeholder="Search Student">
        </div>
    </form>
    {{-- table --}}
    <div class=" my-6 rounded-lg border z-10 overflow-x-scroll">
        <table class="min-w-max w-full table-auto">
            <thead>
                <tr class="bg-gray-200 overflow-hidden text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">UserID</th>
                    <th class="py-3 px-6 text-left">Username</th>
                    <th class="py-3 px-6 text-left">Role</th>
                    <th class="py-3 px-6 text-left">Manage</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @for ($i = 1; $i < 6; $i++)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="font-medium">1</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center">
                                <span class="font-medium ">PheapPorPor</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center">
                                <span class="font-medium ">Student</span>
                            </div>
                        </td>

                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center gap-x-3">
                                <a href="" class="hover:underline text-blue-500">
                                    <span class="font-medium ">Edit</span>

                                </a>
                                <a href="" class="hover:underline text-red-500">
                                    <span class="font-medium ">Delete</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
