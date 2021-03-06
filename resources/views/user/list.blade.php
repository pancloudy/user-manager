<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<form method="get"  action="{{ route("user.searchByName") }}">
    <div class="form-group">
        <input type="search" name="search" class="form-control">
        <span class="form-group-btn">
            <button type="submit">Search</button>
        </span>
    </div>

</form>


<a href="{{ route("user.main") }}">Back</a>
<table class="table">


    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Actions</th>
    </tr>


    @foreach ($user as $users)
        <tr>
            <td>
                {{ $users->id ?? false }}
            </td>
            <td>
                {{ $users->name ?? false}}
            </td>
            <td>
                {{ $users->age ?? false}}
            </td>
            <td>
                {{ $users->gender ?? false}}
            </td>
            <td>
                <form action="{{ action('App\Http\Controllers\UserController@delete', $users->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <form action="{{ action('App\Http\Controllers\UserController@edit', $users->id) }}">
                    @csrf

                    <button type="submit">Edit</button>
                </form>
            </td>
        </tr>
    @endforeach





</table>

