<?php

namespace Khipu\Model;

use \ArrayAccess;

class ValidationError implements ArrayAccess
{
    /**
     * Array of property to type mappings. Used for (de)serialization 
     * @var string[]
     */
    public static array $swaggerTypes = [
        'status' => 'int',
        'message' => 'string',
        'errors' => '\Khipu\Model\ErrorItem[]'
    ];

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    public static array $attributeMap = [
        'status' => 'status',
        'message' => 'message',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    public static array $setters = [
        'status' => 'setStatus',
        'message' => 'setMessage',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    public static array $getters = [
        'status' => 'getStatus',
        'message' => 'getMessage',
        'errors' => 'getErrors'
    ];

    /**
     * Código del error
     * @var int|null
     */
    protected ?int $status = null;

    /**
     * Mensaje del error
     * @var string|null
     */
    protected ?string $message = null;

    /**
     * Lista de errores
     * @var \Khipu\Model\ErrorItem[]|null
     */
    protected ?array $errors = null;

    public function __construct(array $data = [])
    {
        $this->status = $data['status'] ?? null;
        $this->message = $data['message'] ?? null;
        $this->errors = $data['errors'] ?? null;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;
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

    /**
     * @return \Khipu\Model\ErrorItem[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param \Khipu\Model\ErrorItem[] $errors
     */
    public function setErrors(array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    // Métodos de ArrayAccess

    public function offsetExists(mixed $offset): bool
    {
        return property_exists($this, $offset);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->$offset ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (property_exists($this, $offset)) {
            $this->$offset = $value;
        }
    }

    public function offsetUnset(mixed $offset): void
    {
        if (property_exists($this, $offset)) {
            $this->$offset = null;
        }
    }

    public function __toString(): string
    {
        return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
    }
}
