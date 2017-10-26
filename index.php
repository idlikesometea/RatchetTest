<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>
	<form action="post.php" method="POST">
		<input type="text" id="category" name="category" value="kittensCategory"> <br><br>
		<input type="text" id="title" name="title" placeholder="Title"> <br><br>
		<textarea id="article" name="article" placeholder="Article"></textarea> <br><br>
		<button type="submit" value="send">Send</button>
	</form>
</body>
<script type="text/javascript">
	// $('button').click(function(e){
	// 	e.preventDefault();
	// 	$.post('post.php', {category: $('#category').val(), title: $('#title').val(), article: $('#article').val()});
	// })
</script>
</html>