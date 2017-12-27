@extends( $theme_path . 'layouts.master')

@section('adminbar.leftnav')
    <a href="#">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </a>
    @parent
@endsection

@section('body')
    @include( 'vcms-general.views.components.editor-bar')
    @include( 'vcms-editor.views.components.sidebar')

    <div class="content container-fluid">
        <section class="header">
            <h1>
                {{ $page->name }}
                @if ( isset( $page->description ) ) <small>{{ $page->description }}</small> @endif
            </h1>

            <ol>
                <li>
                    <i class="fa fa-dashboard"></i>
                    <a href="{{ route('vcms-dashboard') }}">Home</a>
                </li>
                <li>
                    {{ $page->name }}
                </li>
            </ol>
        </section>

        <section class="content">
            @yield('content')
        </section>
    </div>
        
    <footer class="main-footer">
        <div class="pull-left">
            <b>Copyright &copy; 2017-{{ date("Y") }}</b> <a href="#">Your Company Name</a>. All rights reserved. 
        </div>

        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0 - <a href="http://www.Viridiel.com/"><b>Viri</b>fied</a>
        </div>
    </footer>
    @parent
@endsection