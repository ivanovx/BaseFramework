<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>
            <?php 
                if (isset($this->title)) {
                    echo htmlspecialchars($this->title);
                }
            ?>
        </title>
        
        <link rel="stylesheet" href="/content/css/style.css" />
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/Projects">Projects</a></li>
                <li><a href="/About">About</a></li>
            </ul>
        </nav>
