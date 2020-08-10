@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: right">{{ __('الدخول') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <x-socialite-providers></x-socialite-providers>
                        
                        
                        <div class="form-group row" >
                            <div class="col-md-8" style="margin-right: 100px">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="البريد الإلكتروني
                                " required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8" style="margin-right: 100px">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="الرمز السري" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 form-group" style="margin-right: 60px">
                            <div class="col-md-8 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" style="margin-right: 20px">
                                        {{ __('تسجيل المعلومات') }}
                                    </label>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 form-group" style="margin-right: 25px">
                            <button type="submit" class="btn">
                                {{ __('الدخول') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __(' إسترجاع كلمة المرور ؟') }}
                                </a>
                            @endif
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
