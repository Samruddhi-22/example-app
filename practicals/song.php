<?php
namespace Practicals;
class Song {
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor
     function construct($title, $artist, $genre, $tempo) {
        $this->setTitle($title);
        $this->setArtist($artist);
        $this->setGenre($genre);
        $this->setTempo($tempo);
    }

    // Getter for title
    public function getTitle() {
        return $this->title;
    }

    // Setter for title
    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter for artist
    public function getArtist() {
        return $this->artist;
    }

    // Setter for artist
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter for genre
    public function getGenre() {
        return $this->genre;
    }

    // Setter for genre
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter for tempo
    public function getTempo() {
        return $this->tempo;
    }

    // Setter for tempo
    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}
?>
