<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lessons | Chad Stivers Guitar</title>
        <link rel="stylesheet" href="testcssnew.css" type="text/css">
    </head>
    <body>
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
      <article class="bio">
          <p class="aboutChad">
              Chad found his passion for guitar in May of 2014, focusing on all things 
              classic rock and heavy metal. Through training with Rob Wolf in Tampa, Florida,
              Chad developed his skills in improvisation, rhythm, and theory ranging in style
              from soft rock and pop to extensive blues to heavy metal to jazz and to fingerstyle.
              In 2017 Chad acquired a special interest in fingerstyle and has spent much time 
              studying the likes of Leo Kottke, Lindsay Buckingham, Mark Hanson, Andres Segovia,
              Steve Howe, Jorma Kaukonen, and more. Training with Dr. Jimmy Moore in St. Petersburg,
              Florida, Chad adopted the technical style of Christopher Parkening through 
              his book, "The Parkening Method." Today Chad is still always learning and searching
              for new inspirations. You can often find him searching for live music or studying
              web development at his home in Lakeland, Florida.
          </p>
      </article>

      <div id="backgroundImage"></div>
    </body>
</html>
