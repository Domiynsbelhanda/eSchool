<html>
<head>
	<?php include "head.php";?>
</head>
<body>
	<?php
		include "nav.php";
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>HTML</h1>
				</div>
			</div>
		</div>
	</header>
		<div class="container-fluid" style="margin-top:10px;margin-left:82px;margin-right:450px;">
			<h1>HTML Fundamentals</h1><br><label>Interested in learning how to design a website using HTML tags, elements, and attributes? Then this learning game is for you! Our interactive HTML tutorial is comprised of carefully selected videos, quizzes, and checkpoints to ensure that you learn as much as possible, while also having as much fun as possible. This is accomplished through a series of entertaining exercises, along with plenty of hands-on practice in writing actual HTML code.You will also learn the fundamentals of web design, collect colorful points, and compete with other learners throughout the world.Our videos are informative and concise, our checkpoints are enjoyable and your learning is guaranteed.Learn while playing and play while learning with our HTML Tutorial! Whether you want to further your career or simply gain a new skill, this tutorial will work for you.</label><button onclick="location.href='../html/chapter1.php'" class="btn btn-block">Start Learing>></button>
		</div>
		<div class="container-fluid" style="margin-left:82px;margin-right:450px;">
			<h1>Chapters :</h1><ol><li>Chapter 1: What is HTML?</li>
			<li>Chapter 2: Write HTML Using Notepad TextEdit</li><li>Chapter 3: HTML Headings</li><li>Chapter 4:HTML Attributes </li>
			<li>Chapter 5:HTML Horizontal Rules</li><li>Chapter 6: HTML Text Formatting</li><li>Chapter 7: The HTML<?php $str='<q>'; echo htmlspecialchars($str); ?> element defines a short quotation.</li>
			<li>Chapter 8: HTML Comment Tags</li><li>Chapter 9: Chapter 9:HTML Lists</li><li>Chapter 10: The<?php $str='<div>'; echo htmlspecialchars($str); ?> Element</li>
			<li>Chapter 11: HTML Iframes</li><li>Chapter 12: The<?php $str='<form>'; echo htmlspecialchars($str); ?> Element</li>
			<li>Chapter 13: The<?php $str='<select>'; echo htmlspecialchars($str); ?> Element</li>
			<li>Chapter 14: Input Type Text</li>
			</ol><button onclick="location.href='purchase.php'" class="btn btn-block">Purchase Now>></button><br>
			<button onclick="location.href='../download/index.php'" class="btn btn-block">Download free E-Books</button><br>
		</div>
	<?php
		include "footer.php";
	?>
</body>
</html>
