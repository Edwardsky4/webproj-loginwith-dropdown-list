<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Site</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="loginstyles.css">
    </head>
    <body>
        <div class="container">
            <?php
            if(isset($_POST["email"])){
                $email = $_POST["email"];
                $password = $_POST["password"];
                require_once "database.php";

                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
                if ($user) {
                    if(password_verify($password, $user["password"])) {
                        session_start();
                        $_SESSION["users"] = $user["FirstName"];
                        header("Location: index.php");
                        die();
                    } else {  
                        echo "<div class= 'alert alert-danger'> Password does not match </div>";
                    }
                }else{
                    echo "<div class= 'alert alert-danger'> Email does not match </div>";
                }
            }
            ?>

            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control"required placeholder="Enter your email">
                </div>
    
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" class="form-control" required placeholder="Enter your password">
                </div>
    
                <div class="form-btn">
                    <button type="submit" name="login" class="btn btn-primary">
                        Login
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </button>
                </div>
    
                <div class="form-footer">
                    <p>Not Registered yet? <a href="registration.php">Register Here</a></p>
                </div>
            </form>
        </div>
    </body>
</html>
