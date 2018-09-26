<html>
 <head>
  <title>Docker LAMP stack</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/2.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <?php echo "<h1>Hi! I'm happy</h1>"; ?>

    <?php
    require __DIR__ . '/vendor/autoload.php';

    //-- Connect to database
    $conn = mysqli_connect('db', 'user', 'test', "docker_db");


    $query = 'SELECT * From User';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }

        echo '</tr>';
    }
    echo '</table>';

    //-- Close DB connection
    $result->close();

    mysqli_close($conn);
    
	//-- Example of testing Redis connection
    $client = new Predis\Client();
	$client->set('foo', 'bar');
	$value = $client->get('foo');
	var_dump($value);

    ?>
    </div>
</body>
</ht