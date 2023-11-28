<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <tr>
    @foreach ($songs as $song)
<tr>
<td>{{ $song->getTitle() }}</td>
<td>{{ $song->getArtist() }}</td>
</tr>
@endforeach
    </tr>

</body>
</html>
