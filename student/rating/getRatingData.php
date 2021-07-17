<?php
namespace Phppot;

use Phppot\Rating;
require_once "./Common/Config.php";
$config = new Config();
require_once "./Model/Rating.php";
$rating = new Rating();


$userId = 5;

$apperance = $config::RATING_APPEARANCE;

$courseResult = $rating->getCourse();
if (! empty($courseResult)) {
    foreach ($courseResult as $row) {
        $userRating = $rating->getUserRating($userId, $row['course_id']);
        $totalRating = $rating->getTotalRating($row['course_id']);
   
        ?>
<div class="row-item">
    <div class="row-title"><?php echo $row['course_name']; ?></div>
    <ul class="list-inline" id="list-<?php echo $row['course_id']; ?>">
 <?php require $apperance . "-rating-view.php"; ?>

        <img src="img/loader.gif" class="loader-icon" id="loader-icon">
    </ul>
    <div class="response" id="response-<?php echo $row['course_id']; ?>"></div>


    <p class="review-note">Total Reviews: <?php echo $totalRating; ?></p>
    <p class="text-address">
    
       </p>
</div>
<?php
    }
}
?>