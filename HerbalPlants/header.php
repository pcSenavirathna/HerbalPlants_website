<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
        <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>

<header class="header">
    <div class="flex">
        <a href="index.php" class="logo"><b>Herbal Plants</b></a>

        <nav class="navbar">
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="about.php">about</a></li>
                <li><a href="contact.php">contact</a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="orders.php">orders</a></li>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    
                <?php else : ?>
                    <li>
                        <a href="login.php">login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>

        <?php if (isset($_SESSION['user_id'])) : ?>
            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <a href="search_page.php" class="fas fa-search"></a>
                <div id="user-btn" class="fas fa-user"></div>
                <?php
                    $select_wishlist_count = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE user_id = '$user_id'") or die('query failed');
                    $wishlist_num_rows = mysqli_num_rows($select_wishlist_count);
                ?>
                <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php echo $wishlist_num_rows; ?>)</span></a>
                <?php
                    $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                    $cart_num_rows = mysqli_num_rows($select_cart_count);
                ?>
                <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['user_id'])) : ?>
            <div class="account-box">
                <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
                <a href="editprofile.php" class="edit-btn">edit profile</a>
                <a href="logout.php" class="delete-btn">logout</a>
            </div>
        <?php endif; ?>
    </div>
</header>
