@extends('admin.layouts.master')
@section('content')
<div>
    <div class="flex justify-between">
        <h1>{{ __('Create Subject') }}</h1>
    </div>

    <div class="card">
        <form wire:submit.prevent="createSubject">
            <div class="grid sm:grid-cols-1 md:grid-cols-2 gap-4">
                <x-form.input type="text" name="subject_name" label="{{ __('Subject Name') }}" wire:model.defer="subject_name" required />
                <x-form.input type="text" name="subject_code" label="{{ __('Subject Code') }}" wire:model.defer="subject_code" required />
                <x-form.input type="text" name="subject_teacher" label="{{ __('Subject Teacher') }}" wire:model.defer="subject_teacher" />
            </div>

            <div class="mt-5">
                <button type="submit" class="btn btn-primary">{{ __('Create Subject') }}</button>
                <a href="{{ route('admin.subjects.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</div>

@endsection

