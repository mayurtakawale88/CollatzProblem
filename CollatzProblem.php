<?php
/**
 * Finding the number which produce longest chain using Collatz Problem
 *
 * @author mayur
 */
class CollatzProblem {
    /**
    * To hold entire range values in array
    */
    private $_recArrayCache = array();
    
    /**
    * Find the number which produce longest chain form 0 to number passed to this function
    *
    * @param int $number higher number of rang
    */
    public function findLongestChain( $number ) {
        $start                = microtime(true);
        $longestSeqIndex      = 0;
        $longestSeq           = 0;
        $sequenceLength       = 0;
        $startNumber          = 0;
        $this->_recArrayCache = array(range(0, $number+1));
        
        $this->_recArrayCache[1] = 1;

        for ($i = 2; $i <= $number; $i++) {
            $sequenceLength = $this->getChainLength($i);

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
       
    }
    
    /**
    * Get Current Number Chain Length
    *
    * @param int $i
    *
    * @return int
    */
    private function getChainLength($i) {
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
