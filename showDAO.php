<?php

class ShowDAO{
    function getAllShows(){
        require_once('config.php');
        require_once('show.php');

        $sql = 'SELECT show_id, show_name, show_description, show_rating FROM showss';
        $result = $con->query($sql);

        $shows;
        $index = 0;

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $show = new show();

                $show->setShowId($row["show_id"]);
                $show->setShowName($row["show_name"]);
                $show->setShowDescription($row["show_description"]);
                $show->setShowRating($row["show_rating"]);
                $shows[$index] = $show;
                $index++;
            }
        }
        $con->close();

        return $shows;
    }
}




?>