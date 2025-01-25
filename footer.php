<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer with Visitor Count</title>
    <style>
        footer {
            background-color: rgb(0,0,139);
            color: #fff;
            text-align: center;
            padding: 10px 0;
            bottom: 0;
            width: 100%;
            font-family: Arial, sans-serif;
            margin-left:-8px;
        }
        .visitor-count {
            margin-top: 5px;
            font-size: 1em;
            font-weight: bold;
            color: #ffcc00;
            animation: pop 1s ease-in-out;
        }
        @keyframes pop {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
    </style>
</head>
<body>
    <!-- Content of the page -->

    <footer>
        <p>&copy; 2025 Smart Campus. All Rights Reserved.</p>
        <div class="visitor-count">Visitor Count: <span id="visitorCount">0</span></div>
    </footer>

    <script>
        // Retrieve the visitor count from local storage or initialize it
        let visitorCount = localStorage.getItem('visitorCount') || 0;

        // Increment the visitor count
        visitorCount++;

        // Save the updated count back to local storage
        localStorage.setItem('visitorCount', visitorCount);

        // Display the visitor count in the footer
        const visitorCountElement = document.getElementById('visitorCount');
        visitorCountElement.textContent = visitorCount;

        // Add animation effect on update
        visitorCountElement.classList.add('pop');
        setTimeout(() => {
            visitorCountElement.classList.remove('pop');
        }, 1000);
    </script>
</body>
</html>
