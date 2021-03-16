<?php

require_once('showDAO.php');

class Show implements \JsonSerializable {
    private $show_id;
    private $show_name;
    private $show_description;
    private $show_rating;

    function __construct(){

    }
    function getShowId(){
        return $this->show_id;
    }
    function setShowId($show_id){
        $this->show_id = $show_id;
    }
    function getShowName(){
        return $this->show_name;
    }
    function setShowName($show_name){
        $this->show_name = $show_name;
    }  
    function getShowDescription(){
        return $this->show_description;
    }
    function setShowDescription($show_description){
        $this->show_description = $show_description;
    }
    function getShowrating(){
        return $this->show_rating;
    }
    function setShowRating($show_rating){
        $this->show_rating = $show_rating;
    }
    public function getMyShows(){
        $showDAO = new showDAO();
        return $showDAO->getAllShows();
    }
    public function jsonSerialize()
    {
        $vars = get_object_vars($this);
        return $vars;
    }
}

?>