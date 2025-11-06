<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .about-section {
            background-color: #f5f5f5;
            padding: 30px;
            border-radius: 8px;
            margin-top: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            color: #666;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About Us</h1>
        <div class="about-section">
            <p>Welcome to our website! We are a dedicated team committed to providing excellent services to our customers.</p>
            <p>Our mission is to deliver high-quality solutions that meet and exceed our clients' expectations.</p>
            <p>Founded in <?php echo date('Y'); ?>, we have been continuously growing and improving our services.</p>
        </div>
        <div class="about-section">
            <h2>Our Values</h2>
            <ul>
                <li>Quality</li>
                <li>Integrity</li>
                <li>Innovation</li>
                <li>Customer Satisfaction</li>
            </ul>
        </div>
    </div>  
</body>
</html>