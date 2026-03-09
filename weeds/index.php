<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyCinema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    body{
        background: #0f0f0f;
        min-height: 100vh;
        display:flex
        align-items: center;
        justify-content: center;
        font-family: system-ui; -apple-system, sans-serif;
    }
    .card{
        background: #1e1e1e;
        border: none;
        border-raduis: 1,5rem;
        padding: 2.5rem 2rem;
        width: 100%;
        max-width: 380px;
        box-shadow: 0 10px 30px rgba(0,0,0,0,6);
    }
    .form-control{
        background: #2c2c2c;
        border: none;
        color: white;
        height: 55px;
        font-size: 1.1rem;
    }
    .form-control:focus{
        background: #2c2c2c;
        color: white;
        box-shadow: 0, 0, 0, 0.25rem rgba(13, 110, 253, .25);
    }
</body>
</html>