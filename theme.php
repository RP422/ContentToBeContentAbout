<?php // Include this file where the sylesheet would go in the header
    include 'dbconfig.php';

    $user_id = 0;

    // Get the user id from the current session and overwrite the preexisting value if logged in

    $theme_query = 'select css_filename from css_themes join users on css_themes.id = users.theme where  users.id = '.$user_id;
    $result = $mysqli->query( $theme_query );

    $theme = ""; // Replace this with some default file

    // Pull the css file from the results
    if($row = $result->fetch_assoc()){
        extract($row);
        $theme = $css_filename;
    }
    else {
        // Throw some kind of warning maybe?
    }

    // Link the stylesheet
    echo '<link rel="stylesheet" type="text/css" href="'.$theme.'">';

    //disconnect from database
    $result->free();
    $mysqli->close();
?>