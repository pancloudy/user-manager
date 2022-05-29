@if($message = Session::get('danger'))
    <div class="alert alert-danger">
        <strong>{{ $message }}</strong>
    </div>
@endif
@foreach ($user as $users)
    <form action="{{ action('App\Http\Controllers\UserController@update', $users->id) }}" method="post">
        @csrf
        @method('PUT')
        Name: <input type="text" name="name" value="{{ $users->name }}">

        <br>

        Age:  <input type="number" name="age" value="{{ $users->age }}">

        <br>
        Gender:
        @if($users->gender=="MALE")
            <select name="gender">
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
        @else
            <select name="gender">
                <option value="female">female</option>
                <option value="male">male</option>
            </select>
        @endif




        <br>
        <button type="submit">Update</button>
    </form>
@endforeach
