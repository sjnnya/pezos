<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rpc\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Rpc\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Rpc\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ConfigGetResponse200P2pNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rpc\Model\ConfigGetResponse200P2p::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rpc\Model\ConfigGetResponse200P2p::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rpc\Model\ConfigGetResponse200P2p();
            if (\array_key_exists('expected-proof-of-work', $data) && \is_int($data['expected-proof-of-work'])) {
                $data['expected-proof-of-work'] = (float) $data['expected-proof-of-work'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('expected-proof-of-work', $data)) {
                $object->setExpectedProofOfWork($data['expected-proof-of-work']);
                unset($data['expected-proof-of-work']);
            }
            if (\array_key_exists('bootstrap-peers', $data)) {
                $values = [];
                foreach ($data['bootstrap-peers'] as $value) {
                    $values[] = $value;
                }
                $object->setBootstrapPeers($values);
                unset($data['bootstrap-peers']);
            }
            if (\array_key_exists('listen-addr', $data)) {
                $object->setListenAddr($data['listen-addr']);
                unset($data['listen-addr']);
            }
            if (\array_key_exists('advertised-net-port', $data)) {
                $object->setAdvertisedNetPort($data['advertised-net-port']);
                unset($data['advertised-net-port']);
            }
            if (\array_key_exists('discovery-addr', $data) && $data['discovery-addr'] !== null) {
                $object->setDiscoveryAddr($data['discovery-addr']);
                unset($data['discovery-addr']);
            } elseif (\array_key_exists('discovery-addr', $data) && $data['discovery-addr'] === null) {
                $object->setDiscoveryAddr(null);
            }
            if (\array_key_exists('private-mode', $data)) {
                $object->setPrivateMode($data['private-mode']);
                unset($data['private-mode']);
            }
            if (\array_key_exists('limits', $data)) {
                $object->setLimits($this->denormalizer->denormalize($data['limits'], \Pezos\Generated\Rpc\Model\ConfigGetResponse200P2pLimits::class, 'json', $context));
                unset($data['limits']);
            }
            if (\array_key_exists('disable_mempool', $data)) {
                $object->setDisableMempool($data['disable_mempool']);
                unset($data['disable_mempool']);
            }
            if (\array_key_exists('enable_testchain', $data)) {
                $object->setEnableTestchain($data['enable_testchain']);
                unset($data['enable_testchain']);
            }
            if (\array_key_exists('greylisting_config', $data)) {
                $object->setGreylistingConfig($this->denormalizer->denormalize($data['greylisting_config'], \Pezos\Generated\Rpc\Model\ConfigGetResponse200P2pGreylistingConfig::class, 'json', $context));
                unset($data['greylisting_config']);
            }
            if (\array_key_exists('disable_peer_discovery', $data)) {
                $object->setDisablePeerDiscovery($data['disable_peer_discovery']);
                unset($data['disable_peer_discovery']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('expectedProofOfWork') && null !== $object->getExpectedProofOfWork()) {
                $data['expected-proof-of-work'] = $object->getExpectedProofOfWork();
            }
            if ($object->isInitialized('bootstrapPeers') && null !== $object->getBootstrapPeers()) {
                $values = [];
                foreach ($object->getBootstrapPeers() as $value) {
                    $values[] = $value;
                }
                $data['bootstrap-peers'] = $values;
            }
            if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
                $data['listen-addr'] = $object->getListenAddr();
            }
            if ($object->isInitialized('advertisedNetPort') && null !== $object->getAdvertisedNetPort()) {
                $data['advertised-net-port'] = $object->getAdvertisedNetPort();
            }
            if ($object->isInitialized('discoveryAddr') && null !== $object->getDiscoveryAddr()) {
                $data['discovery-addr'] = $object->getDiscoveryAddr();
            }
            if ($object->isInitialized('privateMode') && null !== $object->getPrivateMode()) {
                $data['private-mode'] = $object->getPrivateMode();
            }
            if ($object->isInitialized('limits') && null !== $object->getLimits()) {
                $data['limits'] = $this->normalizer->normalize($object->getLimits(), 'json', $context);
            }
            if ($object->isInitialized('disableMempool') && null !== $object->getDisableMempool()) {
                $data['disable_mempool'] = $object->getDisableMempool();
            }
            if ($object->isInitialized('enableTestchain') && null !== $object->getEnableTestchain()) {
                $data['enable_testchain'] = $object->getEnableTestchain();
            }
            if ($object->isInitialized('greylistingConfig') && null !== $object->getGreylistingConfig()) {
                $data['greylisting_config'] = $this->normalizer->normalize($object->getGreylistingConfig(), 'json', $context);
            }
            if ($object->isInitialized('disablePeerDiscovery') && null !== $object->getDisablePeerDiscovery()) {
                $data['disable_peer_discovery'] = $object->getDisablePeerDiscovery();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rpc\Model\ConfigGetResponse200P2p::class => false];
        }
    }
} else {
    class ConfigGetResponse200P2pNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rpc\Model\ConfigGetResponse200P2p::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rpc\Model\ConfigGetResponse200P2p::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rpc\Model\ConfigGetResponse200P2p();
            if (\array_key_exists('expected-proof-of-work', $data) && \is_int($data['expected-proof-of-work'])) {
                $data['expected-proof-of-work'] = (float) $data['expected-proof-of-work'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('expected-proof-of-work', $data)) {
                $object->setExpectedProofOfWork($data['expected-proof-of-work']);
                unset($data['expected-proof-of-work']);
            }
            if (\array_key_exists('bootstrap-peers', $data)) {
                $values = [];
                foreach ($data['bootstrap-peers'] as $value) {
                    $values[] = $value;
                }
                $object->setBootstrapPeers($values);
                unset($data['bootstrap-peers']);
            }
            if (\array_key_exists('listen-addr', $data)) {
                $object->setListenAddr($data['listen-addr']);
                unset($data['listen-addr']);
            }
            if (\array_key_exists('advertised-net-port', $data)) {
                $object->setAdvertisedNetPort($data['advertised-net-port']);
                unset($data['advertised-net-port']);
            }
            if (\array_key_exists('discovery-addr', $data) && $data['discovery-addr'] !== null) {
                $object->setDiscoveryAddr($data['discovery-addr']);
                unset($data['discovery-addr']);
            } elseif (\array_key_exists('discovery-addr', $data) && $data['discovery-addr'] === null) {
                $object->setDiscoveryAddr(null);
            }
            if (\array_key_exists('private-mode', $data)) {
                $object->setPrivateMode($data['private-mode']);
                unset($data['private-mode']);
            }
            if (\array_key_exists('limits', $data)) {
                $object->setLimits($this->denormalizer->denormalize($data['limits'], \Pezos\Generated\Rpc\Model\ConfigGetResponse200P2pLimits::class, 'json', $context));
                unset($data['limits']);
            }
            if (\array_key_exists('disable_mempool', $data)) {
                $object->setDisableMempool($data['disable_mempool']);
                unset($data['disable_mempool']);
            }
            if (\array_key_exists('enable_testchain', $data)) {
                $object->setEnableTestchain($data['enable_testchain']);
                unset($data['enable_testchain']);
            }
            if (\array_key_exists('greylisting_config', $data)) {
                $object->setGreylistingConfig($this->denormalizer->denormalize($data['greylisting_config'], \Pezos\Generated\Rpc\Model\ConfigGetResponse200P2pGreylistingConfig::class, 'json', $context));
                unset($data['greylisting_config']);
            }
            if (\array_key_exists('disable_peer_discovery', $data)) {
                $object->setDisablePeerDiscovery($data['disable_peer_discovery']);
                unset($data['disable_peer_discovery']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('expectedProofOfWork') && null !== $object->getExpectedProofOfWork()) {
                $data['expected-proof-of-work'] = $object->getExpectedProofOfWork();
            }
            if ($object->isInitialized('bootstrapPeers') && null !== $object->getBootstrapPeers()) {
                $values = [];
                foreach ($object->getBootstrapPeers() as $value) {
                    $values[] = $value;
                }
                $data['bootstrap-peers'] = $values;
            }
            if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
                $data['listen-addr'] = $object->getListenAddr();
            }
            if ($object->isInitialized('advertisedNetPort') && null !== $object->getAdvertisedNetPort()) {
                $data['advertised-net-port'] = $object->getAdvertisedNetPort();
            }
            if ($object->isInitialized('discoveryAddr') && null !== $object->getDiscoveryAddr()) {
                $data['discovery-addr'] = $object->getDiscoveryAddr();
            }
            if ($object->isInitialized('privateMode') && null !== $object->getPrivateMode()) {
                $data['private-mode'] = $object->getPrivateMode();
            }
            if ($object->isInitialized('limits') && null !== $object->getLimits()) {
                $data['limits'] = $this->normalizer->normalize($object->getLimits(), 'json', $context);
            }
            if ($object->isInitialized('disableMempool') && null !== $object->getDisableMempool()) {
                $data['disable_mempool'] = $object->getDisableMempool();
            }
            if ($object->isInitialized('enableTestchain') && null !== $object->getEnableTestchain()) {
                $data['enable_testchain'] = $object->getEnableTestchain();
            }
            if ($object->isInitialized('greylistingConfig') && null !== $object->getGreylistingConfig()) {
                $data['greylisting_config'] = $this->normalizer->normalize($object->getGreylistingConfig(), 'json', $context);
            }
            if ($object->isInitialized('disablePeerDiscovery') && null !== $object->getDisablePeerDiscovery()) {
                $data['disable_peer_discovery'] = $object->getDisablePeerDiscovery();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rpc\Model\ConfigGetResponse200P2p::class => false];
        }
    }
}
