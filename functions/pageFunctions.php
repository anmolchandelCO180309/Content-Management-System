<?php

    function getPageData($page_id){
        $conn = $GLOBALS['conn'];
        $qry = "SELECT * FROM `pages` WHERE `id`='$page_id';";
        $run = mysqli_query($conn,$qry) or die(mysqli_error($conn));
        $data = mysqli_fetch_assoc($run);
        return $data;
    }
    function position_adjust($position,$subject_id,$param){
        $conn = $GLOBALS['conn'];
        $qry_position = "UPDATE `pages` SET `position`=position + '$param' ";
		$qry_position .= "WHERE `subject_id`='$subject_id'" ;
		$qry_position .= "AND `position`>='$position';";
		$run_pos_check = mysqli_query($conn,$qry_position) or die(mysqli_error($conn));
    }

    function justify_positions($previous_position,$new_position,$subject_id){
        
        position_adjust($previous_position,$subject_id,-1);
        position_adjust($new_position,$subject_id,+1);

    }


    function findNumberOfPagesInSubject($subject_id){
        $conn = $GLOBALS['conn'];
        $qry = "SELECT COUNT(`menu_name`) AS 'CNT' FROM `pages` WHERE `subject_id` = '$subject_id';";
        $run = mysqli_query($conn,$qry) or die(mysqli_error($conn));
        $count = mysqli_fetch_assoc($run);
        return $count['CNT'];

    }
