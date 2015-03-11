<?php
require_once 'src/Rectangle.php';

$r1 = new Rectangle(2,2,6,6);

?>
<!DOCTYPE html>
<html>
<head>
	<title>OOP Introduction</title>
</head>
<body>
<h1>Shapes</h1>
<p>
	The area of reactangle is 
	<?php echo $r1->getArea();?>.
</p>
</body>
</html>