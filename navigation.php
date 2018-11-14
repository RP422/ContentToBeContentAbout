<?php
    include 'dbconfig.php';

    // Query all the Home pages
    $home_pages_query = 'select title from ';
    $home_pages_result = $mysqli->query( $theme_query );
    // Query all the About pages
    // Query all the Contact pages

    echo '<ul>';
    
    // Loop through the results of the Home pages, add anchor tag for each
    
    echo '<li><h3>About</h3></li>';
    echo '<li><ul>';
    // Loop through the results of the About pages, add anchor tag for each
    echo '</ul></li>';
    
    echo '<li><h3>Contact</h3></li>';
    echo '<li><ul>';
    // Loop through the results of the Contact pages, add anchor tag for each
    echo '</ul></li>';
    echo '</ul>'
?>