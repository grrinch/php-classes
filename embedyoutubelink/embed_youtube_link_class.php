<?php

/**
 * Class to embed YouTube videos in an iframe on a website.
 * Original class url: http://www.phpclasses.org/package/8344-PHP-Generate-HTML-to-embed-a-YouTube-video-in-a-page.html
 * 
 * @author Juan Chaves enhanced by Rad Paluszak
 * @url 
 */

/**
 * Original class
 * */
class embedVideo {

	private $_link;
	
	/**
	* @param string link youtube 
	*/
	public function __construct ($link)
	{
		$this->_link = $link;
	}
	
	public function embed()
	{
		return $this->_embed();
	}	
	
	/**
	 * My changes include replacing preg function with appropriate parse_url and parse_str //Rad Paluszak
	 * */
	private function _embed()
	{

		$patron = '/(.*)http([^"]*)youtu([^"]*)(\/|\=)(.*)/';
		$replacement = '<iframe width="50%" height="315" src="//www.youtube.com/embed/$5" frameborder="0" allowfullscreen></iframe>';
		return preg_replace($patron, $replacement,  $this->_link);
		
	}
   
}

