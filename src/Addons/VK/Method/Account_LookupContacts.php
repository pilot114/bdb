<?php

namespace Bdb\Addons\VK\Method;

/**
 * Allows to search the VK users using phone numbers, e-mail addresses and user IDs on other services.
 */
class Account_LookupContacts extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('account.lookupContacts');
    }
    /**
     * List of contacts separated with commas
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _contacts(array $contacts) : Account_LookupContacts
    {
        $this->params['contacts'] = $contacts;
        return $this;
    }
    /**
     * String identifier of a service which contacts are used for searching. Possible values: ; * email; * phone; * twitter; * facebook; * odnoklassniki; * instagram; * google
     *
     * {"type":"string","enum":["email","phone","twitter","facebook","odnoklassniki","instagram","google"]}
     */
    public function service(string $service) : Account_LookupContacts
    {
        $this->params['service'] = $service;
        return $this;
    }
    /**
     * Contact of a current user on a specified service
     *
     * {"type":"string"}
     */
    public function _mycontact(string $mycontact) : Account_LookupContacts
    {
        $this->params['mycontact'] = $mycontact;
        return $this;
    }
    /**
     * '1' – also return contacts found using this service before, '0' – return only contacts found using 'contacts' field.
     *
     * {"type":"boolean"}
     */
    public function _return_all(boolean $return_all) : Account_LookupContacts
    {
        $this->params['return_all'] = $return_all;
        return $this;
    }
    /**
     * Profile fields to return. Possible values: 'nickname, domain, sex, bdate, city, country, timezone, photo_50, photo_100, photo_200_orig, has_mobile, contacts, education, online, relation, last_seen, status, can_write_private_message, can_see_all_posts, can_post, universities'.
     *
     * {"type":"array","items":{"type":"string","enum":["nickname","domain","sex","bdate","city","country","timezone","photo_50","photo_100","photo_200_orig","has_mobile","contacts","education","online","relation","last_seen","status","can_write_private_message","can_see_all_posts","can_post","universities"]}}
     */
    public function _fields(array $fields) : Account_LookupContacts
    {
        $this->params['fields'] = $fields;
        return $this;
    }
}