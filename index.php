
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
<?php
error_reporting(E_ALL);

require_once('./config.php');
require_once('./database.php');
$db = new Database();
    // $db->add('task 1', 'text description', 0);
    // $db->add('task 2', 'text description', 0);
$rows = $db->select_all();
?>
    <h1 class="ui center aligned header">
        TODO 
    </h1>
    <div class="ui container">
        <div class="ui list celled selection">
            <?php foreach ($rows as $row): ?>
                <div class="item">
                    <div class="right floated content">
                        <a href="#" class="ui icon inverted red button">
                            <i class="trash outline icon"></i>
                        </a>
                        <a href="#"  class="ui icon button">
                            <i class="edit icon"></i>
                        </a>
                    </div>

                  <div class="content">
                    <a href="" class="header"> <?= $row['title']; ?></a>
                    <div class="description"><?= $row['description']; ?></div>
                </div>

            </div>
            <!-- echo "<tr><td>".$row["id"]."</td><td>".$row["title"]." ".$row["description"]."</td></tr>"; -->
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>