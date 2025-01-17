<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Shell\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Shell\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ConfigGetResponse200RpcNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Shell\Model\ConfigGetResponse200Rpc::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Shell\Model\ConfigGetResponse200Rpc::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Shell\Model\ConfigGetResponse200Rpc();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('listen-addrs', $data)) {
                $values = [];
                foreach ($data['listen-addrs'] as $value) {
                    $values[] = $value;
                }
                $object->setListenAddrs($values);
                unset($data['listen-addrs']);
            }
            if (\array_key_exists('external-listen-addrs', $data)) {
                $values_1 = [];
                foreach ($data['external-listen-addrs'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setExternalListenAddrs($values_1);
                unset($data['external-listen-addrs']);
            }
            if (\array_key_exists('listen-addr', $data)) {
                $object->setListenAddr($data['listen-addr']);
                unset($data['listen-addr']);
            }
            if (\array_key_exists('cors-origin', $data)) {
                $values_2 = [];
                foreach ($data['cors-origin'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setCorsOrigin($values_2);
                unset($data['cors-origin']);
            }
            if (\array_key_exists('cors-headers', $data)) {
                $values_3 = [];
                foreach ($data['cors-headers'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setCorsHeaders($values_3);
                unset($data['cors-headers']);
            }
            if (\array_key_exists('crt', $data)) {
                $object->setCrt($data['crt']);
                unset($data['crt']);
            }
            if (\array_key_exists('key', $data)) {
                $object->setKey($data['key']);
                unset($data['key']);
            }
            if (\array_key_exists('acl', $data)) {
                $values_4 = [];
                foreach ($data['acl'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setAcl($values_4);
                unset($data['acl']);
            }
            if (\array_key_exists('media-type', $data)) {
                $object->setMediaType($data['media-type']);
                unset($data['media-type']);
            }
            if (\array_key_exists('max_active_rpc_connections', $data)) {
                $object->setMaxActiveRpcConnections($data['max_active_rpc_connections']);
                unset($data['max_active_rpc_connections']);
            }
            if (\array_key_exists('enable-http-cache-headers', $data)) {
                $object->setEnableHttpCacheHeaders($data['enable-http-cache-headers']);
                unset($data['enable-http-cache-headers']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('listenAddrs') && null !== $object->getListenAddrs()) {
                $values = [];
                foreach ($object->getListenAddrs() as $value) {
                    $values[] = $value;
                }
                $data['listen-addrs'] = $values;
            }
            if ($object->isInitialized('externalListenAddrs') && null !== $object->getExternalListenAddrs()) {
                $values_1 = [];
                foreach ($object->getExternalListenAddrs() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['external-listen-addrs'] = $values_1;
            }
            if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
                $data['listen-addr'] = $object->getListenAddr();
            }
            if ($object->isInitialized('corsOrigin') && null !== $object->getCorsOrigin()) {
                $values_2 = [];
                foreach ($object->getCorsOrigin() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['cors-origin'] = $values_2;
            }
            if ($object->isInitialized('corsHeaders') && null !== $object->getCorsHeaders()) {
                $values_3 = [];
                foreach ($object->getCorsHeaders() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['cors-headers'] = $values_3;
            }
            if ($object->isInitialized('crt') && null !== $object->getCrt()) {
                $data['crt'] = $object->getCrt();
            }
            if ($object->isInitialized('key') && null !== $object->getKey()) {
                $data['key'] = $object->getKey();
            }
            if ($object->isInitialized('acl') && null !== $object->getAcl()) {
                $values_4 = [];
                foreach ($object->getAcl() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['acl'] = $values_4;
            }
            if ($object->isInitialized('mediaType') && null !== $object->getMediaType()) {
                $data['media-type'] = $object->getMediaType();
            }
            if ($object->isInitialized('maxActiveRpcConnections') && null !== $object->getMaxActiveRpcConnections()) {
                $data['max_active_rpc_connections'] = $object->getMaxActiveRpcConnections();
            }
            if ($object->isInitialized('enableHttpCacheHeaders') && null !== $object->getEnableHttpCacheHeaders()) {
                $data['enable-http-cache-headers'] = $object->getEnableHttpCacheHeaders();
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Shell\Model\ConfigGetResponse200Rpc::class => false];
        }
    }
} else {
    class ConfigGetResponse200RpcNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Shell\Model\ConfigGetResponse200Rpc::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Shell\Model\ConfigGetResponse200Rpc::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Shell\Model\ConfigGetResponse200Rpc();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('listen-addrs', $data)) {
                $values = [];
                foreach ($data['listen-addrs'] as $value) {
                    $values[] = $value;
                }
                $object->setListenAddrs($values);
                unset($data['listen-addrs']);
            }
            if (\array_key_exists('external-listen-addrs', $data)) {
                $values_1 = [];
                foreach ($data['external-listen-addrs'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setExternalListenAddrs($values_1);
                unset($data['external-listen-addrs']);
            }
            if (\array_key_exists('listen-addr', $data)) {
                $object->setListenAddr($data['listen-addr']);
                unset($data['listen-addr']);
            }
            if (\array_key_exists('cors-origin', $data)) {
                $values_2 = [];
                foreach ($data['cors-origin'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setCorsOrigin($values_2);
                unset($data['cors-origin']);
            }
            if (\array_key_exists('cors-headers', $data)) {
                $values_3 = [];
                foreach ($data['cors-headers'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setCorsHeaders($values_3);
                unset($data['cors-headers']);
            }
            if (\array_key_exists('crt', $data)) {
                $object->setCrt($data['crt']);
                unset($data['crt']);
            }
            if (\array_key_exists('key', $data)) {
                $object->setKey($data['key']);
                unset($data['key']);
            }
            if (\array_key_exists('acl', $data)) {
                $values_4 = [];
                foreach ($data['acl'] as $value_4) {
                    $values_4[] = $value_4;
                }
                $object->setAcl($values_4);
                unset($data['acl']);
            }
            if (\array_key_exists('media-type', $data)) {
                $object->setMediaType($data['media-type']);
                unset($data['media-type']);
            }
            if (\array_key_exists('max_active_rpc_connections', $data)) {
                $object->setMaxActiveRpcConnections($data['max_active_rpc_connections']);
                unset($data['max_active_rpc_connections']);
            }
            if (\array_key_exists('enable-http-cache-headers', $data)) {
                $object->setEnableHttpCacheHeaders($data['enable-http-cache-headers']);
                unset($data['enable-http-cache-headers']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
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
            if ($object->isInitialized('listenAddrs') && null !== $object->getListenAddrs()) {
                $values = [];
                foreach ($object->getListenAddrs() as $value) {
                    $values[] = $value;
                }
                $data['listen-addrs'] = $values;
            }
            if ($object->isInitialized('externalListenAddrs') && null !== $object->getExternalListenAddrs()) {
                $values_1 = [];
                foreach ($object->getExternalListenAddrs() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['external-listen-addrs'] = $values_1;
            }
            if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
                $data['listen-addr'] = $object->getListenAddr();
            }
            if ($object->isInitialized('corsOrigin') && null !== $object->getCorsOrigin()) {
                $values_2 = [];
                foreach ($object->getCorsOrigin() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['cors-origin'] = $values_2;
            }
            if ($object->isInitialized('corsHeaders') && null !== $object->getCorsHeaders()) {
                $values_3 = [];
                foreach ($object->getCorsHeaders() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['cors-headers'] = $values_3;
            }
            if ($object->isInitialized('crt') && null !== $object->getCrt()) {
                $data['crt'] = $object->getCrt();
            }
            if ($object->isInitialized('key') && null !== $object->getKey()) {
                $data['key'] = $object->getKey();
            }
            if ($object->isInitialized('acl') && null !== $object->getAcl()) {
                $values_4 = [];
                foreach ($object->getAcl() as $value_4) {
                    $values_4[] = $value_4;
                }
                $data['acl'] = $values_4;
            }
            if ($object->isInitialized('mediaType') && null !== $object->getMediaType()) {
                $data['media-type'] = $object->getMediaType();
            }
            if ($object->isInitialized('maxActiveRpcConnections') && null !== $object->getMaxActiveRpcConnections()) {
                $data['max_active_rpc_connections'] = $object->getMaxActiveRpcConnections();
            }
            if ($object->isInitialized('enableHttpCacheHeaders') && null !== $object->getEnableHttpCacheHeaders()) {
                $data['enable-http-cache-headers'] = $object->getEnableHttpCacheHeaders();
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Shell\Model\ConfigGetResponse200Rpc::class => false];
        }
    }
}
