<table>
    <thead>

        <tr>
            <th>Email</th>
            <th>Msg</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($contacts as $item)
        <tr>
            <td>{{$item->email}}</td>
            <td>{{$item->msg}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
