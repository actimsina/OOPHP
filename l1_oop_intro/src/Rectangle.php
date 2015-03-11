<?php 

require_once 'Shape.php';
require_once 'Point.php';

class Rectangle implements Shape
{
	private $p1;
	private $p2;	
	
	// Composition
    // A comprises B, B is not externally identifiable or does not
    // have meaning outside of this composition
	
	public function __construct($x1, $y1, $x2, $y2){
		$this->p1 = new Point($x1, $y1);
		$this->p2 = new point($x2, $y2);
	}

	// Aggregation
	// A includes B, B is externally identifiable and my exist
	// on its own merits.

	public function Rectangle(&$p1, &$p2){
		$this->p1 = (object)$p1;
		$this->p2 = (object)$p2;
	}

	// Association: A knows of B, B has meaning in its own right
	
	public function getArea(){
		$length = $this->p2->getX() - $this->p1->getX();
		$breadth = $this->p2->getY() - $this->p1->getY();

		return $length * $breadth;
	}
}

/* // Some tests
$p1 = new Point(2,2);
$p2 = new Point(8,8);

echo $p1->getX()."\n";

$r1 = new Rectangle($p1, $p2);
echo $r1->getArea()."\n";

$r1 = new Rectangle(2,2,6,6);
echo $r1->getArea()."\n";*/
