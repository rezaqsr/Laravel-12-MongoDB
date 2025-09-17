<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel 12 + Mongo DB Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    @livewireStyles
</head>
<body>
<div class="container">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="card-panel my-1 white-text red darken-1">
                {{ $error }}
            </div>
        @endforeach
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <div class="card-panel my-1 white-text green darken-1">{{ $message }}</div>
        </div>
    @endif
    {{ $slot }}
</div>
@livewireScripts
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
