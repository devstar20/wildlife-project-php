$(document).ready(function(){
		
	$("body").addClass("js");

	// Adding a "JavaScript is Enabled" Body Class

	// Click the point to open the new frame
	$("#map-osaka").click(function(){
		if($("#osaka").css("display")=="none"){
			$("#osaka").css("display","block");
		}
		else{
			$("#osaka").css("display","none");
		}
	});

	$("#map-jingdong").click(function(){
		if($("#jingdong").css("display")=="none"){
			$("#jingdong").css("display","block");
		}
		else{
			$("#jingdong").css("display","none");
		}
	});

	$("#map-shizuoka").click(function(){
		if($("#shizuoka").css("display")=="none"){
			$("#shizuoka").css("display","block");
		}
		else{
			$("#shizuoka").css("display","none");
		}
	});

	// Click the pattern to popup the new frame
	// Click the close button back to the website
	// Source: Partical week 10
	$("#feedback #ins, #ins-information-popup .close-button a").click(function(event) {
		event.preventDefault();
		$("body").toggleClass("show-ins-information-popup");
	});
	// Click the pattern to popup the new frame
	// Click the close button back to the website
	$("#feedback #facebook, #facebook-information-popup .close-button a").click(function(event) {
		event.preventDefault();
		$("body").toggleClass("show-facebook-information-popup");
	});
	// Popup a new frame with text
	$("#twitter").click(function(){
		alert("Sorry, the author doesn't have twitter account. Please contact me, using Instagram or facebook. Thank you for your understanding and support.")
	});
	// Click the text to popup the new frame with video
	// Click the close button back to the website
	$("#good-morning #first-vedio, #morning-vedio-popup .close-button a").click(function(event) {
		event.preventDefault();
		$("body").toggleClass("show-morning-vedio-popup");
	});
	// Click the text to popup the new frame with video
	// Click the close button back to the website
	$("#good-afternoon #second-vedio, #afternoon-vedio-popup .close-button a").click(function(event) {
		event.preventDefault();
		$("body").toggleClass("show-afternoon-vedio-popup");
	});
	// Click the text to popup the new frame with video
	// Click the close button back to the website
	$("#good-evening #third-vedio, #evening-vedio-popup .close-button a").click(function(event) {
		event.preventDefault();
		$("body").toggleClass("show-evening-vedio-popup");
	});
	// Click the text to popup the new frame with video
	// Click the close button back to the website
	$("#page-header #welcome, #welcome-popup .close-button a").click(function(event) {
		event.preventDefault();
		$("body").toggleClass("show-welcome-popup");
	});
	// Submit the feedback
	// If the section is empty, the label will be added "error"; otherwise, the comment is completed, show successful.
	// Source: Partical week 10
	$("#feedback form").submit(function(event) {
	event.preventDefault();

	var comments = $("#comment").val();
	var complete = false;

	console.log(comments);

	if(comments != "") {
		complete = true;
	}

	//for the label. change the label color become red.
	if(comments == "") {
		$("label[for='comment']").addClass("error");
	}
	// show the success.
	if(complete) {
		console.log("Complete Form");
		$("#feedback").html("Thank you for your feedback. Hope you have a nice day!").attr('disabled', true);
	}
	});

	// Check the submit answer is ture or false.
	// Source: JavaScript Can Validate Input.(n.d).Retrived from https://www.w3schools.com/js/tryit.asp?filename=tryjs_validation_number.
	$(".button-1").on("click",function(){
		var x, text;
		var x = $('input[name=answer-1]:checked').val();
		if (x == "YES") {
			text = "Congratulations! You got a correct answer."
		}
		else{
			text = "Sorry! The correct answer is YES. Please check the Yotsuba's hiking page."
		}
	// Show the text in the page.
		document.getElementById("question-1").innerHTML = text;
	});

	$(".button-2").on("click",function(){
		var x, text;
		var x = $('input[name=answer-2]:checked').val();
		if (x == "NO") {
			text = "Congratulations! You got a correct answer."
		}
		else{
			text = "Sorry! The correct answer is NO. Yotsuba ate Soba and Pickle with her Daddy."
		}
	// Show the text in the page.
		document.getElementById("question-2").innerHTML = text;
	});
	
	$(".button-3").on("click",function(){
		var x, text;
		var x = $('input[name=answer-3]:checked').val();
		if (x == "YES") {
			text = "Congratulations! You got a correct answer."
		}
		else{
			text = "Sorry! The correct answer is YES. Yotsuba bought two Yukata, one is for her friend, other is for herself."
		}
	// Show the text in the page.
		document.getElementById("question-3").innerHTML = text;
	});

	$(".button-4").on("click",function(){
		var x, text;
		var x = $('input[name=answer-4]:checked').val();
		if (x == "YES") {
			text = "Wow! Excellent!"
		}
		else{
			text = "Oh! You should go to the Yotsuba's greeting page to read and watch the video."
		}
	// Show the text in the page.
		document.getElementById("question-4").innerHTML = text;
	});
	$('figure').scrollClass();

});

