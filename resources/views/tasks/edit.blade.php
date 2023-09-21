<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Edit Task</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="GET">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input value="{{ $task->title }}" type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $task->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit Task</button>
        </form>
    </div>
</body>
</html>


