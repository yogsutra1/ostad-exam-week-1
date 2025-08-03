<?php
class Book
{
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies)
    {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }

    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    public function returnBook()
    {
        $this->availableCopies++;
    }
}

class Member
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function borrowBook($book)
    {
        if ($book->borrowBook()) {
            echo $this->name . " '" . $book->getTitle() . "' Borrow The Book\n<br>";
        } else {
            echo $this->name . " '" . $book->getTitle() . "' Book is not available\n<br>";
        }
    }

    public function returnBook($book)
    {
        $book->returnBook();
        echo $this->name . " '" . $book->getTitle() . "' Return the book\n<br>";
    }
}


echo "<h2>Library System Demo</h2>";

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


$member1->borrowBook($book1);
$member2->borrowBook($book2);

$member1->returnBook($book1);
$member2->returnBook($book2);


echo "<h3>Present Stock:</h3>";
echo "'" . $book1->getTitle() . "' - Available Copies: " . $book1->getAvailableCopies() . "<br>";
echo "'" . $book2->getTitle() . "' - Available Copies: " . $book2->getAvailableCopies() . "<br>";
