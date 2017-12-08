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

            $sql = "SELECT * FROM Event limit 10";


            if($result = $conn->query($sql)) {

                while($r = mysqli_fetch_assoc($result)) {
                    $rows[] = $r;
                }
            }


            $conn->close();
                return $response->write(json_encode($rows));
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

            $allPostPutVars = $resquest->getParsedBody();

            $sql = "SELECT * FROM User WHERE username=".$allPostPutVars['userName']." limit 1";


            if($result = $conn->query($sql)) {

                if(mysql_num_rows($result)) {
                    die("username déjà éxistant");
                }
            }

            $response['post'] = json_decode($app->request()->getBody());

            $sql = "INSERT INTO User VALUES(".$allPostPutVars['userName'].",".$allPostPutVars['password'].")";


            if($result = $conn->query($sql)) {
                print "OK";
            }


            $conn->close();
            return $response;
            });
        $app->run();
        

?>


