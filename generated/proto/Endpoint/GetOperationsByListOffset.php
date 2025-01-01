<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Endpoint;

class GetOperationsByListOffset extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $list_offset;

    /**
     * All the operations included in `n-th` validation pass of the block.
     *
     * @param string $listOffset      index `n` of the requested validation pass
     * @param array  $queryParameters {
     *
     * @var string $version Supported RPC versions are version "1" (default)
     * @var string $force_metadata DEPRECATED: Forces to recompute the operations metadata if it was considered as too large
     * @var string $metadata defines the way metadata are queried Specifies whether or not if the operations metadata should be returned. To get the metadata, even if it is needed to recompute them, use "always". To avoid getting the metadata, use "never". By default, the metadata will be returned depending on the node's metadata size limit policy.
     *             }
     */
    public function __construct(string $listOffset, array $queryParameters = [])
    {
        $this->list_offset = $listOffset;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{list_offset}'], [$this->list_offset], '/operations/{list_offset}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['version', 'force_metadata', 'metadata']);
        $optionsResolver->setRequired(['version']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('version', ['string']);
        $optionsResolver->addAllowedTypes('force_metadata', ['string']);
        $optionsResolver->addAllowedTypes('metadata', ['string']);

        return $optionsResolver;
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
