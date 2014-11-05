<?php
	
	// Evaluates if bracket sets are matched correctly
	$test_strings =  array( ")(){}", "[]({})", "([])", "{()[]}", "([)]" );
	
	foreach( $test_strings as $s )
		echo $s . ": " . ( parse( $s ) ? "1" : "0" ) . "\n";
 	
	function parse( $str ) {
		$letters = str_split( $str );
				
		$brace_map = array(
			')'=>'(',
			'}'=>'{',
			']'=>'['
		);
		$stack = array();
		foreach( $letters as $l ) {
			if ( in_array( $l, array_values( $brace_map ) ) ) // Openers
				$stack[] = $l;
			if ( in_array( $l, array_keys( $brace_map ) ) )  // Closers 
				if ( array_pop( $stack ) != $brace_map[$l] )  
					return false;	
		}
		return count( $stack ) == 0;
	}
	
?>