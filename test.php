<title>Sample PHP App</title>
Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old!
</head>
<body>
<form action="test.php" method="post">
<p>Your name: <input type="text" name="name" /></p>
<p>Your age: <input type="text" name="age" /></p>
<p><input type="submit" /></p>
</form> <br />
<a href="index.php"><button>HOME</button></a>
</body>
</html>