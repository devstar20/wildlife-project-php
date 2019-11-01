<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Game</title>
        <link rel="stylesheet" href="index_puzzle/css/stylepuzzlegame.css">
        <link href="https://fonts.googleapis.com/css?family=Catamaran|Concert+One|Josefin+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/puzzle.css">
    <?php include_once 'includes/head-end-tag.php';?>

    <body>
        <?php include_once 'includes/header.php';?>
        
        <section class="puzzle-section">
        <div id="wrap">
            <div id="left">
                <ul>
                    <li id="gameRule">
                        Guess Guess who I am?
                        <p>Click the "START" button to start the game</p>
                        <p>Click the "RESET" button back to the original image</p>
                    </li>
                </ul>
            </div>
            <div id="content">
                <ul>
                    <li id = "START"><span><button>START GAME</button></span></li>
                    <li id = "LEVEL"><span><button>GIVE UP</button></span></li>
                </ul>
                <p id="finish"></p>
                <div id="image"></div>
            </div>
        </div>
        </section>
    </body>
    <script src="index_puzzle/js/jquery-1.9.1.min.js"></script>
    <script src="index_puzzle/js/puzzleGame.js"></script>
</html>