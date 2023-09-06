<?php
    include "topbit.php";

    $find_sql="SELECT * FROM `book_reviews` ORDER BY `book_reviews`.`Title` ASC";
    $find_query=mysqli_query($dbconnect, $find_sql);
    $find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);
?>       
         
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
                </div> <!-- / end error -->
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

                    <p>Title: <span class="sub_heading"><?php echo $find_rs['Title']; ?></span>
                    </p>

                    <p>Author: <span class="sub_heading"><?php echo $find_rs['Author']; ?></span>
                    </p>

                    <p>Genre: <span class="sub_heading"><?php echo $find_rs['Genre']; ?></span>
                    </p>

                    <p>Rating: <span class="sub_heading"><?php echo $find_rs['Rating']; ?></span>
                    </p>

                    <p>Review / Response
                    </p>
                    
                    <p><span class="sub_heading"><?php echo $find_rs['Review']; ?></span>
                    </p>
                    
                    </div>    <!-- / end results -->

                    <br>
                
                    <?php
                } // end do

                while ($find_rs=mysqli_fetch_assoc($find_query));
            } // end else

            // if there are results, display them

            ?>

        </div> <!-- / end box main -- >

        
<?php
    include "bottombit.php";
?>