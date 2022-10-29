<form method="POST" action="/events/register_action">
    @csrf
 
    Enter your name: <input type="text" name="student_name">
    <input type="submit" name="submit">
</form>