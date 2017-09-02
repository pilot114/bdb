<?php

namespace Bdb\Addons\VK\Method;

/**
 * Returns applications data.
 */
class Apps_Get extends \Bdb\Addons\VK\BaseMethod
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return true;
    }
    public function __construct($client, $defaultQuery)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('apps.get');
    }
    /**
     * Application ID
     *
     * {"type":"integer","minimum":0}
     */
    public function _app_id(integer $app_id) : Apps_Get
    {
        $this->params['app_id'] = $app_id;
        return $this;
    }
    /**
     * List of application ID
     *
     * {"type":"array","items":{"type":"string"},"maxItems":100}
     */
    public function _app_ids(array $app_ids) : Apps_Get
    {
        $this->params['app_ids'] = $app_ids;
        return $this;
    }
    /**
     * platform. Possible values:; *'ios' — iOS;; *'android' — Android;; *'winphone' — Windows Phone;; *'web' — приложения на vk.com.; By default: 'web'.
     *
     * {"type":"string","default":"web","enum":["web","ios","android","winphone"]}
     */
    public function _platform(string $platform) : Apps_Get
    {
        $this->params['platform'] = $platform;
        return $this;
    }
    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'contacts', 'education', 'online', 'counters', 'relation', 'last_seen', 'activity', 'can_write_private_message', 'can_see_all_posts', 'can_post', 'universities'; (only if return_friends - 1)
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _fields(array $fields) : Apps_Get
    {
        $this->params['fields'] = $fields;
        return $this;
    }
    /**
     * Case for declension of user name and surname:; 'nom' — nominative (default);; 'gen' — genitive;; 'dat' — dative;; 'acc' — accusative;; 'ins' — instrumental;; 'abl' — prepositional.; ; (only if 'return_friends' = '1')
     *
     * {"type":"string","enum":["nom","gen","dat","acc","ins","abl"],"enumNames":["nominative","genitive","dative","accusative","instrumental","prepositional"]}
     */
    public function _name_case(string $name_case) : Apps_Get
    {
        $this->params['name_case'] = $name_case;
        return $this;
    }
}