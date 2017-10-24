@extends( $theme_path . 'layouts.master')

@section('head')

    @require( asset('/plugins/css/css-reset.css') )
    @require( asset('/plugins/css/normalize.min.css') )
    @require( asset('/plugins/css/font-awesome.min.css') )
    @require( asset('/plugins/css/bootstrap.min.css') )
    
    @require( asset('/vcms-themes/vcms-editor/css/pages/loginpage.css') )
    
    @parent
@endsection

@section('body')
    <div class="container">
        <form class="form-signin" action="{{ url('/') . '/' . $page->route . '/request' }}" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            
            @if ( $errors->any() )
                <h4>{{  $errors->first() }}</h4>
            @endif
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="_email" id="inputEmail" class="form-control" placeholder="email@provider.com" value="{{ old('_email') }}" required autofocus>
            
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="_password" id="inputPassword" class="form-control" placeholder="********" required>
            
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="_remember" value="remember-me" @if ( old('_remember') )  {{ 'checked' }} @endif > Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
@endsection