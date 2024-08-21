<?php

class Book {

    // Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the number of available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
        } else {
            echo "No copies available for the book: {$this->title}<br>";
        }
    }

    // Method to return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {

    // Private property
    private $name;

    // Constructor to initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the name of the member
    public function getName() {
        return $this->name;
    }

    // Method for a member to borrow a book
    public function borrowBook($book) {        
        $book->borrowBook();
    }

    // Method for a member to return a book
    public function returnBook($book) {       
        $book->returnBook();
    }
}

// Usage

// Create 2 books
$objBook1 = new Book("The Great Gatsby", 5);
$objBook2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$objMember1 = new Member("John Doe");
$objMember2 = new Member("Jane Smith");

// Member 1 borrows Book 1
$objMember1->borrowBook($objBook1);

// Member 2 borrows Book 2
$objMember2->borrowBook($objBook2);

// Print available copies of each book
echo "Available Copies of '{$objBook1->getTitle()}': {$objBook1->getAvailableCopies()}<br><br>";
echo "Available Copies of '{$objBook2->getTitle()}': {$objBook2->getAvailableCopies()}<br><br>";

?>
