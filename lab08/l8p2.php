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
            background-image: linear-gradient(to top, #09203f 0%, #537895 100%);
        }
        .container {
            width: 600px;
            padding: 30px 40px;
            margin: 0 auto;
            border-radius: 20px;
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
        //load the xml file
        $xml = simplexml_load_file('http://199.195.194.92:2199/rpc/meyima03/streaminfo.get?x=1') or die("Error: Cannot find the xml file");
    
        // convert the xml to json
        $json = json_encode($xml);
        $info = json_decode($json,TRUE);
        
        // display the information
        echo "<h1>Lab8 - Part2 (JSON)</h1>";
        echo "<div class='container'>";
        echo "<h2>You're listening to " . $info["data"]["item"]["title"] . "</h2>";
        echo "<img src=" . $info["data"]["item"]["track"]["imageurl"] . " alt='albumPic'>";
        echo "<h3>Play list: " . $info["data"]["item"]["track"]["playlist"]["title"] . "</h3>";
        echo "<h3>Music: " . $info["data"]["item"]["track"]["title"] . "</h3>";
        echo "<h4>by " . $info["data"]["item"]["track"]["artist"] . "</h4>";
        echo "</div>";
    ?>
</body>
</html>