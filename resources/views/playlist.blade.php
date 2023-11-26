<x-layouts.main pageName="Playlist - {{$playlistId}}">

@section('content')
<x-songs-list :songs="$songs">
</x-songs-list>
@endsection

</x-layouts.main>