<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>text</th>
            <th>User_ID</th>
            {{-- {{dd($articles->user->role)}} --}}

            {{-- @if ($articles->user->role == 'webmaster') --}}

            @if (Gate::allows('access-btnDelete', $articles))

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
            @if (Gate::allows('access-btnDelete', $articles))

                <td>

                    {{-- @if ($articles->user->role == 'webmaster') --}}
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

            {{-- @elseif ($articles->user->role == 'redacteur' && $articles->user_id == $articles->user->id) --}}
            {{-- <a href="/edit/{{ $articles->id }}">
                <button>Edit</button>
            </a>
        </td>
        <td>
            <form action="/{{ $articles->id }}/delete" method="post">
                @csrf
                @method('DELETE')
        <td>
            <button>Delete</button>
        </td> --}}
            {{-- @endif --}}

            </form>
            </td>
        </tr>
    </tbody>
</table>
