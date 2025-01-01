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
    class InjectionBlockPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rpc\Model\InjectionBlockPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rpc\Model\InjectionBlockPostBody::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rpc\Model\InjectionBlockPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('data', $data)) {
                $object->setData($data['data']);
                unset($data['data']);
            }
            if (\array_key_exists('operations', $data)) {
                $values = [];
                foreach ($data['operations'] as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $this->denormalizer->denormalize($value_1, \Pezos\Generated\Rpc\Model\Operation::class, 'json', $context);
                    }
                    $values[] = $values_1;
                }
                $object->setOperations($values);
                unset($data['operations']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['data'] = $object->getData();
            $values = [];
            foreach ($object->getOperations() as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $values[] = $values_1;
            }
            $data['operations'] = $values;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rpc\Model\InjectionBlockPostBody::class => false];
        }
    }
} else {
    class InjectionBlockPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rpc\Model\InjectionBlockPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rpc\Model\InjectionBlockPostBody::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rpc\Model\InjectionBlockPostBody();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('data', $data)) {
                $object->setData($data['data']);
                unset($data['data']);
            }
            if (\array_key_exists('operations', $data)) {
                $values = [];
                foreach ($data['operations'] as $value) {
                    $values_1 = [];
                    foreach ($value as $value_1) {
                        $values_1[] = $this->denormalizer->denormalize($value_1, \Pezos\Generated\Rpc\Model\Operation::class, 'json', $context);
                    }
                    $values[] = $values_1;
                }
                $object->setOperations($values);
                unset($data['operations']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['data'] = $object->getData();
            $values = [];
            foreach ($object->getOperations() as $value) {
                $values_1 = [];
                foreach ($value as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $values[] = $values_1;
            }
            $data['operations'] = $values;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rpc\Model\InjectionBlockPostBody::class => false];
        }
    }
}
