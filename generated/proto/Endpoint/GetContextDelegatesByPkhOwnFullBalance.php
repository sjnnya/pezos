<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Endpoint;

class GetContextDelegatesByPkhOwnFullBalance extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $pkh;

    /**
     * The full balance (in mutez) of tokens owned by the delegate itself. Includes its spendable balance, staked tez, unstake requests, and frozen bonds. Does not include any tokens owned by external delegators. This RPC fails when the pkh is not a delegate. When it is a delegate, this RPC outputs the same amount as ../<block_id>/context/contracts/<delegate_contract_id>/full_balance.
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
        return str_replace(['{pkh}'], [$this->pkh], '/context/delegates/{pkh}/own_full_balance');
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
