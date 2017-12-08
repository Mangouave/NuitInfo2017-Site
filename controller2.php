<?php require 'vendor/autoload.php';

$servername = "localhost";
$username = "root";
$password = "Mojito";
$dbname = "MOJITO";


 
$app = new \Slim\App;
        $app->get('/test',
        function ($resquest,$response,$args) {
            var_dump($args);
            $servername = "localhost";
            $username = "root";
            $password = "Mojito";
            $dbname = "MOJITO";
            $conn = new mysqli($servername, $username, $password, $dbname);







    $connection = mysqli_connect("localhost","root","Mojito","MOJITO") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "SELECT * FROM Event";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row['id'];
    }
    return json_encode($emparray);

    //close the db connection
    mysqli_close($connection);






$db=mysql_connect($servername, $username, $password) or die('Could not connect');
mysql_select_db($db_name, $db) or die('');

$result = mysql_query("SELECT * FROM Event") or die('Could not query');

if(mysql_num_rows($result)){
    echo '{"testData":[';

    $first = true;
    $row=mysql_fetch_assoc($result);
    while($row=mysql_fetch_row($result)){
        //  cast results to specific data types

        if($first) {
            $first = false;
        } else {
            echo ',';
        }
        return json_encode($row);
    }
    echo ']}';
} else {
    echo '[]';
}

mysql_close($db);




















            /* Modification du jeu de r▒sultats en utf8 */
            $conn->set_charset("utf8");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM Event ";
            //$result = $conn->query($sql);


            if ($result = mysqli_query($conn, $sql)) {

            /* Récupère un tableau associatif */
            while ($row = mysqli_fetch_assoc($result)) {
                printf ("%s (%s)\n", $row["is"], $row["username"]);
            }

            /* Libération des résultats */
            return json_encode($result);
        }


            $rows = array();
            while($r = mysqli_fetch_assoc($sql)) {
                $rows[] = $r;
            }
            return json_encode($rows);
        

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    return $row['id'];
                }
            } else {
                echo "0 results";
            }
            $conn->close();
                return $response->write(json_encode([
                    "transaction" => "15135158165",
                    "date" => "1977-04-22T01:00:00-05:00"
                ]));
            });
        $app->run();
        
?>


