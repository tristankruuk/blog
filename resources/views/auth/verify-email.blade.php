@extends('partials.layout')
@section('content')

    <!-- Alert -->
    @if (session('status') === 'verification-link-sent')
        <div role="alert" class="alert alert-success fixed top-6 right-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            {{ session('status') }}
        </div>
    @endif

    <!-- Body -->
    <div class="container mx-auto">
        <div class="card bg-base-300 shadow-sm w-1/3 mx-auto p-6 my-6">

            <!-- Text -->
            <div class="mb-4 text-sm">
                @lang('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.')
            </div>

            <!-- Buttons -->
            <div class="flex items-center justify-between mt-4">

                <!-- Resend Verification Email -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <button type="submit" class="btn btn-primary">
                        @lang('Resend Verification Email')
                    </button>
                </form>

                <!-- Log Out -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-link">
                        @lang('Log Out')
                    </button>
                </form>

            </div>
        </div>
    </div>

@endsection