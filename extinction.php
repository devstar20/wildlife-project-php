<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Wildlife Extinction</title>
    <link rel="stylesheet" href="css/extinction.css">
    <script src="js.js"></script>
    <style>
        section {
            position: relative;
            margin: 12vh 0 0 0;
            background: url(images-extinction/desert.jpg) no-repeat;
            background-size: contain;
            height: 100vh;
        }
        
        .dropbtn {
            position: relative;
            width: 300px;
            height: 220px;
            background-color: transparent;
            font-size: 36px;
            border: none;
            cursor: pointer;
            text-shadow: 2px 2px #000, -2px -2px #000;
            transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
        }
        
        .parrot {
            background: url('wild-life-info/parrot.png') no-repeat;
        }

        /* Dropdown button on hover & focus */
        .dropbtn:hover, .dropbtn:focus {
            background-color: #4c9c455e;
            transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;

        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
            transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;

        }
        
        .drop-parrot {
            position: absolute;
            top: 10%;
            left: 50%;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #dddddd;transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
}

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {
            display:block;
            transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;

        }
        
    </style>
    
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
        
        
    </script>
<?php include_once 'includes/head-end-tag.php';?>

<body>
    <?php include_once 'includes/header.php';?>
    
	<section class="extinction-section">

    
        <div class="dropdown drop-parrot">
            <button class="dropbtn parrot"><a href="extinguish.php" style="text-decoration: none">Parrot</a></button>
            <!--<div id="myDropdown" class="dropdown-content">
                <a href="#">Info</a>
                <a href="#">Video</a>
            </div>-->
        </div>
        
        
    </section>
    
</body>

</html>