<form action="/comics/{{$comic->id}}" method="post">
    @csrf
    @method('put')
    <{{--input type="number" name="id" value="{{$comic->id}}" style="display: none">--}}
    <input type="text" name="title" placeholder="Title..." value="{{$comic->title}}" required><br>
    <textarea name="description" cols="30" rows="10" placeholder="Insert description..." required>{{$comic->description}}</textarea><br>
    <input type="number" name="price" placeholder="9.90" value="{{$comic->price}}" required><br>
    <input type="text" name="series" placeholder="insert series..." value="{{$comic->series}}" required><br>
    <input type="date" name="saleDate" value="{{ date('Y-m-d', strtotime($comic->sale_date))}}" required><br>
    <input type="text" name="type" placeholder="insert type..." value="{{$comic->type}}" required><br>
    <input type="submit" name="submit" value="Update">
</form>
