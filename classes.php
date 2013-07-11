<?php
function sizeofvar($var) {
    $start_memory = memory_get_usage();
    $var = unserialize(serialize($var));
    return memory_get_usage() - $start_memory - PHP_INT_SIZE * 8;
}

function testBenchmark($benchFunction)
{
	$time = microtime(true); // Gets microseconds
	$benchFunction();
	echo "Time Elapsed: ".(microtime(true) - $time)."s".'<br>';
}

const A = 'A';
const B = 'B';
const C = 'C';
const D = 'D';
const E = 'E';

//test1
class A{
	public $a;
	public $b;
	public $c;
	public $d;
	public $e;
}

$benchA = function(){
	for ($i=0; $i < 1000000; $i++) { 
		$obj = new A();
		$obj->a = A;
		$obj->b = B;
		$obj->c = C;
		$obj->d = D;
		$obj->e = E;
	}
};

testBenchmark($benchA);


//test 2
class B{
	public $a;
	public $b;
	public $c;
	public $d;
	public $e;

	function __construct($a,$b,$c,$d,$e) {
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
		$this->d = $d;
		$this->e = $e;
	}
}

$benchB = function(){
	for ($i=0; $i < 1000000; $i++) { 
		$obj = new B(A,B,C,D,E);
	}
};

testBenchmark($benchB);
?>