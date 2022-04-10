<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
<div class="wrapper-internal <?= $_GET['page']?>-page ">
    <header>
        <a href="dashboard.html">
            <img class="nav-logo" src="https://adminlab387.b-cdn.net/dist/images/logos/logo.png" alt="Application Logo">
        </a>
        <nav>
            <ul>
                <li><a href="index.html">Početna stranica</a></li>
                <li><a href="profile.html">Profil</a></li>
                <li><a class="text-red" href="activation.html">Activate your account!</a></li>
                <li><a href="index.php?page=logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="main-container">
        <aside>
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=dashboard">Dashboard</a></li>
                <li><a href="index.php?page=create-link">Create link</a></li>
                <li><a href="index.php?page=archives">Archives</a></li>
                <li><a href="index.php?page=examples">Examples</a></li>
                <li><a href="index.php?page=insights">Insights</a></li>
                <li><a href="index.php?page=settings">Settings</a></li>
                <li><a href="index.php?page=domains">Domains</a></li>
                <li><a href="index.php?page=logout">Logout</a></li>
            </ul>
        </aside>
        <main>