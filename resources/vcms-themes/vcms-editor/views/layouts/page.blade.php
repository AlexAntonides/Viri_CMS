@extends( $theme_path . 'layouts.master')

@section('body')
    @include( 'vcms-general.views.components.editor-bar')
    @include( 'vcms-editor.views.components.sidebar')

    <div class="content container">
        <section class="header">
            <h1>
                {{ "Page Name" }}
                <small>{{ "Short Description" }}</small>
            </h1>

            <ol>
                <li>
                    <i class="fa fa-dashboard"></i>
                    Home
                </li>
                <li>
                    <a href="#">{{ "Page Name" }}</a>
                </li>
            </ol>
        </section>

        <section class="content">
            @yield('content')
        </section>
    </div>

    <footer>
        <b>Viri</b>fied
    </footer>
@endsection