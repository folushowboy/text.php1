<?php
    
    class Book {
        //properties
        public $name;
        public $author;
        public $price;
        public $year;

        //method

        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function set_author($author){
            $this->author = $author;    
        }
        function get_author(){
            return $this->author;
        }   
        function set_price($price){
            $this->price = $price;    
        }
        function get_price(){
            return $this->price;
        }   
        function set_year($year){
            $this->year = $year;    
        }
        function get_year(){
            return $this->year;
        }   
    }

    $manual = new Book();
    $manual->set_name('magician');
    $manual_name = $manual->get_name();
    echo($manual_name); 
    
    $manual = new Book();
    $manual->set_author(' Emily Brontë');
    $manual_author = $manual->get_author();
    echo($manual_author);
    
    $manual = new Book();
    $manual->set_price(' $10');
    $manual_price = $manual->get_price();
    echo($manual_price);
    
      
    $manual = new Book();
    $manual->set_year(' 2000');
    $manual_year = $manual->get_year();
    echo($manual_year);
    

