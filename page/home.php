<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 2rem;
        }

        nav {
            background-color: #444;
            padding: 1rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        .main-content {
            background-color: white;
            padding: 2rem;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>


  <?php include_once 'header.php'; ?>

    <div class="container">
        <div class="main-content">
            <h2>Welcome to our Home Page</h2>
            <p>This is a simple and clean home page design using HTML and CSS.</p>
            <p>Feel free to customize this template according to your needs.</p>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>