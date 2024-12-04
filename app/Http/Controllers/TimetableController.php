<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use App\Http\Requests\StoreTimetableRequest;
use App\Http\Requests\UpdateTimetableRequest;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Room;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $timetables = Timetable::with(['subject', 'teacher', 'room'])->paginate(5);
        return view('admin.timetables.index', [
            'timetables' => $timetables
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = 'create Timetable';
        $teachers = Teacher::all();
        $subjects = Subject::all();
        $rooms = Room::all();
        return view('admin.timetables.create', [
            'title' => $title,
            'rooms' => $rooms,
            'subjects' => $subjects,
            'teachers' => $teachers


        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTimetableRequest $request)
    {
        //
        $request->validated();
        Timetable::create([
            'subject_id' => $request->subject,
            'teacher_id' => $request->teacher,
            'day' => $request->day,
            'time' => $request->time,
            'room_id' => $request->room
        ]);
        return back()->with('success','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Timetable $timetable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Timetable $timetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTimetableRequest $request, Timetable $timetable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Timetable $timetable)
    {
        //
    }
}
