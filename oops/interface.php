<?php 
//  https://www.youtube.com/watch?v=dk_1Q_LB14k&t=125s
//  Code By Peter Fisher (UTuber) ... 
Interface ShapeInterface{
	public function draw();
	public function colour();	
	public function reDraw();
}

class Circle implements ShapeInterface {
	public function draw(){}
	public function colour(){}                      
	public function reDraw(){
		return "Check For Status Here ['Circle Bro']";
	}
}

class Square implements ShapeInterface {
	public function draw(){}
	public function colour(){}
	public function reDraw(){
		return "Check For Status Here ['Square Bro']";
	}
}

class Line implements ShapeInterface {
	public function draw(){}
	public function colour(){}
	public function reDraw(){
		return "Check For Status Here ['Line Bro']";
	}
}

class Painter {
	public function addShape(ShapeInterface $shape){
		return $shape->reDraw();
		// return $shpae->colour();
}
}

$circle = new Square();
$Painterobject = new Painter();
echo $Painterobject -> addShape($circle);

?>