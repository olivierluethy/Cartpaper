<?php
class Instakilo
{
    public $db;

    public function __construct()
    {
        $this->db = connectDatabase();
    }

    /* Buch hinzufügen */
    public function createBook(){
        $statement = $this->db->prepare('SELECT images.imageId, images.titel, images.beschreibung, images.datum, images.ort, images.imageType, images.imageData FROM images');
        $statement->execute();
        return $statement;
    }

    /* Buch bearbeiten */
    public function editBook(){
        $statement = $this->db->prepare('SELECT images.imageId, images.titel, images.beschreibung, images.datum, images.ort, images.imageType, images.imageData FROM images');
        $statement->execute();
        return $statement;
    }

    /* Buch löschen */
    public function deleteBook(){
        $statement = $this->db->prepare('SELECT images.imageId, images.titel, images.beschreibung, images.datum, images.ort, images.imageType, images.imageData FROM images');
        $statement->execute();
        return $statement;
    }
}