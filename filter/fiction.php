<?php
session_start();
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
    <title>Filter Product</title>
    <link rel="stylesheet" type="text/css" href="fontawesome-css/all.css">
    <link rel="stylesheet" type="text/css" href="fiction.css">
</head>

<body>
    <main>
        <header>
            <ul class="indicator">
                <li data-filter="all" class="active"><a href="#">All</a></li>
                <li data-filter="Blazer"><a href="#">Fiction</a></li>
                <li data-filter="Watch"><a href="#">Fantasy</a></li>
                <li data-filter="Shoes"><a href="#">Horror</a></li>
                <li data-filter="Mobile"><a href="#">Romance</a></li>
                <li data-filter="Accessories"><a href="#">Thriller & Suspence</a></li>
            </ul>
            <div class="filter-condition">
                <span>View As a</span>
                <select name="" id="select">
                    <option value="Default">Default</option>
                    <option value="LowToHigh">Low to high</option>
                    <option value="HighToLow">High to low</option>
                </select>
            </div>
        </header>
        <?php
        $query = "SELECT * FROM book_info";
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="product-field">
            <ul class="items">
            <form method="post" action="search_new.php? id=<?$row['id'] ?>">
                        <?php // Assuming $row['img'] contains the image data as BLOB
                            $imageData = base64_encode($row['img']);
                            $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                            ?>
                        <img src="<?php echo $imageSrc; ?>" alt="Book Image">
                    </form>
                    <h2>
                        <?= $row['book_name'] ?>
                    </h2>
                    <h5>
                        <?= $row['author'] ?>
                        <br>
                        <?= $row['genre'] ?>
                        <br>
                        <?= $row['type'] ?>
                        <input type="hidden" name="book_name" value="<?= $row['book_name'] ?>">
                    <input type="hidden" name="author" value="<?= $row['author'] ?>">
                    <input type="hidden" name="genre" value="<?= $row['genre'] ?>">
                    <input type="hidden" name="type" value="<?= $row['type'] ?>">
                </div>

                <div class="button-wrapper">
                    <button onclick="redirectToBookshelf()">Add to Bookshelf</button>
                    <button type="submit" name="buy_now" class="btn fill">BUY NOW</button>

                </div>
            </div>
        <?php }
        ?>


                <!-- <li data-category="" data-price="">
                    <picture>
                        <img src="image/wa1.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Watch</strong>
                        <span>Book Name</span>
                        <small>Author</small>
                    </div>
                    <h4>$45.78</h4>
                </li>
                <li data-category="" data-price="">
                    <picture>
                        <img src="image/bz1.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Blazer</strong>
                        <span>Lorem, ipsum dolor sit amet consectetur.</span>
                        <small>Buy now</small>
                    </div>
                    <h4>$35.78</h4>
                </li>
                <li data-category="" data-price="">
                    <picture>
                        <img src="image/wa2.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Watch</strong>
                        <span>Lorem, ipsum dolor sit amet consectetur.</span>
                        <small>Buy now</small>
                    </div>
                    <h4>$40.78</h4>
                </li>
                <li data-category="" data-price="">
                    <picture>
                        <img src="image/bz2.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Blazer</strong>
                        <span>Lorem, ipsum dolor sit amet consectetur.</span>
                        <small>Buy now</small>
                    </div>
                    <h4>$42.78</h4>
                </li>
                <li data-category="" data-price="">
                    <picture>
                        <img src="image/wa3.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Watch</strong>
                        <span>Lorem, ipsum dolor sit amet consectetur.</span>
                        <small>Buy now</small>
                    </div>
                    <h4>$46.78</h4>
                </li>
                <li data-category="" data-price="">
                    <picture>
                        <img src="image/bz4.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Blazer</strong>
                        <span>Lorem, ipsum dolor sit amet consectetur.</span>
                        <small>Buy now</small>
                    </div>
                    <h4>$55.78</h4>
                </li>
                <li data-category="" data-price="">
                    <picture>
                        <img src="image/so.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Shoes</strong>
                        <span>Lorem, ipsum dolor sit amet consectetur.</span>
                        <small>Buy now</small>
                    </div>
                    <h4>$25.78</h4>
                </li>
                <li data-category="" data-price="">
                    <picture>
                        <img src="image/samsung.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Mobile</strong>
                        <span>Lorem, ipsum dolor sit amet consectetur.</span>
                        <small>Buy now</small>
                    </div>
                    <h4>$20.78</h4>
                </li>
                <li data-category="" data-price="">
                    <picture>
                        <img src="image/so1.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Shoes</strong>
                        <span>Lorem, ipsum dolor sit amet consectetur.</span>
                        <small>Buy now</small>
                    </div>
                    <h4>$15.78</h4>
                </li>
                <li data-category="" data-price="">
                    <picture>
                        <img src="image/so2.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Shoes</strong>
                        <span>Lorem, ipsum dolor sit amet consectetur.</span>
                        <small>Buy now</small>
                    </div>
                    <h4>$22.78</h4>
                </li>
                <li data-category="" data-price="">
                    <picture>
                        <img src="image/one.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Mobile</strong>
                        <span>Lorem, ipsum dolor sit amet consectetur.</span>
                        <small>Buy now</small>
                    </div>
                    <h4>$33.78</h4>
                </li>
                <li data-category="" data-price="">
                    <picture>
                        <img src="image/so3.png" alt="">
                    </picture>
                    <div class="detail">
                        <p class="icon">
                            <span><i class="far fa-heart"></i></span>
                            <span><i class="far fa-share-square"></i></span>
                            <span><i class="fas fa-shopping-basket"></i></span>
                        </p>
                        <strong>Shoes</strong>
                        <span>Lorem, ipsum dolor sit amet consectetur.</span>
                        <small>Buy now</small>
                    </div>
                    <h4>$44.78</h4>
                </li> -->
            </ul>
        </div>
    </main>

</body>

</html>
<script type="text/javascript" src="main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Function to load fiction books
        function loadFictionBooks() {
            $.ajax({
                url: 'get_fiction_books.php',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    // Clear the existing content in the container
                    $('#fiction-books-container').empty();

                    // Loop through the fetched books and display them
                    data.forEach(function (book) {
                        var bookHtml = `
                            <div class="book">
                                <h2>${book.book_name}</h2>
                                <p>Author: ${book.author}</p>
                                <p>Genre: ${book.genre}</p>
                                <p>Type: ${book.type}</p>
                                <!-- Add other book details here -->
                            </div>
                        `;

                        $('#fiction-books-container').append(bookHtml);
                    });
                },
                error: function () {
                    console.log('Error loading fiction books.');
                }
            });
        }

        // Attach click event to the "Fiction" button
        $('#fiction-button').click(function () {
            loadFictionBooks();
        });
    });
</script>