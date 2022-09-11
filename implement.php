<?php

include('inc/db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metis - Lernseite</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <script src="header.js"></script>
</head>
<body>
    <div class="header-nav">

        <div href="index.php" class="header-logo">
            <img height="35px" src="header-content/metis-logo.png" alt="Metis-Nav-Logo">
        </div>

        <div>
            <ul class="header-nav-titles">
                <li class="header-titles">
                    <a href="lehrerverwaltung.php">
                        <span>Lehrerverwaltung</span>
                    </a>
                </li>
                <li class="header-titles">
                    <a href="schuelerverwaltung.php">
                        <span>Schülerverwaltung</span>
                    </a>
                </li>
                <li class="header-titles">
                    <a href="anfragen.php">
                        <span>Anfragen</span>
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <ul class="header-icons">
                <li>
                    <button onclick="user_icon_window_open()" class="icon-button3"><img class="icon-header-3" src="header-content/user-icon.png" alt="User-Icon"></button>
                </li>
            </ul>
        </div>
    </div>

    <div class="wrapper">
  <div class="searchBar">
    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Benutzer Suchen" value="" />
    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
      </svg>
    </button>
  </div>
</div>

<section>
  <div class="table_section">
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Klasse</th>
          <th>Name</th>
          <th>E-Mail</th>
          <th class="th_bearbeiten">Bearbeiten</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <?php
          $sql = "SELECT * from schueler";
          $result = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $sacc_email = $row["sacc_email"];
            $sacc_UN = $row["sacc_UN"];
            $sacc_stufe = $row["sacc_stufe"];
            /*
            echo '<td>$sacc_stufe</td>';
            echo '<td>$sacc_UN</td>';
            echo '<td>$sacc_email</td>';
            <td class="td_bearbeiten"><button class="button_del_user">Bearbeiten</button></td>;
            */
          }
          ?>
        </tr>
        <tr>
        <td>5d</td>
          <td>Jonas Matthaei</td>
          <td>jonas.matthaei@wdg.de</td>
          <td class="td_bearbeiten"><button class="button_del_user">Bearbeiten</button></td>
        </tr>
        <tr>
        <td>6a</td>
          <td>Philip Jünemann</td>
          <td>philip.juenemann@wdg.de</td>
          <td class="td_bearbeiten"><button class="button_del_user">Bearbeiten</button></td>
        </tr>
        <tr>
        <td>11c</td>
          <td>Juli Bossong</td>
          <td>juli.bossong@wdg.de</td>
          <td class="td_bearbeiten"><button class="button_del_user">Bearbeiten</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

</div>

</body>
</html>
