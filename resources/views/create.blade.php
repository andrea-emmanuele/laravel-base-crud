<form action="/comics" method="post">
    @csrf
    @method('post')
    <input type="text" name="title" placeholder="Title..." required><br>
    <textarea name="description" cols="30" rows="10" placeholder="Insert description..." required></textarea><br>
    <input type="number" name="price" placeholder="9.90" required><br>
    <input type="text" name="series" placeholder="insert series..." required><br>
    <input type="date" name="saleDate" required><br>
    <input type="text" name="type" placeholder="insert type..." required><br>
    <input type="submit" name="submit" value="Add">
</form>
