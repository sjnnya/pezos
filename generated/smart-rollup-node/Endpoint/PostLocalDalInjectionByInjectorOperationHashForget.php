<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Endpoint;

class PostLocalDalInjectionByInjectorOperationHashForget extends \Pezos\Generated\Rollup\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Rollup\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Rollup\Runtime\Client\EndpointTrait;
    protected $injector_operation_hash;

    /**
     * Forget information about the injection whose id is given.
     *
     * @param string     $injectorOperationHash injector_operation_hash (Base58Check-encoded)
     * @param mixed|null $requestBody
     */
    public function __construct(string $injectorOperationHash, $requestBody = null)
    {
        $this->injector_operation_hash = $injectorOperationHash;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{injector_operation_hash}'], [$this->injector_operation_hash], '/local/dal/injection/{injector_operation_hash}/forget');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (isset($this->body)) {
            return [['Content-Type' => ['application/json']], json_encode($this->body)];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}