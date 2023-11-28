<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href=Trangchu.css">
</head>

<body>

    <header>
        <h1>Trang chủ bán giày</h1>
    </header>

    <nav>
        <a href="#">Trang chủ</a>
        <a href="#">Sản phẩm</a>
        <a href="#">Liên hệ</a>
        <span class="login-icon" onclick="openLoginModal()">&#x1F464;</span>
    </nav>

    <div class="banner">
        <!-- Chèn ảnh banner vào đây -->
        <!-- Ví dụ: -->
        <img src="path/to/your/banner.jpg" alt="Banner">
    </div>

    <section>
        <?php
        // Simulate fetching data from a database or external source
        function getCategories() {
            return ['Sneakers', 'Boots', 'Sandals', 'Tennis Shoes'];
        }

        function getProducts($category) {
            $products = [];
            for ($i = 1; $i <= 4; $i++) {
                $products[] = [
                    'name' => "$category Product $i",
                    'image' => strtolower($category) . "_$i.jpg",
                    'price' => '$' . rand(30, 80),
                ];
            }
            return $products;
        }

        function generateProduct($productName, $imagePath, $price) {
            echo '<div class="product">';
            echo "<img src=\"$imagePath\" alt=\"$productName\">";
            echo "<p style=\"font-weight: bold; color: #333; margin-top: 0.5em;\">$productName</p>";
            echo "<p>Giá: $price</p>";
            echo '<button>Mua ngay</button>';
            echo '</div>';
        }

        $categories = getCategories();

        foreach ($categories as $category) {
            echo '<div class="category">';
            echo "<h2>$category</h2>";
            $products = getProducts($category);

            foreach ($products as $product) {
                generateProduct($product['name'], $product['image'], $product['price']);
            }

            echo '</div>';
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2023 Trang chủ bán giày</p>
    </footer>

    <script>
    function openLoginModal() {
        alert("Chức năng đăng nhập sẽ được thêm sau!");
    }
    </script>

</body>

</html>