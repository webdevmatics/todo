
<h2>Edit task</h2>
<!-- <form action="/tasks/{{$task->id}}" method="post"> -->
<form action="{{route('tasks.update', $task->id)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" value="{{$task->name}}">

    <input type="submit" value="submit">
</form>