<?php
/**
 * Finding the number which produce longest chain using Collatz Problem
 *
 * @author mayur
 */
class CollatzProblem {
    private $_recArrayCache = array();
    
    public function findLongestChain( $number ) {
        $start = microtime(true);
        $longestSeqIndex = 0;
        $longestSeq      = 0;
        $sequenceLength  = 0;
        $startNumber     = 0;
        $this->_recArrayCache = array(range(0, $number+1));
        
        $this->_recArrayCache[1] = 1;

        for ($i = 2; $i <= $number; $i++) {
            $sequenceLength = $this->getArrayLength($i);

            //Check if sequence is the best solution
            if ($sequenceLength > $longestSeq) {
                $longestSeqIndex = $i;
                $longestSeq = $sequenceLength;
                $startNumber = $i;
            }
        }
        echo ("\n\nThe starting number $startNumber produces a sequence of $longestSeq.\n\n");
        $end = microtime(true);
        $total = round($end - $start, 4);
        
       // echo "\n Time taken :" . $total . "\n";
    }
    
    private function getArrayLength($i) {
        $chainLength = 0;
        if ($i < count($this->_recArrayCache) && $this->_recArrayCache[$i] != 0)
            return $this->_recArrayCache[$i];

        if ($i % 2 == 0) {
            $chainLength = 1 + $this->getArrayLength($i / 2);
        } else {
            $chainLength = 1 + $this->getArrayLength(3 * $i + 1);
        }

        if ($i < count($this->_recArrayCache)) {
            $this->_recArrayCache[$i] = $chainLength;
        }
        
        return $chainLength;
    }
}
ini_set('max_execution_time', 100); 
ini_set('memory_limit','256M');

ini_set("display_errors", 1); 
error_reporting(E_ALL);

$number   = 1000000;

if(!empty($argv) && !empty($argv[1])) {
    $number = $argv[1];
} else if(!empty($_GET) && !empty($_GET['number'])) {
        $numerator = $_GET['number'];
}

$obj = new CollatzProblem();
$obj->findLongestChain($number);
