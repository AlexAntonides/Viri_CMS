@extends( $theme_path . 'layouts.page')

<?php 
    $usersManager = $controller->GetUsersManager();
    $userData = $usersManager->GetUserById( $parameters['id'] );

    $usersManager->Build($userData);
?>

@section('content')

<div class="row">
    <div class="col-md-3">
        <div>
            <img class="img-responsive img-circle" src="http://via.placeholder.com/128x128" alt="User profile picture">
            <h3>{{ $userData->name }}</h3>
            @if ($userData->title) <p>{{ $userData->title }}</p> @endif
        </div>
    </div>
</div>

@endsection