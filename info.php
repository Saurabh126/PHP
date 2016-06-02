<?php require_once("db_connection.php");?>
<?php require_once("functions.php");?>
<?php   global $connection;
        global $global_name;
        $info_set = find_all("info");
        while ($info = mysqli_fetch_assoc($info_set)){
            {echo $info["information"] . "<br/>";}
        }

 ?>
 <a href="loggedin.php">Click here if you want to enter some more data .</a>
  <br/><br/><br/><br/><br/><br/>
 <form action="form.php" method="post">
            <input type="submit" name="logout" value="Logout"/><br/>
        </form>