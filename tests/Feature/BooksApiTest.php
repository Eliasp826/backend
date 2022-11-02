<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Book;

class BooksApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_get_all_book()
    {
        $book = Book::factory(4)->create();


        $response = $this->getJson(route('books.index'));

        $response->assertJsonFragment([
            'title'=> $books[0]->title
        ]);
    }
    /** @test */
function can_get_one_book()
{
    $book = Book::factory()->create();

    dd(route('books.show', $book));
}
}
