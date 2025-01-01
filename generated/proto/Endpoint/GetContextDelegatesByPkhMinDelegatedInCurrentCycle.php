<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Endpoint;

class GetContextDelegatesByPkhMinDelegatedInCurrentCycle extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $pkh;

    /**
     * Returns the minimum of delegated tez (in mutez) during the current cycle and the block level at the end of which the minimum was reached. This only takes into account the value of `total_delegated` at the end of each block, not in the middle of applying operations. This is the delegated amount that would be used to compute the delegate's future baking rights if the cycle ended at the current block. If the minimum was reached multiple times, the returned level is the earliest level of the current cycle that reached this minimum. For instance, if `total_delegated` hasn't changed at all since the beginning of the current cycle, returns the first level of the current cycle. (If the contract is not registered as a delegate, returns 0 mutez and omits the level.).
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     */
    public function __construct(string $pkh)
    {
        $this->pkh = $pkh;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{pkh}'], [$this->pkh], '/context/delegates/{pkh}/min_delegated_in_current_cycle');
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
     * @return \Pezos\Generated\Proto\Model\ContextDelegatesPkhMinDelegatedInCurrentCycleGetResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Pezos\\Generated\\Proto\\Model\\ContextDelegatesPkhMinDelegatedInCurrentCycleGetResponse200', 'json');
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
