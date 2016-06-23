<?php
    error_reporting(E_ALL);

    require_once('./config.php');
    require_once('./database.php');

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP todo APP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/semantic.min.js"></script>
    <style>
        h1.ui.center.header {
            margin: 1em 0;
        }
    </style>
</head>
<body>
    <h1 class="ui center aligned header">
        TODO 
    </h1>
    <div class="ui text container">
      <div class="ui segments">
        <div class="ui segment">Content</div>
        <div class="ui segment">Content</div>
        <div class="ui segment">Content</div>
        <div class="ui segment">Content</div>
      </div>
    </div>
</body>
</html>