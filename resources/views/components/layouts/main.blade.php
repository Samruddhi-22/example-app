<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/layouts/main.css') }}">
    <title>{{ $title ?? "Cool Web App" }} </title>
</head>

<body>
    <header class="nav">
        <h1 class="playlistName">Playlist Name</h1>
        <button class="b1">Edit Playlist</button>
        <button class="b2">New Playlist</button>
    </header>

    <main>
        <aside>
            <h2>Saved Playlists</h2>
            <ul>
                <li>Playlist 1</li>
                <li>Playlist 2</li>
                <li>Playlist 3</li>
            </ul>
        </aside>
        
       @yield('content')
        
         
</main>

    <footer>
        <p>&copy; 2023 Playlist App | <a href="#">About</a> | <a href="#">Contact</a></p>
    </footer>
</body>

</html>