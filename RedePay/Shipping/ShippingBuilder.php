<?php

namespace RedePay\Shipping;

use RedePay\Address\Address;

/**
 * Class ShippingBuilder
 *
 * @author Marjoel Moreira <marjoel@marjoel.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html
 */
trait ShippingBuilder
{
    /**
     * Factory a shipping object
     *
     * @param \stdClass $data
     * @return \RedePay\Shipping\Shipping
     */
    private function buildShipping($data)
    {
        $data->address = new Address(get_object_vars($data->address));
        return new Shipping(get_object_vars($data));
    }
}
