<?php
namespace Khipu\Model;

use \Exception;
use \ArrayAccess;

class ServiceError extends Exception implements ArrayAccess
{
    protected int $status;
    protected string $message;

    public function __construct(array $data = null)
    {
        if ($data !== null) {
            $this->status = $data['status'] ?? 0;
            $this->message = $data['message'] ?? 'Error desconocido';
        } else {
            $this->status = 0;
            $this->message = 'Error desconocido';
        }

        parent::__construct($this->message, $this->status);
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    // Métodos ArrayAccess
    public function offsetExists($offset): bool
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset): mixed
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value): void
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset): void
    {
        unset($this->$offset);
    }

    public function __toString(): string
    {
        return json_encode([
            'status' => $this->status,
            'message' => $this->message
        ], defined('JSON_PRETTY_PRINT') ? JSON_PRETTY_PRINT : 0);
    }
}
