<?php
namespace Practicals;
// Declaraction of class
class Song {
    // Declaration of class members
    private $title;
    private $artist;
    private $genre;
    private $tempo;

// Constructor
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }
    // public function __construct($title, $artist, $genre, $tempo) {
    //     $this->title = $title;
    //     $this->artist = $artist;
    //     $this->genre = $genre;
    //     $this->tempo = $tempo;
    // }
//Getter and Setter Methods
    public function getTitle() {
        return $this->title;
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function getArtist() {
        return $this->artist;
    }
    public function setArtist($artist) {
        $this->artist = $artist;
    }
    public function getGenre() {
        return $this->genre;
    }
    public function setGenre($genre) {
        $this->genre = $genre;
    }
    public function getTempo() {
        return $this->tempo;
    }
    public function setTempo($tempo) {
        if (!is_numeric($tempo) || floatval($tempo) != intval($tempo)) {
            throw new \InvalidArgumentException("Tempo must be a valid integer.");
        }
        $this->tempo = (int)$tempo;
    }
    
}
?>