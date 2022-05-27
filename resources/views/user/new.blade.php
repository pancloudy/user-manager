<a href="{{ route("user.main") }}">Back</a>
<form action="{{ route("user.save") }}">

    Name: <input type="text" name="name" value="">

    <br>

    Age:  <input type="number" name="age" value="">

    <br>

    Gender:
    <select name="gender">
        <option value="null"></option>
        <option value="male">male</option>
        <option value="female">female</option>
    </select>
    <br>

    <button>Submit</button><p>
</form>
