<?php

namespace App\Controller;

use App\Model\BookModel;

class BookController {
	public function getAllBooks(): ?array
	{
		$books = new BookModel;

		return $books->getData();
	}

	public function addBook(array $book): void
	{
		// TODO add
	}

	public function deleteBook(int $id): void
	{
		// TODO delete
	}
}