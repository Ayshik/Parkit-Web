<?php
require_once ('../../Controllers/AdminController.php');

$info=unreadreport();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report</title>
    <link
      href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="recentreport.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>


  <style>
  table {
    border-collapse: collapse;
  margin-left: 272px;
  color: white;
  border: transparent;
  }

  th, td {
    text-align: left;
    padding: 8px;
    background: black;
}
  }

  tr:nth-child(even){background-color: #f2f2f2}

  th {
    background-color: #4CAF50;
    color: white;
  }

  table tr:not(:first-child){
                 cursor: pointer;transition: all .25s ease-in-out;
             }
             table tr:not(:first-child):hover{background-color: #ddd;}

             .btn {
     background-color: red;
     border: none;
     color: white;
     padding: 12px 16px;
     font-size: 16px;
     cursor: pointer;
  	 border-radius: 10px;
   }


   .btn:hover {
     background-color: RoyalBlue;
   }

   a:link{


     color: white;
     text-decoration: none;

   }
   a:visited{

  color: white;

   }

  </style>


  <body>
    <header class="header">
      <div class="bgimage">
        <div class="menu">
          <div class="leftmenu">
            <h3><a href="../home.html">Parkit</a></h3>
          </div>
          <div class="welcome">
            <h1>Release Parking</h1>
            <div class="rightmenu">
              <button
                id="buttonone"
                <
                onclick="window.location.href='../home.html';"
              >
                Logout
              </button>
            </div>
          </div>
        </div>
      </div>
    </header>
    <input type="checkbox" id="check" />
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Owner's Area</header>
      <ul>
        <li>
          <a href="parkerarea.php"><i class="fas fa-qrcode"></i>Dashboard</a>
        </li>
        <li>
          <a href="profile.php"><i class="fas fa-link"></i>Profile</a>
        </li>
        <li>
          <a href="garage.html"><i class="fas fa-stream"></i>Garages</a>
        </li>
        <li>
          <a href="report.php"
            ><i class="fas fa-calendar-week"></i>Report</a
          >
        </li>
      </ul>
    </div>
    <section>
      <div class="main-section">
        <div class="dashbord">
          <div class="icon-section">





            <table id="table" border="1">
              <thead>
                <th>Sl.</th>
                  <th>Sender</th>
                <th>Subject</th>
                <th>User Type</th>
                <th>Message</th>

            <th>Date</th>

            <th>------------------</th>
            
              </thead>


              <tbody>
                <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                      echo "<td>".$infos["sl"]."</td>";
                        echo "<td>".$infos["sender"]."</td>";
                      echo "<td>".$infos["subject"]."</td>";
              echo "<td>".$infos["usertype"]."</td>";
                echo "<td>".$infos["message"]."</td>";
                        echo "<td>".$infos["date"]."</td>";

            echo '<td><button class="btn"><a href="../../Controllers/ReadController.php?id='.$infos["sl"].'" i class="fa fa-eye">  Read</a></td>';

                    echo "</tr>";
                  }
                ?>

              </tbody>








            </table>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
