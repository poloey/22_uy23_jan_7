<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    li.active a {
      color: red;
    }
  </style>
</head>
<body>
  <nav>
    <ul>
      <li class="<?php echo $page === 'home' ? 'active' : ''; ?>">
        <a href="index.php">Home</a>
      </li>
      <li class="<?php echo $page === 'about' ? 'active' : ''; ?>">
        <a href="about.php">about</a>
      </li>
      <li class="<?php echo $page === 'contact' ? 'active' : ''; ?>">
        <a href="contact.php">contact</a>
      </li>
    </ul>
  </nav>


