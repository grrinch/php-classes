<?php

/**
 * Class to embed YouTube videos in an iframe on a website.
 * Original class url: http://www.phpclasses.org/package/8344-PHP-Generate-HTML-to-embed-a-YouTube-video-in-a-page.html
 * 
 * @author Juan Chaves enhanced by Rad Paluszak
 * @url https://github.com/grrinch/php-classes/
 */

/**
 * Original class
 * 
 */
class embedVideo {

    private $_link;

    /**
     * Constructor takes any YT link.
     * @param string link youtube 
     */
    public function __construct($link) {
        $this->_link = $link;
    }

    public function embed() {
        return $this->_embed();
    }

    /**
     * My changes include replacing preg_replace function with parse_url and parse_str accordingly //Rad Paluszak
     * 
     */
    private function _embed() {
        $query_string = parse_url($this->_link, PHP_URL_QUERY);
        parse_str($query_string, $query_array);
        $v = $query_array['v'];
        $iframe = '<iframe width="50%" height="315" src="//www.youtube.com/embed/' . $v . '" frameborder="0" allowfullscreen></iframe>';
        return $iframe;
    }
}
