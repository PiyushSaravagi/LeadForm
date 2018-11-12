<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="../css/leadform.css" rel="stylesheet" />
<script src="../scripts/leadform.js"></script>

<?php
    $name = $_REQUEST["fullname"];
    $email = $_REQUEST['email'];
    $skype = $_REQUEST['skype'];
    $address = $_REQUEST['address'];
    $citizenship = $_REQUEST['citizenship'];
    $bday = $_REQUEST['bday'];
    $native_speaker = $_REQUEST['nativeSpeakerRadios']=='native-speaker'?true:false;
    $tech_req_satisfied = $_REQUEST['technicalRequirementsRadios']=='tech-req-satisfied'?true:false;
    $highest_education = $_REQUEST['education-attained'];
    $school = $_REQUEST['school-name'];
    $major = $_REQUEST['major'];
    $certificates = $_REQUEST['english-teaching-certificates'];
    
    $resume = $_FILES['resume-upload'];

    $ext = pathinfo($resume['name'], PATHINFO_EXTENSION);
    $target_file_location = "/home/admin123z/public_html/LeadForm/Resume/".$email .".".$ext;
    if(isset($resume)){
        move_uploaded_file($_FILES["resume-upload"]["tmp_name"], $target_file_location);
    }
    /* The file format of csv is as follows 
     * name	email	skype	birthday	address	citizenship	native_speaker	highest_education	school	major	certificates
     */    
    $data_array = array($name, $email, $skype, $bday, $address, $citizenship, $native_speaker, $highest_education, $school, $major, $certificates);
    $file = fopen('/home/admin123z/public_html/LeadForm/FormData.csv', 'a');
    fputcsv($file, $data_array);
    fclose($file);
    
//    foreach ($_POST as $key => $value) {
//        echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
//    }
?>

    <html>

    <head>
        <title> American International English Teachers Association</title>
    </head>


    <body style="background-color: #F9F9F9">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img class="img-fluid center-block" style="width:100%; height:70%" src="../res/thank-you.jpg" />
                    <div> <label class="text-body" style="font-size: 30px; font-weight: bold;">Application submitted!</label> </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                            Thank you for taking the time to submit the application. Your application has been submitted successfully. We will get back to you soon!
                        </p>
                        <p>
                            While you wait, feel free to read a couple articles we wrote about online teaching:
                        </p>
                        <ul>
                            <li><a href="https://americanenglish.co/future-teaching-online">The Future of Teaching is Online</a></li>
                            <li><a href="https://americanenglish.co/open-online-teaching/">Being Open to Online Teaching</a></li>
                        </ul>
                        <p>
                            If you have further questions, please feel free to send us email at <a href="mailto:info@americanenglish.co">info@americanenglish.co</a>
                            <br> Thank you and talk to you soon!
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </body>

    </html>
