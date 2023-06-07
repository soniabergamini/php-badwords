<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words Input</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>HELLO 👋</h1>
    <form action="postsubmit.php" method="get">
        <label for="formParagraph">Write a short text:</label>
        <textarea name="formParagraph" id="formParagraph" cols="30" rows="10" placeholder="Example: This morning my dog, Dea, was sleeping on the sofa while I was in Boolean class on zoom." required></textarea>
        <label for="formWord">Write a single word in the text above:</label>
        <input type="text" name="formWord" id="formWord" placeholder="Example: dog" required>
        <button type="submit">SEND</button>
    </form>
</body>

</html>