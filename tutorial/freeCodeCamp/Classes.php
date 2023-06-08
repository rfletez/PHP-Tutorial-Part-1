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

            //constructor
            function __construct($title, $author, $pages)
            {
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
            }

            function hasManyBooks() {
                if($this->pages < 300) {
                    return false;
                }
                return true;
            }
        }

        $book1 = new Book("The Lord of the Rings", "J.R.R. Tolkien", 900);
        $book2 = new Book("Sherlock Holmes", "Conan Doyle", 500);

        echo($book1->hasManyBooks());
        
    ?>    

</body>
</html>