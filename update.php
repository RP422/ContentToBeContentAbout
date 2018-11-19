<?php

    //include database connection
    include 'dbconfig.php';

    //write our update query
    //$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection

    $query = "update people
    set
    title = '".$mysqli->real_escape_string($_POST['title'])."',
    content = '".$mysqli->real_escape_string($_POST['content'])."',
    main_page_id = '".$mysqli->real_escape_string($_POST['main_page_id'])."'
    where id='".$mysqli->real_escape_string($_REQUEST['id'])."'";

    //execute the query
    if($mysqli -> query($query)) {

        //if updating the record was successful
        header("Location: index.php"); /* Redirect browser, MUST occur before anything is output to page */
        exit();

    } else {
        //if unable to update new record
        echo "Database Error: Unable to edit the content.";
    }

    // Close the database connection
    $mysqli->close();

?>