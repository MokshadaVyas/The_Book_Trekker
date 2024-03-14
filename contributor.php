<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&family=Cinzel&display=swap" rel="stylesheet">

    <title>Contribute and Feedback Form</title>
</head>

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
                <li>
                    <select name="" id="">

                        <option value="" selected>Your type </option>
                        <option value=""><a href="fiction.html">Fiction</a></option>
                        <option value=""><a href="non_fiction.html">Non-Fiction</a></option>

                    </select>
                </li>
                <li><a href="#">Search</a></li>
                <li><a href="#" style="color: rgb(105, 236, 192);">Contribute</a></li>
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
                </i>
            </a>
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


    <div class="container">
        <h1>Contribute and Feedback Form</h1>
        <form action="data.php" method="POST">

            <br><label for="booktitle">Book Tittle:</label>
            <input type="text" id="booktitle" name="booktitle" required></br>

            <br><label for="author">Author Name:</label>
            <input type="text" id="author" name="author" required></br>

            <br>
            <label for="type">Type:</label>
            <select name="type" id="type">
                <option value="">fiction</option>
                <option value="">non-fiction</option>

            </select></br>

            <br><label for="genre"> Genre:</label>
            <input type="text" id="genre" name="genre" required></br>

            <br><label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required></br>

            <br><label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="abc@gmail.com"></br>

            <br><label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" required></textarea></br>

            <input type="submit" value="Submit">
        </form>
    </div>
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
                <h2>Navigator</h2>
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