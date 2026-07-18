<!DOCTYPE html>
<?php
include 'db.php';

$lang = $_GET['lang'] ?? 'fr';

if (!in_array($lang, ['ar', 'fr', 'en'])) {
    $lang = 'fr';
}
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisanat marocain - Produits traditionnels et savoir-faire local</title>
    <meta name="description"
        content="Découvrez l’artisanat marocain à travers plusieurs catégories : poterie, textiles et cosmétiques naturels issus du savoir-faire traditionnel marocain.">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Artisanat marocain</h1>
        <p>Découvrez les principales catégories de produits artisanaux du Maroc.</p>
        <nav>
            <a href="index.html">Accueil</a>
            <a href="categories/poterie-ceramique.html">Poterie</a>
            <a href="categories/textiles-tissage.html">Textiles</a>
            <a href="categories/cosmetiques-naturels.html">Cosmétiques</a>
        </nav>
    </header>

    <main>
        <section>
            <h2>Un patrimoine artisanal riche et diversifié</h2>
            <p>
                L’artisanat marocain regroupe de nombreuses spécialités transmises de génération en génération.
                Il valorise le travail manuel, les matériaux naturels et le savoir-faire local.
                Parmi les produits les plus connus, on trouve la poterie, les tapis, les vêtements traditionnels
                et les cosmétiques naturels.
            </p>
        </section>

        <section>
            <h2>Catégories présentées sur ce site</h2>

            <article>
                <h3>Poterie et céramique</h3>
                <img src="images/tajine-marocain.jpg" alt="Tajine marocain traditionnel en poterie">
                <p>Découvrez les tajines, assiettes, zelliges et autres objets décoratifs réalisés en céramique
                    artisanale.</p>
                <a href="categories/poterie-ceramique.html">Voir la catégorie</a>
            </article>

            <article>
                <h3>Textiles et tissage</h3>
                <img src="images/tapis-berbere.jpg" alt="Tapis berbère marocain tissé à la main">
                <p>Explorez les tapis berbères, caftans, djellabas et couvertures issus du textile traditionnel
                    marocain.</p>
                <a href="categories/textiles-tissage.html">Voir la catégorie</a>
            </article>

            <article>
                <h3>Cosmétiques naturels</h3>
                <img src="images/huile-argan.jpg" alt="Huile d’argan naturelle du Maroc">
                <p>Découvrez des produits naturels comme l’huile d’argan, le savon noir et le ghassoul.</p>
                <a href="categories/cosmetiques-naturels.html">Voir la catégorie</a>
            </article>
        </section>
    </main>

    <footer>
        <p>Site d’entraînement SEO - Artisanat marocain</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>