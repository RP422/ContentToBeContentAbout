<?php include 'header.php'; ?>
    <?php 
    //include database connection
    include 'dbconfig.php';

    //Get the specific page to update
    $query = "SELECT id, title, content, main_page_id
                FROM sub_pages WHERE id='".$mysqli->real_escape_string($_REQUEST['id'])."'
                LIMIT 0,1";

    //execute the query
    $result = $mysqli -> query( $query );

    //get the result
    $row = $result -> fetch_assoc();

    //assign the result to certain variable so our html form will be filled up with values
    $id = $row['id'];
    $title = $row['title'];
    $content = $row['content'];
    $main_page_id = $row['main_page_id'];
?>

<h3>Update Details</h3>
    <form id="form" action="update.php" method="post">
        <input type="hidden" name="id" value='<?php echo $id;  ?>'/>
        <label for="title">Title: </label>
            <input type="text" name="title" value='<?php echo $title; ?>'/>
        <br>
        <label for="content">Content: </label>
            <input type="text" name="content" value='<?php echo $content; ?>'/>
        <br>
        <label for="Main Page">Main Page: </label>
        <select name="species">
            <option selected='<?php echo $species;  ?>'><?php echo $species;  ?></option>

            <?php
                $optionsQuery = "SELECT id, title
                    FROM main_pages";
                $optionsResult = $mysqli -> query($optionsQuery);
                $optionsRow = $optionsResult -> fetch_assoc();

                for($x = 0; $x < $optionsRow.count; ++$x) {
                    echo '<option value="'
                        .$optionsRow['id'][$x]
                        .'">'
                        .$optionsRow['title'][$x]
                        .'</option>';
                }
            ?>
        </select>
        <br>
        <input type="submit" value="Update Page">
    </form>

    <?php
        //disconnect from database
        $result->free();
        $mysqli->close();
    ?>

<?php include 'footer.php'; ?>