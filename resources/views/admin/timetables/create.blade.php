@extends('admin.layouts.master')
@section('content')
    <div class="container mx-auto px-4 py-8">


        <!-- Form Header -->
        <div class="bg-gray-100">
            <nav class="p-6 bg-white flex justify-between">
                <ul class="flex items-center">
                    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Create Timetable</h1>
                </ul>
                <ul class="flex items-center">
                    <a href="
            {{ route('admin.timetable.index') }}"
                        class="bg-indigo-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-blue-600">Back</a>
                </ul>
            </nav>


        </div>

        <!-- Form starts here -->
        <form action="{{ route('admin.timetable.store') }}" method="POST" class="space-y-6 bg-white p-8 rounded-lg shadow-md">

                     @csrf
            <!-- Subject Field -->
            <div>
                <label for="day" class="block text-sm font-semibold text-gray-700 mb-2"
                    aria-label="Select the day">Subject</label>
                <select id="subject" name="subject" required
                    class="mt-2 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="" disabled selected>Select Subject</option>
                    @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                    @endforeach


                </select>
                @error('subject')
                    <span id="day-error" class="text-sm text-red-500 hidden">{{ $message }}</span>
                @enderror

            </div>

            <!-- Teacher Field -->
            <div>
                <label for="day" class="block text-sm font-semibold text-gray-700 mb-2"
                    aria-label="Select the day">Subject</label>
                <select id="subject" name="teacher" required
                    class="mt-2 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="" disabled selected>Select Teacher</option>
                    @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->FirstName}}{{$teacher->LastName }}</option>
                    @endforeach


                </select>
                @error('teacher')
                    <span id="day-error" class="text-sm text-red-500 hidden">{{ $message }}</span>
                @enderror

            </div>

            <!-- Day Field -->
            <div>
                <label for="day" class="block text-sm font-semibold text-gray-700 mb-2"
                    aria-label="Select the day">Day</label>
                <select id="day" name="day" required
                    class="mt-2 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="" disabled selected>Select a day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                </select>
                @error('day')
                    <span id="day-error" class="text-sm text-red-500 hidden">{{ $message }}</span>
                @enderror
            </div>

            <!-- Time Field -->
            <div>
                <label for="time" class="block text-sm font-semibold text-gray-700 mb-2"
                    aria-label="Enter the time slot">Time</label>
                <input type="text" id="time" name="time" required
                    class="mt-2 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="e.g., 10:00 AM - 11:00 AM">
                    @error('time')
                    <span id="day-error" class="text-sm text-red-500 hidden">{{ $message }}</span>
                @enderror
            </div>

            <!-- Room Field -->
            <div>
                <label for="day" class="block text-sm font-semibold text-gray-700 mb-2"
                    aria-label="Select the day">Room</label>
                <select id="subject" name="room" required
                    class="mt-2 block w-full px-4 py-2 text-sm border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="" disabled selected>Select Room</option>
                    @foreach($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->room_name }}</option>
                    @endforeach


                </select>
                @error('room')
                    <span id="day-error" class="text-sm text-red-500 hidden">{{ $message }}</span>
                @enderror

            </div>


            <!-- Submit Button -->
            <div class="flex justify-end px-4 py-2">
                <button type="submit" id="submit-btn"
                    class="px-6 py-2 bg-blue-500 text-white text-sm font-medium rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                    Create
                </button>
            </div>
        </form>


    </div>

    <!-- Dark Mode Support -->
    <script>
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.body.classList.add('dark');
        }
    </script>
@endsection
