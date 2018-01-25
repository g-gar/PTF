<?php

namespace BookStore;

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
		$this->books = array();
	}
	function getBookCount() {
		return count($this->books);
	}
	function getBook($index){
		return is_numeric($index) && $index < $this->getBookCount() ? $this->books[$index] : null;
	}
	function addBook(Book $book) {
		$this->books[$this->getBookCount()] = $book;
	}
	function removeBook(Book $book) {
		if ($i = array_search($book, $this->books)) {
			array_splice($books, $i, 1);
		}
	}
}

class BookListIterator {
	protected $bookList;

	function __construct(BookList $bookList){
		$this->bookList = $bookList;
	}

	function getCurrentBook(){
		return 0 < $this->bookList->getBookCount() ? $bookList->getBook(0) : null;
	}
	function getNextBook(){
		$get = function (&$bookList){
			$book = $bookList->getBook(0);
			$bookList->removeBook($book);
			return $book;
		};
		$book = $this->hasNextBook() ? $get($this->bookList) : null;
		return $book;
	}
	function hasNextBook(){
		return 0 < $this->bookList->getBookCount() ? true : false;
	}
	function getBookList(){ return $this->bookList; }
}