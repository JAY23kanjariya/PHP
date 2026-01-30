<?php
echo "Write a class Book with three data members BookID, Pages and 
Price. It also contains the following member functions:
• The get() function is used to input values
• The show() function is used to display values
• The set() function is used to set the values of data members using 
parameters
• The getPrice() function is used to return the value of Price
The program should create two objects of this class and input values for 
these objects. The program should display the details of the most costly 
book<hr>";

class Book
{
    private $bookID;
    private $pages;
    private $price;

    public function set($id, $pages, $price)
    {
        $this->bookID = $id;
        $this->pages = $pages;
        $this->price = $price;
    }

    public function get():int
    {
       return $this->bookID;
    }

    public function show()
    {
        echo "Book ID : $this->bookID <br>";
        echo "Number of Pages : $this->pages <br>";
        echo "Price : $this->price <br>";
    }

    public function getPrice():int
    {
        return $this->price;
    }
}

function costlyBook(&$books)
{
    $costly = $books[0];
    foreach ($books as $bk) {
        if ($bk->getPrice() > $costly->getPrice()) {
            $costly = $bk;
        }
    }
    return $costly;
}

$book1 = new Book();
$book1->set(7025, 342, 999);

$book2 = new Book();
$book2->set(7043, 281, 499);

echo "<b>Most Costly Book </b><br>";
$books = [$book1, $book2];
costlyBook($books)->show();
