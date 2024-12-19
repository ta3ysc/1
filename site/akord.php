<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gitar Akorları</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Gitar Akorları</h1>
    <form action="chords.php" method="post">
        <label for="chord">Akor Seçin:</label>
        <select id="chord" name="chord">
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
            <option value="A">A</option>
            <option value="B">B</option>
        </select>
        <input type="submit" value="Görüntüle">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chord = $_POST['chord'];
        echo "<h2>Seçilen Akor: $chord</h2>";
        echo "<img src='images/$chord.png' alt='$chord akoru'>";
    }
    ?>
</body>
</html>
