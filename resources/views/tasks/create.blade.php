
<h2>create task</h2>
<!-- <form action="/tasks" method="post"> -->
<form action="{{route('tasks.store')}}" method="post">
    @csrf
    <input type="text" name="name">

    <input type="submit" value="submit">
</form>