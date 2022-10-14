
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datamellon</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <form method="POST" action="user.php" class="bodyContainer" id="form">
            <div class="header">
                <h1 class='data'>Data<h1><h1 class='mellon'>mellon</h2>
            </div>
            <div class="join">
                <h1>Join us</h1>
                <p>Datamellon prospective applicants form</p><hr>
                <a href="mailto=${email}">adeyemoadesewa@gmail.com</a> <a href="#" class='switch'>Switch account</a>
                <p>The name and photo associated with your Google account will be recorded when you upload files and submit this form. Only
                     the email you enter is part of your response.</p>
                <div class="star required">*Required</div>
            </div>
            <div id="formPage">
                <div class="email" id="formPage">
                    Email <p class='star'>*</p><br><input type="email" placeholder='Your Email' name='email' value='<?php isset($_REQUEST['email']) ? $_POST['email'] : '' ?>' required>
                </div>
                <div class="name" id="formPage">
                    Name <p class='star'>*</p><p>First name and Last name</p><br><input type="text" name='name' placeholder='You Name' value='<?php isset($_REQUEST['name']) ? $_POST['name'] : '' ?>' required>
                </div>
                <div class="tel" id="formPage">
                    Phone number <p class='star'>*</p><br><input type="tel" name='tel' value='<?php isset($_REQUEST['tel']) ? $_POST['tel'] : '' ?>' placeholder='Phone Number' required>
                </div>
                <div class="pLink" id="formPage">
                    Portfolio link (optional)<br><input type="link" name='pLink' placeholder='Url' value='<?php isset($_REQUEST['pLink']) ? $_POST['pLink'] : '' ?>'>
                </div>
                <div class="rLink" id="formPage">
                    Resume link (optional)<br><input type="link" name='rLink' placeholder='Url' value='<?php isset($_REQUEST['rLink']) ? $_POST['rLink'] : '' ?>'>
                </div>
                <div class="resume" id="formPage">
                    Upload resume/CV<br><input type="file" name='name' value='<?php isset($_REQUEST['resume']) ? $_POST['resume'] : '' ?>'>
                </div>
                <div class="why" id="formPage">
                    Why should we hire you?<br><input type="text" name='why' value='<?php isset($_REQUEST['why']) ? $_POST['why'] : '' ?>'>
                </div>
            </div>
            <div id="log"></div>
            <div class="action">
                <!-- <input type="submit"   class='submit'> -->
                <input type="submit" class='submit'>
                <input type="submit" value='Log in' onclick="location.href='app.php';" class="log_in">
                <!-- <a onclick="location.href='app.php';" class="log_in">Log in</a> -->
            </div>        
            <p>Never submit passwords through google forms</p>

        </form>
        <div>
            <?php
                $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : 'Email is empty';
                $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : 'Name is empty';
                $tel = isset($_REQUEST['tel']) ? $_REQUEST['tel'] : 'Phone number is empty';
                $pLink = isset($_REQUEST['pLink']) ? $_REQUEST['pLink'] : 'Portfolio link is empty';
                $rLink = isset($_REQUEST['rLink']) ? $_REQUEST['rLink'] : 'Resume Link is empty';
                $resume = isset($_REQUEST['resume']) ? $_REQUEST['rLink'] : 'Resume Link is empty';
                $why = isset($_REQUEST['why']) ? $_REQUEST['why'] : 'why you should be hired is empty';
            ?>
        </div>
        <div class="myVar"></div>
        <footer>
            <p>This form was recreated with a MonkConcept.<a>Report Abuse</a></p>
            <h2 class='data'>MonkConcept</h2>
        </footer>

    </div>
    <script src="index.js"></script>
</body>
</html>