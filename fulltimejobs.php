<?php
    include 'header.php';
?>

<div class="ftjmaincontainer">
<div class="fulltimetab" style="background-image: url('images/abishek_images/fulltime/fulltimebg.jpg');">
    <div>
        <div class="fulltime-maincontainer">
            <div class="fulltime-tital">
                <h1>Full Time </h1>
                <h3>Let's Start Your Journey</h3>
            </div>

            <!--Filter-->

            <div class="fulltime-filter-container">
                <div class="category-head">
                    <ul>
                        <div class="category-tital active" id="all">
                            <li onclick="filter('1')">All</li>
                        </div>

                        <div class="category-tital" id="g&d">
                            <li onclick="filter('2')">Graphics & Design</li>
                        </div>

                        <div class="category-tital" id="d&m">
                            <li onclick="filter('3')">Digital Marketing</li>
                        </div>

                        <div class="category-tital" id="w&t">
                            <li onclick="filter('4')">Writing & Translation</li>
                        </div>

                        <div class="category-tital" id="v&a">
                            <li onclick="filter('5')">Video & Animation</li>
                        </div>

                        <div class="category-tital" id="m&a">
                            <li onclick="filter('6')">Music & Audio</li>
                        </div>

                        <div class="category-tital" id="p&t">
                            <li onclick="filter('7')">Progamming & Tech</li>
                        </div>

                        <div class="category-tital" id="ds">
                            <li onclick="filter('8')">Data Science</li>
                        </div>
                    </ul>
                </div>


                <!--adds-->

                <div class="fulltimeads">
                    <div class="post-container">

                        <!--add 1-->
                        <div class="all dm">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/dm.jpg" alt="cat_image">
                                <span class="cat-name">
                                    Digital Marketing
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Digital Marketing
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 36";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>

                        <!--add 2-->
                        <div class="all ds">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/ds.jpg" alt="cat_image">
                                <span class="cat-name">
                                    Data Science
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Data Science
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 37";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>

                        <!--add 3-->
                        <div class="all gd">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/g&d.jpg" alt="cat_image">
                                <span class="cat-name">
                                    Graphics & Design
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Graphics & Design
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 38";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>


                        <!--add 4-->
                        <div class="all ma">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/m&a.jpg" alt="cat_image">
                                <span class="cat-name">
                                    Music & Audio
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Music & Audio
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 39";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>


                        <!--add 5-->
                        <div class="all pt">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/p&t.jpg" alt="cat_image">
                                <span class="cat-name">
                                    Progamming & Tech
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Progamming & Tech
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 40";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>



                        <!--add 6-->
                        <div class="all va">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/v&a.jpg" alt="cat_image">
                                <span class="cat-name">
                                    Video & Animation
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Video & Animation
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 41";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>



                        <!--add 7-->
                        <div class="all wt">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/w&t.jpg" alt="cat_image">
                                <span class="cat-name">
                                    Writing & Translation
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Writing & Translation
                                </h2>



                                <?php
                                    $sql = "select * from job where job_id = 42";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>

                        <!--end of ads-->

                        <!--add 1-->
                        <div class="all dm">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/dm2.jpeg" alt="cat_image">
                                <span class="cat-name">
                                    Digital Marketing
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Digital Marketing
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 43";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>

                        <!--add 2-->
                        <div class="all ds">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/ds2.jpeg" alt="cat_image">
                                <span class="cat-name">
                                    Data Science
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Data Science
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 44";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>

                        <!--add 3-->
                        <div class="all gd">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/Graphics-Design.png" alt="cat_image">
                                <span class="cat-name">
                                    Graphics & Design
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Graphics & Design
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 45";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>


                        <!--add 4-->
                        <div class="all ma">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/m&a2.jpg" alt="cat_image">
                                <span class="cat-name">
                                    Music & Audio
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Music & Audio
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 46";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>


                        <!--add 5-->
                        <div class="all pt">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/p&t2.png" alt="cat_image">
                                <span class="cat-name">
                                    Progamming & Tech
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Progamming & Tech
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 47";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>



                        <!--add 6-->
                        <div class="all va">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/v&a2.jpg" alt="cat_image">
                                <span class="cat-name">
                                    Video & Animation
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Video & Animation
                                </h2>


                                <?php
                                    $sql = "select * from job where job_id = 48";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>

                        </div>



                        <!--add 7-->
                        <div class="all wt">
                            <div class="image">
                                <img src="images/abishek_images/fulltime/w&t2.jpg" alt="cat_image">
                                <span class="cat-name">
                                    Writing & Translation
                                </span>
                            </div>

                            <div class="post-content">
                                <h2>
                                    Writing & Translation
                                </h2>

                                <?php
                                    $sql = "select * from job where job_id = 49";
                                    $result = $conn->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button type='button' class='readmorebtn'>Read All</button></a>";
                                    }
                                    }else{
                                        echo "Not Available";
                                    }
                                ?>

                            </div>
                        </div>
                        <!--end of ads-->

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="ojseqsection">
<div class="ojseqmiddlesec">
  
<?php
  $sql = "select * from job where job_id > 59  AND category = 'Full Time'";

  $result = $conn->query($sql);
  
  if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
      echo "<div class='ojcard'><img id='ojcardimg' src='images/logo.png'><p class='ojcardsate'>We're hiring</p>";
      echo "<p class='ojcardtitle'>".$row['job_title']."</p>";
      echo "<a href='moredetailsdynamic.php?jid=$row[job_id]'><button class='ojcardmorebttn' type='button'>More Details</button></a></div>";
    }
    
  }
?>
  </div>
</div>

<?php
    include 'footer.php';
?>



