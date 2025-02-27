<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo "<h2>Fake User Accounts</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>User ID (UUID)</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password (SHA-256)</th>
        <th>Account Created</th>
      </tr>";

for ($i = 0; $i < 10; $i++) {
    $email = $faker->email;
    $username = explode("@", $email)[0]; // Get the first part of the email
    $password = hash('sha256', $faker->password);

    echo "<tr>";
    echo "<td>" . $faker->uuid . "</td>";
    echo "<td>" . $faker->name . "</td>";
    echo "<td>" . $email . "</td>";
    echo "<td>" . $username . "</td>";
    echo "<td>" . $password . "</td>";
    echo "<td>" . $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d H:i:s') . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
