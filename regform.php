<html>
    <head>
        <title> WELCOME TO JOOKEBOX</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


        <link rel="stylesheet" href="style.css">
    </head>
<body>

    <div class="container">


    <?php

$conn = new mysqli("localhost", "name", "password", "login_register");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
    $address = $_POST["address"];
    $phone_number = $_POST["phone_number"];


    $sql = "INSERT INTO users (name ,email id , password, address, phone number) VALUES ('$name', '$email id', '$password', '$address', '$phone number')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


        <form action="regform.php" method="post">
            <div class="form-group">
                <input type="text"class="form-control" name="Name" placeholder="Name:">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Email Id" placeholder="Email Id:">
            </div>
            <div class="form-group">
                <input type="text"  class="form-control" name="Password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="text"  class="form-control" name="Address" placeholder="Address:">
            </div>
            <div class="form-group">
                <input type="text"  class="form-control" name="Phone Number" placeholder="Phone Number:">
            </div>
            <div class="form-group">
                <input type="submit"   class="btn btn-primary" value="Register" name="submit">
            </div>

        </form>
    </div>
</body>
</html>