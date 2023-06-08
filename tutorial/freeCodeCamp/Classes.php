<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes & Objects in PHP</title>
</head>

<body>
    <?php 
        class Book {
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book;
        $book1->title = "The Lord of the Rings";
        $book1->author = "J.R.R. Tolkien";
        $book1->pages = 456;

        $book2 = new Book;
        $book2->title = "Sherlock Holmes";
        $book2->author = "Conan Doyle";
        $book2->pages = 500;
    ?>    
</body>
</html>