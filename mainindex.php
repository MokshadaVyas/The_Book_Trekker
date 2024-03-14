 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Book Trekker</title>

    <!-- css and media -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="media/media.css">

    <!-- font awsome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&family=Cinzel&display=swap" rel="stylesheet">



    <!-- swiper style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        html,
        .swiper-slider-sec {
            position: relative;
            height: 100%;
        }

        .swiper-slider-sec {
            background: #323131;
            height: 60vh;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #1c1c1c;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .autoplay-progress {
            position: absolute;
            right: 16px;
            bottom: 16px;
            z-index: 10;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: var(--swiper-theme-color);
            display: none;
        }

        .autoplay-progress svg {
            --progress: 0;
            position: absolute;
            left: 0;
            top: 0px;
            z-index: 10;
            width: 100%;
            height: 100%;
            stroke-width: 4px;
            stroke: var(--swiper-theme-color);
            fill: none;
            stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
            stroke-dasharray: 125.6;
            transform: rotate(-90deg);
        }

        /* slick */
        .slider {
            width: 50%;
            height: 50px;
            margin: 100px auto;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
            color: black;
        }


        .slick-slide {
            transition: all ease-in-out .3s;
            opacity: .2;
        }

        .slick-active {
            opacity: .5;
        }

        .slick-current {
            opacity: 1;
        }
    </style>
</head>

<body>
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
                <li><a href="#" style="color: rgb(105, 236, 192);">Home</a></li>
                <li><a href="#aboutsec">About Us</a></li>
                <li><a href="">My Bookshelf</a></li>
                <li><a href="search_new.php">Search</a></li>
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
                
                <h3>Hi, Username</h3>
                <p>abc.123@gmail.com</p> 
            </div>
        </div>
        <div class="aside-nav">
            <a href="">
                <i class="fa-regular fa-heart">
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

    <!-- swiper slider -->

    <section class="swiper-slider-sec">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="image/86_inr.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="image/80_inr.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="image/84_inr.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="image/81_inr.jpg" alt="">
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="autoplay-progress">
                <svg viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="20"></circle>
                </svg>
                <span></span>
            </div>
        </div>

    </section>
    <!-- JQUERY swiper -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            }
        });
    </script>
    <!-- swiper slider over -->

    <!-- fiction-non-fiction -->

    <section class="fiction-nonfiction">
        <div class="f-n-title">
            <p>WHAT YOU ARE LOOKING FOR?</p>
        </div>
        <div class="f-n-content">
            <div class="fn-img-sec">
                <a href="fiction.html">
                    <div class="fn-img1">
                        <h1>FICTION</h1>
                    </div>
                </a>

                <a href="non_fiction.html">
                    <div class="fn-img2">

                        <h1>NON-FICTION</h1>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- fiction- non fiction overs -->
    <!-- about us  -->
    <section class="about-sec" id="aboutsec">
        <div class="about-main">
            <div class="about-img">
                <div class="img-1">
                    <img src="image/pexels-marta-dzedyshko-2067569.jpg" alt="" class="">
                </div>
                <div class="img-2">
                    <img src="image/pexels-raphael-brasileiro-2460817.jpg" alt="">
                </div>
            </div>
            <div class="about-content">
                <div class="about-content-head">
                    <h1 class="p1">About</h1>
                    <h1 class="p2">The Book</h1>
                    <h1 class="p3">Trekker</h1>
                </div>
                <div class="about-content-part">
                    <p>The Book Trekker helps you to select the type of book you want to read, or you wish to read
                        it later. Our aim is to help people find their interest of books.
                        <br><br>

                        <!-- Mon - Fri <b>8 AM - 11 PM</b> -->
                    </p>
                    <h1 class="contact-no">
                        +1 123-456-7890
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- FOOTER START -->
    <section class="footer-sec">
        <div class="footer-part ">
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
                    <li><a href="#">Home</a></li>
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
            <p> This is made with &#10084; by The Book Trekker </p>
        </div>
    </section>

    <!-- FOOTER END -->

</body>

</html>