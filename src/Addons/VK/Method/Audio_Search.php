<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of audio matching the search criteria.
 */
class Audio_Search extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('audio.search');
    }
    /**
     * Search query string (e.g., 'The Beatles').
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Audio_Search
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * '1' — to correct for mistakes in the search query (e.g., if you enter 'Beetles', the system will search for 'Beatles').
     *
     * {"type":"boolean"}
     */
    public function _auto_complete(boolean $auto_complete) : Audio_Search
    {
        $this->params['auto_complete'] = $auto_complete;
        return $this;
    }
    /**
     * '1' — to return only audio files that have associated lyrics.
     *
     * {"type":"boolean"}
     */
    public function _lyrics(boolean $lyrics) : Audio_Search
    {
        $this->params['lyrics'] = $lyrics;
        return $this;
    }
    /**
     * '1' — to search only by artist name.
     *
     * {"type":"boolean"}
     */
    public function _performer_only(boolean $performer_only) : Audio_Search
    {
        $this->params['performer_only'] = $performer_only;
        return $this;
    }
    /**
     * Sort order: ; '1' — by duration;; '2' — by popularity;; '0' — by date added.
     *
     * {"type":"integer","enum":[0,1,2],"enumNames":["date added","duration","popularity"]}
     */
    public function _sort(integer $sort) : Audio_Search
    {
        $this->params['sort'] = $sort;
        return $this;
    }
    /**
     * '1' — to search among current user's audios. By default: '0'.
     *
     * {"type":"boolean"}
     */
    public function _search_own(boolean $search_own) : Audio_Search
    {
        $this->params['search_own'] = $search_own;
        return $this;
    }
    /**
     * Offset needed to return a specific subset of audio files.
     *
     * {"type":"integer","minimum":0}
     */
    public function _offset(integer $offset) : Audio_Search
    {
        $this->params['offset'] = $offset;
        return $this;
    }
    /**
     * Number of audio files to return.
     *
     * {"type":"integer","minimum":0,"default":30,"maximum":300}
     */
    public function _count(integer $count) : Audio_Search
    {
        $this->params['count'] = $count;
        return $this;
    }
}