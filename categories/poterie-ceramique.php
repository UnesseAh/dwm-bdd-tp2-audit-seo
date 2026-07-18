<?php 
include '../db.php';
$lang = $_GET['lang'] ?? 'fr';

if (!in_array($lang, ['ar', 'fr', 'en'])) {
    $lang = 'fr';
}

$ui = [
    'fr' => ['home' => 'Accueil', 'pottery' => 'Poterie', 'textiles' => 'Textiles', 'cosmetics' => 'Cosmétiques'],
    'en' => ['home' => 'Home', 'pottery' => 'Pottery', 'textiles' => 'Textiles', 'cosmetics' => 'Cosmetics'],
    'ar' => ['home' => 'الرئيسية', 'pottery' => 'الفخار', 'textiles' => 'المنسوجات', 'cosmetics' => 'مستحضرات التجميل']
];

$stmt = $pdo->prepare("SELECT * FROM products WHERE category = 'pottery'");
$stmt->execute();
$products = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poterie & Céramique - Artisanat Marocain</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f5f0;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #8b5e3c;
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        .lang-switcher a {
            color: white;
            text-decoration: none;
            margin: 0 5px;
            padding: 5px 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .product-card {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .price {
            font-weight: bold;
            color: #8b5e3c;
            display: block;
            margin-top: 10px;
            font-size: 1.2rem;
        }
        footer {
            background-color: #2c1a0e;
            color: #a89485;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h1>Medina Crafts</h1>
    <nav>
        <a href="../index.php?lang=<?php echo $lang; ?>"><?php echo $ui[$lang]['home']; ?></a>        
        <a href="poterie-ceramique.php?lang=<?php echo $lang; ?>"><?php echo $ui[$lang]['pottery']; ?></a>
        <a href="textiles-tissage.php?lang=<?php echo $lang; ?>"><?php echo $ui[$lang]['textiles']; ?></a>
        <a href="cosmetiques-naturels.php?lang=<?php echo $lang; ?>"><?php echo $ui[$lang]['cosmetics']; ?></a>
    </nav>
    <div class="lang-switcher">
        <a href="?lang=ar">العربية</a>
        <a href="?lang=fr">FR</a>
        <a href="?lang=en">EN</a>
    </div>
</header>

<div class="container">
    
    <div class="product-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <?php foreach ($products as $product): ?>
            <div class="product-card" dir="<?php echo $lang == 'ar' ? 'rtl' : 'ltr'; ?>">
                <img src="images/<?php echo htmlspecialchars($product['image']); ?>" alt="Product Image" style="width:100%;">
                
                <h3><?php echo htmlspecialchars($product['name_' . $lang]); ?></h3>
                <p><?php echo htmlspecialchars($product['desc_' . $lang]); ?></p>
                <span class="price"><?php echo htmlspecialchars($product['price']); ?> DH</span>
            </div>
        <?php endforeach; ?>
    </div>

</div>

<footer>
    <p>&copy; 2026 Medina Crafts - Moroccan Craftsmanship.</p>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        console.log("Site artisanat marocain chargé avec succès.");
    });
</script>

</body>
</html>