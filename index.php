<!DOCTYPE html>
<html>

<head>
	<title>Chatbot</title>
	<link rel="icon" href="bot.png" />
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<div id="container" class="container">
		<div id="chat" class="chat">
			<div id="messages" class="messages"></div>
			
	<input id="input" name="msg" type="text" placeholder="Say something..." autocomplete="off" autofocus="true" style="position: fixed;left:175px; bottom: 180px;height: 40px;width: 700px;">
			<button type="button" style="height: 40px; width: 50px;position: fixed;left:880px; bottom: 180px;" value="Send" name="send" value="Send" id="SubmitBtn" onclick="sendMsg()">Send
			</button>
		
		</div>
		<img src="bot.png" alt="Robot cartoon" height="500vh">
	</div>
</body>
<script type="text/javascript" src="index.js" ></script>
<script type="text/javascript" src="constants.js" ></script>
<script type="text/javascript" src="speech.js" ></script>

</html>
