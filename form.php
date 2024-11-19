
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Toggle Example</title>
    <style>
        #form-container {
            display: none; /* Initially hidden */
            margin-top: 20px;
        }
    </style>
    <script>
        function toggleForm() {
            var form = document.getElementById("form-container");
            if (form.style.display === "none") {
                form.style.display = "block"; // Show the form
            } else {
                form.style.display = "none"; // Hide the form
            }
        }
    </script>
</head>
<body>

    <!-- Button to trigger form display -->
    <button onclick="toggleForm()">Appoint</button>

    <!-- The form that will be shown/hidden -->
    <div id="form-container">
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="text">Reason:</label>
            <input type="text" id="Reason" name="Reason" required><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>

 

