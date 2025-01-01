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
    class ContextDenunciationsGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextDenunciationsGetResponse200Item::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextDenunciationsGetResponse200Item::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextDenunciationsGetResponse200Item();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('slashed_delegate', $data)) {
                $object->setSlashedDelegate($data['slashed_delegate']);
                unset($data['slashed_delegate']);
            }
            if (\array_key_exists('operation_hash', $data)) {
                $object->setOperationHash($data['operation_hash']);
                unset($data['operation_hash']);
            }
            if (\array_key_exists('rewarded', $data)) {
                $object->setRewarded($data['rewarded']);
                unset($data['rewarded']);
            }
            if (\array_key_exists('misbehaviour', $data)) {
                $object->setMisbehaviour($this->denormalizer->denormalize($data['misbehaviour'], \Pezos\Generated\Proto\Model\ContextDenunciationsGetResponse200ItemMisbehaviour::class, 'json', $context));
                unset($data['misbehaviour']);
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
            $data['slashed_delegate'] = $object->getSlashedDelegate();
            $data['operation_hash'] = $object->getOperationHash();
            $data['rewarded'] = $object->getRewarded();
            $data['misbehaviour'] = $this->normalizer->normalize($object->getMisbehaviour(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextDenunciationsGetResponse200Item::class => false];
        }
    }
} else {
    class ContextDenunciationsGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextDenunciationsGetResponse200Item::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextDenunciationsGetResponse200Item::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextDenunciationsGetResponse200Item();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('slashed_delegate', $data)) {
                $object->setSlashedDelegate($data['slashed_delegate']);
                unset($data['slashed_delegate']);
            }
            if (\array_key_exists('operation_hash', $data)) {
                $object->setOperationHash($data['operation_hash']);
                unset($data['operation_hash']);
            }
            if (\array_key_exists('rewarded', $data)) {
                $object->setRewarded($data['rewarded']);
                unset($data['rewarded']);
            }
            if (\array_key_exists('misbehaviour', $data)) {
                $object->setMisbehaviour($this->denormalizer->denormalize($data['misbehaviour'], \Pezos\Generated\Proto\Model\ContextDenunciationsGetResponse200ItemMisbehaviour::class, 'json', $context));
                unset($data['misbehaviour']);
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
            $data['slashed_delegate'] = $object->getSlashedDelegate();
            $data['operation_hash'] = $object->getOperationHash();
            $data['rewarded'] = $object->getRewarded();
            $data['misbehaviour'] = $this->normalizer->normalize($object->getMisbehaviour(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextDenunciationsGetResponse200Item::class => false];
        }
    }
}
