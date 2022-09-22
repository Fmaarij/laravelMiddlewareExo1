<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )
        <tr>
            <tbody>
                <td>{{$user->name}}</td>
                <td>{{$user->role}}</td>
            </tbody>
        </tr>
        @endforeach
    </tbody>
</table>
