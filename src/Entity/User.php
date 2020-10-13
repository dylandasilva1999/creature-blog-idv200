<?php 
    namespace App\Entity;

    class User {
        private $id;
        private $name;
        private $blogs;

        public function getId() { return $this->id;}
        public function setId($id) { $this->id = $id;}
        public function getName() { return $this->name;}
        public function setName($name) {$this->name = $name;}

    //getBlogs
    //addBlog

    // getBlogs
    public function getBlogs() {
        if ($this->blogs == null) {
        $this->blogs = array();
        }
        return $this->blogs;
        }
    // addBlog
    public function addBlogs($blog) {
        if ($this->blogs == null) {
        $this->blogs = array();
        }
        array_push($this->blogs, $blog);
    }
}
?>