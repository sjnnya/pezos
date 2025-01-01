<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Proto\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Proto\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class HeaderGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\HeaderGetResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\HeaderGetResponse200::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\HeaderGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
                unset($data['protocol']);
            }
            if (\array_key_exists('chain_id', $data)) {
                $object->setChainId($data['chain_id']);
                unset($data['chain_id']);
            }
            if (\array_key_exists('hash', $data)) {
                $object->setHash($data['hash']);
                unset($data['hash']);
            }
            if (\array_key_exists('level', $data)) {
                $object->setLevel($data['level']);
                unset($data['level']);
            }
            if (\array_key_exists('proto', $data)) {
                $object->setProto($data['proto']);
                unset($data['proto']);
            }
            if (\array_key_exists('predecessor', $data)) {
                $object->setPredecessor($data['predecessor']);
                unset($data['predecessor']);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp($data['timestamp']);
                unset($data['timestamp']);
            }
            if (\array_key_exists('validation_pass', $data)) {
                $object->setValidationPass($data['validation_pass']);
                unset($data['validation_pass']);
            }
            if (\array_key_exists('operations_hash', $data)) {
                $object->setOperationsHash($data['operations_hash']);
                unset($data['operations_hash']);
            }
            if (\array_key_exists('fitness', $data)) {
                $values = [];
                foreach ($data['fitness'] as $value) {
                    $values[] = $value;
                }
                $object->setFitness($values);
                unset($data['fitness']);
            }
            if (\array_key_exists('context', $data)) {
                $object->setContext($data['context']);
                unset($data['context']);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
                unset($data['content']);
            }
            if (\array_key_exists('signature', $data)) {
                $object->setSignature($data['signature']);
                unset($data['signature']);
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
            $data['protocol'] = $object->getProtocol();
            $data['chain_id'] = $object->getChainId();
            $data['hash'] = $object->getHash();
            $data['level'] = $object->getLevel();
            $data['proto'] = $object->getProto();
            $data['predecessor'] = $object->getPredecessor();
            $data['timestamp'] = $object->getTimestamp();
            $data['validation_pass'] = $object->getValidationPass();
            $data['operations_hash'] = $object->getOperationsHash();
            $values = [];
            foreach ($object->getFitness() as $value) {
                $values[] = $value;
            }
            $data['fitness'] = $values;
            $data['context'] = $object->getContext();
            $data['content'] = $object->getContent();
            $data['signature'] = $object->getSignature();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\HeaderGetResponse200::class => false];
        }
    }
} else {
    class HeaderGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\HeaderGetResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\HeaderGetResponse200::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\HeaderGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
                unset($data['protocol']);
            }
            if (\array_key_exists('chain_id', $data)) {
                $object->setChainId($data['chain_id']);
                unset($data['chain_id']);
            }
            if (\array_key_exists('hash', $data)) {
                $object->setHash($data['hash']);
                unset($data['hash']);
            }
            if (\array_key_exists('level', $data)) {
                $object->setLevel($data['level']);
                unset($data['level']);
            }
            if (\array_key_exists('proto', $data)) {
                $object->setProto($data['proto']);
                unset($data['proto']);
            }
            if (\array_key_exists('predecessor', $data)) {
                $object->setPredecessor($data['predecessor']);
                unset($data['predecessor']);
            }
            if (\array_key_exists('timestamp', $data)) {
                $object->setTimestamp($data['timestamp']);
                unset($data['timestamp']);
            }
            if (\array_key_exists('validation_pass', $data)) {
                $object->setValidationPass($data['validation_pass']);
                unset($data['validation_pass']);
            }
            if (\array_key_exists('operations_hash', $data)) {
                $object->setOperationsHash($data['operations_hash']);
                unset($data['operations_hash']);
            }
            if (\array_key_exists('fitness', $data)) {
                $values = [];
                foreach ($data['fitness'] as $value) {
                    $values[] = $value;
                }
                $object->setFitness($values);
                unset($data['fitness']);
            }
            if (\array_key_exists('context', $data)) {
                $object->setContext($data['context']);
                unset($data['context']);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
                unset($data['content']);
            }
            if (\array_key_exists('signature', $data)) {
                $object->setSignature($data['signature']);
                unset($data['signature']);
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
            $data['protocol'] = $object->getProtocol();
            $data['chain_id'] = $object->getChainId();
            $data['hash'] = $object->getHash();
            $data['level'] = $object->getLevel();
            $data['proto'] = $object->getProto();
            $data['predecessor'] = $object->getPredecessor();
            $data['timestamp'] = $object->getTimestamp();
            $data['validation_pass'] = $object->getValidationPass();
            $data['operations_hash'] = $object->getOperationsHash();
            $values = [];
            foreach ($object->getFitness() as $value) {
                $values[] = $value;
            }
            $data['fitness'] = $values;
            $data['context'] = $object->getContext();
            $data['content'] = $object->getContent();
            $data['signature'] = $object->getSignature();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\HeaderGetResponse200::class => false];
        }
    }
}
