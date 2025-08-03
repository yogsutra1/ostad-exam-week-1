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
            echo $this->name . " '" . $book->getTitle() . "' বইটি ধার নিলেন\n<br>";
        } else {
            echo $this->name . " '" . $book->getTitle() . "' বইটি এখন পাওয়া যাচ্ছে না\n<br>";
        }
    }

    public function returnBook($book)
    {
        $book->returnBook();
        echo $this->name . " '" . $book->getTitle() . "' বইটি ফেরত দিলেন\n<br>";
    }
}

// লাইব্রেরি সিস্টেম ডেমো
echo "<h2>লাইব্রেরি সিস্টেম ডেমো</h2>";

// বই তৈরি
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// সদস্য তৈরি
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// বই ধার নেওয়া
$member1->borrowBook($book1);  // জন ডো The Great Gatsby ধার নেবেন
$member2->borrowBook($book2);  // জেন স্মিথ To Kill a Mockingbird ধার নেবেন

// বই ফেরত দেওয়া
$member1->returnBook($book1);  // জন ডো বই ফেরত দেবেন
$member2->returnBook($book2);  // জেন স্মিথ বই ফেরত দেবেন

// উপলব্ধ কপি দেখানো
echo "<h3>বইয়ের বর্তমান স্টক:</h3>";
echo "'" . $book1->getTitle() . "' - উপলব্ধ কপি: " . $book1->getAvailableCopies() . "<br>";
echo "'" . $book2->getTitle() . "' - উপলব্ধ কপি: " . $book2->getAvailableCopies() . "<br>";
