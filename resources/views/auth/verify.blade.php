@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Потвърдете вашият имейл адрес!') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('Нов линк бе изпратен за потвърждение на вашият имейл адрес.') }}
                    </div>
                    @endif

                    {{ __('Преди да продължите, моля проверете вашият имейл адрес за линк.') }}
                    {{ __('Ако не сте получили имейл') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('натиснете тук за
                            получаване на нов линк.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection