<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite(['resources/scss/app.css', 'resources/js/app.js'])
</head>
<body>

<form action="{{route('updateTask', $task->id)}}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name </label>
        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$task->name}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input name="description" type="text" class="form-control" id="exampleInputPassword1" value="{{$task->description}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Realization time</label>
        <input name="realization_time" type="datetime-local" class="form-control" id="exampleInputPassword1" value="{{$task->realization_time}}">
    </div>
    <button type="submit" class="btn btn-primary">Update task</button>
</form>

</body>
</html>
