<x-layouts.main pageName="All Songs">
@section('content')
<x-layouts.song-list :songs="$songs">
</x-layouts.song-list>
@endsection
</x-layouts.main>