<?php

namespace BookStore;

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