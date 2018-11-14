<!DOCTYPE html>



<html>
    
    <head>
        <link href="testcssnew.css" type="text/css" rel="stylesheet">
        <title>Chad Stivers Guitar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        
        $firstNameError = '';
        $lastNameError = '';
        $contactError = '';
        $aboutError = '';
        $firstName = '';
        $lastName = '';
        $contact = '';
        $about = '';
        //$postFirstName = "$_POST['firstName']";
        //$postLastName = "$_POST['lastName']";
        //$postContact = "$_POST[contact]";
        //$postAboutYou = "$_POST[aboutYou]";
        
        
            if (isset($_POST["submit"])) {
                $ok = true;
                
                if ($_POST['firstName'] === "") {
                    $ok = false;
                    $firstNameError = "*Please enter your first name.";
                } else {
                    $firstName = $_POST['firstName'];
                }
                if ($_POST['lastName'] === "") {
                    $ok = false;
                    $lastNameError = "*Please enter your last name.";
                } else {
                    $lastName = $_POST['lastName'];
                }
                if ($_POST['contact'] === "") {
                    $ok = false;
                } else {
                    $contact = $_POST['contact'];
                }
                if(!preg_match('^(\d{10}|(\w+@(\w+\.)+\w+))^', htmlspecialchars($_POST['contact']))) {
                    $ok = false;
                    $contactError = "*Your contact should be 10 digits of a phone number (no dashes) "
                    . "or a valid email address.";
                }
                if ($_POST['aboutYou'] === "") {
                    $ok = false;
                    $aboutError = "*Please tell me a little bit about you!";
                } else {
                    $about = $_POST['aboutYou'];
                }
                
                    
                if($ok) {
                    $db = mysqli_connect('localhost', 'cstivers', 'thunder7', 'php test');
                    
                    if($db->connect_errno) {
                        exit("Database connection failed. Reason:".$db->connect_error);
                    }
                    
                    $query = "INSERT INTO students (first_name, last_name, contact, about) VALUES (
                            '".mysqli_real_escape_string($db, $_POST["firstName"])."',
                            '".mysqli_real_escape_string($db, $_POST["lastName"])."',
                            '".mysqli_real_escape_string($db, $_POST["contact"])."',
                            '".mysqli_real_escape_string($db, $_POST["aboutYou"])."'
                            )";
                    mysqli_query($db, $query);
                }
            }
        ?>
        
        <?php
        // put your code here
        $dbPassword = "thunder7";
      $dbUserName = "cstivers";
      $dbServer = "localhost";
      $dbName = "php test";

      $connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

      if($connection->connect_errno) {
      exit("Database connection failed. Reason:".$connection->connect_error);
      }

      $query = "DELETE FROM students WHERE ID=2";

      $connection->query($query);

      $connection->close()

        ?>
        <header>
            <a href='index.php'><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0rkzea9mLyRFqbO6w3UW9rRye3RLJFq3mxhKAI0QftecHM1S3LA"
                    alt="Rock On" id="logo"></a>
            <nav><pre>          <a href="index.php">Home</a>          |          <a href="TestMusicSiteNew.php">Lessons</a>          |          <a href="contactnew.php">Contact</a>          |          Videos          </pre></nav>
            <hr width="53%" align="left">
        </header>
        <div class='requiredFieldWarning'><span style='color: red; font:22px fantasy;'>*</span> Indicates a required field.</div>
        <form method="post" action="">
            <span style='color: red; font:25px fantasy;'>* </span>First Name:<?php echo "<div style='font:14px arial; color:red;'>$firstNameError</div>" ?><input type="text" id="firstName" name="firstName" placeholder=' First Name' value="<?php echo htmlspecialchars($firstName) ?>"><br>
            <span style='color: red; font:25px fantasy;'>* </span>Last Name:<?php echo "<div style='font:14px arial; color:red;'>$lastNameError</div>" ?><input type="text" id="lastName" name="lastName" placeholder=' Last Name' value='<?php echo htmlspecialchars($lastName) ?>'><br>
            <span style='color: red; font:25px fantasy;'>* </span>Preferred Contact:<?php echo "<div style='font:14px arial; color:red;'>$contactError</div>" ?><input type="text" id="contact" name="contact" placeholder=" Phone number or Email" value='<?php echo htmlspecialchars($contact) ?>'><br>
            <span style='color: red; font:25px fantasy;'>* </span>About you:<?php echo "<div style='font:14px arial; color:red;'>$aboutError</div>" ?><br><textarea rows="5" id="aboutYou" name="aboutYou" placeholder="How long have you been playing, what kind of music do you like, and anything else you'd like me to know..."><?php echo htmlspecialchars($about) ?></textarea>
            <input class="submit" name='submit' type="submit">
        </form>
    </body>
</html>
