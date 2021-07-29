<?php 
spl_autoload_register(function ($class_name) {
    $file = $class_name . '.php';
    include $file;
});
writeln('BEGIN TESTING ITERATOR PATTERN');
writeln('');
 
$firstBook = new Book('Core PHP Programming, Third Edition', 'Atkinson and Suraski');
$secondBook = new Book('PHP Bible', 'Converse and Park');
$thirdBook = new Book('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');

$books = new BookList();
$books->addBook($firstBook);
$books->addBook($secondBook);
$books->addBook($thirdBook);

writeln('Testing the Iterator');

$booksIterator = $books->createIterator();

while ($booksIterator->hasNext()) {
$book = $booksIterator->getNext();
writeln('getting next book with iterator :');
writeln($book->getAuthorAndTitle());
writeln('');
}

$book = $booksIterator->getCurrent();
writeln('getting current book with iterator :');
writeln($book->getAuthorAndTitle());
writeln('');  

writeln('END TESTING ITERATOR PATTERN');

function writeln($line_in) {
    echo $line_in."\n";
}