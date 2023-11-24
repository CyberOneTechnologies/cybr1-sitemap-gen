<!DOCTYPE html>
<html>
<head>
    <title>CyberOne Sitemap Generator</title>
    <!-- Add CSS here -->
</head>
<body>
    <h1>CyberOne Sitemap Generator</h1>
    <form method="post">
        <label for="url">Enter Website URL:</label>
        <input type="url" name="url" id="url" required>
        <label for="format">Sitemap Format:</label>
        <select name="format" id="format">
            <option value="xml">XML</option>
            <option value="html">HTML</option>
            <option value="txt">TXT</option>
        </select>
        <button type="submit" name="submit">Generate Sitemap</button>
    </form>

    <?php
    // Check if form is submitted
    if(isset($_POST['submit'])) {
        $url = $_POST['url'];
        $format = $_POST['format'];

        // Call function to generate sitemap (to be implemented)
        // Example: generateSitemap($url, $format);
    }
    ?>
</body>
</html>

