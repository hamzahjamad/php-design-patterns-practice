<?php
namespace App\DesignPatterns\AbstractFactory\BookExample;

class SamsPHPBook extends AbstractPHPBook {
    private $author;
    private $title;
    private static $num = 1;

    function __construct() {

        if (1 > self::$num) {
            $this->author = 'George Schlossnagle';
            $this->title = 'Advanced PHP Programming';
            self::$num = 0;
        }
        else {
            $this->author = 'Christian Wenz';
            $this->title = 'PHP Phrasebook';
            self::$num = 1;
        }
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}