@extends('admin.layouts.master')
@section('content')
<div>
    <div class="flex justify-between">

        <h1>{{ __('Users') }}</h1>

        <div>
            @can('add_users')
              Add rooms
            @endcan
        </div>

    </div>

    <div class="card">

        <div class="mt-5 mb-5 grid sm:grid-cols-1 md:grid-cols-3 gap-4">

            <div class="col-span-2">
                <x-form.input type="search" name="name"  label="none" :placeholder="__('Search Rooms')" />
            </div>

        </div>

        

        <div class="overflow-x-scroll">
            <table>
            <thead>
            <tr>
                <th><a href="#" wire:click="sortBy('name')">{{ __('Name') }}</a></th>
                <th><a href="#" wire:click="sortBy('email')">{{ __('Id') }}</a></th>
                <th>{{ __('Room Name') }}</th>
              
                <th>{{ __('Action') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rooms as $room)
               <td>
                {{$room->room_name}}
               </td>
                       
                    <td>
                        <div class="flex space-x-2">

                                

                                @if(can('edit_users'))
                                    <x-a href="{{ route('admin.rooms.edit', $room->id )}}">{{ __('Edit') }}</x-a>
                               
                                @endif

                                @if(can('edit_users'))
                                    <x-a href="{{ route('admin.rooms.destroy', $room->id )}}">{{ __('delete') }}</x-a>
                               
                                @endif

                                
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>

        {{ $rooms->links() }}

    </div>

</div>

@endsection
