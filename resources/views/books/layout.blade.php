<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 + Mongo Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>


<div class="container">
    @yield('content')
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
</div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</html>
