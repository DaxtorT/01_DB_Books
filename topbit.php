<!DOCTYPE HTML>

<html lang="en">
<?php

    session_start();
    include("config.php");
    include("functions.php");

    // Connect to database...

    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (mysqli_connect_errno())

    {
        echo "Connection Failed:".mysqli_connect_error();
        exit;
    }

?>


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Review Database">
    <meta name="keywords" content="books, reading, fiction, non-fiction, genre, reviews">
    <meta name="author" content="Tyler Saelman-Linn">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book Review Database</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="book_style.css"> 

    <!-- Javascript to make dropdown box toggleable -->
    <script>
        function toggleDropdown() {
            var dropdownContent = document.getElementById("genre_dropdown");
            dropdownContent.classList.toggle("show");
        }
    </script>
    
</head>
    
<body>
    
    <div class="wrapper">
    
        <div class="box banner">
   
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="images/gen_logo.png" width="150" height="150" alt="generic logo" >
            
            </div>    <!-- / end logo -->
        </a>
            
            <h1>Gooseberry Books</h1>
        </div>    <!-- / end banner -->

        <!-- side -->
        <div class="box side">
            <h2>Search | <a class="side" href="showall.php">Show All</a></h2>

            <i>Type Part of the Title / Author Name if Desired</i>

            <hr>

            <!-- start title search -->
            <form method="post" action="title_search.php" 
            enctype="multipart/form-data">

                <input class="search" type="text" name="title" size="40" 
                value="" required placeholder="Title...">

                <input class="submit" type="submit" name="find_title"
                value="Search">

            </form>
            <!-- / end title search -->

            <hr>

            <!-- start author search -->
            <form method="post" action="author_search.php" 
            enctype="multipart/form-data">

                <input class="search" type="text" name="author" size="40" 
                value="" required placeholder="Author...">

                <input class="submit" type="submit" name="find_author"
                value="Search">

            </form>
            <!-- / end author search -->

            <hr>

            <!-- start genre search -->
            <form method="post" action="genre_search.php" 
            enctype="multipart/form-data">

            <div class="dropdown">
                <button onclick="toggleDropdown()" class="dropdown_button">Genre</button>
                <div id="genre_dropdown" class="dropdown_content">
                    <a href="#">Non-Fiction</a>
                    <a href="#">Historical Fiction</a>
                    <a href="#">Sci-Fi</a>
                    <a href="#">Humour</a>
                </div>
            </div>

            </form>
            <!-- / end genre search -->

            <hr>

            Rating Search

        </div>    <!-- / end side -->   