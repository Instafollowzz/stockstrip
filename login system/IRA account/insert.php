
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "user_form");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['name'];
        $amount = $_REQUEST['amount'];
        $wallet = $_REQUEST['wallet'];

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO withdraw VALUES ('$name','$amount','$wallet' )";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>Withdrawal in progress please wait for processing</h3>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
