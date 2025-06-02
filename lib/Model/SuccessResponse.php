<?php

namespace Khipu\Model;

use ArrayAccess;

/**
 * SuccessResponse Class
 *
 * @category    Class
 * @package     Khipu
 */
class SuccessResponse implements ArrayAccess
{
    /**
     * @var string[]
     */
    public static array $swaggerTypes = [
        'message' => 'string'
    ];

    /**
     * @var string[]
     */
    public static array $attributeMap = [
        'message' => 'message'
    ];

    /**
     * @var string[]
     */
    public static array $setters = [
        'message' => 'setMessage'
    ];

    /**
     * @var string[]
     */
    public static array $getters = [
        'message' => 'getMessage'
    ];

    /**
     * @var string|null
     */
    private ?string $message = null;

    /**
     * Constructor
     *
     * @param array<string, mixed>|null $data
     */
    public function __construct(array $data = null)
    {
        $this->message = $data['message'] ?? null;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return $this
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists(mixed $offset): bool
    {
        return property_exists($this, $offset);
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->$offset ?? null;
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    #[\ReturnTypeWillChange]
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (property_exists($this, $offset)) {
            $this->$offset = $value;
        }
    }

    /**
     * @param mixed $offset
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset(mixed $offset): void
    {
        if (property_exists($this, $offset)) {
            $this->$offset = null;
        }
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
