<?php

// Config.php

/**
 * Configuration settings for the Minecraft Webstore.
 */

// Database configuration
const DB_HOST = 'localhost';
const DB_USER = 'your_username';
const DB_PASSWORD = 'your_password';
const DB_NAME = 'your_database';

/**
 * Helper functions
 */

/**
 * Function to connect to the database.
 * @return mysqli Connection object.
 */
function db_connect() {
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }
    
    return $connection;
}

/**
 * Function to sanitize input data.
 * @param string $data Input data to sanitize.
 * @return string Sanitized data.
 */
function sanitize_input($data) {
    return htmlspecialchars(trim($data));
}

?>
