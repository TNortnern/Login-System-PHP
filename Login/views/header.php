<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Employees</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="nav ">
            <li class="nav-item">
                <a class="nav-link" href="index3.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index3.php?option=addForm&submit=Add+User">Add Users</a>
            </li>
            <li style='position:absolute; top:50%; right:5%' class="nav-item">
                <?php echo "Logged in as <b>$_SESSION[username]</b> <a href=index.php?logout>Log out</a>"; ?>
            </li>
        </ul>
    </nav>
    <header style="text-align:center">
        <h1>Users</h1>
    </header> 