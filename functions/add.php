<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
    </head>
    <body>
        <?php
        include_once("../dbConnection/mysqlconfig_connection.php");

        if(isset($_POST['Submit'])) {
            $code = $_POST['code'];
            $name = $_POST['name'];
            if(empty($code) || empty($name)) {
                if(empty($code)) {
                    echo "<font color='red'>Subject Code field is empty.</font><br/>";
                }
                if(empty($name)) {
                    echo "<font color='red'>Subject Name field is empty.</font><br/>";
                }
            }
        }
        
    </body>
</html>