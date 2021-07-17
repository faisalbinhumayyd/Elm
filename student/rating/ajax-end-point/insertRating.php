<?php
namespace Phppot;

use Phppot\Rating;
require_once __DIR__ . "./../Model/Rating.php";
$rating = new Rating();



$userId = 6;

if (isset($_POST["index"], $_POST["course_id"])) {
    
    $courseId = $_POST["course_id"];
    $ratingIndex = $_POST["index"];
    
    $rowCount = $rating->isUserRatingExist($userId, $courseId);
    
    if ($rowCount == 0) {
        $insertId = $rating->addRating($userId, $courseId, $ratingIndex);
        if (empty($insertId)) {
            echo "Problem in adding ratings.";
        }
    } else {
        echo "You have added rating already.";
    }
}
