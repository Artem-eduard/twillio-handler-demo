<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Sync\V1\Service;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class DocumentOptions {
    /**
     * @param string $ifMatch The If-Match HTTP request header
     * @return DeleteDocumentOptions Options builder
     */
    public static function delete(string $ifMatch = Values::NONE): DeleteDocumentOptions {
        return new DeleteDocumentOptions($ifMatch);
    }

    /**
     * @param string $uniqueName An application-defined string that uniquely
     *                           identifies the Sync Document
     * @param array $data A JSON string that represents an arbitrary, schema-less
     *                    object that the Sync Document stores
     * @param int $ttl How long, in seconds, before the Sync Document expires and
     *                 is deleted
     * @return CreateDocumentOptions Options builder
     */
    public static function create(string $uniqueName = Values::NONE, array $data = Values::ARRAY_NONE, int $ttl = Values::NONE): CreateDocumentOptions {
        return new CreateDocumentOptions($uniqueName, $data, $ttl);
    }

    /**
     * @param array $data A JSON string that represents an arbitrary, schema-less
     *                    object that the Sync Document stores
     * @param int $ttl How long, in seconds, before the Document resource expires
     *                 and is deleted
     * @param string $ifMatch The If-Match HTTP request header
     * @return UpdateDocumentOptions Options builder
     */
    public static function update(array $data = Values::ARRAY_NONE, int $ttl = Values::NONE, string $ifMatch = Values::NONE): UpdateDocumentOptions {
        return new UpdateDocumentOptions($data, $ttl, $ifMatch);
    }
}

class DeleteDocumentOptions extends Options {
    /**
     * @param string $ifMatch The If-Match HTTP request header
     */
    public function __construct(string $ifMatch = Values::NONE) {
        $this->options['ifMatch'] = $ifMatch;
    }

    /**
     * The If-Match HTTP request header
     *
     * @param string $ifMatch The If-Match HTTP request header
     * @return $this Fluent Builder
     */
    public function setIfMatch(string $ifMatch): self {
        $this->options['ifMatch'] = $ifMatch;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Sync.V1.DeleteDocumentOptions ' . $options . ']';
    }
}

class CreateDocumentOptions extends Options {
    /**
     * @param string $uniqueName An application-defined string that uniquely
     *                           identifies the Sync Document
     * @param array $data A JSON string that represents an arbitrary, schema-less
     *                    object that the Sync Document stores
     * @param int $ttl How long, in seconds, before the Sync Document expires and
     *                 is deleted
     */
    public function __construct(string $uniqueName = Values::NONE, array $data = Values::ARRAY_NONE, int $ttl = Values::NONE) {
        $this->options['uniqueName'] = $uniqueName;
        $this->options['data'] = $data;
        $this->options['ttl'] = $ttl;
    }

    /**
     * An application-defined string that uniquely identifies the Sync Document
     *
     * @param string $uniqueName An application-defined string that uniquely
     *                           identifies the Sync Document
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName): self {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }

    /**
     * A JSON string that represents an arbitrary, schema-less object that the Sync Document stores. Can be up to 16KB in length.
     *
     * @param array $data A JSON string that represents an arbitrary, schema-less
     *                    object that the Sync Document stores
     * @return $this Fluent Builder
     */
    public function setData(array $data): self {
        $this->options['data'] = $data;
        return $this;
    }

    /**
     * How long, in seconds, before the Sync Document expires and is deleted (the Sync Document's time-to-live). Can be an integer from 0 to 31,536,000 (1 year). The default value is `0`, which means the Sync Document does not expire. The Sync Document will be deleted automatically after it expires, but there can be a delay between the expiration time and the resources's deletion.
     *
     * @param int $ttl How long, in seconds, before the Sync Document expires and
     *                 is deleted
     * @return $this Fluent Builder
     */
    public function setTtl(int $ttl): self {
        $this->options['ttl'] = $ttl;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Sync.V1.CreateDocumentOptions ' . $options . ']';
    }
}

class UpdateDocumentOptions extends Options {
    /**
     * @param array $data A JSON string that represents an arbitrary, schema-less
     *                    object that the Sync Document stores
     * @param int $ttl How long, in seconds, before the Document resource expires
     *                 and is deleted
     * @param string $ifMatch The If-Match HTTP request header
     */
    public function __construct(array $data = Values::ARRAY_NONE, int $ttl = Values::NONE, string $ifMatch = Values::NONE) {
        $this->options['data'] = $data;
        $this->options['ttl'] = $ttl;
        $this->options['ifMatch'] = $ifMatch;
    }

    /**
     * A JSON string that represents an arbitrary, schema-less object that the Sync Document stores. Can be up to 16KB in length.
     *
     * @param array $data A JSON string that represents an arbitrary, schema-less
     *                    object that the Sync Document stores
     * @return $this Fluent Builder
     */
    public function setData(array $data): self {
        $this->options['data'] = $data;
        return $this;
    }

    /**
     * How long, in seconds, before the Sync Document expires and is deleted (time-to-live). Can be an integer from 0 to 31,536,000 (1 year). The default value is `0`, which means the Document resource does not expire. The Document resource will be deleted automatically after it expires, but there can be a delay between the expiration time and the resources's deletion.
     *
     * @param int $ttl How long, in seconds, before the Document resource expires
     *                 and is deleted
     * @return $this Fluent Builder
     */
    public function setTtl(int $ttl): self {
        $this->options['ttl'] = $ttl;
        return $this;
    }

    /**
     * The If-Match HTTP request header
     *
     * @param string $ifMatch The If-Match HTTP request header
     * @return $this Fluent Builder
     */
    public function setIfMatch(string $ifMatch): self {
        $this->options['ifMatch'] = $ifMatch;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Sync.V1.UpdateDocumentOptions ' . $options . ']';
    }
}