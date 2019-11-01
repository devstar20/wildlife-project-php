<!DOCTYPE HTML>

<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Extinguish</title>
        <script src="JQuery/jquery-3.4.1.min.js"></script>
        <style></style>
    <?php include_once 'includes/head-end-tag.php';?>

    <body>
        <?php include_once 'includes/header.php';?>

        <section class="extinguish-section">
            <div class="forest-container">
                <img class="grass-img" src="extinguish/grass.png" width="1348px" height="560px">
                <img class="farmer-talk-img" src="extinguish/farmer-talk.png" width="290px" height="160px">
                <img class="parrot-talk-img" src="extinguish/parrot-talk.png" width="380px" height="200px">
                <img id="fire" class="fire-img" src="extinguish/fire.png">
                <img class="farmer-img" src="extinguish/farmer.png" width="220px" height="310px">
                <img class="parrot-img" src="extinguish/parrot.png" width="280px" height="210px">
                <img id="fire1" class="smoke-img1" src="extinguish/smoke.png" width="80px" height="100px">
                <img id="fire2" class="smoke-img2" src="extinguish/smoke.png" width="120px" height="150px">
                <img id="fire3" class="smoke-img3" src="extinguish/smoke.png" width="140px" height="175px">
                <p id="msg" class="parrot-talk-p" style="width: 300px"></p>
                <p class="farmer-talk-p">Oh sorry !! <br> I dont't know that</p>
            </div>
            <div class="table-under-image">
                <table>
                    <tr>
                        <td style="font-size: 3em;padding:0 50px">TOOl</td>
                        <td style="font-size: 3em;padding:0 50px"><button id="water" style="background-color: transparent;border: none;"><img src="extinguish/water.png" width="120px" height="150px"></button></td>
                        <td style="font-size: 3em;padding:0 50px"><button style="background-color: transparent;border: none;"><img src="extinguish/Extinguisher.png" width="120px" height="150px"></button></td>
                    </tr>
                </table>
            </div>
        </section>
        
    </body>
</html>

<script>
    var showText = function (target, message, index, interval) {   
        if (index < message.length) {
            $(target).append(message[index++]);
            setTimeout(function () { showText(target, message, index, interval); }, interval);
        }
    }
    $(function () {
        showText("#msg", "What are you doing? do you know because of theannual burning of native grass and overgrazing our paradise parrots are extinct .", 0, 50);   
    });

    $('#water').click(function() {
        $("#fire").css("display","none");
        $("#fire1").css("display","none");
        $("#fire2").css("display","none");
        $("#fire3").css("display","none");
    });
</script>
