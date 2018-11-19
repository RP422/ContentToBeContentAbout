<?php
    include 'dbconfig.php';

    // Query for all the categories
    $categories_query = 'select id as main_page_id, title as main_page_title from main_pages';
    $categories_result = $mysqli->query( $categories_query );
    

    // Start building the <nav> block
    echo '<nav>';
    echo '<h3>Navigation</h3>';
    echo '<ul>';

    while( $row = $categories_result->fetch_assoc() ){
        extract($row);

        echo '<li>'.$main_page_title.'</li>';
        echo '<li><ul>';

        $subpages_query = 'select title as subpage_title from sub_pages where main_page_id = '.$main_page_id;
        $subpages_result = $mysqli->query( $subpages_query );
        
        while( $subpage = $subpages_result->fetch_assoc() ){
            extract($subpage);
            
            echo '<li><a href="/view?title='.$subpage_title.'>'.$subpage_title.'</a></li>';
        }

        $subpages_result->free();
        echo '</ul></li>';
    }
    echo '</ul>';
    echo '</nav>';

    $categories_result->free();
    $mysqli->close();
?>