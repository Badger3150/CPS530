<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Refresh the page every five minutes -->
    <meta http-equiv="Refresh" content="300">
    <style>
        body {
            text-align: center;
            background-color: rgb(78, 150, 155)(163, 96, 96);
            background: linear-gradient(to right, #f6d365 0%, #fda085 100%);
        }
        .container {
            width: 600px;
            padding: 30px 40px;
            margin: 0 auto;
            border: 3px solid black;
            border-radius: 20px;
            border: 3px solid black;
            box-shadow: 10px 10px 8px 10px #888888;
            background-color: white;
        }
        img {
            width: 70%;
            height: 70%;
            border-radius: 50%;
            border: 10px solid black;
            animation: rotate 10s infinite linear;
        }
        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
    <title>Lab8 - Part1 (XML)</title>
</head>
<body>
    <?php
        // load the xml file
        $xml = simplexml_load_file('http://199.195.194.92:2199/rpc/meyima03/streaminfo.get?x=1') or die("Error: Cannot find the xml file");

        // display the information
        echo "<h1>Lab8 - Part1 (XML)</h1>";
        echo "<div class='container'>";
        echo "<h2>You're listening to " . $xml->data->item[0]->title . "</h2>";
        echo "<img src='" . $xml->data->item[0]->track->imageurl . "' alt='albumPic'>";
        echo "<h3>Play list: " . $xml->data->item[0]->track->playlist->title . "</h3> ";
        echo "<h3>Music: " . $xml->data->item[0]->track->title . "</h3> ";
        echo "<h4>by " . $xml->data->item[0]->track->artist . "</h4>";
        echo "</div>";
    ?>
</body>
</html>