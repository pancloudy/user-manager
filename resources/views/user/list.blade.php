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

<form method="get"  action="/search">
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

    </tr>


    @foreach ($user as $users)
        <tr>
            <td>
                {{ $users->id }}
            </td>
            <td>
                {{ $users->name }}
            </td>
            <td>
                {{ $users->age }}
            </td>
            <td>
                {{ $users->gender }}
            </td>
        </tr>
    @endforeach





</table>

