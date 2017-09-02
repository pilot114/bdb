<?php

namespace Bdb\Addons\VK\Method;

/**
 * Edits a community.
 */
class Groups_Edit extends \Bdb\Addons\VK\BaseMethod
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
        return $this->onCall('groups.edit');
    }
    /**
     * Community ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function group_id(integer $group_id) : Groups_Edit
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
    /**
     * Community title.
     *
     * {"type":"string"}
     */
    public function _title(string $title) : Groups_Edit
    {
        $this->params['title'] = $title;
        return $this;
    }
    /**
     * Community description.
     *
     * {"type":"string"}
     */
    public function _description(string $description) : Groups_Edit
    {
        $this->params['description'] = $description;
        return $this;
    }
    /**
     * Community screen name.
     *
     * {"type":"string"}
     */
    public function _screen_name(string $screen_name) : Groups_Edit
    {
        $this->params['screen_name'] = $screen_name;
        return $this;
    }
    /**
     * Community type. Possible values:; *'0' – open;; *'1' – closed;; *'2' – private.
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2],"enumNames":["open","closed","private"]}
     */
    public function _access(integer $access) : Groups_Edit
    {
        $this->params['access'] = $access;
        return $this;
    }
    /**
     * Website that will be displayed in the community information field.
     *
     * {"type":"string"}
     */
    public function _website(string $website) : Groups_Edit
    {
        $this->params['website'] = $website;
        return $this;
    }
    /**
     * Community subject. Possible values: ; *'1' – auto/moto;; *'2' – activity holidays;; *'3' – business;; *'4' – pets;; *'5' – health;; *'6' – dating and communication; ; *'7' – games;; *'8' – IT (computers and software);; *'9' – cinema;; *'10' – beauty and fashion;; *'11' – cooking;; *'12' – art and culture;; *'13' – literature;; *'14' – mobile services and internet;; *'15' – music;; *'16' – science and technology;; *'17' – real estate;; *'18' – news and media;; *'19' – security;; *'20' – education;; *'21' – home and renovations;; *'22' – politics;; *'23' – food;; *'24' – industry;; *'25' – travel;; *'26' – work;; *'27' – entertainment;; *'28' – religion;; *'29' – family;; *'30' – sports;; *'31' – insurance;; *'32' – television;; *'33' – goods and services;; *'34' – hobbies;; *'35' – finance;; *'36' – photo;; *'37' – esoterics;; *'38' – electronics and appliances;; *'39' – erotic;; *'40' – humor;; *'41' – society, humanities;; *'42' – design and graphics.
     *
     * {"type":"string","enum":[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42],"enumNames":["auto","activity holidays","business","pets","health","dating and communication","games","it","cinema","beauty and fashion","cooking","art and culture","literature","mobile services and internet","music","science and technology","real estate","news and media","security","education","home and renovations","politics","food","industry","travel","work","entertainment","religion","family","sports","insurance","television","goods and services","hobbies","finance","photo","esoterics","electronics and appliances","erotic","humor","society, humanities","design and graphics"]}
     */
    public function _subject(string $subject) : Groups_Edit
    {
        $this->params['subject'] = $subject;
        return $this;
    }
    /**
     * Organizer email (for events).
     *
     * {"type":"string"}
     */
    public function _email(string $email) : Groups_Edit
    {
        $this->params['email'] = $email;
        return $this;
    }
    /**
     * Organizer phone number (for events).
     *
     * {"type":"string"}
     */
    public function _phone(string $phone) : Groups_Edit
    {
        $this->params['phone'] = $phone;
        return $this;
    }
    /**
     * RSS feed address for import (available only to communities with special permission. Contact vk.com/support to get it.
     *
     * {"type":"string"}
     */
    public function _rss(string $rss) : Groups_Edit
    {
        $this->params['rss'] = $rss;
        return $this;
    }
    /**
     * Event start date in Unixtime format.
     *
     * {"type":"integer","minimum":0}
     */
    public function _event_start_date(integer $event_start_date) : Groups_Edit
    {
        $this->params['event_start_date'] = $event_start_date;
        return $this;
    }
    /**
     * Event finish date in Unixtime format.
     *
     * {"type":"integer","minimum":0}
     */
    public function _event_finish_date(integer $event_finish_date) : Groups_Edit
    {
        $this->params['event_finish_date'] = $event_finish_date;
        return $this;
    }
    /**
     * Organizer community ID (for events only).
     *
     * {"type":"integer","minimum":0}
     */
    public function _event_group_id(integer $event_group_id) : Groups_Edit
    {
        $this->params['event_group_id'] = $event_group_id;
        return $this;
    }
    /**
     * Public page category ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _public_category(integer $public_category) : Groups_Edit
    {
        $this->params['public_category'] = $public_category;
        return $this;
    }
    /**
     * Public page subcategory ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function _public_subcategory(integer $public_subcategory) : Groups_Edit
    {
        $this->params['public_subcategory'] = $public_subcategory;
        return $this;
    }
    /**
     * Founding date of a company or organization owning the community in "dd.mm.YYYY" format.
     *
     * {"type":"string"}
     */
    public function _public_date(string $public_date) : Groups_Edit
    {
        $this->params['public_date'] = $public_date;
        return $this;
    }
    /**
     * Wall settings. Possible values:; *'0' – disabled;; *'1' – open;; *'2' – limited (groups and events only);; *'3' – closed (groups and events only).;
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2,3],"enumNames":["disabled","open","limited","closed"]}
     */
    public function _wall(integer $wall) : Groups_Edit
    {
        $this->params['wall'] = $wall;
        return $this;
    }
    /**
     * Board topics settings. Possbile values: ; *'0' – disabled;; *'1' – open;; *'2' – limited (for groups and events only).;
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2],"enumNames":["disabled","open","limited"]}
     */
    public function _topics(integer $topics) : Groups_Edit
    {
        $this->params['topics'] = $topics;
        return $this;
    }
    /**
     * Photos settings. Possible values:; *'0' – disabled;; *'1' – open;; *'2' – limited (for groups and events only).;
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2],"enumNames":["disabled","open","limited"]}
     */
    public function _photos(integer $photos) : Groups_Edit
    {
        $this->params['photos'] = $photos;
        return $this;
    }
    /**
     * Video settings. Possible values:; *'0' – disabled;; *'1' – open;; *'2' – limited (for groups and events only).
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2],"enumNames":["disabled","open","limited"]}
     */
    public function _video(integer $video) : Groups_Edit
    {
        $this->params['video'] = $video;
        return $this;
    }
    /**
     * Audio settings. Possible values:; *'0' – disabled;; *'1' – open;; *'2' – limited (for groups and events only).
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2],"enumNames":["disabled","open","limited"]}
     */
    public function _audio(integer $audio) : Groups_Edit
    {
        $this->params['audio'] = $audio;
        return $this;
    }
    /**
     * Links settings (for public pages only). Possible values:; *'0' – disabled;; *'1' – enabled.;
     *
     * {"type":"boolean"}
     */
    public function _links(boolean $links) : Groups_Edit
    {
        $this->params['links'] = $links;
        return $this;
    }
    /**
     * Events settings (for public pages only). Possible values:; *'0' – disabled;; *'1' – enabled.;
     *
     * {"type":"boolean"}
     */
    public function _events(boolean $events) : Groups_Edit
    {
        $this->params['events'] = $events;
        return $this;
    }
    /**
     * Places settings (for public pages only). Possible values:; *'0' – disabled;; *'1' – enabled.;
     *
     * {"type":"boolean"}
     */
    public function _places(boolean $places) : Groups_Edit
    {
        $this->params['places'] = $places;
        return $this;
    }
    /**
     * Contacts settings (for public pages only). Possible values:; *'0' – disabled;; *'1' – enabled.;
     *
     * {"type":"boolean"}
     */
    public function _contacts(boolean $contacts) : Groups_Edit
    {
        $this->params['contacts'] = $contacts;
        return $this;
    }
    /**
     * Documents settings. Possible values:; *'0' – disabled;; *'1' – open;; *'2' – limited (for groups and events only).
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2],"enumNames":["disabled","open","limited"]}
     */
    public function _docs(integer $docs) : Groups_Edit
    {
        $this->params['docs'] = $docs;
        return $this;
    }
    /**
     * Wiki pages settings. Possible values:; *'0' – disabled;; *'1' – open;; *'2' – limited (for groups and events only).
     *
     * {"type":"integer","minimum":0,"enum":[0,1,2],"enumNames":["disabled","open","limited"]}
     */
    public function _wiki(integer $wiki) : Groups_Edit
    {
        $this->params['wiki'] = $wiki;
        return $this;
    }
    /**
     * Community messages. Possible values:; *'0' — disabled;; *'1' — enabled.
     *
     * {"type":"boolean"}
     */
    public function _messages(boolean $messages) : Groups_Edit
    {
        $this->params['messages'] = $messages;
        return $this;
    }
    /**
     * Community age limits. Possible values:; *'1' — no limits;; *'2' — 16+;; *'3' — 18+.
     *
     * {"type":"integer","minimum":0,"default":1,"enum":[1,2,3],"enumNames":["unlimited","16 plus","18 plus"]}
     */
    public function _age_limits(integer $age_limits) : Groups_Edit
    {
        $this->params['age_limits'] = $age_limits;
        return $this;
    }
    /**
     * Market settings. Possible values:; *'0' – disabled;; *'1' – enabled.
     *
     * {"type":"boolean"}
     */
    public function _market(boolean $market) : Groups_Edit
    {
        $this->params['market'] = $market;
        return $this;
    }
    /**
     * market comments settings. Possible values:; *'0' – disabled;; *'1' – enabled.
     *
     * {"type":"boolean"}
     */
    public function _market_comments(boolean $market_comments) : Groups_Edit
    {
        $this->params['market_comments'] = $market_comments;
        return $this;
    }
    /**
     * Market delivery countries.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":10}
     */
    public function _market_country(array $market_country) : Groups_Edit
    {
        $this->params['market_country'] = $market_country;
        return $this;
    }
    /**
     * Market delivery cities (if only one country is specified).
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":10}
     */
    public function _market_city(array $market_city) : Groups_Edit
    {
        $this->params['market_city'] = $market_city;
        return $this;
    }
    /**
     * Market currency settings. Possbile values: ; *'643' – Russian rubles;; *'980' – Ukrainian hryvnia;; *'398' – Kazakh tenge;; *'978' – Euro;; *'840' – US dollars
     *
     * {"type":"integer","minimum":0,"enum":[643,980,398,978,840],"enumNames":["russian rubles","ukrainian hryvnia","kazakh tenge","euro","us dollars"]}
     */
    public function _market_currency(integer $market_currency) : Groups_Edit
    {
        $this->params['market_currency'] = $market_currency;
        return $this;
    }
    /**
     * Seller contact for market.; Set '0' for community messages.
     *
     * {"type":"integer","minimum":0}
     */
    public function _market_contact(integer $market_contact) : Groups_Edit
    {
        $this->params['market_contact'] = $market_contact;
        return $this;
    }
    /**
     * ID of a wiki page with market description.
     *
     * {"type":"integer","minimum":0}
     */
    public function _market_wiki(integer $market_wiki) : Groups_Edit
    {
        $this->params['market_wiki'] = $market_wiki;
        return $this;
    }
    /**
     * Obscene expressions filter in comments. Possible values: ; *'0' – disabled;; *'1' – enabled.
     *
     * {"type":"boolean"}
     */
    public function _obscene_filter(boolean $obscene_filter) : Groups_Edit
    {
        $this->params['obscene_filter'] = $obscene_filter;
        return $this;
    }
    /**
     * Stopwords filter in comments. Possible values: ; *'0' – disabled;; *'1' – enabled.
     *
     * {"type":"boolean"}
     */
    public function _obscene_stopwords(boolean $obscene_stopwords) : Groups_Edit
    {
        $this->params['obscene_stopwords'] = $obscene_stopwords;
        return $this;
    }
    /**
     * Keywords for stopwords filter.
     *
     * {"type":"array","items":{"type":"string"}}
     */
    public function _obscene_words(array $obscene_words) : Groups_Edit
    {
        $this->params['obscene_words'] = $obscene_words;
        return $this;
    }
}