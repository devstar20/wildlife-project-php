<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Quiz</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="quiz/css/style-eating.css">
        <link rel="stylesheet" href="css/quiz.css">
    <?php include_once 'includes/head-end-tag.php';?>

    <body>
        <?php include_once 'includes/header.php';?>
        
        <section id="contact-us">
        <figure id="rabbit" data-scroll-class="change">
            <img src="quiz/images/contact-us.png" alt="contact-us">
        </figure>
            <h1>Contact us:</h1>
            <p>Get in touch.</p>
        </section>
        <section id="feedback">
            <form method="get">
                <figure id="social-media">
                    <img id="ins" src="quiz/images/ins.png" alt="ins">
                    <img id="facebook" src="quiz/images/facebook.png" alt="facebook">
                    <img id="twitter" src="quiz/images/twitter.png" alt="twitter">
                </figure>
                <fieldset id="feedback-1">
                    <legend>Your Feedback</legend>
                    <label for="comment">
                        Please enter your comments: 
                    </label>
		            <textarea id="comment" name="comments" rows="10" placeholder="Give us a few sentences"></textarea>
                    <button id="submit" type="submit">Submit</button>
                </fieldset>
            </form>
        </section>
        <fieldset id="question">
            <legend>Questionnaire</legend>
            <form action="" onsubmit="return false">
                <h3>1.There will be the first question.</h3>
                <input type="radio" name="answer-1" value="YES">YES
                <input type="radio" name="answer-1" value="NO">NO
                <input type="radio" name="answer-1" value="No Idea">No Idea
                <button class="button-1">Submit your answer</button>
                <p id="question-1"></p>
            </form>
            <form action="" onsubmit="return false">
                    <h3>2.There will be the second question.</h3>
                    <input type="radio" name="answer-2" value="YES">YES
                    <input type="radio" name="answer-2" value="NO">NO
                    <input type="radio" name="answer-2" value="No Idea">No Idea
                    <button class="button-2">Submit your answer</button>
                    <p id="question-2"></p>
            </form>
            <form action="" onsubmit="return false">
                    <h3>3.There will be the third question.</h3>
                    <input type="radio" name="answer-3" value="YES">YES
                    <input type="radio" name="answer-3" value="NO">NO
                    <input type="radio" name="answer-3" value="No Idea">No Idea
                    <button class="button-3">Submit your answer</button>
                    <p id="question-3"></p>
            </form>
            <form action="" onsubmit="return false">
                    <h3>4.There will be fourth question.</h3>
                    <input type="radio" name="answer-4" value="YES">YES
                    <input type="radio" name="answer-4" value="NO">NO
                    <button class="button-4">Submit your answer</button>
                    <p id="question-4"></p>
            </form>
        </fieldset>
   
        <div id="ins-information-popup">
                <nav class="close-button">
                    <a href="contact us.html">Close</a>
                </nav>
                <figure>
                    <img src="quiz/images/ins-popup.jpg" alt="insert-image">
                </figure>
                <article>
                    <p>If you find any interesting things or some problems, you could contact me through the Instagram: jackho825.</p>
                </article>
        </div>

        <div id="facebook-information-popup">
                <nav class="close-button">
                    <a href="contact us.html">Close</a>
                </nav>
                <figure>
                    <img src="quiz/images/no.6.jpg" alt="insert-image">
                </figure>
                <article>
                    <p>If you don't have an Instagram account. Don't worry, you could share your funny story or problems with me through the Facebook: JackHo. </p>
                </article>
        </div>
        <script src="quiz/js/jquery-3.3.1.min.js"></script>
        <script src="quiz/js/script.js"></script>
	    <script src="quiz/js/jquery.cycle2.min.js"></script>
        <script src="quiz/js/scrollClass.min.js"></script>
        
    </body>