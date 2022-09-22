<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>text</th>
            <th>User_ID</th>
            @if($users->role == 'admin')
            <th>Edit</th>
            <th>Delete</th>
            @endif
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $articles->id }}</td>
            <td>{{ $articles->titre }}</td>
            <td>{{ $articles->text }}</td>
            <td>{{ $articles->user_id }}</td>
            <td>
                @if($users->role == 'admin')
                <a href="/edit/{{ $articles->id }}">
                    <button>Edit</button>
                </a>
            </td>
            <td>
                <form action="/{{ $articles->id }}/delete" method="post">
                    @csrf
                    @method('DELETE')
            <td>
                <button>Delete</button>
            </td>
            @endif
            </form>
            </td>
        </tr>
    </tbody>
</table>
