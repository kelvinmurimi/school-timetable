<div>
    <div class="flex justify-between">
        <h1>{{ __('Subjects') }}</h1>

        <div>
            @can('add_subjects')
                <livewire:admin.subjects.create/>
            @endcan
        </div>
    </div>

    <div class="card">
        <div class="mt-5 mb-5 grid sm:grid-cols-1 md:grid-cols-3 gap-4">
            <div class="col-span-2">
                <x-form.input type="search" name="subject_name" wire:model.live="subject_name" label="none" :placeholder="__('Search Subjects')" />
            </div>
        </div>

        <div class="mb-5" x-data="{ isOpen: @if($openFilter || request('openFilter')) true @else false @endif }">
            <button type="button" @click="isOpen = !isOpen" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded-t text-grey-700 bg-gray-200 hover:bg-grey-300 dark:bg-gray-700 dark:text-gray-200 transition ease-in-out duration-150">
                <svg class="h-5 w-5 text-gray-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                {{ __('Advanced Search') }}
            </button>

            <button type="button" wire:click="resetFilters" @click="isOpen = false" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded text-grey-700 bg-gray-200 hover:bg-grey-300 dark:bg-gray-700 dark:text-gray-200 transition ease-in-out duration-150">
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
                    <x-form.input type="text" id="subject_teacher" name="subject_teacher" :label="__('Subject Teacher')" wire:model.live="subject_teacher" />
                </div>
            </div>
        </div>

        <div class="overflow-x-scroll">
            <table>
                <thead>
                    <tr>
                        <th><a href="#" wire:click="sortBy('name')">{{ __('Subject Name') }}</a></th>
                        <th><a href="#" wire:click="sortBy('code')">{{ __('Subject Code') }}</a></th>
                        <th>{{ __('Teacher') }}</th>
                        <th>{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($this->subjects() as $subject)
                        <tr wire:key="{{ $subject->id }}">
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->code }}</td>
                            <td>{{ $subject->teacher }}</td>
                            <td>
                                <div class="flex space-x-2">
                                    @can('view_subjects')
                                        <x-a href="{{ route('admin.subjects.show', $subject) }}">{{ __('View') }}</x-a>
                                    @endcan

                                    @can('edit_subjects')
                                        <x-a href="{{ route('admin.subjects.edit', $subject) }}">{{ __('Edit') }}</x-a>
                                    @endcan

                                    @can('delete_subjects')
                                        <x-modal>
                                            <x-slot name="trigger">
                                                <a href="#" @click="on = true">{{ __('Delete') }}</a>
                                            </x-slot>

                                            <x-slot name="modalTitle">{{ __('Confirm Delete') }}</x-slot>

                                            <x-slot name="content">
                                                <div class="text-center">
                                                    {{ __('Are you sure you want to delete') }}: <b>{{ $subject->name }}</b>
                                                </div>
                                            </x-slot>

                                            <x-slot name="footer">
                                                <button @click="on = false">{{ __('Cancel') }}</button>
                                                <button class="btn btn-red" wire:click="deleteSubject('{{ $subject->id }}')">{{ __('Delete Subject') }}</button>
                                            </x-slot>
                                        </x-modal>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $this->subjects()->links() }}
    </div>
</div>
