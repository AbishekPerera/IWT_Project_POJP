<?php
include 'header.php';

        $jid = $_GET["jid"];

        $sql = "SELECT * FROM job_seeker WHERE ID = '$jid'";

        $result = $conn->query($sql);
    
        $row = $result -> fetch_assoc();
        $fname = $row['Fullname'];
        $dob = $row['DateOFBirth'];
        $gdate = $row['GraduateDate'];
        $pcno = $row['PrimaryContact'];
        $pnu = $row['PhoneNumber'];
        $email = $row['Email'];
        $aline1 = $row['Street1'];
        $aline2 = $row['Street2'];
        $city = $row['City'];
        $province = $row['Province'];
        $pzcode = $row['PostalZipcode'];
        $passno = $row['PassportNumber'];
        $doi = $row['DateofIssue'];
        $vupto = $row['ValidUPTO'];
        $password = $row['password'];
        $image = $row['profilepic'];

        $query = "SELECT * FROM academic WHERE JID = '$jid'";

        $qresult = $conn->query($query);

        $arow = $qresult->fetch_assoc();
        $hq1 = $arow['HQ1'];
        $hq2 = $arow['HQ2'];
        $hq3 = $arow['HQ3'];
        $pg1 = $arow['PG1'];
        $pg2 = $arow['PG2'];
        $pg3 = $arow['PG3'];
        $ed1 = $arow['ED1'];
        $ed2 = $arow['ED2'];
        $ed3 = $arow['ED3'];
        $aoq1 = $arow['AOQ1'];
        $aoq2 = $arow['AOQ2'];
        $aoq3 = $arow['AOQ3'];
        $wed1 = $arow['WED1'];
        $wed2 = $arow['WED2'];
        $wed3 = $arow['WED3'];
        $d1 = $arow['D1'];
        $d2 = $arow['D2'];
        $d3 = $arow['D3'];
        $acs1 = $arow["jsreg3feild1"];
        $acs2 = $arow["jsreg3feild2"];
        $acs3 = $arow["jsreg3feild3"];

?>

<div class="jobskrUserProfileBody" style="background-image: url('images/abishek_images/profilepages/jobskr/bg1.jpg');">


    <div class="UserProfileSelectPage">
        <ul>
            <div class="SelectPage jbsactive">
                <li onclick="profileFilter('1')">Personal</li>
            </div>
            <div class="SelectPage">
                <li onclick="profileFilter('2')">Academic Details</li>
            </div>
        </ul>
    </div>

    <div class="jbskrbackbtn">
        <a href="empdashprofile.php" class="jbskrBackbtnA"> Back </a>
    </div>

    <div class="jobskrUserPersonal" id="jupersonal">
        <div class="userProfilePic">
            <img src="<?php echo $image ?>" alt="userProfilepicture">

        </div>

        <div class="userDetals">
            <ul>
                <div class="userDetailsContent">
                    <li>
                        <h4>Passport Number :</h4>
                        <h5><?php echo $passno ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Date of Issue :</h4>
                        <h5><?php echo $doi ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Valid Upto :</h4>
                        <h5><?php echo $vupto?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Postal Code :</h4>
                        <h5><?php echo $pzcode ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Graduated Date</h4>
                        <h5><?php echo $gdate ?></h5>
                    </li>
                </div>
            </ul>

        </div>

        <div class="userDetals2">
            <ul>
                <div class="userDetailsContent">
                    <li>
                        <h4>Full Name :</h4>
                        <h5><?php echo $fname ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Date of Birth :</h4>
                        <h5><?php echo $dob ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Primary Contact Number:</h4>
                        <h5><?php echo $pcno ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Contact Number 2 :</h4>
                        <h5><?php echo $pnu ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Email :</h4>
                        <h5><?php echo $email ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Address Line 1 :</h4>
                        <h5><?php echo $aline1 ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Address Line 2 :</h4>
                        <h5><?php echo $aline2 ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>City :</h4>
                        <h5><?php echo $city ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Province :</h4>
                        <h5><?php echo $province ?></h5>
                    </li>
                </div>


            </ul>






        </div>









    </div>

    <div class="userAcademic" id="juacc">
        <div class="userDetals3">
            <ul>
                <div class="userDetailsContent">
                    <li>
                        <h4>Highest Qualifications</h4>
                        <h5><?php echo $hq1 ?></h5>
                        <h5><?php echo $hq2 ?></h5>
                        <h5><?php echo $hq3 ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Post Graduates</h4>
                        <h5><?php echo $pg1 ?></h5>
                        <h5><?php echo $pg2 ?></h5>
                        <h5><?php echo $pg3 ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Equalent Diplomas</h4>
                        <h5><?php echo $ed1 ?></h5>
                        <h5><?php echo $ed2 ?></h5>
                        <h5><?php echo $ed3 ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Anyother Qualifications</h4>
                        <h5><?php echo $aoq1 ?></h5>
                        <h5><?php echo $aoq2 ?></h5>
                        <h5><?php echo $aoq3 ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Work Experiences</h4>
                        <h5><?php echo $wed1 ?></h5>
                        <h5><?php echo $wed2 ?></h5>
                        <h5><?php echo $wed3 ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Declaration</h4>
                        <h5><?php echo $d1 ?></h5>
                        <h5><?php echo $d2 ?></h5>
                        <h5><?php echo $d3 ?></h5>
                    </li>
                </div>

                <div class="userDetailsContent">
                    <li>
                        <h4>Achivement/Scholarships</h4>
                        <h5><?php echo $acs1 ?></h5>
                        <h5><?php echo $acs2 ?></h5>
                        <h5><?php echo $acs3 ?></h5>
                    </li>
                </div>


            </ul>

        </div>




    </div>




































</div>
<?php
include 'footer.php';
?>