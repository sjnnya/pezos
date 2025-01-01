<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Mempool\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Mempool\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Mempool\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class MonitorOperationsGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Mempool\Model\MonitorOperationsGetResponse200Item::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Mempool\Model\MonitorOperationsGetResponse200Item::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Mempool\Model\MonitorOperationsGetResponse200Item();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('hash', $data)) {
                $object->setHash($data['hash']);
                unset($data['hash']);
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
                unset($data['protocol']);
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($data['branch']);
                unset($data['branch']);
            }
            if (\array_key_exists('contents', $data)) {
                $values = [];
                foreach ($data['contents'] as $value) {
                    $values[] = $value;
                }
                $object->setContents($values);
                unset($data['contents']);
            }
            if (\array_key_exists('signature', $data)) {
                $object->setSignature($data['signature']);
                unset($data['signature']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
                unset($data['error']);
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
            $data['hash'] = $object->getHash();
            $data['protocol'] = $object->getProtocol();
            $data['branch'] = $object->getBranch();
            $values = [];
            foreach ($object->getContents() as $value) {
                $values[] = $value;
            }
            $data['contents'] = $values;
            if ($object->isInitialized('signature') && null !== $object->getSignature()) {
                $data['signature'] = $object->getSignature();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
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
            return [\Pezos\Generated\Mempool\Model\MonitorOperationsGetResponse200Item::class => false];
        }
    }
} else {
    class MonitorOperationsGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Mempool\Model\MonitorOperationsGetResponse200Item::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Mempool\Model\MonitorOperationsGetResponse200Item::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Mempool\Model\MonitorOperationsGetResponse200Item();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('hash', $data)) {
                $object->setHash($data['hash']);
                unset($data['hash']);
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
                unset($data['protocol']);
            }
            if (\array_key_exists('branch', $data)) {
                $object->setBranch($data['branch']);
                unset($data['branch']);
            }
            if (\array_key_exists('contents', $data)) {
                $values = [];
                foreach ($data['contents'] as $value) {
                    $values[] = $value;
                }
                $object->setContents($values);
                unset($data['contents']);
            }
            if (\array_key_exists('signature', $data)) {
                $object->setSignature($data['signature']);
                unset($data['signature']);
            }
            if (\array_key_exists('error', $data)) {
                $object->setError($data['error']);
                unset($data['error']);
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
            $data['hash'] = $object->getHash();
            $data['protocol'] = $object->getProtocol();
            $data['branch'] = $object->getBranch();
            $values = [];
            foreach ($object->getContents() as $value) {
                $values[] = $value;
            }
            $data['contents'] = $values;
            if ($object->isInitialized('signature') && null !== $object->getSignature()) {
                $data['signature'] = $object->getSignature();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
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
            return [\Pezos\Generated\Mempool\Model\MonitorOperationsGetResponse200Item::class => false];
        }
    }
}
