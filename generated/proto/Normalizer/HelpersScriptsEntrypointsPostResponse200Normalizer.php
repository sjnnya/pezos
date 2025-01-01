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
    class HelpersScriptsEntrypointsPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('unreachable', $data)) {
                $values = [];
                foreach ($data['unreachable'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200UnreachableItem::class, 'json', $context);
                }
                $object->setUnreachable($values);
                unset($data['unreachable']);
            }
            if (\array_key_exists('entrypoints', $data)) {
                $object->setEntrypoints($this->denormalizer->denormalize($data['entrypoints'], \Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200Entrypoints::class, 'json', $context));
                unset($data['entrypoints']);
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
            if ($object->isInitialized('unreachable') && null !== $object->getUnreachable()) {
                $values = [];
                foreach ($object->getUnreachable() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['unreachable'] = $values;
            }
            $data['entrypoints'] = $this->normalizer->normalize($object->getEntrypoints(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200::class => false];
        }
    }
} else {
    class HelpersScriptsEntrypointsPostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('unreachable', $data)) {
                $values = [];
                foreach ($data['unreachable'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200UnreachableItem::class, 'json', $context);
                }
                $object->setUnreachable($values);
                unset($data['unreachable']);
            }
            if (\array_key_exists('entrypoints', $data)) {
                $object->setEntrypoints($this->denormalizer->denormalize($data['entrypoints'], \Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200Entrypoints::class, 'json', $context));
                unset($data['entrypoints']);
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
            if ($object->isInitialized('unreachable') && null !== $object->getUnreachable()) {
                $values = [];
                foreach ($object->getUnreachable() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['unreachable'] = $values;
            }
            $data['entrypoints'] = $this->normalizer->normalize($object->getEntrypoints(), 'json', $context);
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\HelpersScriptsEntrypointsPostResponse200::class => false];
        }
    }
}
