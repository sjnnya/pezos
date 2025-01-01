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
    class ContextDelegatesPkhPendingStakingParametersGetResponse200ItemParametersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextDelegatesPkhPendingStakingParametersGetResponse200ItemParameters::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextDelegatesPkhPendingStakingParametersGetResponse200ItemParameters::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextDelegatesPkhPendingStakingParametersGetResponse200ItemParameters();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('limit_of_staking_over_baking_millionth', $data)) {
                $object->setLimitOfStakingOverBakingMillionth($data['limit_of_staking_over_baking_millionth']);
                unset($data['limit_of_staking_over_baking_millionth']);
            }
            if (\array_key_exists('edge_of_baking_over_staking_billionth', $data)) {
                $object->setEdgeOfBakingOverStakingBillionth($data['edge_of_baking_over_staking_billionth']);
                unset($data['edge_of_baking_over_staking_billionth']);
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
            $data['limit_of_staking_over_baking_millionth'] = $object->getLimitOfStakingOverBakingMillionth();
            $data['edge_of_baking_over_staking_billionth'] = $object->getEdgeOfBakingOverStakingBillionth();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextDelegatesPkhPendingStakingParametersGetResponse200ItemParameters::class => false];
        }
    }
} else {
    class ContextDelegatesPkhPendingStakingParametersGetResponse200ItemParametersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextDelegatesPkhPendingStakingParametersGetResponse200ItemParameters::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextDelegatesPkhPendingStakingParametersGetResponse200ItemParameters::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextDelegatesPkhPendingStakingParametersGetResponse200ItemParameters();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('limit_of_staking_over_baking_millionth', $data)) {
                $object->setLimitOfStakingOverBakingMillionth($data['limit_of_staking_over_baking_millionth']);
                unset($data['limit_of_staking_over_baking_millionth']);
            }
            if (\array_key_exists('edge_of_baking_over_staking_billionth', $data)) {
                $object->setEdgeOfBakingOverStakingBillionth($data['edge_of_baking_over_staking_billionth']);
                unset($data['edge_of_baking_over_staking_billionth']);
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
            $data['limit_of_staking_over_baking_millionth'] = $object->getLimitOfStakingOverBakingMillionth();
            $data['edge_of_baking_over_staking_billionth'] = $object->getEdgeOfBakingOverStakingBillionth();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextDelegatesPkhPendingStakingParametersGetResponse200ItemParameters::class => false];
        }
    }
}
