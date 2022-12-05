<?php 
    session_start();
    if (isset($_SESSION['username'])) {
        
        include "init.php";

        $page = isset($_GET['page']) ? $_GET['page'] : "manage";
        
        if ($page == "edit") { 
            
        $admin_id = isset($_GET['admin_id']) && is_numeric($_GET['admin_id']) ? intval($_GET['admin_id']) : 0;
        
        // Check if User exist in database
        $stmt = $con->prepare("SELECT * FROM admins WHERE admin_id = ? LIMIT 1");

        $stmt->execute(array($admin_id));
        
        $admin = $stmt->fetch();
        
        $count = $stmt->rowCount();
        if ($count > 0) { ?>

            <h1 class='text-center'>Edit Admin</h1>
            <div class="container">
                <form class="form-horizntal" action="<?php echo $_SERVER['PHP_SELF']?>?page=update" method="post">
                    <div class="form-group">
                        <input type="hidden" name="name" value="<?php echo $admin['admin_id'] ?>" />
                        <label class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-6">
                            <input type="text" name='username' class="form-control" value="<?php echo $admin['username'] ?>" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">E-Mail</label>
                        <div class="col-sm-6">
                            <input type="email" name='email' class="form-control" value="<?php echo $admin['email'] ?>" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">FullName</label>
                        <div class="col-sm-6">
                            <input type="text" name='fullName' class="form-control" value="<?php echo $admin['fullname'] ?>" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-6">
                            <input type="Password" name='newpass' class="form-control" />
                            <input type="hidden" name='oldpass' value="<?php echo $admin['password'] ?>" />
                        </div>
                        <div class="form-group">
                        <div class="col-sm-6">
                            <input class="btn btn-primary col-sm--offset-2" type="submit" value="save" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>

        <?php } else {
                echo "There \' no Such Id";
            }?>
        
    <?php } else if ($page == "update") {

        echo "<h1 class='text-center'>Update Admin</h1>";
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $admin_id       = $_POST['name'];
            $username       = $_POST['username'];
            $full_name      = $_POST['fullName'];
            $email          = $_POST['email'];

            $pass = "";

            if (empty($_POST['newpass'])) {

                $pass = $_POST['oldpass'];

            } else {

                $pass = sha1($_POST['newpass']);

            }

            $stmt1 = $con->prepare("SELECT * FROM admins WHERE username = ?");

            $stmt1->execute(array($username));

            $check = $stmt1->rowCount();
            if ($check == 0) {

            $errorForm = array();
            if (empty($username)) {
                $errorForm[] = "Username can't be Empty";
            } else if (strlen($username) < 4) {
                $errorForm[] = "Username can't be less than 3 character";
            } 
            if (strlen($username) > 20) {
                $errorForm[] = "Username can't be More than 200 character";
            }
            if (empty($email)) {
                $errorForm[] = "Email can't be Empty";
            } 
            if (empty($full_name)) {
                $errorForm[] = "Email can't be Empty";
            } 
            echo "<div class='container'>";
            if (empty($errorForm)) {
                $stmt = $con->prepare("UPDATE 
                                                admins 
                                        SET 
                                                username = ?, 
                                                
                                                fullname = ?,email = ?, 

                                                password= ? 

                                        WHERE admin_id = ?");

                $stmt->execute(array($username,$full_name,$email,$pass,$admin_id));
                echo "<div class='alert alert-success'>" . $stmt->rowCount() . " Record" . "</div>";
                echo "<a class='btn btn-primary' href={$_SERVER['HTTP_REFERER']}>" . "Previous Page" . "</a>";
        

            } else {
                    foreach($errorForm as $error) {
                            echo "<div class='alert alert-danger'>" . $error . "</div>";
                    }
                    echo "<a class='btn btn-primary' href={$_SERVER['HTTP_REFERER']}>" . "Previous Page" . "</a>";
                }
            echo "</div>";

            } else {
                echo "<div class='container'>";
                    echo "<div class='alert alert-danger'>User Is Exist Choose Other Username</div>";
                    echo "<a class='btn btn-primary' href={$_SERVER['HTTP_REFERER']}>" . "Previous Page" . "</a>";
                echo "</div>";
            }
         


        } else {
            header("location: dashboard.php");
        }

        } else if ($page == "add") { ?>

        
            <h1 class='text-center'>Add New Admin</h1>
            <div class="container">
                <form class="form-horizntal" action="<?php echo $_SERVER['PHP_SELF']?>?page=insert" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-6">
                            <input type="text" name='username' class="form-control" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">E-Mail</label>
                        <div class="col-sm-6">
                            <input type="email" name='email' class="form-control" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">FullName</label>
                        <div class="col-sm-6">
                            <input type="text" name='fullName' class="form-control" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-6">
                            <input type="Password" name='pass' class="form-control" />
                        </div>
                        <div class="form-group">
                        <div class="col-sm-6">
                            <input class="btn btn-primary col-sm--offset-2" type="submit" value="add" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>

        <?php } else if ($page == "insert") {

            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                echo "<h1 class='text-center'>Insert Admin</h1>";

                $username   = $_POST['username'];
                $full_name  = $_POST['fullName'];
                $pass       = sha1($_POST['pass']);
                $email      = $_POST['email'];
                
                $stmt1 = $con->prepare("SELECT * FROM admins WHERE username = ?");

                $stmt1->execute(array($username));

                $check = $stmt1->rowCount();
                if ($check  == 0) {
                    $errorForm = array();
                if (empty($username)) {
                    $errorForm[] = "Username can't be Empty";
                } else if (strlen($username) < 4) {
                    $errorForm[] = "Username can't be less than 3 character";
                } 
                if (strlen($username) > 20) {
                    $errorForm[] = "Username can't be More than 200 character";
                }
                if (empty($email)) {
                    $errorForm[] = "Email can't be Empty";
                } 
                if (empty($_POST['pass'])) {
                    $errorForm[] = "Password can't be Empty";
                } else if (strlen($_POST['pass']) < 8) {
                    $errorForm[] = "Password can't be less than 8 character";
                } 
                if (empty($full_name)) {
                    $errorForm[] = "FullName can't be Empty";
                } 
                echo "<div class='container'>";
                if (empty($errorForm)) {
                    
                    $stmt = $con->prepare("INSERT INTO 

                                                        admins(username,fullname,password,email)

                                            VALUES(:user, :fullname, :pass, :email)");
   
                    $stmt->execute(array(
                        "user"      => $username,
                        "fullname"  => $full_name,
                        "pass"      => $pass,
                        "email"     => $email

                    ));
                    echo "<div class='alert alert-success'>" . $stmt->rowCount() . " Record" . "</div>";
                    echo "<a class='btn btn-primary' href={$_SERVER['HTTP_REFERER']}>" . "Previous Page" . "</a>";

    
                } else {
                        foreach($errorForm as $error) {
                                echo "<div class='alert alert-danger'>" . $error . "</div>";
                        }
                        echo "<a class='btn btn-primary' href={$_SERVER['HTTP_REFERER']}>" . "Previous Page" . "</a>";
                    }

                } else {
                    echo "<div class='container'>";
                        echo "<div class='alert alert-danger'>User Is Exist Choose Other Username</div>";
                        echo "<a class='btn btn-primary' href={$_SERVER['HTTP_REFERER']}>" . "Previous Page" . "</a>";
                    echo "</div>";
                }

                
                echo "</div>";

            } else {
                header("location: dashboard.php");
            }


        } else { 
            
            $stmt = $con->prepare("SELECT * FROM admins");

            $stmt->execute();

            $admins_info = $stmt->fetchAll();

            ?>
                
            <h1 class="text-center">Mnange Admins</h1>

            <div class="container">
                <div class="table-resbonsive">
                    <table class="main-table text-center table table-bordered">
                        <tr>
                            <td>ID</td>
                            <td>username</td>
                            <td>Full Name</td>
                            <td>email</td>
                        </tr>

                        <?php 

                        foreach ($admins_info as $info) {?>

                            <tr>
                                <td><?php echo $info['admin_id']; ?></td>
                                <td><?php echo $info['username']; ?></td>
                                <td><?php echo $info['fullname']; ?></td>
                                <td><?php echo $info['email']; ?></td>
                            </tr>                            

                        <?Php }

                        ?>

                    </table>
                </div>
                <div class="add-admin">
                    <a class="btn btn-primary" href="admins.php?page=add">Add New Admin</a>
                </div>
            </div>

        <?php }
        
        include $tpl . "footer.php";

    } else {

        header("location: index.php");

        exit();
    }
