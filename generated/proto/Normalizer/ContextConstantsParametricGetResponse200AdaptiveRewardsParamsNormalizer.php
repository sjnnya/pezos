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
    class ContextConstantsParametricGetResponse200AdaptiveRewardsParamsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParams::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParams::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParams();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('issuance_ratio_final_min', $data)) {
                $object->setIssuanceRatioFinalMin($this->denormalizer->denormalize($data['issuance_ratio_final_min'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioFinalMin::class, 'json', $context));
                unset($data['issuance_ratio_final_min']);
            }
            if (\array_key_exists('issuance_ratio_final_max', $data)) {
                $object->setIssuanceRatioFinalMax($this->denormalizer->denormalize($data['issuance_ratio_final_max'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioFinalMax::class, 'json', $context));
                unset($data['issuance_ratio_final_max']);
            }
            if (\array_key_exists('issuance_ratio_initial_min', $data)) {
                $object->setIssuanceRatioInitialMin($this->denormalizer->denormalize($data['issuance_ratio_initial_min'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioInitialMin::class, 'json', $context));
                unset($data['issuance_ratio_initial_min']);
            }
            if (\array_key_exists('issuance_ratio_initial_max', $data)) {
                $object->setIssuanceRatioInitialMax($this->denormalizer->denormalize($data['issuance_ratio_initial_max'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioInitialMax::class, 'json', $context));
                unset($data['issuance_ratio_initial_max']);
            }
            if (\array_key_exists('initial_period', $data)) {
                $object->setInitialPeriod($data['initial_period']);
                unset($data['initial_period']);
            }
            if (\array_key_exists('transition_period', $data)) {
                $object->setTransitionPeriod($data['transition_period']);
                unset($data['transition_period']);
            }
            if (\array_key_exists('max_bonus', $data)) {
                $object->setMaxBonus($data['max_bonus']);
                unset($data['max_bonus']);
            }
            if (\array_key_exists('growth_rate', $data)) {
                $object->setGrowthRate($this->denormalizer->denormalize($data['growth_rate'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsGrowthRate::class, 'json', $context));
                unset($data['growth_rate']);
            }
            if (\array_key_exists('center_dz', $data)) {
                $object->setCenterDz($this->denormalizer->denormalize($data['center_dz'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsCenterDz::class, 'json', $context));
                unset($data['center_dz']);
            }
            if (\array_key_exists('radius_dz', $data)) {
                $object->setRadiusDz($this->denormalizer->denormalize($data['radius_dz'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsRadiusDz::class, 'json', $context));
                unset($data['radius_dz']);
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
            $data['issuance_ratio_final_min'] = $this->normalizer->normalize($object->getIssuanceRatioFinalMin(), 'json', $context);
            $data['issuance_ratio_final_max'] = $this->normalizer->normalize($object->getIssuanceRatioFinalMax(), 'json', $context);
            $data['issuance_ratio_initial_min'] = $this->normalizer->normalize($object->getIssuanceRatioInitialMin(), 'json', $context);
            $data['issuance_ratio_initial_max'] = $this->normalizer->normalize($object->getIssuanceRatioInitialMax(), 'json', $context);
            $data['initial_period'] = $object->getInitialPeriod();
            $data['transition_period'] = $object->getTransitionPeriod();
            $data['max_bonus'] = $object->getMaxBonus();
            $data['growth_rate'] = $this->normalizer->normalize($object->getGrowthRate(), 'json', $context);
            $data['center_dz'] = $this->normalizer->normalize($object->getCenterDz(), 'json', $context);
            $data['radius_dz'] = $this->normalizer->normalize($object->getRadiusDz(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParams::class => false];
        }
    }
} else {
    class ContextConstantsParametricGetResponse200AdaptiveRewardsParamsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParams::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParams::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParams();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('issuance_ratio_final_min', $data)) {
                $object->setIssuanceRatioFinalMin($this->denormalizer->denormalize($data['issuance_ratio_final_min'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioFinalMin::class, 'json', $context));
                unset($data['issuance_ratio_final_min']);
            }
            if (\array_key_exists('issuance_ratio_final_max', $data)) {
                $object->setIssuanceRatioFinalMax($this->denormalizer->denormalize($data['issuance_ratio_final_max'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioFinalMax::class, 'json', $context));
                unset($data['issuance_ratio_final_max']);
            }
            if (\array_key_exists('issuance_ratio_initial_min', $data)) {
                $object->setIssuanceRatioInitialMin($this->denormalizer->denormalize($data['issuance_ratio_initial_min'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioInitialMin::class, 'json', $context));
                unset($data['issuance_ratio_initial_min']);
            }
            if (\array_key_exists('issuance_ratio_initial_max', $data)) {
                $object->setIssuanceRatioInitialMax($this->denormalizer->denormalize($data['issuance_ratio_initial_max'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsIssuanceRatioInitialMax::class, 'json', $context));
                unset($data['issuance_ratio_initial_max']);
            }
            if (\array_key_exists('initial_period', $data)) {
                $object->setInitialPeriod($data['initial_period']);
                unset($data['initial_period']);
            }
            if (\array_key_exists('transition_period', $data)) {
                $object->setTransitionPeriod($data['transition_period']);
                unset($data['transition_period']);
            }
            if (\array_key_exists('max_bonus', $data)) {
                $object->setMaxBonus($data['max_bonus']);
                unset($data['max_bonus']);
            }
            if (\array_key_exists('growth_rate', $data)) {
                $object->setGrowthRate($this->denormalizer->denormalize($data['growth_rate'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsGrowthRate::class, 'json', $context));
                unset($data['growth_rate']);
            }
            if (\array_key_exists('center_dz', $data)) {
                $object->setCenterDz($this->denormalizer->denormalize($data['center_dz'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsCenterDz::class, 'json', $context));
                unset($data['center_dz']);
            }
            if (\array_key_exists('radius_dz', $data)) {
                $object->setRadiusDz($this->denormalizer->denormalize($data['radius_dz'], \Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParamsRadiusDz::class, 'json', $context));
                unset($data['radius_dz']);
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
            $data['issuance_ratio_final_min'] = $this->normalizer->normalize($object->getIssuanceRatioFinalMin(), 'json', $context);
            $data['issuance_ratio_final_max'] = $this->normalizer->normalize($object->getIssuanceRatioFinalMax(), 'json', $context);
            $data['issuance_ratio_initial_min'] = $this->normalizer->normalize($object->getIssuanceRatioInitialMin(), 'json', $context);
            $data['issuance_ratio_initial_max'] = $this->normalizer->normalize($object->getIssuanceRatioInitialMax(), 'json', $context);
            $data['initial_period'] = $object->getInitialPeriod();
            $data['transition_period'] = $object->getTransitionPeriod();
            $data['max_bonus'] = $object->getMaxBonus();
            $data['growth_rate'] = $this->normalizer->normalize($object->getGrowthRate(), 'json', $context);
            $data['center_dz'] = $this->normalizer->normalize($object->getCenterDz(), 'json', $context);
            $data['radius_dz'] = $this->normalizer->normalize($object->getRadiusDz(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200AdaptiveRewardsParams::class => false];
        }
    }
}
