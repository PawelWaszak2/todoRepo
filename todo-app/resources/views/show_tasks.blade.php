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
    </div>
</nav>
@foreach($tasks as $task)
    <form>
        <fieldset disabled style="margin-top: 20px;">
            <div class="mb-3" style="text-align: center; background: lightgray; width: 700px; border-radius: 5px; margin-left: auto; margin-right: auto">
                <div class="form-check" style="background: #000; opacity: 60%">
                    <label class="form-check-label" style="font-size: 30px; color: white">{{$task->name}}</label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">Description: {{$task->description}}</label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">Realization time: {{$task->realization_time}}</label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">Status: {{$task->status}}</label>
                </div>
            </div>
        </fieldset>

        <div style="text-align: center; margin-bottom: 20px;">
            <div style="text-align: center; margin-bottom: 20px;">
                <a href="{{ route('editTask', $task->id) }}" class="btn btn-info">Edit task</a>
                <a href="{{ route('deleteTask', $task->id) }}" class="btn btn-danger">Delete task</a>
            </div>
        </div>
    </form>
   @endforeach
</body>
</html>
