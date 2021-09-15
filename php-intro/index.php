<pre>
<?php

    //echo "SERVER['REQUEST_METHOD']: ". $_SERVER['REQUEST_METHOD']. "<br>";
    //echo "GET: "; print_r($_GET);
    //echo "POST: "; print_r($_POST);
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = isset($_POST['username']) ? $_POST['username'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        echo "Vamos lá logar o user $username com a pass $password";
        $utilizador = login($username, $password);
        var_dump($utilizador);
    }


function login($username, $password){
    $conn = mysqli_connect("127.0.0.1", "flag_saude_user", "Test1234", "flag_saude_v6");

    if(mysqli_connect_errno()){
        echo "erro ao ligar á db: ".mysqli_connect_error();
        die();
    }

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $sql = "Select * from administradores where username = \"$username\" and password = \"$password\"";

    echo "<br>".$sql;

    $result = mysqli_query($conn, $sql);
    $administradores = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $administradores == null ? false : $administradores[0];
}








?>
</pre>

<!DOCTYPE html>
<html>

<body>
    <h1>My first PHP Page</h1>
  
    <form method="POST" action="index.php">
        username: <input type="text" name="username" />
        password: <input type="password" name="password" />
        <input type="submit" value="login" />
    </form>

</body>

</html>