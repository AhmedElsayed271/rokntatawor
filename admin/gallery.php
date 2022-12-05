<?php 
    session_start();
    if (isset($_SESSION['username'])) {
        
        include "init.php";

        $page = isset($_GET['page']) ? $_GET['page'] : "manage";

        if ($page == "add") {?>
            
            <h1 class='text-center'>Add New Photo</h1>
            <div class="container">
                <form class="form-horizntal" action="<?php echo $_SERVER['PHP_SELF']?>?page=insert" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Upload Your Image</label>
                        <div class="col-sm-10">
                            <input type="file" name='gallery' class="form-control" />
                        </div>
                        <div class="form-group">
                        <div class='col-sm-offset-2 col-sm-6'>
                            <select name="type" class='form-control'>
                                <option value="0">image</option>
                                <option value="1">video</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <input class="btn btn-primary col-sm--offset-2" type="submit" value="add" />
                        </div>
           
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>

        <?php } else if ($page == "insert") {
            
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                echo "<h1 class='text-center'>Add New Item</h1>";
                $gallery            = $_FILES['gallery'];

                $tempName           = $_FILES['gallery']['tmp_name'];

                $name               = $_FILES['gallery']['name'];

                $type               = $_FILES['gallery']['type'];

                $size               = $_FILES['gallery']['size'];

                $type_file          = $_POST['type'];

                $erorrForm  = array();

                if (empty($name)) {
                    $erorrForm[] = "The Filed Can't be Empty";
                }

                echo "<div class='container'>";
                if (empty($erorrForm)) {

                    $image_name = rand(0, 1000000) . $name;

                    $stmt = $con->prepare("INSERT INTO 
    
                                            gallery(image, type)
    
                                            VALUES(?, ?)");
    
                    $stmt->execute(array($image_name, $type_file));
    
                    echo "<div class='alert alert-success'>" . $stmt->rowCount() . " Record" . "</div>";
    
                    move_uploaded_file($tempName, '../upload/' . $image_name);

                    echo "<a class='btn btn-primary' href={$_SERVER['HTTP_REFERER']}>" . "Previous Page" . "</a>";

                } else {
                    foreach($erorrForm as $erorr) {
                        echo "<div class='alert alert-danger'>" . $erorr . "</div>";
                    }
                    echo "<a class='btn btn-primary' href={$_SERVER['HTTP_REFERER']}>" . "Previous Page" . "</a>";
                }
                echo "</div>";

            } else {

                header("location: dashboard.php");

            }


        } else if ($page == "edit") {
            
            $id_image = isset($_GET['id_image']) && is_numeric($_GET['id_image']) ? intval($_GET['id_image']) : 0;
           
            $stmt = $con->prepare("SELECT image FROM  gallery WHERE id_image = ?");
           
            $stmt->execute(array($id_image));

            $image = $stmt->fetch()['image'];
            $count = $stmt->rowCount();
            if ($count > 0) {
            ?>

            <h1 class='text-center'>Add New Admin</h1>
            <div class="container">
                <form class="form-horizntal" action="<?php echo $_SERVER['PHP_SELF']?>?page=update" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Upload Your Image</label>
                        <div class="col-sm-6">
                            <input type="file" name='gallery' class="form-control" />
                            <input type="hidden" name='old_image' value="<?php echo $image;?> " />
                            <input type="hidden" name='id_image' value="<?php echo $id_image;?> " />
                            
                        </div>
                        <div class='col-sm-offset-2 col-sm-6'>
                            <select name="type" class='form-control'>
                                <option value="0">image</option>
                                <option value="1">video</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <div class="col-sm-6">
                            <input class="btn btn-primary col-sm--offset-2" type="submit" value="Save" />
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>

            <?php } else {
                header("location: dashboard.php");
            } ?>

        <?php } else if ($page == "update") {

            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                echo "<h1 class='text-center'>Insert</h1>";

                $tempName   = $_FILES['gallery']['tmp_name'];

                $name       = $_FILES['gallery']['name'];

                $type       = $_FILES['gallery']['type'];

                $size       = $_FILES['gallery']['size'];

                $id_image     = $_POST['id_image'];
                
                $type_file      = $_POST['type'];
                
                $oldImage   = $_POST['old_image'];

                $erorrForm  = array();

                if (empty($name)) {
                    $erorrForm[] = "The Filed Can't be Empty";
                }

                echo "<div class='container'>";
                if (empty($erorrForm)) {

                    

                    $image_name = rand(0, 1000000) . $name;

                    $stmt = $con->prepare("UPDATE gallery  SET image = ?, type = ?  WHERE id_image = ?");

                    $stmt->execute(array($image_name, $type_file , $id_image));

                    echo "<div class='alert alert-success'>" . $stmt->rowCount() . " Record" . "</div>";

                    move_uploaded_file($tempName, '../upload/' . $image_name);
                    $file = '../upload/' . $oldImage;
                    echo $file ;
                    if (file_exists($file))  {
                        unlink($file);
                        echo "Good";
        
                    } else {
                        echo "Bad";
                    }
                    echo "Hello World";
                    // header("refresh: 10; url={$_SERVER['HTTP_REFERER']}");
                    echo "<a class='btn btn-primary' href={$_SERVER['HTTP_REFERER']}>" . "Previous Page" . "</a>";
         
                } else {
                    foreach($erorrForm as $erorr) {
                        echo "<div class='alert alert-danger'>" . $erorr . "</div>";
                    }
                    echo "<a class='btn btn-primary' href={$_SERVER['HTTP_REFERER']}>" . "Previous Page" . "</a>";
                }
                echo "</div>";

            } else {

                header("location: dashboard.php");

            }   

        } else if ($page == "delete") { 
                    
                echo "<h1 class='text-center'>Delete Item</h1>";
                echo "<div class='container'>";
                $id_image = isset($_GET['id_image']) && is_numeric($_GET['id_image']) ? intval($_GET['id_image']) : 0;
                
                $stmt = $con->prepare("SELECT * FROM gallery WHERE id_image = ?");

                $stmt->execute(array($id_image));

                $count = $stmt->rowCount();
            
                if ($count > 0) {

                
                $stmt = $con->prepare("DELETE FROM gallery WHERE id_image = ?");

                $stmt->execute(array($id_image));
                echo "<div class='alert alert-success'>" . $stmt->rowCount() . " Record Deleted " . "</div>";
                echo "<a class='btn btn-primary' href={$_SERVER['HTTP_REFERER']}>" . "Previous Page" . "</a>";

                } else {
                    echo "<div class='alert alert-danger'>" . "user Is Not Exist." .  "</div>";
                }
                echo "</div>";
        
        } else {
            
            $stmt = $con->prepare("SELECT * FROM gallery");
            
            $stmt->execute();

            $gallery    = $stmt->fetchAll();
                
            ?>
            <h1 class='text-center'>Add New Photo</h1>
            <div class='card-box'>
                <div class="container">
                    <div class="row">
                        <?php 
                        
                            foreach ($gallery as $data) {?>
                                <div class="col-md-3">
                                    <div class="card">
                                        <?php

                                            $extention = $data['image'];
                                            $extention = explode(".", $extention);
                                            $extention = $extention[1];
                                            
                                            if ($data['type'] == 1) {
                                                    echo "<video controls>";
                                                    echo "<source src=" . "../upload/" . $data['image'] . " type='video/" . $extention . "'>" . "</source>";
                                                    echo "</video>";
                                                    ?>  <div class="card-body">
                                                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=delete&id_image=<?php echo $data['id_image'] ?>" class="btn btn-danger">Delet</a>
                                                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=edit&id_image=<?php echo $data['id_image'] ?>" class="btn btn-success">Edit</a>
                                                        </div>
                                                    <?php
                                                
                                                } else { ?>
                                                    <img class="card-img-top" src="../upload/<?php echo $data['image'] ?>" alt="Card image cap">
                                                    <div class="card-body">
                                                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=delete&id_image=<?php echo $data['id_image'] ?>" class="btn btn-danger">Delet</a>
                                                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=edit&id_image=<?php echo $data['id_image'] ?>" class="btn btn-success">Edit</a>
                                                    </div>
                                                <?php }
                                                ?>
                                    </div>
                                </div>

                            <?php }
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="add-item">
                <div class="container">
                    <a class="btn btn-primary" href="gallery.php?page=add">Add Item</a>            
                </div>
            </div>
        <?php }

        include $tpl . "footer.php";
    } else {
        header("location: dashboard.php");
    }