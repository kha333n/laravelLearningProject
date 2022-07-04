<h1>Users List</h1>

<table border="80">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Avatar</th>
    </tr>

    @foreach($collection as $user)
    <tr>
        <td>{{ $user['id'] }}</td>
        <td>{{ $user['first_name'] }}</td>
        <td>{{ $user['last_name'] }}</td>
        <td>{{ $user['email'] }}</td>
        <td><img src={{ $user['avatar'] }} /></td>
    </tr>
    @endforeach
</table>
