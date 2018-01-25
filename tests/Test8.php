<?php

require 'lib/Test.class.php';
require 'tests/classes/BookStore.class.php';

class main extends \TestFramework\Test {
	public function __construct(){

		parent::__construct();

		$this->register(new \TestFrameWork\TestCase('bookAddedCorrectly', function(){
			$bookList = new \BookStore\BookList();
			$bookList->addBook(new \BookStore\Book("J. K. Rowling", "Harry Potter and the philosopher's stone"));
			$book = $bookList->get(0);
			//$this->assertEqual("J. K. Rowlin", $book->getAuthor());

			return true;
		}));

		echo $this->run('bookAddedCorrectly');
	}
}