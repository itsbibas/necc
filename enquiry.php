<?php
$currentpage = 'enquiry';
$title = 'Enquiry';
?>

<?php
include './include/navbar.php';
include './include/section-flex.php';
?>


<div class="container-2" style="margin: auto;">
    <?php
    if (isset($_GET['success'])) {
        $message = "Successfully Submitted";
        echo '<div style=" width: 100%; text-align:center; color: green; font-size:1em;" class="success"> ' . $message . ' </div>';
    }
    ?>
    <header>Enquiry Form</header>

    <form action="enquirySubmit.php" method="POST">
        <div class="form first">
            <div class="details personal">
                <span class="title">Personal Details</span>

                <div class="fields">
                    <div class="input-field">
                        <label>Full Name</label>
                        <input type="text" name="full-name" placeholder="Enter your name" required>
                    </div>

                    <div class="input-field">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" placeholder="Enter birth date" required>
                    </div>

                    <div class="input-field">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="input-field">
                        <label>Mobile Number</label>
                        <input type="number" name="mobile-number" placeholder="Enter mobile number" required>
                    </div>

                    <div class="input-field">
                        <label>Gender</label>
                        <select name="gender" required>
                            <option disabled selected>Select gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Others</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label>Visa Applied Before?</label>
                        <select name="visa-status" required>
                            <option disabled selected>Select</option>
                            <option>Yes</option>
                            <option>No</option>

                        </select>
                    </div>
                    <div class="input-field">
                        <label>Family Contact Number</label>
                        <input type="number" name="family-contact" placeholder="Enter mobile number" required>
                    </div>

                    <div class="input-field">
                        <label>Country to apply visa</label>
                        <select name="country" required>
                            <option disabled selected>Select country</option>
                            <option>Australia</option>
                            <option>USA</option>
                            <option>New Zealand</option>
                            <option>Canada</option>
                            <option>Japan</option>
                            <option>Europe</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label>Course you want to study</label>
                        <select name="course" required>
                            <option disabled selected>Select course</option>
                            <option value="Architecture,Building and Planning">Architecture,Building and Planning</option>
                            <option value="Art and Design">Art and Design</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Computer Science and IT">Computer Science and IT</option>
                            <option value="Culinary Arts">Culinary Arts</option>
                            <option value="Education and Trainning">Education and Trainning</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Hair,Beauty and Personal Care">Hair,Beauty and Personal Care</option>
                            <option value="Public Health">Public Health</option>
                            <option value="Healthcare and Medicine">Healthcare and Medicine</option>
                            <option value="Social Work">Social Work</option>
                            <option value="Information Science Mathematics">Information Science Mathematics</option>
                            <option value="Land and Environment">Land and Environment</option>
                            <option value="Language Programmes">Language Programmes</option>
                            <option value="Law">Law</option>
                            <option value="Nursing">Nursing</option>
                            <option value="Media/Journalism/Communication">Media/Journalism/Communication</option>
                            <option value="Military Studies">Military Studies</option>
                            <option value="Science and Mathematics">Science and Mathematics</option>
                            <option value="Social Studies and Communication">Social Studies and Communication</option>
                            <option value="Sports">Sports</option>
                            <option value="Travel Tourism and Hospitality">Travel Tourism and Hospitality</option>
                            <option value="Accounting,Marketing,Business">Accounting,Marketing,Business</option>
                            <option value="Agriculture">Agriculture</option>

                        </select>
                    </div>
                </div>
            </div>

            <div class="details ID">
                <span class="title">Qualifications</span>

                <div class="fields">
                    <div class="input-field">
                        <label>Level</label>
                        <select name="level" required>
                            <option disabled selected>Select Level</option>
                            <option>SLC/SEE</option>
                            <option>+2</option>
                            <option>Bachelors</option>
                            <option>Masters</option>

                        </select>
                    </div>

                    <div class="input-field">
                        <label>Passed Date</label>
                        <input type="date" name="passed-date" placeholder="Enter your passed date" required>
                    </div>

                    <div class="input-field">
                        <label>Subject/Faculty</label>
                        <input type="text" name="faculty" placeholder="Enter faculty" required>
                    </div>

                    <div class="input-field">
                        <label>Grade/Percentage</label>
                        <input type="number" name="grade" placeholder="Enter your grade/percentage" required>
                    </div>

                    <div class="input-field">
                        <label>School/University Name</label>
                        <input type="text" name="school" placeholder="Enter school/university" required>
                    </div>


                    <!-- <div class="input-field">
                        <label>Expiry Date</label>
                        <input type="date" placeholder="Enter expiry date" required>
                    </div> -->
                </div>

            </div>

            <div class="details ID">
                <span class="title">Test Score</span>

                <div class="fields">
                    <div class="input-field">
                        <label>Have you taken any English Proficiency test?</label>
                        <select name="test-status" required>
                            <option disabled selected>Select</option>
                            <option>Yes</option>
                            <option>No</option>

                        </select>
                    </div>

                    <div class="input-field">
                        <label>Test type</label>
                        <select name="test-type" required>
                            <option disabled selected>Select test type</option>
                            <option>IELTS</option>
                            <option>TOEFL</option>
                            <option>SAT</option>
                            <option>GRE</option>
                            <option>GMAT</option>
                            <option>Others</option>

                        </select>
                    </div>

                    <div class="input-field">
                        <label>Obtained Score Overall</label>
                        <input type="text" name="score" placeholder="Enter overall score">
                    </div>


                </div>

            </div>

            <button class="sumbit" name="btn-send">
                <span class="btnText">Submit</span>
                <i class="uil uil-navigator"></i>
            </button>
        </div>


    </form>

</div>


<?php
include './include/footer.php';
?>