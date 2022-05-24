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



<button type="button" onclick="history.back();">Back</button>
<table>


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

