<?php

function index() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=gruh','root','yiNpHuHxhZyG4nVS');
        $sql = "SELECT * FROM news";
        $query = $pdo->prepare($sql);
        $query->execute();
        $array = $query->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>"; print_r($array); echo "</pre>";
    }catch (PDOException $e) {
        print "Errot!: " . $e->getMessage() . "</br>";
        die();
    }
        return $array;
};
function add () {
    $data = [
        'title'=> $_POST['title'],
        'content'=> $_POST['content'],
    ];
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=gruh','root','yiNpHuHxhZyG4nVS');
        $sql = "INSERT INTO news(title,text) VALUE (:title,:content)";
        $query = $pdo->prepare($sql);
        $query->execute($data);
        header('Location: index.php');
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
};
function delete (){
    $data = [
        'id' => $_GET['id']
    ];
    try { 
        $pdo = new PDO('mysql:host=localhost;dbname=gruh','root','yiNpHuHxhZyG4nVS');
        $sql =  "DELETE FROM news WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->execute($data);
        header("Location: ./index.php");
    
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
};
function edit () {
    $data = [ 
        'id' => $_GET['id']
    ];
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=gruh','root','yiNpHuHxhZyG4nVS');
        $sql = "SELECT * FROM news WHERE id=:id";
        $query = $pdo->prepare($sql);
        $query->execute($data);
        $array = $query->fetch(PDO::FETCH_ASSOC);
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "</br>";
        die();
    };
    return $array;
};
function update() {
    $data = [
        "id"=> $_GET['id'],
        'title'=> $_POST['title'],
        'content'=> $_POST['content'],
    ];
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=gruh','root','yiNpHuHxhZyG4nVS');
        $sql = "UPDATE news SET title=:title,text=:content WHERE id=:id";
        $query = $pdo->prepare($sql);
        $query->execute($data);
        header('Location: index.php');
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "</br>";
        die();
    }
};
function show (){
    $data =
['id' => $_GET['id']];
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gruh','root','yiNpHuHxhZyG4nVS');
    $sql = "SELECT * FROM news WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->execute($data);
    $array = $query->fetch(PDO::FETCH_ASSOC);
    echo "<pre>";print_r($array);echo "</pre>";

}
catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
return $array;
};
function regsitr () {
    session_start();
    
    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => hash('sha1',$_POST['password'])
    ];
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=gruh','root','yiNpHuHxhZyG4nVS');
        $sql = "INSERT INTO users (name,email,password) VALUE (:name,:email,:password)";
        $query = $pdo->prepare($sql);
        $query->execute($data);
        header('Location: index.php');

    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . '</br>';
        die ();
    }
}
function login () {
    $data = [
        'name' => $_POST['name'],
        'password' => hash('sha1',$_POST['password'])
    ];
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=gruh','root','yiNpHuHxhZyG4nVS');
        $sql = "SELECT * FROM users WHERE name=:name AND password=:password";
        $query = $pdo->prepare($sql);
        $query->execute($data);
        $users = $query->fetch(PDO::FETCH_ASSOC);

    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . '</br>';
        die ();
    }
    if($users) {
        $_SESSION['user'] = $users;
    }
    // echo "<pre>";print_r($users);echo "</pre>";
}

?>
