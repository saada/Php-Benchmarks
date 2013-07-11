<?php
function sizeofvar($var) {
    $start_memory = memory_get_usage();
    $var = unserialize(serialize($var));
    return memory_get_usage() - $start_memory - PHP_INT_SIZE * 8;
}

function benchmark($benchFunction)
{
	$time = microtime(true); // Gets microseconds
	$benchFunction();
	echo "Time Elapsed: ".(microtime(true) - $time)."s".'<br>';
}

const a = 'a';
const b = 'b';
const c = 'c';
const d = 'd';
const e = 'e';
const A = 'A';
const B = 'B';
const C = 'C';
const D = 'D';
const E = 'E';

//test 1
$benchA = function(){
	for ($i=0; $i < 1000000; $i++) { 
		$obj = array();
		$obj[a] = A;
		$obj[b] = B;
		$obj[c] = C;
		$obj[d] = D;
		$obj[e] = E;
	}
};

benchmark($benchA);

//test 2
$benchB = function(){
	for ($i=0; $i < 1000000; $i++) { 
		$obj = array(a => A,b => B,c => C,d => D,e => E);
	}
};

benchmark($benchB);

//memory test
$obj = array(a => A,b => B,c => C,d => D,e => E);
echo "Bytes per object:" . sizeofvar($obj);