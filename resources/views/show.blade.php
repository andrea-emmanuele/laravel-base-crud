<img src="{{ $comic->thumb }}" alt="thumb"><br>
{{ $comic->title }}<br>
{{ $comic->description }}<br>
${{ $comic->price }}<br>
{{ $comic->series }}<br>
{{ $comic->sale_date }}<br>
{{ $comic->type }}<br>

<a href="/comics/{{$comic->id}}/edit">Edit</a>

<form action="/comics/{{$comic->id}}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete">
</form>
