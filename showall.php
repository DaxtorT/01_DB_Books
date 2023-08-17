<?php
    include "topbit.php";

    $showall_sql="SELECT * FROM `book_reviews` ORDER BY `book_reviews`.`Title` ASC";
    $showall_query=mysqli_query($dbconnect, $showall_sql);
    $showall_rs=mysqli_fetch_assoc($showall_query);
    $count=mysqli_num_rows($showall_query);
?>
        
        <!-- nav -->
        <div class="box side">
            <h2>Search | <a class="side" href="showall.php">Show All</a></h2>

            <i>Type Part of the Title / Author Name if Desired</i>

            <hr>

            Title Search<br>
            Author Search<br>
            Genre Search<br>
            Rating Search

        </div>    <!-- / nav -->        
         
        <!-- results -->
        <div class="box main">
            <h2>All Items</h2>
           
            <?php
            
            // check if there are any results
            if ($count<1)
            {
                ?>
                <div class="error">
                    Sorry! There are no results that match your search.
                    Please use the search box in the sidebar to try again.
                </div>
                <?php
            } // end if

            // if there are no results, output an error
            else
            {
                do
                {
                    ?>
                    <!-- Results Go Here -->
                    <div class="results">

                        <p>Title: <span class="sub_heading"><?php echo $showall_rs['Title']; ?></span>
                        </p>

                        <p>Author: <span class="sub_heading">author holder</span>
                        </p>

                        <p>Genre: <span class="sub_heading">genre holder</span>
                        </p>

                        <p>Rating: <span class="sub_heading">rating holder</span>
                        </p>

                        <p><span class="sub_heading">Review / Response</span>
                        </p>

                        <p>
                            Review Placeholder
                        </p>

                    </div>    <!-- / end results -->
                    <?php
                } // end do

                while ($showall_rs=mysqli_fetch_assoc($showall_query));
            } // end else

            // if there are results, display them

            ?>

        
<?php
    include "bottombit.php";
?>