@extends('layouts.app')
@section('content')

<div class="mx-6 py-6 sm:px-6 lg:px-10 relative">
    @livewire('dashboard.programs.form-create-and-edit', ['community_id' => $community_id, 'program_id' => $id])
</div>
@endsection