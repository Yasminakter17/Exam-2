<?php

    class Book {
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;
    
    public function __construct($title, $availableCopies) {
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
        }


    // TODO: Add getTitle method
        public function getTitle(){
            return $this->title;
        }

    // TODO: Add getAvailableCopies method
    
        public function getAvailableCopies(){
            return $this->availableCopies;
        }


    // TODO: Add borrowBook method
    
        public function borrowBook(){
            if($this->availableCopies > 0){
                $this->availableCopies--;
            }else{
                echo "No availableCopies for '{$this->title}'to borrow";
            }
        }


    // TODO: Add returnBook method
        public function returnBook (){
            $this->availableCopies++;
        }
        }


    class Member {
    // TODO: Add properties as Private
        private $name;


    public function __construct($name) {
        // TODO: Initialize properties
        $this->name = $name;
        }


    // TODO: Add getName method
    public function getName (){
        return $this->name;
    }
    
    // TODO: Add borrowBook method
    
    public function borrowBook($book){
        $book->borrowBook();
    }


    // TODO: Add returnBook method
    public function returnBook($book){
        $book->returnBook();
    }
    
    }

    $book1 = new book("The Great Gatsby", 5);
    $book2 = new book("To Kill a Mockingbird",3);

    $member1 = new Member("John Doe");
    $member2 = new Member("Jane Smith");

    $member1->borrowBook($book1);
    $member1->borrowBook($book2);


    echo "Available Copies of'{$book1->getTitle()}' : {$book1->getAvailableCopies()}".PHP_EOL;
    echo "Available Copies of '{$book2->getTitle()}' : {$book2->getAvailableCopies()}";
    




