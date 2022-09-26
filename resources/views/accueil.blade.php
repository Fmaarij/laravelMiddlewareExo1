<h1>Ceci c'est la page d'accueil</h1>
<h3>{{ Auth::user()->name }} vous êtes {{ Auth::user()->role }}</h3>
<div>
    <ul>
        <li> <a href="{{ url('/accueil') }}" class="ml-4  text-sm text-gray-700 dark:text-gray-500 underline">Accueil</a>
        </li>
        <li><a href="{{ url('/articles') }}" class="ml-4  text-sm text-gray-700 dark:text-gray-500 underline">Articles</a>
        </li>
        <li>
            <a href="{{ url('/users') }}" class="ml-4  text-sm text-gray-700 dark:text-gray-500 underline">Users</a>
        </li>
        <li><a href="{{ url('/dashboard') }}"
                class="ml-4  text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></li>
        <li><a href="{{ url('/createarticle') }}" class="ml-4  text-sm text-gray-700 dark:text-gray-500 underline">Ajouter
                Articles</a></li>
                <li><a href="{{ url('/contactpage') }}" class="ml-4  text-sm text-gray-700 dark:text-gray-500 underline">
                    See msg</a></li>
                    <li><a href="{{ url('/sendmsg') }}" class="ml-4  text-sm text-gray-700 dark:text-gray-500 underline">
                        Send msg</a></li>
    </ul>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
            {{ __('Log Out') }}
        </button>
    </form>
</div>

