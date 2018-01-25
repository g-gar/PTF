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

class TestCases {

}

class Test {
	private $testsCases;

	public function __construct() {
		$this->testsCases = array();
	}

	public function register($testCase){
		$this->testCases[$testCase->testName] = $testCase->testFunction;
	}

	public function run($testName, \ArrayObject $params=null) {
		// TODO: inject params 
		if ($t = $this->get($testName))
			return $t();
		else Throw new \Exception("not found");
	}

	public function get($testName) {
		return (!!array_search($testName, array_keys($this->testCases))) ? $this->$testCases[$testName] : null;
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

		echo $this->run('bookAddedCorrectly');
	}
}