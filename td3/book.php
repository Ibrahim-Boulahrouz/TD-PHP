<?php
class Book
{
    private $title;
    private $author;
    private $editor;
    private $pageNb;
    public function __construct($valTitle, $valAuthor, $valEditor, $valPageNb)
    {
        $this->title = $valTitle;
        $this->author = $valAuthor;
        $this->editor = $valEditor;
        $this->pageNb = $valPageNb;
    }
    function getTitle(){return $this->title;}
    public function setTitle($val) { $this->title = $val;}
    public function getAuth() {return $this->author;}
    public function setAuth($val) { $this->author = $val;}
    public function getEditor() {return $this->editor;}
    public function setEditor($val) { $this->editor = $val;}
    public function getNb() {return $this->pageNb;}
    public function setNb($val) { $this->pageNb = $val;}
    public function showBook() {echo '</br>Titre: ' . $this->title . '</br>Auteur: ' . $this->author . '</br>Editeur: ' . $this->editor . '</br>Nombre de pages: ' . $this->pageNb . '</br>';}

}
$book = new Book('titre', 'moi', 'moi aussi', '50');
$book->showBook();