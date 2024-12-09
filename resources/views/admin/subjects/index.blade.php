@extends('admin.layouts.master')
@section('content')
<<<<<<< HEAD

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Subjects</h1>

    <!-- Make the table horizontally scrollable on smaller screens -->
    <div class="overflow-x-auto shadow-md rounded-lg bg-white">
        <table class="min-w-full table-auto">
=======
<div>
    <div class="flex justify-between">
        <h1>{{ __('Subjects') }}</h1>

        <div>
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add subject</button>
        </div>
    </div>

    <div class="card">
        <div class="mt-5 mb-5 grid sm:grid-cols-1 md:grid-cols-3 gap-4">
            <div class="col-span-2">
                <x-form.input type="search" name="subject_name"  label="none" :placeholder="__('Search Subjects')" />
            </div>
        </div>


            <button type="button" @click="isOpen = !isOpen" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded-t text-grey-700 bg-gray-200 hover:bg-grey-300 dark:bg-gray-700 dark:text-gray-200 transition ease-in-out duration-150">
                <svg class="h-5 w-5 text-gray-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                {{ __('Advanced Search') }}
            </button>

            <button type="button"@click="isOpen = false" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded text-grey-700 bg-gray-200 hover:bg-grey-300 dark:bg-gray-700 dark:text-gray-200 transition ease-in-out duration-150">
                <svg class="h-5 w-5 text-gray-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                {{ __('Reset form') }}
            </button>

            <div
                x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="bg-gray-200 dark:bg-gray-700 rounded-b-md p-5"
                wire:ignore.self>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <x-form.input type="text" id="subject_code" name="subject_code" :label="__('Subject Code')" wire:model.live="subject_code" />
                    <x-form.input type="text" id="subject_teacher" name="subject_teacher" :label="__('Subject Teacher')" />
                </div>
            </div>
        </div>

        <div class="overflow-x-scroll">
            <table>
>>>>>>> ebf51548c833597ef5cd4fb358f9fd2362aad261
            <thead>
                <tr class="bg-blue-100 text-gray-700">
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase">Subject Id</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase">Subject Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase">Teacher</th>
                    <th class="px-6 py-3 text-left text-sm font-medium uppercase">Code</th>

                    <th class="px-6 py-3 text-center text-sm font-medium uppercase">Actions</th>
                </tr>
            </thead>
<<<<<<< HEAD
            <tbody class="divide-y divide-gray-200">
                @foreach ($subjects as $subject)
                <!-- Example Row -->
                <tr class="hover:bg-blue-50">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $subject->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $subject->subject_name}}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $subject->subject_teacher}}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{  $subject->subject_code}}</td>

                    <td class="px-6 py-4 text-center">
                        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Edit</a>
                        <form action="#" method="POST" class="inline-block">
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-red-600">Delete</button>
                        </form>
=======
            <tbody>
            @foreach($subjects as $subject)
                <tr wire:key="{{ $subject->id }}">
                    <td>{{ $subject->subject_name }}</td>
                    <td>{{ $subject->subject_code }}</td>
                    <td>{{ $subject->subject_teacher }}</td>
                    <td>
                        <div class="flex space-x-2">
                            @can('view_subjects')
                                <x-a href="{{ route('admin.subjects.show', $subject) }}">{{ __('View') }}</x-a>
                            @endcan

                            @if(can('edit_subjects'))
                                <x-a href="{{ route('admin.subjects.edit', $subject) }}">{{ __('Edit') }}</x-a>
                            @endif


                                    <form action="">
                                       <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">delete</button>
                                    </form>



                        </div>
>>>>>>> ebf51548c833597ef5cd4fb358f9fd2362aad261
                    </td>
                </tr>

<<<<<<< HEAD
                @endforeach
            </tbody>
        </table>
        <div class="bg-gray-200 dark:bg-gray-700 rounded-b-md p-5">
            {{ $subjects->links() }}
         </div>
=======
        {{ $subjects->links() }}
>>>>>>> ebf51548c833597ef5cd4fb358f9fd2362aad261
    </div>
</div>

@endsection
