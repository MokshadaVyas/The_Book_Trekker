<?php
session_start();
// $user_id = $_SESSION['users'];
// if(!isset($users)){
//     header('location:signup.php');
// }
// if(isset($_POST['add_to_bookshelf'])){
//     $book_name = $_POST['book_name'];
//     $author = $_POST['author'];
//     $genre = $_POST['genre'];
//     $type = $_POST['type'];
//     $img = $_POST['img'];
//     $book_numbers = mysqli_query($con,"SELECT * FROM book_info WHERE name = $book_name AND user_id = $user_id") or die('query failed');
//     if(mysqli_num_rows($book_numbers)>0){
//         $message [] = 'Already added to your bookshelf';
//     }
//     else{
//         mysqli_query($con, "INSERT INTO book_info(book_name,author, genre,type,img) VALUES('$book_name','$author','$genre','$type', $img)") or die ('query failed');
//         $message [] = 'Book Added to Cart';
//     }
//  }
$con = mysqli_connect("localhost", "root", "", "nonfiction");
if (isset($_POST['add_to_bookshelf'])) {
    if (isset($_SESSION['add_to_bookshelf'])) {
        $session_array_id = array_column($_SESSION['add_to_bookshelf'], "id");
        if (!in_array($_GET['id'], $session_array_id)) {
            $session_array = array(
                'book_id' => $_GET['book_id'],
                "book_name" => $_POST['book_name'],
                "author" => $_POST['author'],
                "genre" => $_POST['genre'],
                "type" => $_POST['type']
            );
            $_SESSION['add_to_bookshelf'][] = $session_array;
        }
    } else {
        $session_array = array(
            'book_id' => $_GET['book_id'],
            "book_name" => $_POST['book_name'],
            "author" => $_POST['author'],
            "genre" => $_POST['genre'],
            "type" => $_POST['type']
        );
        $_SESSION['add_to_bookshelf'][] = $session_array;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="media/mediasearch.css">

    <!-- google font cdn -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&family=Cinzel&family=Lato&family=Righteous&display=swap" rel="stylesheet">
    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Search</title>

</head>
<link rel="stylesheet" href="searchconnection.php">

<body>

    <!-- header -->
    <input type="checkbox" id="check">
    <header>
        <div class="header-logo">
            <a href="#">
                <img src="image/logo.svg" alt="">
            </a>
        </div>
        <div class="header-name">
            <h1>The Book Trekker</h1>
        </div>
        <nav>
            <ul>
                <li><a href="mainindex.php">Home</a></li>
                <li><a href="#aboutsec">About Us</a></li>
                <li><a href="">My Bookshelf</a></li>
                <li><a href="#" style="color: rgb(105, 236, 192);">Search</a></li>
                <li><a href="contributor.php">Contribute</a></li>
            </ul>
        </nav>
        <div class="header-bar">
            <label for="check">
                <i class="fa-solid fa-bars-staggered" style="color: #ffffff;" id="headbar"></i>
            </label>
        </div>
    </header>

    <!-- aside -->
    <aside>
        <div class="aside-close">
            <label for="check">
                <i class="fa-solid fa-xmark" style="color: #fcfcfd;" id="asideclose"></i>
            </label>
        </div>
        <div class="aside-user-profile">
            <div class="user-profile-img">
                <img src="image/gray-user-profile-icon-png-fP8Q1P.png" alt="">
            </div>
            <div class="user-name">
                <h3>USER_NAME</h3>
                <p>abc.123@gmail.com</p>
            </div>
        </div>
        <div class="aside-nav">
            <a href="">
                <i class="fa-solid fa-heart">
                    <span> &nbsp; My Bookshelf</span>
                    <?php

                    ?>
                </i>
            </a>
            <form method="post" action="">
                <input type="hidden" name="book_id" value="123">
                <input type="text" name="book_name" placeholder="Book Name">
                <input type="text" name="author" placeholder="Author">
                <input type="text" name="genre" placeholder="Genre">
                <input type="text" name="type" placeholder="Type">
                <button type="submit" name="add_to_bookshelf">Add to Bookshelf</button>
            </form>
            <a href="">
                <i class="fa-solid fa-book-open">
                    <span> &nbsp; Read a Page</span>
                </i>
            </a>
            <a href="">
                <i class="fa-solid fa-box">
                    <span> &nbsp; Covers</span>
                </i>
            </a>
            <a href="">
                <i class="fa-solid fa-magnifying-glass">
                    <span> &nbsp; Search</span>
                </i>
            </a>
            <a href="">
                <i class="fa-solid fa-users">
                    <span> &nbsp; Community</span>
                </i>
            </a>
        </div>
    </aside>

    <!-- head over -->

    <!-- search sec -->
    <section class="search-sec">
        <div class="search-box">
            <form class="row">
                <input type="text" placeholder="Type the Title or the author of a Book you like to read, and we will take care of the rest...." id="search" onkeyup="searchbar()">
                <button id="bookSearch"><span class="material-symbols-outlined">
                        search
                    </span></button>
            </form>
        </div>

    </section>
    <!-- search -->

    <h3 class="not-found" id="not" style="display: none">Not Found !</h3>
    <!-- card section -->
    <section class="card-sec" id="card-sec">
        <?php
        $query = "SELECT * FROM book_info";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($result)) {
        ?>

            <div class="card">
                <div class="card-main">

                    <form method="post" action="search_new.php? id=<? $row['id'] ?>">
                        <?php  // Assuming $row['img'] contains the image data as BLOB
                        $imageData = base64_encode($row['img']);
                        $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                        ?>
                        <img src="<?php echo $imageSrc; ?>" alt="Book Image">
                    </form>
                    <h2> <?= $row['book_name'] ?></h2>
                    <h5><b class="card-author"><?= $row['author'] ?></b>
                        <br><br><b class="card-genre"><?= $row['genre'] ?></b>&nbsp; &nbsp;
                        <b class="card-type"><?= $row['type'] ?></b>
                    </h5>
                    <input type="hidden" name="book_name" value="<?= $row['book_name'] ?>">
                    <input type="hidden" name="author" value="<?= $row['author'] ?>">
                    <input type="hidden" name="genre" value="<?= $row['genre'] ?>">
                    <input type="hidden" name="type" value="<?= $row['type'] ?>">
                </div>

                <div class="button-wrapper">
                    <button type="submit" name="add_to_bookshelf" class="btn outline">ADD TO BOOKSHELF</button>
                    <button type="submit" name="buy_now" class="btn fill">BUY NOW</button>

                </div>
            </div>
        <?php }
        ?>

        <!-- <div class="card">
            <div class="card-main">
                <img src="image/book/fiction/romance/r2.jpeg" alt="">
                <h2> It Ends with us</h2>
                <p>Collen hoover</p>
            </div>
            <div class="button-wrapper">
                <button class="btn outline">ADD TO BOOKSHELF</button>
                <button class="btn fill">BUY NOW</button>
            </div>
        </div>

        <div class="card">
            <div class="card-main">
                <img src="image/book/fiction/romance/r3.jpeg" alt="">
                <h2> Pride and prejudice</h2>
                <p>Jane Austen</p>
            </div>
            <div class="button-wrapper">
                <button class="btn outline">ADD TO BOOKSHELF</button>
                <button class="btn fill">BUY NOW</button>
            </div>
        </div>

        <div class="card">
            <div class="card-main">
                <img src="image/book/fiction/romance/r4.jpg" alt="">
                <h2> The Wedding date</h2>
                <p>Jasmine Guillory</p>
            </div>
            <div class="button-wrapper">
                <button class="btn outline">ADD TO BOOKSHELF</button>
                <button class="btn fill">BUY NOW</button>
            </div>
        </div>

        <div class="card">
            <div class="card-main">
                <img src="image/book/fiction/romance/r5.jpeg" alt="">
                <h2> The notebook</h2>
                <p>nicholas spark</p>
            </div>
            <div class="button-wrapper">
                <button class="btn outline">ADD TO BOOKSHELF</button>
                <button class="btn fill">BUY NOW</button>
            </div>
        </div>

        <div class="card">
            <div class="card-main">
                <img src="image/book/fiction/romance/r6.jpeg" alt="">
                <h2> Happy Place</h2>
                <p>Emily Henry</p>
            </div>
            <div class="button-wrapper">
                <button class="btn outline">ADD TO BOOKSHELF</button>
                <button class="btn fill">BUY NOW</button>
            </div>
        </div>

        <div class="card">
            <div class="card-main">
                <img src="image/book/fiction/romance/r7.jpeg" alt="">
                <h2> Me before you</h2>
                <p>Emily Henry</p>
            </div>
            <div class="button-wrapper">
                <button class="btn outline">ADD TO BOOKSHELF</button>
                <button class="btn fill">BUY NOW</button>
            </div>
        </div>

        <div class="card">
            <div class="card-main">
                <img src="image/book/fiction/romance/r8.jpeg" alt="">
                <h2> Love Theoretically</h2>
                <p>Ali hazelwood</p>
            </div>
            <div class="button-wrapper">
                <button class="btn outline">ADD TO BOOKSHELF</button>
                <button class="btn fill">BUY NOW</button>
            </div>
        </div> -->

    </section>
    <script src="js/search.js"></script>
    <!-- card section -->

    <!-- FOOTER START -->


    <section class="footer-sec">
        <div class="footer-part">
            <div class="footer-part-title">
                <h2>The Book Trekker</h2>
            </div>
            <div class="footer-part-text">
                <p>The Book Trekker helps you to select the type of book you want to read, or you wish to read
                    it later. Our aim is to help people find their interest of books.</p>
            </div>
            <div class="footer-part-logo">
                <div class="social-logo">
                    <i class="fa-brands fa-twitter fa-sm" style="color: #fafcff;"></i>
                </div>
                <div class="social-logo">
                    <i class="fa-brands fa-facebook-f fa-sm" style="color: #fafcff;"></i>
                </div>
                <div class="social-logo">
                    <i class="fa-brands fa-instagram fa-sm" style="color: #fafcff;"></i>
                </div>
            </div>
        </div>
        <div class="footer-part">
            <div class="footer-part-title">
                <h2>Website Map</h2>
            </div>
            <div class="footer-part-text">
                <ul>
                    <li><a href="mainindex.html">Home</a></li>
                    <li><a href="">Your Type</a></li>
                    <li><a href="search.html">Search</a></li>
                    <li><a href="">Contribute</a></li>
                    <li><a href="">My Bookshelf</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-part instagram">
            <div class="footer-part-title">
                <h2>Instagram</h2>
            </div>
            <div class="footer-part-ins">
                <div class="footer-part-childins">
                    <img src="https://source.unsplash.com/1600x1000/?book" alt="">
                </div>
                <div class="footer-part-childins">
                    <img src="https://source.unsplash.com/1600x1000/?library" alt="">
                </div>
                <div class="footer-part-childins">
                    <img src="https://source.unsplash.com/1600x1000/?books" alt="">
                </div>
                <div class="footer-part-childins">
                    <img src="https://source.unsplash.com/1600x1000/?read" alt="">
                </div>
                <div class="footer-part-childins">
                    <img src="https://source.unsplash.com/1600x1000/?reading" alt="">
                </div>
                <div class="footer-part-childins">
                    <img src="https://source.unsplash.com/1600x1000/?bookshelf" alt="">
                </div>
            </div>
        </div>
        <div class="footer-part">
            <div class="footer-part-title">
                <h2>Newsletter</h2>
            </div>
            <div class="footer-part-text">
                <p>Subscribe to get Daily updates and Newsletter through your email.</p>
            </div>
            <form action="">
                <div class="footer-part-email">
                    <input type="email" placeholder="Enter email Address">
                </div>
                <button type="submit">Subscribe</button>
            </form>
        </div>
        <div class="footer-part-base">
            <p> This is made with <span style="color: red;">&#10084;</span> by The Book Trekker </p>
        </div>
    </section>
    <!-- FOOTER END -->
</body>

</html>