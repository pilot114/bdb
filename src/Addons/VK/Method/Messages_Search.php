<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns a list of the current user's private messages that match search criteria.
 */
class Messages_Search extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('messages.search');
    }
    /**
     * Search query string.
     *
     * {"type":"string"}
     */
    public function _q(string $q) : Messages_Search
    {
        $this->params['q'] = $q;
        return $this;
    }
    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * {"type":"int"}
     */
    public function _peer_id(int $peer_id) : Messages_Search
    {
        $this->params['peer_id'] = $peer_id;
        return $this;
    }
    /**
     * Date to search message before in Unixtime.
     *
     * {"type":"int","minimum":0}
     */
    public function _date(int $date) : Messages_Search
    {
        $this->params['date'] = $date;
        return $this;
    }
    /**
     * Number of messages to return.
     *
     * {"type":"int","minimum":0,"default":20,"maximum":100}
     */
    public function _count(int $count) : Messages_Search
    {
        $this->params['count'] = $count;
        return $this;
    }
}