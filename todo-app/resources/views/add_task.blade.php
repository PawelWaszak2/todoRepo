<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite(['resources/scss/app.css', 'resources/js/app.js'])
</head>
<body>

<form action="{{route('sendTask')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name </label>
        <input placeholder="Task name" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <input placeholder="Task description" name="description" type="text" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Realization time</label>
        <input name="realization_time" type="datetime-local" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Create task</button>
</form>
</body>
</html>
