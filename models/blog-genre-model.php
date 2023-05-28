<?php
class BlogGenreModel{
    private $genreName, $genreIcon, $genreId, $isDeleted, $genrePosts, $dateCreated;

    public function __construct($genreName, $genreIcon, $genreId, $isDeleted, $genrePosts, $dateCreated) {
        $this->genreName = $genreName;
        $this->genreIcon = $genreIcon;
        $this->genreId = $genreId;
        $this->isDeleted = $isDeleted;
        $this->genrePosts = $genrePosts;
        $this->dateCreated = $dateCreated;
    }

    public function getGenreName() {
        return $this->genreName;
    }

    public function setGenreName($genreName) {
        $this->genreName = $genreName;
    }

    public function getGenreIcon() {
        return $this->genreIcon;
    }

    public function setGenreIcon($genreIcon) {
        $this->genreIcon = $genreIcon;
    }

    public function getGenreId() {
        return $this->genreId;
    }

    public function setGenreId($genreId) {
        $this->genreId = $genreId;
    }

    public function getIsDeleted() {
        return $this->isDeleted;
    }

    public function setIsDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }

    public function getGenrePosts() {
        return $this->genrePosts;
    }

    public function setGenrePosts($genrePosts) {
        $this->genrePosts = $genrePosts;
    }

    public function getDateCreated() {
        return $this->dateCreated;
    }

    public function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;
    }
}