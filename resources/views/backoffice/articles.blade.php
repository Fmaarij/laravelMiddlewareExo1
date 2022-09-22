<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1>Articles</h1>


<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>text</th>
            <th>User_ID</th>
            <th>Show</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->titre}}</td>
            <td>{{$item->text}}</td>
            <td>{{$item->user_id}}</td>
            <td>
                <a href="/show/{{$item->id}}">
                    <button>Show</button>
                </a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>




    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
            {{ __('Log Out') }}
        </button>
    </form>
</x-app-layout>


