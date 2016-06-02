<?php require_once("db_connection.php");?>
<?php require_once("functions.php");?>
<html lang="en">
    <head>
        <title>Registeration</title>
    </head>
    <body>
        <h1>Saurabh's Work</h1>
        <?php 
        global $connection;
        $admin_set = find_all("admins");

        if (empty($admin) && $_POST["new_password"]==$_POST["re_password"] )
            {global $connection;
            $query = "INSERT ";
            $query .= "INTO admins (username,hashed_password) ";
            $query .= "VALUES ";
            $query .= "(\"{$_POST["new_username"]}\",\"{$_POST["new_password"]}\") ;";
            $subject_set = mysqli_query($connection , $query);
            confirm_query($subject_set);
            echo "<a href=\"loggedin.php\">Continue .</a>";
            }
        else {
        while ($admin = mysqli_fetch_assoc($admin_set)){
            
            if ($_POST["new_username"]==$admin["username"])
                {  ?> 
                    <a href="form.php">You are already registered .</a>
                    
               <?php break;} 
            elseif($_POST["new_password"]==$_POST["re_password"])
            { 
            global $connection;
            $query = "INSERT ";
            $query .= "INTO admins (username,hashed_password) ";
            $query .= "VALUES ";
            $query .= "(\"{$_POST["new_username"]}\",\"{$_POST["new_password"]}\") ;";
            $subject_set = mysqli_query($connection , $query);
            confirm_query($subject_set);
            ?>
            <a href="loggedin.php">Continue .</a>
            <?php
            }
            else {
                ?>
                <a href="register.php">Both passwords do not match , please register again .</a>
                <?php
                
                
            }
        }}
            ?>
           
     </body>
</html> 

