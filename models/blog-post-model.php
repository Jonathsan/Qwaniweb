<?php

class BlogPostModel{
    private $blogPostId,$blogPostTitle,$blogPostBody,$blogPostAuthor,$dateCreated,$isDeleted,$dateModified;

    public function __construct($blogPostId, $blogPostTitle, $blogPostBody, $blogPostAuthor, $dateCreated, $isDeleted, $dateModified) {
        $this->blogPostId = $blogPostId;
        $this->blogPostTitle = $blogPostTitle;
        $this->blogPostBody = $blogPostBody;
        $this->blogPostAuthor = $blogPostAuthor;
        $this->dateCreated = $dateCreated;
        $this->isDeleted = $isDeleted;
        $this->dateModified = $dateModified;
    }

    public function getBlogPostId() {
        return $this->blogPostId;
    }

    public function setBlogPostId($blogPostId) {
        $this->blogPostId = $blogPostId;
    }

    public function getBlogPostTitle() {
        return $this->blogPostTitle;
    }

    public function setBlogPostTitle($blogPostTitle) {
        $this->blogPostTitle = $blogPostTitle;
    }

    public function getBlogPostBody() {
        return $this->blogPostBody;
    }

    public function setBlogPostBody($blogPostBody) {
        $this->blogPostBody = $blogPostBody;
    }

    public function getBlogPostAuthor() {
        return $this->blogPostAuthor;
    }

    public function setBlogPostAuthor($blogPostAuthor) {
        $this->blogPostAuthor = $blogPostAuthor;
    }

    public function getDateCreated() {
        return $this->dateCreated;
    }

    public function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;
    }

    public function getIsDeleted() {
        return $this->isDeleted;
    }

    public function setIsDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }

    public function getDateModified() {
        return $this->dateModified;
    }

    public function setDateModified($dateModified) {
        $this->dateModified = $dateModified;
    }
}

?>