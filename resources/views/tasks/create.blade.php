
<h2>create task</h2>
<form action="/tasks" method="post">
    @csrf
    <input type="text" name="name">

    <input type="submit" value="submit">
</form>