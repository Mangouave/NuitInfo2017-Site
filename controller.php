<?php require 'vendor/autoload.php';


$app = new \Slim\App;



        
        $app->get('/event',
        function ($resquest,$response,$args) {
            $servername = "localhost";
            $username = "root";
            $password = "Mojito";
            $dbname = "MOJITO";
            $rows = array();
            $conn = new mysqli($servername, $username, $password, $dbname);

            /* Modification du jeu de r▒sultats en utf8 */
            $conn->set_charset("utf8");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM Event";


            if($result = $conn->query($sql)) {

                while($r = mysqli_fetch_assoc($result)) {
                    $rows[] = $r;
                }
            }


            $conn->close();
                return $response->write(json_encode($rows));
            });

        $app->get('/event/{idEvent}',
        function ($resquest,$response,$args) {
            $servername = "localhost";
            $username = "root";
            $password = "Mojito";
            $dbname = "MOJITO";
            $rows = array();
            $conn = new mysqli($servername, $username, $password, $dbname);

            /* Modification du jeu de r▒sultats en utf8 */
            $conn->set_charset("utf8");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM Event WHERE id = \"".$args["idEvent"]."\"";


            if($result = $conn->query($sql)) {

                while($r = mysqli_fetch_assoc($result)) {
                    $rows[] = $r;
                }
            }


            $conn->close();
                return $response->write(json_encode($rows));
            });

        $app->post('/event',
        function ($resquest,$response,$args) {
            $servername = "localhost";
            $username = "root";
            $password = "Mojito";
            $dbname = "MOJITO";
            $rows = array();
            $conn = new mysqli($servername, $username, $password, $dbname);

            /* Modification du jeu de r▒sultats en utf8 */
            $conn->set_charset("utf8");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $params = json_decode($resquest->getBody(), true);

            $sql = "INSERT INTO Event VALUES(null,\"".$params['dateStart']."\",\"".$params['dateEnd']."\",\"".$params['description']."\",\"".$params['locName']."\",\"".$params['geoLocLat']."\",\"".$params['geoLocLong']."\",\"".$params['ownerId']."\", \"".$params['eventName']."\")";


            if($result = $conn->query($sql)) {
                $resId = $conn->insert_id;

            }


            $conn->close();
                return $response->write(json_encode($resId));
            });


        $app->post('/signup',
        function ($resquest,$response,$args) {
            $servername = "localhost";
            $username = "root";
            $password = "Mojito";
            $dbname = "MOJITO";
            $rows = array();
            $conn = new mysqli($servername, $username, $password, $dbname);

            /* Modification du jeu de r▒sultats en utf8 */
            $conn->set_charset("utf8");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $params = json_decode($resquest->getBody(), true);

            $sql = "SELECT * FROM User WHERE username=\"".$params['userName']."\" limit 1";


            if($result = $conn->query($sql)) {

                if($result->num_rows >= 1) {
                    http_response_code(401);
                    die("username déjà éxistant");
                }
            }

           $sql = "INSERT INTO User VALUES(null,\"".$params['userName']."\",\"".$params['password']."\")";


            if($result = $conn->query($sql)) {
                print "OK";
            } else {
                http_response_code(401);
                die("KO");
            }


            $conn->close();
            return $response;
            });
        
        $app->post('/signin',
        function ($resquest,$response,$args) {
            $servername = "localhost";
            $username = "root";
            $password = "Mojito";
            $dbname = "MOJITO";
            $rows = array();
            $conn = new mysqli($servername, $username, $password, $dbname);

            /* Modification du jeu de r▒sultats en utf8 */
            $conn->set_charset("utf8");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $params = json_decode($resquest->getBody(), true);

            $sql = "SELECT * FROM User WHERE username=\"".$params['userName']."\" AND password=\"".$params['password']."\" limit 1";

            if($result = $conn->query($sql)) {


                if($result->num_rows == 1) {
                    $conn->close();
                    return $response->write("OK");
                }
            }

          
            $conn->close();
            return $response->write("KO");
            });
        $app->run();

?>


