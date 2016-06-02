<?php
    function confirm_query($result_set){
        if (!$result_set){
          die ("Database query failed.") ; 
        }
        
    }

?>
<?php
    function find_all($subject){
    global $connection;
    $query = "SELECT *";
    $query .= "FROM {$subject} ;";
    $subject_set = mysqli_query($connection , $query);
    confirm_query($subject_set);
    return $subject_set;}
?>
