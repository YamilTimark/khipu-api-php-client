<?php

namespace Khipu\Model;

use \ArrayAccess;

class PaymentMethodsResponse implements ArrayAccess
{
    static $swaggerTypes = array(
        'payment_methods' => '\Khipu\Model\PaymentMethodItem[]'
    );

    static $attributeMap = array(
        'payment_methods' => 'paymentMethods'
    );

    static $setters = array(
        'payment_methods' => 'setPaymentMethods'
    );

    static $getters = array(
        'payment_methods' => 'getPaymentMethods'
    );

    /**
     * @var \Khipu\Model\PaymentMethodItem[]
     */
    protected $payment_methods;

    /**
     * Constructor
     * @param mixed[] $data
     */
    public function __construct(array $data = null)
    {
        if ($data !== null) {
            $this->payment_methods = $data["payment_methods"] ?? null;
        }
    }

    /**
     * @return \Khipu\Model\PaymentMethodItem[]
     */
    public function getPaymentMethods()
    {
        return $this->payment_methods;
    }

    /**
     * @param \Khipu\Model\PaymentMethodItem[] $payment_methods
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->payment_methods = $payment_methods;
        return $this;
    }

    // Métodos para el manejo personalizado

    public function getTipo()
    {
        return 'Khipu';
    }

    public function getCodigo()
    {
        return 0;
    }

    public function getMensaje()
    {
        return 'Métodos de pago recibidos correctamente.';
    }

    // Métodos de ArrayAccess

    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }

    public function __toString()
    {
        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
    }
}
