<?php 
    session_start();
    $noNavbar = "";
    if (isset($_SESSION['username'])) {
        header("location: dashboard.php");
        exit();
    }
    include "init.php"; 
    // Check If user comming from http request post
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username   = $_POST['admin']; 
        $pass       = $_POST['pass']; 
        $hashedPass = sha1($pass);
        
        // Check if User exist in database
        $stmt = $con->prepare("SELECT 
                                        username, password, admin_id 
                                FROM 
                                        admins 
                                WHERE 
                                        username = ? AND password = ? 
                                LIMIT 1");

        $stmt->execute(array($username, $hashedPass));
        $admin = $stmt->fetch();
        $count = $stmt->rowCount();
        
        // if count > 0 The mean That the database contain about information this user
        if ($count > 0) {
            $_SESSION['username']   = $username;
            $_SESSION["admin_id"]   = $admin['admin_id'];
            header("location: dashboard.php");
            exit();
            
        }
    }
?>


<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <h4 class="text-center">Admin Login</h4>
    <input class="form-control" type="text" name="admin" placeholder="Enter Username" autocomplete="off">
    <input class="form-control" type="password" name="pass" placeholder="Enter Password" autocomplete="new-complete">
    <input class="btn btn-primary btn-block" type="submit" vlaue="Login">
</form>

<?php include $tpl . "footer.php"; ?>