@extends('partials.layout')
@section('content')

    <!-- Body -->
    <div class="container mx-auto">
        <div class="flex flex-col w-2/3 mx-auto gap-6 my-6">
            @include('profile.partials.update-profile-information-form')
            @include('profile.partials.update-password-form')
            @include('profile.partials.delete-user-form')
        </div>
    </div>

@endsection