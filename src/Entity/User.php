<?php 
    namespace App\Entity;

    class User {
        private $id;
        private $name;
        private $friends;

        public function getId() { return $this->id;}
        public function setId($id) { $this->id = $id;}
        public function getName() { return $this->name;}
        public function setName($name) {$this->name = $name;}

    //getBlogs
    //addBlog

    // getFriends
    public function getFriends() {
        if ($this->friends == null) {
        $this->friends = array();
        }
        return $this->friends;
        }
    // addFriend
    public function addFriends($friend) {
        if ($this->friends == null) {
        $this->friends = array();
        }
        array_push($this->friends, $friend);
    }
}
?>