<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
        /* CSS Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url('images/1.jpg');
            background-size: cover;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.8);
            transition: all 0.3s ease 0s;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .container:hover {
            cursor: pointer;
            background-color: black;
            opacity: 0.7;
        }

        h1 {
            font-size: 40px;
            font-family: "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
        }

        h3 {
            font-family: "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10%;
            background-color: rgb(2, 2, 29);
            position: fixed;
            width: 100%;
            top: 0;
        }

        .title {
            color: white;
            font-family: "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
            cursor: pointer;
            font-weight: 600;
        }

        ul {
            list-style: none;
        }

        li {
            display: inline-block;
            font-family: "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
            font-size: 17px;
            padding: 0px 20px;
        }

        li a {
            transition: all 0.3s ease 0s;
            color: white;
            text-decoration: none;
        }

        li a:hover {
            color: rgb(0, 204, 255);
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: rgb(0, 204, 255);
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: rgb(0, 153, 204);
        }
    </style>
</head>
<body>
    <header>
        <p class="title">OBJ</p>
        <nav class="navbar">
            <ul>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="resources.php">Resources</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="container">
            <h1>Welcome</h1>
            <h3>L'oreal Travels</h3>
            <p id="current-date-time">
                Date: 
                <?php
                echo date("Y-m-d"); // PHP for current date
                ?>
            </p>
            <button id="alert-button">Click for a Surprise</button>
        </div>
    </section>

    <script>
        // JavaScript functionality

        // Alert button functionality
        document.getElementById('alert-button').addEventListener('click', function () {
            alert("Surprise! Have a great day!");
        });

        // Update date and time every second
        function updateDateTime() {
            const now = new Date();
            const formattedDateTime = `${now.toLocaleDateString()} ${now.toLocaleTimeString()}`;
            document.getElementById('current-date-time').textContent = `Date & Time: ${formattedDateTime}`;
        }

        setInterval(updateDateTime, 1000);
    </script>
</body>
</html>
