<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="{{ route('login') }}" method="post" role="form" style="display: block;">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">{{ __('Email') }}</label>
                                        <input type="text" name="email" id="email" tabindex="1" class="form-control"
                                               placeholder="{{ __('Email') }}" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">{{__('Password')}}</label>
                                        <input type="password" name="password" id="password" tabindex="2"
                                               class="form-control" placeholder="{{__('Password')}}">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> {{ __('Remember me') }}</label>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <a class="col-sm-6 mdi-format-vertical-align-center"
                                               href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4"
                                                       class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

