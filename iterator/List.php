<?php
interface ListInterface {
  public function createIterator() : IteratorInterface;
}