<?php require_once("db_connection.php");?>
<?php require_once("functions.php");?>
<html lang="en">
    <head>
        <title>Admin</title>
    </head>
    <body>
        <div id = "header">
        <h1>Saurabh</h1>
        </div>
        <div = "main">
        <div id= "navigation">
        <ul>
        <?php 
        $subject_set = find_all_subjects();
        while ($subject = mysqli_fetch_assoc($subject_set)){
        ?>
        
        <li><?php echo $subject["menu_name"]." (".$subject["id"] .")";?></li>
        
        <?php
           
        }
        ?>
        </ul>
        </div>
        <div id="page">
         <h2>Manage Content</h2>
         
         </div>
         </div>
         <?php 
            mysqli_free_result($subject_set);
         ?>
         <div id="footer">Copyright 20xx, Saurabh</div>
    </body>
</html> 
<?php 
    mysqli_close($connection);
?>