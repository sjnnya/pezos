<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Endpoint;

class GetContextSmartRollupsSmartRollupBySmartRollupAddressStaker1ByStaker1PkhStaker2ByStaker2PkhTimeoutReached extends \Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $smart_rollup_address;
    protected $staker1_pkh;
    protected $staker2_pkh;

    /**
     * Returns whether the timeout creates a result for the game.
     *
     * @param string $smartRollupAddress smart_rollup_address (Base58Check-encoded)
     * @param string $staker1Pkh         A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     * @param string $staker2Pkh         A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     */
    public function __construct(string $smartRollupAddress, string $staker1Pkh, string $staker2Pkh)
    {
        $this->smart_rollup_address = $smartRollupAddress;
        $this->staker1_pkh = $staker1Pkh;
        $this->staker2_pkh = $staker2Pkh;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{smart_rollup_address}', '{staker1_pkh}', '{staker2_pkh}'], [$this->smart_rollup_address, $this->staker1_pkh, $this->staker2_pkh], '/context/smart_rollups/smart_rollup/{smart_rollup_address}/staker1/{staker1_pkh}/staker2/{staker2_pkh}/timeout_reached');
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
