<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class BookController extends Controller
{
    public function index()
    {
        $books = $this->getBooks();
        return view('books.index', ['books' => $books]);
    }
    public function show($id)
    {
        $books = $this->getBooks();
        if (!isset($books[$id])) {
            abort(404);
        }
        return view('books.show', ['book' => $books[$id]]);
    }


    public function featured()
    {
        $books = $this->getBooks();
        $featuredBook = ($books[2]);

        return view('books.featured', ['book' => $featuredBook]);
    }
    public function filter($value = null)
    {
        $books = $this->getBooks();
        $filteredBooks = [];
        foreach ($books as $id => $book) {
            if ($value == null || $book['author'] == $value) {
                $filteredBooks[$id] = $book;
            } if ($value == null || $book['genre'] == $value) {
                $filteredBooks[$id] = $book;
            } if ($value == null || $book['year'] == $value) {
                $filteredBooks[$id] = $book;
            }
        }
        return view('books.filter', ['books' => $filteredBooks, 'value' => $value]);
    }
    private function getBooks()
    {
        $books = [
            1 => ['title' => 'Zenless Zone Zero', 'author' => 'HoYoverse', 'year' => '2024', 'genre' => 'Action'],
            2 => ['title' => 'Genshin Impact', 'author' => 'HoYoverse', 'year' => '2020', 'genre' => 'Fantasy'],
            3 => ['title' => 'Honkai: Star Rail', 'author' => 'HoYoverse', 'year' => '2023', 'genre' => 'Space'],
            4 => ['title' => 'Dark Souls I', 'author' => 'FromSoftware', 'year' => '2011', 'genre' => 'Dark Fantasy'],
            5 => ['title' => 'Dark Souls II', 'author' => 'FromSoftware', 'year' => '2012', 'genre' => 'Dark Fantasy'],
            6 => ['title' => 'Dark Souls III', 'author' => 'FromSoftware', 'year' => '2026', 'genre' => 'Dark Fantasy'],
        ];

        //$books = [];  //->this returns no books found message in the view

        return $books; //returns the data from $books array
    }
}
