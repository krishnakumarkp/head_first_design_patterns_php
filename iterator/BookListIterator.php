<?php
include_once("Iterator.php");
class BookListIterator implements IteratorInterface {
    protected $bookList;
    protected $currentBook = 0;

    public function __construct(BookList $bookList_in) {
      $this->bookList = $bookList_in;
    }
    public function getCurrent() {
      if (($this->currentBook > 0) && 
          ($this->bookList->getBookCount() >= $this->currentBook)) {
        return $this->bookList->getBook($this->currentBook);
      }
    }
    public function getNext() {
      if ($this->hasNext()) {
        return $this->bookList->getBook(++$this->currentBook);
      } else {
        return NULL;
      }
    }
    public function hasNext() {
      if ($this->bookList->getBookCount() > $this->currentBook) {
        return TRUE;
      } else {
        return FALSE;
      }
    }
}