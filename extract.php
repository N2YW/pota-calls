<!DOCTYPE html>
<html>
<head>
    <title>Extract Quoted Text</title>
    <style>
        .result { margin: 0; }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="inputText">Enter text:</label><br>
        <textarea name="inputText" id="inputText" rows="5" cols="50"></textarea><br>
        <input type="submit" value="Extract Quoted Text">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['inputText'];
        
        // Regular expression to match text between single or double quotes
        preg_match_all('/[\'"]{1}([^\'"]*)[\'"]{1}/', $input, $matches);
        
        if (!empty($matches[1])) {
            echo "<h3>Extracted Quoted Text:</h3>";
            foreach ($matches[1] as $quotedText) {
                // Only display non-empty matches
                if (trim($quotedText) !== '') {
                    echo "<div class='result'>" . htmlspecialchars($quotedText) . "</div>";
                }
            }
        } else {
            echo "<div>No quoted text found.</div>";
        }
    }
    ?>
</body>
</html>