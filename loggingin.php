<?php require_once("db_connection.php");?>
<?php require_once("functions.php");?>
<html lang="en">
    <head>
        <title>Admin</title>
    </head>
    <body>
        <div id = "header">
        <h1>Saurabh's Work</h1>
        </div>
        <?php 
        $match = 0;
        global $connection;
        $global_name = $_POST["username"];
        $admin_set = find_all("admins");
        
        while ($admin = mysqli_fetch_assoc($admin_set)){
            if ($_POST["username"]==$admin["username"]  &&  $_POST["password"]==$admin["hashed_password"])
                {  ?> 
                    <form action="input.php" method="post">
                        Input: <input type="text" name="input" value=""/><br/>
                    <br/>
                        <input type="submit" name="submit_input" value="Submit"/><br/>
                    </form>
                    <br/><br/><br/><br/><br/><br/>
                    <form action="info.php" method="post">
                        <input type="submit" name="submit_info" value="View all your information"/><br/>
                    </form>     
            <?php 
            $match = 1;
        break;} }
            if ($match!== 1)
            { 
                echo "<a href=\"form.php\">There was some problem with your login , kindly go back and login again .</a>";
            }

            ?>
            
     </body>
</html> 