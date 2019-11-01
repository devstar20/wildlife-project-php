<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Home</title>
    <style>
        body {
            background-color: #333333;
        }

        .container {
            display: flex;
            position: relative;
            top: 150px;
        }

        .search {
            text-decoration: none;
            color: #FFF;
            width: 300px;
            outline: 0;
            display: block;
            padding: 10px;
            background-color: #222222;
            border: 2px solid #111111;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }

        .search:hover,
        .search:active,
        .search:focus {
            background-color: #333333;
            box-shadow: 1px 1px 10px #FFFFba,
                -1px -1px 10px #FFF;
        }

        .searchSection {
            width: 40%;
            display: flex;
            align-items: baseline;
            margin-top: 100px;
            justify-content: flex-end;
            position: relative;
        }

        .animal-desc {
            color: white;
            padding: 10px;
            font-size: 25px;
        }

        .resultSection {
            width: 50%;
            margin-top: 100px;
            margin-left: 20px;
        }

        .eraseText {
            position: absolute;
            right: 10px;
            top: 18px;
            cursor: pointer;
        }
    </style>
    <script>

    </script>
<?php include_once 'includes/head-end-tag.php';?>

<body>
    <?php include_once 'includes/header.php';?>

    <div class="container">
        <div class="searchSection">
            <label class="animal-desc">Animal name:</label>
            <input type="text" class="search" name="animal" id="animal" value="" />
            <span class="eraseText"><img src="image-search/delete.png" style="width:12px; color:white" /></span>
        </div>
        <div class="resultSection">
            <div id="result"></div>
        </div>

    </div>

</body>
<script src="JQuery/jquery-3.4.1.min.js"></script>
<script src="image-search/imagesearch.js"></script>

</html>