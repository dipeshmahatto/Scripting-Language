<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajax GET and POST Requests</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<h2>Ajax GET Request</h2>
<label for="nameInput">Enter Name:</label>
<input type="text" id="nameInput"><br>
<button id="getBtn">Get Data</button>
<div id="getData"></div>

<h2>Ajax POST Request</h2>
<form id="postForm">
    <label for="message">Message:</label>
    <input type="text" id="message" name="message"><br><br>
    <button type="submit">Submit</button>
</form>
<div id="postData"></div>

<script>
    $(document).ready(function() {
        // Ajax GET Request
        $("#getBtn").click(function() {
            var name = $("#nameInput").val(); // Get the value from the input field
            $.get("example.php", { name: name }, function(data) {
                $("#getData").html(data);
            });
        });

        // Ajax POST Request
        $("#postForm").submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.post("example.php", formData, function(data) {
                $("#postData").html(data);
            });
        });
    });
</script>

</body>
</html>
