<?php 

require_once 'Shape.php';
require_once 'Point.php';

class Rectangle implements Shape
{
	private $p1;
	private $p2;	
	
	/* Composition
     A comprises B, B is not externally identifiable or does not
     have meaning outside of this composition
	*/

	public function __construct($x1, $y1, $x2, $y2){
		$this->p1 = new Point($x1, $y1);
		$this->p2 = new point($x2, $y2);
	}

	/* Aggregation
	A includes B, B is externally identifiable and my exist
	on its own merits. 
	*/

/*  public function __construct(&$p1, &$p2){
		$this->p1 = (object)$p1;
		$this->p2 = (object)$p2;
	}
*/
	// Association: A knows of B, B has meaning in its own right
	
	public function getArea(){
		$length = $this->p2->getX() - $this->p1->getX();
		$breadth = $this->p2->getY() - $this->p1->getY();

		return $length * $breadth;
	}
}

