<?php
  
    function getSubjectData($s_id){
        $conn = $GLOBALS['conn'];
        $qry = "SELECT * FROM `subjects` WHERE `id`='$s_id';";
        $run = mysqli_query($conn,$qry) or die(mysqli_error($conn));
        $data = mysqli_fetch_assoc($run);
        return $data;
    }

    
    function subject_position_adjust($position,$param){
        $conn = $GLOBALS['conn'];
        $qry_position = "UPDATE `subjects` SET `position`=position + '$param' ";
        $qry_position .= "WHERE `position`>='$position';";
        $run_pos_check = mysqli_query($conn,$qry_position) or die(mysqli_error($conn));
    }

    function subject_justify_position($previous_position,$new_position){
        subject_position_adjust($previous_position,-1);
        subject_position_adjust($new_position,+1);
    }
    function findNumberOfSubjects(){
        $conn = $GLOBALS['conn'];
        $qry = "SELECT COUNT(`name`) AS 'CNT' FROM `subjects`;";
        $run = mysqli_query($conn,$qry) or die(mysqli_error($conn));
        $count = mysqli_fetch_assoc($run);
        return $count['CNT'];

    }

?>