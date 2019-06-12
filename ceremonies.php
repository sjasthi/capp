<?php
/**
 * Created by PhpStorm.
 * User: Sandip Rai
 * Date: 9/21/2018
 * Time: 12:08 AM
 */
require "db_configuration.php";

$query = "SELECT * FROM ceremonies";

$GLOBALS['ceremoniesTable'] = mysqli_query($db, $query);



?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ceremonies</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/publishersdb.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">





    <style>
        .table td.text {
            max-width: 177px;
        }

        .table td.text span {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            display: block;
            max-width: 100%;
        }
    </style>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">
        ICS 325
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>

        <ul class="navbar-nav mr-right">
            <li class="nav-item">
                <a class="nav-link" href="#">Done by Sandip Rai</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container-fluid">
    <h3 align="center">Ceremonies Table</h3>
    <table class="table table-striped " id="ceremoniesTable">
    <div class="table responsive">
        <thead>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Level</th>
            <th>Description</th>
            <th>Facilitator</th>
            <th>Required Attendees</th>
            <th>Optional Attendees</th>
            <th>Cadence</th>
            <th>Timebox Lower Limit</th>
            <th>Timebox Upper Limit</th>
            <th>Contains Demo?</th>
            <th>Demo Lead</th>
            <th>Is Optional?</th>
            <th>Is SAFe?</th>
            <th>SAFe Link</th>
            <th>Status</th>
            <th>Comments</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($ceremoniesTable->num_rows > 0) {
            // output data of each row
            while($row = $ceremoniesTable->fetch_assoc()) {

                echo '<tr>
                                          <td class="text"> <span>'.$row["name"].' </span> </td>
                                          <td> '.$row["category"].'</td>
                                          <td> '.$row["level"]. '</td>
                                          <td> '.$row["description"]. '</td>
                                          <td> '.$row["facilitator"]. '</td>
                                          <td> '.$row["required"]. '</td>
                                          <td> '.$row["optional"]. '</td>
                                          <td> '.$row["cadence"]. '</td>
                                          <td> '.$row["time_lower"].' </td>
                                          <td> '.$row["time_upper"].' </td>
                                          <td> '.$row["contains_demo"].' </td>
                                          <td> '.$row["demo_lead"].' </td>
                                          <td> '.$row["is_optional"].' </td>
                                          <td> '.$row["is_safe"].' </td>
                                          <td> <a target="_blank" rel="noopener noreferrer" href=" '.$row["safe_link"].' ">URL</a> </td>
                                          <td> '.$row["status"].' </td>
                                          <td> '.$row["comments"].' </td>                                          
                                        </tr>';

            }//end while
        }//end if
        else {
            echo "0 results";
        }//end else
        ?>
        </tbody>
    </div>
    </table>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!--jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Data Tables-->
<script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script type="text/javascript" language="javascript">

    $(document).ready( function () {
        $('#ceremoniesTable').dataTable();
    } );
</script>

</body>
</html>