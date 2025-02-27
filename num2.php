
<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();

$genres = ['Fiction', 'Science Fiction', 'Mystery', 'Romance', 'Thriller', 'Historical'];

echo "<h2>Fake Book Records</h2>";
echo "<table border='1'>
        <tr><th>Title</th><th>Author</th><th>Genre</th><th>ISBN</th><th>Publication Year</th><th>Summary</th></tr>";

for ($i = 0; $i < 10; $i++) {
    echo "<tr>
            <td>{$faker->sentence(3)}</td>
            <td>{$faker->name}</td> <!-- Random author name -->
            <td>{$genres[array_rand($genres)]}</td>
            <td>{$faker->isbn13}</td>
            <td>{$faker->numberBetween(1900, 2024)}</td>
            <td>{$faker->paragraph(2)}</td> <!-- Random book summary -->
          </tr>";
}
echo "</table>";
?>
