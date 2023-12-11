@extends('layouts.app')
@section('content')
<div class="mt-2 mx-8 px-10 sm:px-10 lg:px-10" style="background: rgba(217, 217, 217, 0.85);">

    @if (is_null($community_census))
        @include('dashboard.communities.census.create_and_edit')
    @endif

</div>
@endsection