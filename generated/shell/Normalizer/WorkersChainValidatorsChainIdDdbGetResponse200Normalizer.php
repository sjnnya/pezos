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
    class WorkersChainValidatorsChainIdDdbGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('p2p_readers', $data)) {
                $object->setP2pReaders($data['p2p_readers']);
                unset($data['p2p_readers']);
            }
            if (\array_key_exists('active_chains', $data)) {
                $object->setActiveChains($data['active_chains']);
                unset($data['active_chains']);
            }
            if (\array_key_exists('operation_db', $data)) {
                $object->setOperationDb($this->denormalizer->denormalize($data['operation_db'], \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200OperationDb::class, 'json', $context));
                unset($data['operation_db']);
            }
            if (\array_key_exists('operations_db', $data)) {
                $object->setOperationsDb($this->denormalizer->denormalize($data['operations_db'], \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200OperationsDb::class, 'json', $context));
                unset($data['operations_db']);
            }
            if (\array_key_exists('block_header_db', $data)) {
                $object->setBlockHeaderDb($this->denormalizer->denormalize($data['block_header_db'], \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200BlockHeaderDb::class, 'json', $context));
                unset($data['block_header_db']);
            }
            if (\array_key_exists('active_connections', $data)) {
                $object->setActiveConnections($data['active_connections']);
                unset($data['active_connections']);
            }
            if (\array_key_exists('active_peers', $data)) {
                $object->setActivePeers($data['active_peers']);
                unset($data['active_peers']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['p2p_readers'] = $object->getP2pReaders();
            $data['active_chains'] = $object->getActiveChains();
            $data['operation_db'] = $this->normalizer->normalize($object->getOperationDb(), 'json', $context);
            $data['operations_db'] = $this->normalizer->normalize($object->getOperationsDb(), 'json', $context);
            $data['block_header_db'] = $this->normalizer->normalize($object->getBlockHeaderDb(), 'json', $context);
            $data['active_connections'] = $object->getActiveConnections();
            $data['active_peers'] = $object->getActivePeers();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200::class => false];
        }
    }
} else {
    class WorkersChainValidatorsChainIdDdbGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('p2p_readers', $data)) {
                $object->setP2pReaders($data['p2p_readers']);
                unset($data['p2p_readers']);
            }
            if (\array_key_exists('active_chains', $data)) {
                $object->setActiveChains($data['active_chains']);
                unset($data['active_chains']);
            }
            if (\array_key_exists('operation_db', $data)) {
                $object->setOperationDb($this->denormalizer->denormalize($data['operation_db'], \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200OperationDb::class, 'json', $context));
                unset($data['operation_db']);
            }
            if (\array_key_exists('operations_db', $data)) {
                $object->setOperationsDb($this->denormalizer->denormalize($data['operations_db'], \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200OperationsDb::class, 'json', $context));
                unset($data['operations_db']);
            }
            if (\array_key_exists('block_header_db', $data)) {
                $object->setBlockHeaderDb($this->denormalizer->denormalize($data['block_header_db'], \Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200BlockHeaderDb::class, 'json', $context));
                unset($data['block_header_db']);
            }
            if (\array_key_exists('active_connections', $data)) {
                $object->setActiveConnections($data['active_connections']);
                unset($data['active_connections']);
            }
            if (\array_key_exists('active_peers', $data)) {
                $object->setActivePeers($data['active_peers']);
                unset($data['active_peers']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            $data['p2p_readers'] = $object->getP2pReaders();
            $data['active_chains'] = $object->getActiveChains();
            $data['operation_db'] = $this->normalizer->normalize($object->getOperationDb(), 'json', $context);
            $data['operations_db'] = $this->normalizer->normalize($object->getOperationsDb(), 'json', $context);
            $data['block_header_db'] = $this->normalizer->normalize($object->getBlockHeaderDb(), 'json', $context);
            $data['active_connections'] = $object->getActiveConnections();
            $data['active_peers'] = $object->getActivePeers();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Shell\Model\WorkersChainValidatorsChainIdDdbGetResponse200::class => false];
        }
    }
}
