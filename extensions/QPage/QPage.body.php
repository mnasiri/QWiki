<?php
class QPage{ 
	static function onParseInit( Parser $parser ) {
		$parser->setHook( 'qpage', array( __CLASS__, 'quranPageRender' ) );
	    return true;
	}
 
	static function quranPageRender( $input, array $args, Parser $parser, PPFrame $frame ) {
		//$attr = array();    
		// This time, make a list of attributes and their values,
		// and dump them, along with the user input
		//foreach( $args as $name => $value )
		//	$attr[] = '<strong>' . htmlspecialchars( $name ) . '</strong> = ' . htmlspecialchars( $value );
		global $wgOut;
		global $mediaWiki;
		global $wgParser;
		$wgParser->disableCache();
		$qpageNumber = $args['number'];
		//$GLOBALS['QOut']['quranpage'] = $wgOut->parse($input);
		$str = $wgOut->parse($input);
		$str = str_replace("<p>", "<p class='mw-Quran-line'>", $str);
		$str = str_replace("<h3>", "<p class='mw-Quran-besm'>", $str);
		$str = str_replace("<h4>", "<p class=' mw-surah-name mw-Quran-besm'>", $str);
		$str = str_replace("</h3>", "</p>", $str);
		$str = str_replace("</h4>", "</p>", $str);
		$mediaWiki->quranpage[$qpageNumber] = "<div class='mv-Quran-text-panel'>$str</div>";
		return " ";
	 
	/* The following lines can be used to get the variable values directly:
	        $to = $args['to'] ;
	        $email = $args['email'] ;
	*/

	}
}
