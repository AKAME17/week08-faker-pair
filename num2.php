<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();
$genres = ["Fiction", "Mystery", "Science Fiction", "Fantasy", "Romance", "Thriller", "Historical", "Horror"];

echo "<h2>Fake Books</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Publication Year</th>
        <th>ISBN</th>
        <th>Summary</th>
      </tr>";

for ($i = 0; $i < 15; $i++) {
    echo "<tr>";
    echo "<td>" . $faker->sentence(3) . "</td>"; 
    echo "<td>" . $faker->name . "</td>";
    echo "<td>" . $genres[array_rand($genres)] . "</td>";
    echo "<td>" . $faker->numberBetween(1900, 2024) . "</td>";
    echo "<td>" . $faker->isbn13 . "</td>";
    echo "<td>" . $faker->paragraph(1) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>