<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Pezos\Generated\Rollup\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Pezos\Generated\Rollup\Runtime\Normalizer\CheckArray;
use Pezos\Generated\Rollup\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ConfigGetResponse200FeeParametersAddMessagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersAddMessages::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersAddMessages::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersAddMessages();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('minimal-fees', $data)) {
                $object->setMinimalFees($data['minimal-fees']);
                unset($data['minimal-fees']);
            }
            if (\array_key_exists('minimal-nanotez-per-byte', $data)) {
                $object->setMinimalNanotezPerByte($data['minimal-nanotez-per-byte']);
                unset($data['minimal-nanotez-per-byte']);
            }
            if (\array_key_exists('minimal-nanotez-per-gas-unit', $data)) {
                $object->setMinimalNanotezPerGasUnit($data['minimal-nanotez-per-gas-unit']);
                unset($data['minimal-nanotez-per-gas-unit']);
            }
            if (\array_key_exists('force-low-fee', $data)) {
                $object->setForceLowFee($data['force-low-fee']);
                unset($data['force-low-fee']);
            }
            if (\array_key_exists('fee-cap', $data)) {
                $object->setFeeCap($data['fee-cap']);
                unset($data['fee-cap']);
            }
            if (\array_key_exists('burn-cap', $data)) {
                $object->setBurnCap($data['burn-cap']);
                unset($data['burn-cap']);
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
            if ($object->isInitialized('minimalFees') && null !== $object->getMinimalFees()) {
                $data['minimal-fees'] = $object->getMinimalFees();
            }
            if ($object->isInitialized('minimalNanotezPerByte') && null !== $object->getMinimalNanotezPerByte()) {
                $data['minimal-nanotez-per-byte'] = $object->getMinimalNanotezPerByte();
            }
            if ($object->isInitialized('minimalNanotezPerGasUnit') && null !== $object->getMinimalNanotezPerGasUnit()) {
                $data['minimal-nanotez-per-gas-unit'] = $object->getMinimalNanotezPerGasUnit();
            }
            if ($object->isInitialized('forceLowFee') && null !== $object->getForceLowFee()) {
                $data['force-low-fee'] = $object->getForceLowFee();
            }
            if ($object->isInitialized('feeCap') && null !== $object->getFeeCap()) {
                $data['fee-cap'] = $object->getFeeCap();
            }
            if ($object->isInitialized('burnCap') && null !== $object->getBurnCap()) {
                $data['burn-cap'] = $object->getBurnCap();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersAddMessages::class => false];
        }
    }
} else {
    class ConfigGetResponse200FeeParametersAddMessagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersAddMessages::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersAddMessages::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersAddMessages();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('minimal-fees', $data)) {
                $object->setMinimalFees($data['minimal-fees']);
                unset($data['minimal-fees']);
            }
            if (\array_key_exists('minimal-nanotez-per-byte', $data)) {
                $object->setMinimalNanotezPerByte($data['minimal-nanotez-per-byte']);
                unset($data['minimal-nanotez-per-byte']);
            }
            if (\array_key_exists('minimal-nanotez-per-gas-unit', $data)) {
                $object->setMinimalNanotezPerGasUnit($data['minimal-nanotez-per-gas-unit']);
                unset($data['minimal-nanotez-per-gas-unit']);
            }
            if (\array_key_exists('force-low-fee', $data)) {
                $object->setForceLowFee($data['force-low-fee']);
                unset($data['force-low-fee']);
            }
            if (\array_key_exists('fee-cap', $data)) {
                $object->setFeeCap($data['fee-cap']);
                unset($data['fee-cap']);
            }
            if (\array_key_exists('burn-cap', $data)) {
                $object->setBurnCap($data['burn-cap']);
                unset($data['burn-cap']);
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
            if ($object->isInitialized('minimalFees') && null !== $object->getMinimalFees()) {
                $data['minimal-fees'] = $object->getMinimalFees();
            }
            if ($object->isInitialized('minimalNanotezPerByte') && null !== $object->getMinimalNanotezPerByte()) {
                $data['minimal-nanotez-per-byte'] = $object->getMinimalNanotezPerByte();
            }
            if ($object->isInitialized('minimalNanotezPerGasUnit') && null !== $object->getMinimalNanotezPerGasUnit()) {
                $data['minimal-nanotez-per-gas-unit'] = $object->getMinimalNanotezPerGasUnit();
            }
            if ($object->isInitialized('forceLowFee') && null !== $object->getForceLowFee()) {
                $data['force-low-fee'] = $object->getForceLowFee();
            }
            if ($object->isInitialized('feeCap') && null !== $object->getFeeCap()) {
                $data['fee-cap'] = $object->getFeeCap();
            }
            if ($object->isInitialized('burnCap') && null !== $object->getBurnCap()) {
                $data['burn-cap'] = $object->getBurnCap();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rollup\Model\ConfigGetResponse200FeeParametersAddMessages::class => false];
        }
    }
}
