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
                            <form id="register-form" action="{{ route('register') }}" method="POST"
                                  role="form" style="display: block;">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control"
                                           placeholder="{{ __('Username') }}" value="{{old('username')}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" id="name" tabindex="1" class="form-control"
                                           placeholder="{{ __('Name') }}" value="{{old('name')}}"></div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control"
                                        placeholder="{{ __('Email') }}" value="{{old('email')}}">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2"
                                        class="form-control" placeholder="{{__('Password')}}">
                                </div>
                                <div class="form-group">
                                    <input
                                        type="password" name="password_confirmation" id="password_confirmation" tabindex="2" class="form-control"
                                        placeholder="{{__('Confirm Password')}}">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <a class="col-sm-6 mdi-format-vertical-align-center"
                                           href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                        <div class="col-sm-6">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register"
                                                value="{{ __('Register') }}">
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
</x-layout>

