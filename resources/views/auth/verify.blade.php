@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-20">

                <div class="text-2xl my-5">{{ __('Verify Your Email Address') }}</div>


                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="bg-gray-500 max-w-sm w-full hover:bg-gray-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase mt-10">{{ __('click here to request another') }}</button>
                    </form>

            </div>

@endsection
