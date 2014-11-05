

// Evaluates of one string is an anagram of another
function anagram_compare( a, b ) {
	if ( a.length !=  b.length )
		return false;
	return string_sum( a ) == string_sum( b ) ;
	
	
	function string_sum( str ) {
		str = str.toLowerCase();
		var sum = 0;
		for( var i=0; i < str.length; i++ )
			sum += str.charCodeAt( i );
		return sum;
	}
}

