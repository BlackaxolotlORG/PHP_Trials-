<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics Website </title>
    <link rel="stylesheet" href="../CSS/style.css">
 
</head>

<body>
    <div class="topnav">
    <a href="index.php"<?php if ($pageTitle === "Home") echo ' class="active"'; ?>>Home</a>
    <a href="blogs.php"<?php if ($pageTitle === "Blogs") echo ' class="active"'; ?>>Blogs</a>
    <a href="about.php"<?php if ($pageTitle === "About") echo ' class="active"'; ?>>About</a>
    <a href="contact.php"<?php if ($pageTitle === "Contact") echo ' class="active"'; ?>>Contact</a>
    <a href="locations.php"<?php if ($pageTitle === "Locations") echo ' class="active"'; ?>>Store locations</a>

    <a class="righter" href="#about">Login</a>
    </div>
