<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $item )
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->email}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
