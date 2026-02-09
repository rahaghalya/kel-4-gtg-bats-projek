<!DOCTYPE HTML>
<html>
<head>
<title>Form Validasi Dasar</title>
</head>
<body>

<?php
// Definisikan dan inisialisasi variabel
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

// --- Fungsi Pembersih ---
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// --- Proses Pengambilan Data ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name    = test_input($_POST["name"]);
  $email   = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender  = test_input($_POST["gender"]);
}
?>

<h2>Validasi Form Dasar</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
  Website: <input type="text" name="website" value="<?php echo $website; ?>"><br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea><br><br>
  Gender:
  <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>Female
  <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
// --- Menampilkan Data Masukan ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
}
?>

</body>
</html>