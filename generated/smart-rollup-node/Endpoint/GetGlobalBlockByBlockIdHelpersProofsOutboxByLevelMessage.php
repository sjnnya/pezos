<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Endpoint;

class GetGlobalBlockByBlockIdHelpersProofsOutboxByLevelMessage extends \Pezos\Generated\Rollup\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Rollup\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Rollup\Runtime\Client\EndpointTrait;
    protected $block_id;
    protected $level;

    /**
     * Generate serialized output proof for some outbox message at level and index.
     *
     * @param string $blockId         an L1 block identifier
     * @param array  $queryParameters {
     *
     * @var string $index
     *             }
     */
    public function __construct(string $blockId, string $level, array $queryParameters = [])
    {
        $this->block_id = $blockId;
        $this->level = $level;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{block_id}', '{level}'], [$this->block_id, $this->level], '/global/block/{block_id}/helpers/proofs/outbox/{level}/messages');
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
        $optionsResolver->setDefined(['index']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('index', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdHelpersProofsOutboxLevelMessagesGetResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Rollup\\Model\\GlobalBlockBlockIdHelpersProofsOutboxLevelMessagesGetResponse200', 'json');
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
