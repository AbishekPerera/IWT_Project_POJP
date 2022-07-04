<?php
include 'header.php';
?>

<div style = "height:2250px">

<div class="trendingjobsMain">

    <div class="trendingtital">
        <h1>Trending Jobs</h1>
    </div>

    <div class="imageslider">
        <div class="imagesbox">
           <div class="imagesboximg" > <img  src="images/abishek_images/trendingjobs/1.jpg" alt="imagesliderimages" ></div>
           <div class="imagesboximg" > <img  src="images/abishek_images/trendingjobs/2.jpg" alt="imagesliderimages" onload="myVar = setTimeout(loadimage2, 20000)"></div>
           <div class="imagesboximg" > <img  src="images/abishek_images/trendingjobs/3.jpg" alt="imagesliderimages" onload="myVar = setTimeout(loadimage3, 15000)"></div>
           <div class="imagesboximg" > <img  src="images/abishek_images/trendingjobs/4.jpg" alt="imagesliderimages" onload="myVar = setTimeout(loadimage4, 10000)"></div>
           <div class="imagesboximg" > <img  src="images/abishek_images/trendingjobs/5.jpg" alt="imagesliderimages" onload="myVar = setTimeout(loadimage5, 5000)"></div>

           

        </div>
    </div>

    <div class="trendingjoblist">
        <div class="trending_parttime">
            <h3>
                Part Time
            </h3>
            <div class="trendingjobs_list">
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/p1.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'ptj1'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/p2.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'ptj2'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/p3.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'ptj3'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/f5.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'ptj4'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>

            </div>
            <br>
            <div class="trending_border"></div>
            <br>
        </div>

        <div class="trending_fulltime">
            <h3>
                Full Time
            </h3>
            <div class="trendingjobs_list">
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/fulltime/dm.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'ftj1'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/fulltime/v&a2.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'ftj2'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/fulltime/w&t.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'ftj3'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/fulltime/ds.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'ftj4'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>

            </div>
            <br>
            <div class="trending_border"></div>
            <br>

        </div>

        <div class="trending_local">
            <h3>
                Local Jobs
            </h3>
            <div class="trendingjobs_list">
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/fulltime/g&d.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'lj1'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/fulltime/p&t2.png" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'lj2'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/fulltime/dm2.jpeg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'lj3'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?> 
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/fulltime/m&a.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'lj4'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?> 
                </div>

            </div>
            <br>
            <div class="trending_border"></div>
            <br>
        </div>

        <div class="trending_foreign">
            <h3>
                Foreign Jobs
            </h3>
            <div class="trendingjobs_list">
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/f1.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'fj1'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/f2.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'fj2'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/f3.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'fj3'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?> 
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/f4.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'fj4'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>

            </div>
            <br>
            <div class="trending_border"></div>
            <br>


        </div>

        <div class="trending_online">
            <h3>
                Online Jobs
            </h3>
            <div class="trendingjobs_list">
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/ad1.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'oj1'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/ad2.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'oj2'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/ad3.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'oj3'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>
                <div class="trendingjobs_list_content">
                    <img class="trending_ads_samples" src="images/abishek_images/trendingjobs/ad4.jpg" alt="">
                    <?php
                        $sql = "select * from job where job_code = 'oj4'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<a href='moredetails.php?id=$row[job_id]&titlei=$row[job_title]&categoryi=$row[category]&salaryi=$row[salary]&descriptioni=$row[job_description]&imagei=$row[image]&codei=$row[job_code]'><button>Read More</button></a>";
                            }
                        }else{
                            echo "Not Available";
                        }
                    ?>
                </div>

            </div>
            <br>
            <div class="trending_border"></div>
            <br>
        </div>
    </div>
</div>

                    </div>

<?php
include 'footer.php';
?>


