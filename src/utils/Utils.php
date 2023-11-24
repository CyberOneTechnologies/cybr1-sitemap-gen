<?php

class Utils
{
    /**
     * Sanitize input data to prevent XSS attacks.
     * @param string $data The input data to sanitize.
     * @return string Sanitized data.
     */
    public static function sanitizeInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     * Validate URL format.
     * @param string $url The URL to validate.
     * @return bool True if valid, false otherwise.
     */
    public static function validateUrl($url)
    {
        return filter_var($url, FILTER_VALIDATE_URL);
    }

    /**
     * Log messages to a file.
     * @param string $message The message to log.
     */
    public static function logMessage($message)
    {
        // Path to your log file
        $logFile = "/path/to/your/logfile.log";
        $timestamp = date("Y-m-d H:i:s");
        file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
    }

    // Add other utility functions as needed
}

?>

