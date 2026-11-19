@extends('partials.layout')
@section('content')

    <div class="container mx-auto card bg-base-300 shadow-sm w-1/3 mx-auto p-6">

        @lang("You're logged in!")

        <div class="flex items-center justify-end mt-4">
        <a href="{{ route('profile.edit') }}" class="btn btn-primary">@lang('Back to profile')</a>
        </div>

    </div>

@endsection