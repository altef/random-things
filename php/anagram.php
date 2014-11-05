<?php
	
	// Evaluates of one string is an anagram of another
	function anagram_compare( $a, $b ) {
		if ( strlen($a) != strlen( $b ) )
			return false;
		return string_sum( $a ) == string_sum( $b ) ;
		
		
	}
	
	function string_sum( $str ) {
		return array_sum( array_map( 'ord', str_split( strtolower( $str ) ) ) );
	}
?>