<?php include "init.php"; ?> 
<!-- Start Gallery -->
    <div class="our-gallery" id="gallery">
      <header class="text-center">
        <h2>معرض أعمالنا</h2>
        <p>أعمال نفخر بها قدمناها لعملائنا خلال هذه السنة</p>
      </header>
      <div class="container">
      <div class="row">
          <?php
              $stmt = $con->prepare("SELECT * FROM gallery");
             
              $stmt->execute();

              $gallery = $stmt->fetchAll();

              foreach($gallery as $itme) { ?>
 
                <div class="col-md-3 col-sm-6">
                    <div class="work">
                      <?php
                      $extention = $itme['image'];
                      $extention = explode(".", $extention);
                      $extention = $extention[1];
                      
                      if ($itme['type'] == 1) {
                            echo "<video controls>";
                              echo "<source src=" . "upload/" . $itme['image'] . " type='video/" . $extention . "'>" . "</source>";
                            echo "</video>";

                          } else {
                            echo "<img src='" . "upload/" . $itme['image'] . "'>";
                          }
                      ?>
                  </div>
                </div>

              <?php }
          ?>
        </div>
      </div>
    </div>
    <!-- Start Gallery -->

<?php include "incloude/template/footer.php" ?>