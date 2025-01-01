<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Endpoint;

class GetGlobalBlockByBlockIdStateHash extends \Pezos\Generated\Rollup\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Rollup\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Rollup\Runtime\Client\EndpointTrait;
    protected $block_id;

    /**
     * State hash for this block.
     *
     * @param string $blockId an L1 block identifier
     */
    public function __construct(string $blockId)
    {
        $this->block_id = $blockId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{block_id}'], [$this->block_id], '/global/block/{block_id}/state_hash');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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
