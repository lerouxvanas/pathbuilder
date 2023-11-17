<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/assets/style.css" rel="stylesheet">
    <script src="/public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <title><?php echo SITENAME; ?></title>
</head>

<body>
<nav class="navbar sticky-top navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand"><?php Icon::logo(); ?> Path Builder</a>
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>
    <div class="container-fluid">