<?php

namespace Bdb\Addons\VK\Method;

/**
 * Changes order status.
 */
class ChangeState
{
    protected $params = array();
    public function isOpen() : boolean
    {
        return false;
    }
    /**
     * order ID.
     *
     * {"type":"integer","minimum":0}
     */
    public function order_id(integer $order_id) : ChangeState
    {
        $this->params['order_id'] = $order_id;
        return $this;
    }
    /**
     * action to be done with the order. ; ; Available actions:; *cancel — to cancel unconfirmed order.; *charge — to confirm unconfirmed order. Applies only if processing of [vk.com/dev/payments_status|order_change_state] notification failed.; *refund — to cancel confirmed order.;
     *
     * {"type":"string","enum":["cancel","charge","refund"]}
     */
    public function action(string $action) : ChangeState
    {
        $this->params['action'] = $action;
        return $this;
    }
    /**
     * internal ID of the order in the application.
     *
     * {"type":"integer","minimum":0}
     */
    public function _app_order_id(integer $_app_order_id) : ChangeState
    {
        $this->params['_app_order_id'] = $_app_order_id;
        return $this;
    }
    /**
     * if this parameter is set to 1, this method returns a list of test mode orders. By default — 0.
     *
     * {"type":"boolean"}
     */
    public function _test_mode(boolean $_test_mode) : ChangeState
    {
        $this->params['_test_mode'] = $_test_mode;
        return $this;
    }
}