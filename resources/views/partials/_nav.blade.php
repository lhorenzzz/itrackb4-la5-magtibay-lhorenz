<nav>
    <br>
    <button type="button" class="btn btn-primary">
        <a href="{{ route('books.show', ['id' => 1]) }}" style="color: white; text-decoration: none;">Show Book</a>
    </button>


    <button type="button" class="btn btn-primary">
        <a href="{{ route('books.featured') }}" style="color: white; text-decoration: none;">Featured Book</a>
    </button>

</nav>
