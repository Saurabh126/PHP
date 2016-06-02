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
                    <form action="input.php" method="post">
                        Input: <input type="text" name="input" value=""/><br/>
                    <br/>
                        <input type="submit" name="submit_input" value="Submit"/><br/>
                    </form>
                    <br/><br/><br/><br/><br/><br/>
                    <form action="info.php" method="post">
                        <input type="submit" name="submit_info" value="View all your information"/><br/>
                    </form>

     </body>
</html> 