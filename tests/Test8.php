<?php

namespace Store;

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

namespace Tests\Test8;

class TestCase {
	public $testName;
	public $testFunction;

	function __construct($testName, \Closure $testFunction) {
		$this->testName = $testName;
		$this->testFunction = $testFunction;
	}
}

class Test {
	private $testsCases;

	public function __construct() {
		$this->testsCases = array();
	}

	public function register($testCase){
		$this->testCases[$testCase->testName] = \Closure::fromCallable($testCase->testFunction);
	}

	public function run($testName, \ArrayObject $params=null) {
		// TODO: inject params
		$testFunction = $this->get($testName)->testFunction;
		return $testFunction();
	}

	public function get($testName) {
		return ($i = array_search($testName, array_keys($this->testCases))) ? $this->$testCases[$i] : null;
	}

	public function assertEqual($string1, $string2){
		if ($string1 === $string2) {
			return true;
		} else {
			Throw new Exception("assertEqual failed for '$string1' and '$string2'");
		}
	}
}

class main extends Test {
	public function __construct(){

		parent::__construct();

		$this->register(new TestCase('bookAddedCorrectly', function(){
			$bookList = new \Store\BookList();
			$bookList->addBook(new \Store\Book("J. K. Rowling", "Harry Potter and the philosopher's stone"));
			$book = $bookList->get(0);
			$this->assertEqual("J. K. Rowlin", $book->getAuthor());

			return true;
		}));

		$this->run('bookAddedCorrectly');
	}
}