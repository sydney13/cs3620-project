<?php
class ShowDAO {
    function getAllShows() {
        require('./utilities/config.php');
        require_once('./show/show.php');

        $sql = "SELECT show_id, show_name, show_description, show_rating FROM cs3620_proj.shows";
        $result = $con->query($sql);

        $shows;
        $index = 0;

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $show = new show();

                $show->setShowId($row["show_id"]);
                $show->setShowName($row["show_name"]);
                $show->setShowDescription($row["show_description"]);
                $show->setShowRating($row["show_rating"]);
                $shows[$index] = $show;
                $index = $index + 1;
            }
        }


        $con->close();

        return $shows;
    }

    function getShow($input) {
        require('./utilities/config.php');
        require_once('./show/show.php');

        $sql = "SELECT show_id, show_name, show_description, show_rating FROM cs3620_proj.shows WHERE show_id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('i', $input);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $shows;
        $index = 0;

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $show = new show();

                $show->setShowId($row["show_id"]);
                $show->setShowName($row["show_name"]);
                $show->setShowDescription($row["show_description"]);
                $show->setShowRating($row["show_rating"]);
                $shows[$index] = $show;
                $index = $index + 1;
            }
        }

        
        $con->close();

        return $shows;
    }

    function getShowsByUserId($user_id) {
        require('./utilities/config.php');
        require_once('./show/show.php');

        $sql = "SELECT show_id, show_name, show_description, show_rating FROM cs3620_proj.shows WHERE user_id = " . $user_id;
        $result = $con->query($sql);

        $shows;
        $index = 0;

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $show = new show();

                $show->setShowId($row["show_id"]);
                $show->setShowName($row["show_name"]);
                $show->setShowDescription($row["show_description"]);
                $show->setShowRating($row["show_rating"]);
                $shows[$index] = $show;
                $index = $index + 1;
            }
        }


        $con->close();

        return $shows;
    }

    function deleteShow($ushow_id, $sshow_id){
        require('./utilities/config.php');
        $sql = "DELETE FROM cs3620_proj.shows WHERE user_id = " . $ushow_id . " AND show_id = " . $sshow_id . ";";

        if($con->query($sql) === TRUE) {
            echo "user deleted";
    }   else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close();
}
}
?>