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
		$str = str_replace("<p>", "<div class='mw-Quran-line mw-Quran-common'>", $str);
		$str = str_replace("<h3>", "<div class='mw-Quran-besm mw-Quran-common'>", $str);
		$str = str_replace("<h4>", "<div class='mw-surah-name mw-Quran-besm mw-Quran-common'>", $str);
		$str = str_replace("</h3>", "</div>", $str);
		$str = str_replace("</h4>", "</div>", $str);
		$str = str_replace("</p>", "</div>", $str);
		$mediaWiki->quranpage[$qpageNumber] = "<div class='mv-Quran-text-panel' style = 'direction: rtl;'>$str</div>";
		return " ";
	 
	/* The following lines can be used to get the variable values directly:
	        $to = $args['to'] ;
	        $email = $args['email'] ;
	*/

	}
}
