<html>
    <body>
        <h1>Results Processing</h1>
        
        <?php
            $foodtype = $_POST["foodtype"];
            echo 'foodtype is  '. $foodtype . '<br>';
            $price = $_POST["price"];
            echo 'price is &#x20A4 '. $price . '<br>';
            $location1 = $_POST["location1"];
            $location2 =  $_POST["location2"];
            $location3 = $_POST["location3"];
            $location4 =  $_POST["location4"];
            $location5 = $_POST["location5"];
            $location6 =  $_POST["location6"];
            $location7 = $_POST["location7"];
            $location8 =  $_POST["location8"];
            $location9 = $_POST["location9"];
            $location10 =  $_POST["location10"];

            echo 'location 1: ' . $location1 . '<br>';
            echo 'location 2: ' . $location2 . '<br>';
            echo 'location 3: ' . $location3 . '<br>';
            echo 'location 4: ' . $location4 . '<br>';
            echo 'location 5: ' . $location5 . '<br>';
            echo 'location 6: ' . $location6 . '<br>';
            echo 'location 7: ' . $location7 . '<br>';
            echo 'location 8: ' . $location8 . '<br>';
            echo 'location 9: ' . $location9 . '<br>';
            echo 'location 10: ' . $location10 . '<br>';

            $Rating1 = $_POST["Rating1"];
            $Rating2 = $_POST["Rating2"];
            $Rating3 = $_POST["Rating3"];
            $Rating4 = $_POST["Rating4"];
            $Rating5 = $_POST["Rating5"];

            echo 'Rating 1: ' . $Rating1 . '<br>';
            echo 'Rating 2: ' . $Rating2 . '<br>';
            echo 'Rating 3: ' . $Rating3 . '<br>';
            echo 'Rating 4: ' . $Rating4 . '<br>';
            echo 'Rating 5: ' . $Rating5 . '<br>';
            
            $Vegan = $_POST["Vegan"];
            $Vegetarian = $_POST["Vegetarian"];
            $GlutenFree = $_POST["Gluten_Free"];
            $Pesceterian = $_POST["Pesceterian"];
            $Coeliac = $_POST["Coeliac"];
            $Halal= $_POST["Halal"];
            $Kosher = $_POST["Kosher"];
            $Organic = $_POST["Organic"];

            echo 'Vegan: ' . $Vegan . '<br>';
            echo 'Vegetarian: ' . $Vegetarian . '<br>';
            echo 'Gluten Free: ' . $GlutenFree . '<br>';
            echo 'Pesceterian: ' . $Pesceterian . '<br>';
            echo 'Coeliac: ' . $Coeliac . '<br>';
            echo 'Halal: ' . $Halal . '<br>';
            echo 'Kosher: ' . $Kosher. '<br>';
            echo 'Organic: ' . $Organic . '<br>';

            $African = $_POST["African"];
            $Asian = $_POST["Asian"];
            $Caribbean = $_POST["Caribbean"];
            $Mixed = $_POST["Mixed"];
            $White = $_POST["White"];

            echo 'African: ' . $African . '<br>';
            echo 'Asian: ' . $Asian . '<br>';
            echo 'Caribbean: ' . $Caribbean . '<br>';
            echo 'Mixed: ' . $Mixed . '<br>';
            echo 'White: ' . $White . '<br>';

            echo '<br>'; 
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "foodrecommender";
            $port = 3308;

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname, $port);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
            echo "<br>";
            $sql = 'select * from restaurant where cuisine="' . $foodtype . '"';
            
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["restaurantName"]. " - Location: " . $row["location"]. "<br>";
            }
            } else {
                echo "0 results";
                }
            $conn->close();
        ?>
    </body>
</html>