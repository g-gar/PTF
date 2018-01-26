<?php

require 'lib/Test.class.php';

use \TestFramework\Test;
use \TestFramework\TestCase;
use \TestFramework\Assert;
use \BookStore\BookList;
use \BookStore\Book;

class main extends Test {
	public function __construct(){

		parent::__construct();

		$this->register(new TestCase('bookAddedCorrectly', function(){
			$bookList = new BookList();
			$bookList->addBook(new Book("J. K. Rowling", "Harry Potter and the philosopher's stone"));
			$book = $bookList->getBook(0);
			Assert::assertEqualString("J. K. Rowlin", $book->getAuthor());
		}));

		$this->run('bookAddedCorrectly');

		print_r($this->getFailedTests());
	}
}