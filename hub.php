<?php
session_start();
if($_SESSION["loggedin"] == false) {
	header("Location: index.php");
}
?>
<script type="text/javascript" src="process.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<a href="log_out">log out</a><br>
<?php
	if($_SESSION["username"] == "quizmaster") {
	echo '<button onclick="showanswers()">show results</button><br><a href="reset_a.php?pw=saasmannistsaasmann">reset answers</a>
	';
	}
?>
<div class="absoluteCenter">
	<input type="text" id="answer" placeholder="answer" style="height:150px; width:500px;"></input>
</div>
<script type="text/javascript">
var el = document.getElementById("answer");
if(el){
el.addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode == 13) {
		sendanswer(document.getElementById("answer").value, " <?php echo $_SESSION["username"] ?>");
    }
});
}
</script>