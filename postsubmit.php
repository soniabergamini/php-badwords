<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words Output</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    $paragraph = $_GET["formParagraph"];
    $word = $_GET["formWord"];
    $newParagraph = str_replace($word, '***', $paragraph);
    ?>

    <h1>HELLO 👋</h1>
    <section>
        <div>
            <p>Thank you for filling out the form!</p>
            <ul>
                <li>
                    <p>YOUR TEXT:
                        <em>"<?php echo $paragraph; ?>"</em>
                    </p>
                </li>
                <li>
                    <p>LENGTH:
                        <strong><?php echo strlen($paragraph); ?></strong>
                    </p>
                </li>
                <li>
                    <p>🫣 OBSCURED:
                        <em><?php echo $newParagraph; ?></em>
                    </p>
                </li>
            </ul>
        </div>
    </section>
</body>

</html>