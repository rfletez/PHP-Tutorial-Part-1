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
            //var and public are the same, but mainly use public for variables.
            var $title;
            public $author;
            private $pages;
            private $publisher;

            //constructor
            function __construct($title, $author, $pages)
            {
                $this->title = $title;
                $this->author = $author;
                $this->setPages($pages);
            }

            //Object Function
            function hasManyBooks() {
                if($this->pages < 300) {
                    return false;
                }
                return true;
            }

            function getPages() {
                return $this->pages;
            }
            function setPages($pages) {
                if($pages <= 0 || $pages >= 5000) {
                    echo("Invalid number of pages");
                }
                else {
                    $this->pages = $pages;
                }
            }

            function getPublisher() {
                return $this->publisher;
            }
            function setPublisher($publisher) {
                $this->publisher = $publisher;
            }
        }

        $book1 = new Book("The Lord of the Rings", "J.R.R. Tolkien", 900);
        $book2 = new Book("Sherlock Holmes", "Conan Doyle", 500);

        echo($book1->hasManyBooks());

        $book1->setPages(2000);
        echo($book1->getPages());
    ?>    

</body>
</html>