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
    class ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhConflictsGetResponse200ItemOurCommitmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhConflictsGetResponse200ItemOurCommitment::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhConflictsGetResponse200ItemOurCommitment::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhConflictsGetResponse200ItemOurCommitment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('compressed_state', $data)) {
                $object->setCompressedState($data['compressed_state']);
                unset($data['compressed_state']);
            }
            if (\array_key_exists('inbox_level', $data)) {
                $object->setInboxLevel($data['inbox_level']);
                unset($data['inbox_level']);
            }
            if (\array_key_exists('predecessor', $data)) {
                $object->setPredecessor($data['predecessor']);
                unset($data['predecessor']);
            }
            if (\array_key_exists('number_of_ticks', $data)) {
                $object->setNumberOfTicks($data['number_of_ticks']);
                unset($data['number_of_ticks']);
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
            $data['compressed_state'] = $object->getCompressedState();
            $data['inbox_level'] = $object->getInboxLevel();
            $data['predecessor'] = $object->getPredecessor();
            $data['number_of_ticks'] = $object->getNumberOfTicks();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhConflictsGetResponse200ItemOurCommitment::class => false];
        }
    }
} else {
    class ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhConflictsGetResponse200ItemOurCommitmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhConflictsGetResponse200ItemOurCommitment::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhConflictsGetResponse200ItemOurCommitment::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhConflictsGetResponse200ItemOurCommitment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('compressed_state', $data)) {
                $object->setCompressedState($data['compressed_state']);
                unset($data['compressed_state']);
            }
            if (\array_key_exists('inbox_level', $data)) {
                $object->setInboxLevel($data['inbox_level']);
                unset($data['inbox_level']);
            }
            if (\array_key_exists('predecessor', $data)) {
                $object->setPredecessor($data['predecessor']);
                unset($data['predecessor']);
            }
            if (\array_key_exists('number_of_ticks', $data)) {
                $object->setNumberOfTicks($data['number_of_ticks']);
                unset($data['number_of_ticks']);
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
            $data['compressed_state'] = $object->getCompressedState();
            $data['inbox_level'] = $object->getInboxLevel();
            $data['predecessor'] = $object->getPredecessor();
            $data['number_of_ticks'] = $object->getNumberOfTicks();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupAddressStakerPkhConflictsGetResponse200ItemOurCommitment::class => false];
        }
    }
}
