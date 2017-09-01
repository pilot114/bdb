<?php

namespace Bdb\Addons\VK\Method;

/**
 * Saves a document after [vk.com/dev/upload_files_2|uploading it to a server].
 */
class Save
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * This parameter is returned when the file is [vk.com/dev/upload_files_2|uploaded to the server].
     *
     * {"type":"string"}
     */
    public function file(string $file) : Save
    {
        $this->params['file'] = $file;
        return $this;
    }
    /**
     * Document title.
     *
     * {"type":"string"}
     */
    public function _title(string $_title) : Save
    {
        $this->params['_title'] = $_title;
        return $this;
    }
    /**
     * Document tags.
     *
     * {"type":"string"}
     */
    public function _tags(string $_tags) : Save
    {
        $this->params['_tags'] = $_tags;
        return $this;
    }
}