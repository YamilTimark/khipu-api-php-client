<?php

namespace Khipu\Model;

use \ArrayAccess;

class ErrorItem implements ArrayAccess
{
    static $swaggerTypes = array(
        'field' => 'string',
        'message' => 'string'
    );

    static $attributeMap = array(
        'field' => 'field',
        'message' => 'message'
    );

    static $setters = array(
        'field' => 'setField',
        'message' => 'setMessage'
    );

    static $getters = array(
        'field' => 'getField',
        'message' => 'getMessage'
    );

    protected $field;
    protected $message;

    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->field = $data["field"] ?? null;
            $this->message = $data["message"] ?? null;
        }
    }

    public function getField(): ?string
    {
        return $this->field;
    }

    public function setField(string $field): self
    {
        $this->field = $field;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    #[\ReturnTypeWillChange]
    public function offsetExists($offset): bool
    {
        return isset($this->$offset);
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($offset): mixed
    {
        return $this->$offset;
    }

    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value): void
    {
        $this->$offset = $value;
    }

    #[\ReturnTypeWillChange]
    public function offsetUnset($offset): void
    {
        unset($this->$offset);
    }

    public function __toString(): string
    {
        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
    }

    /**
     * Devuelve el tipo de error
     * @return string
     */
    public function getTipo(): string
    {
        return 'ErrorItem';
    }
}
