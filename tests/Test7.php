<?php

namespace Tests\Test7;

class Book {
	private $author;
	private $title;

	function __construct($author, $title) {
		$this->author = $author;
		$this->title = $title;
	}
	function getAuthor() {
		return $this->author;
	}
    function getTitle() {
    	return $this->title;
    }
    function getAuthorAndTitle() {
      return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}

class BookList {
	private $books;

	function __construct(){
		$this->books = array()
	}
	function getBookCount() {
		return count($this->books());
	}
	function getBook($index){
		return is_numeric($index) && $index < $this->getBookCount() ? $this->books[$index] : null;
	}
	function addBook(Book $book) {
		$this->books[] = $book;
	}
	function removeBook(Book $book) {
		if ($i = array_search($book, $books)) {
			array_splice($books, $i);
		}
	}
}

class main {
	function __constructor(){

	}
}