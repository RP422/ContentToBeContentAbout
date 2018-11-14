<?php
    include 'dbconfig.php';

    // Query all the Home pages
    $home_pages_query = 'select title from ';
    $home_pages_result = $mysqli->query( $theme_query );
    
    // Query all the About pages

    // Query all the About -> History pages

    // Query all the About -> Mission pages

    // Query all the Contact pages

    // Query all the Contact -> Location pages

    // Query all the Contact -> Email pages

    // Put each result into an array
    $home_pages = [];
    $about_pages = [];
    $about_history_pages = [];
    $about_mission_pages = [];
    $contact_pages = [];
    $contact_location_pages = [];
    $contact_email_pages = [];

    // Start building the <nav> block
    echo '<nav>';
    echo '<h3>Navigation</h3>';
    echo '<ul>';
    
    // Loop through the results of the Home pages, add a <li> with an anchor tag for each
    
    if($about_pages.length > 0 || 
       $about_history_pages.length > 0 ||
       $about_mission_pages.length > 0){

        echo '<li>About</li>';
        echo '<li><ul>';

        // Loop through the results of the About pages, add a <li> with an anchor tag for each
        
        if($about_history_pages.length > 0){
            echo '<li>History</li>';
            echo '<li><ul>';

            // Loop through the results of the About -> History pages, add a <li> with an anchor tag for each

            echo '</ul></li>';
        }
        
        if($about_mission_pages.length > 0){
            echo '<li>Mission</li>';
            echo '<li><ul>';

            // Loop through the results of the About -> Mission pages, add a <li> with an anchor tag for each
            
            echo '</ul></li>';
        }
        echo '</ul></li>';
    }
    
    if($contact_pages.length > 0 || 
       $contact_location_pages.length > 0 ||
       $contact_email_pages.length > 0){

        echo '<li>Contact</li>';
        echo '<li><ul>';

        // Loop through the results of the Contact pages, add a <li> with an anchor tag for each
        
        if($contact_location_pages.length > 0){
            echo '<li>Location</li>';
            echo '<li><ul>';

            // Loop through the results of the Contact -> Location pages, add a <li> with an anchor tag for each

            echo '</ul></li>';
        }
        
        if($contact_email_pages.length > 0){
            echo '<li>Email</li>';
            echo '<li><ul>';

            // Loop through the results of the Contact -> Email pages, add a <li> with an anchor tag for each
            
            echo '</ul></li>';
        }
        echo '</ul></li>';
    }
    echo '</ul>';
    echo '</nav>';
?>