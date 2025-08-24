<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite(['resources/scss/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('createTask')}}">Add task</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('getAllTasks')}}">My tasks</a>
            </li>
        </ul>
        @guest
            <button class="btn btn-info" style="position: absolute; margin-left: 80%"><a style="text-decoration: none; color: black" href="{{route('loginIndex')}}">Log in</a></button>
            <button class="btn btn-success" style="position: absolute; margin-left: 86%"><a style="text-decoration: none; color: black" href="{{route('registerIndex')}}">Register</a></button>
        @endguest
    </div>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        @auth
            <span style="color: white">Hi there, {{Auth::user()->name}}</span>
            <button class="btn btn-danger">Log out</button>
        @endauth
    </form>
</nav>

    <main>
        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-4 mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <button class="btn btn-danger">{{ $errors }}</button>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('registerRequest')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input value="{{old('name')}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">E-mail</label>
                <input value="{{old('email')}}" name="email" type="email" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input  name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone number</label>
                <input value="{{old('phone_number')}}" name="phone_number" type="number" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Create task</button>
        </form>
    </main>
</body>
</html>
