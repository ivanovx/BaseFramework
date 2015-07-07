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
        
        <link rel="stylesheet" href="/content/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/content/css/style.css" />
        
        <script src="/content/js/jquery.min.js"></script>
        <script src="/content/js/bootstrap.min.js"></script> 
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">BaseFramework</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/Authors">Authors</a></li>
                        <li><a href="/About">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">