<?php
// načtení souboru
$json = file_get_contents("profile.json");

// převod JSON na PHP pole
$data = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
</head>
<body>

<!-- jméno -->
<h1><?php echo htmlspecialchars($data["name"]); ?></h1>

<!-- dovednosti -->
<h2>Dovednosti</h2>
<ul>
<?php foreach ($data["skills"] as $skill): ?>
    <li><?php echo htmlspecialchars($skill); ?></li>
<?php endforeach; ?>
</ul>

<!-- zájmy -->
<h2>Zájmy / Projekty</h2>
<ul>
<?php foreach ($data["interests"] as $interest): ?>
    <li><?php echo htmlspecialchars($interest); ?></li>
<?php endforeach; ?>
</ul>

</body>
</html>