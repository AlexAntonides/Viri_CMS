@extends( $theme_path . 'layouts.page')

<?php
    use App\Managers\PagesManager;
    $pagesManager = new PagesManager();

    $pages = $pagesManager->pages;
?>

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Path</th>
            <th>Theme</th>
            <th>View</th>
            <th>Route</th>
            <th>Type</th>
            <th>Middleware</th>
            <th>Action</th>
            <th>Comment</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($pages); $i++)
            <tr>
                <th>{{ $pages[$i]->name }}</th>
                <th>{{ $pages[$i]->path }}</td>
                <th>{{ $pages[$i]->theme }}</td>
                <th>{{ $pages[$i]->view }}</td>
                <th>{{ $pages[$i]->route }}</td>
                <th>{{ $pages[$i]->route_type }}</td>
                <th>{{ $pages[$i]->middleware }}</td>
                <th>{{ $pages[$i]->action }}</td>
                <th>{{ $pages[$i]->comment }}</td>
            </tr>
        @endfor
    </tbody>
</table>

@endsection