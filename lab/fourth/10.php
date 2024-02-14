<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Toggle Image Visibility</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    img {
        display: block;
        height: 100px;
        width: 100px;
    }
    button {
        display: block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }
</style>
</head>
<body>

<img id="myImage" src="../third/logoo.png" alt="Placeholder Image">

<button id="toggleBtn">Show/Hide Image</button>

<script>
    $(document).ready(function() {
        $("#toggleBtn").click(function() {
            $("#myImage").toggle();
        });
    });
</script>

</body>
</html>
