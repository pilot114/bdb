<?php

namespace Bdb\Addons\VK\Method;

/**
 * Imports a list of advertiser's contacts to count VK registered users against the target group.
 */
class ImportTargetContacts
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * Advertising account ID.
     *
     * {"type":"integer"}
     */
    public function account_id(integer $account_id) : ImportTargetContacts
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * 'Only for advertising agencies.' ; ID of the client with the advertising account where the group will be created.;
     *
     * {"type":"integer"}
     */
    public function _client_id(integer $_client_id) : ImportTargetContacts
    {
        $this->params['_client_id'] = $_client_id;
        return $this;
    }
    /**
     * Target group ID.
     *
     * {"type":"integer"}
     */
    public function target_group_id(integer $target_group_id) : ImportTargetContacts
    {
        $this->params['target_group_id'] = $target_group_id;
        return $this;
    }
    /**
     * List of phone numbers, emails or user IDs separated with a comma.
     *
     * {"type":"string"}
     */
    public function contacts(string $contacts) : ImportTargetContacts
    {
        $this->params['contacts'] = $contacts;
        return $this;
    }
}