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
    class GlobalBlockBlockIdOutboxLevelMessagesGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdOutboxLevelMessagesGetResponse200Item::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdOutboxLevelMessagesGetResponse200Item::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdOutboxLevelMessagesGetResponse200Item();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('outbox_level', $data)) {
                $object->setOutboxLevel($data['outbox_level']);
                unset($data['outbox_level']);
            }
            if (\array_key_exists('message_index', $data)) {
                $object->setMessageIndex($data['message_index']);
                unset($data['message_index']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
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
            $data['outbox_level'] = $object->getOutboxLevel();
            $data['message_index'] = $object->getMessageIndex();
            $data['message'] = $object->getMessage();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rollup\Model\GlobalBlockBlockIdOutboxLevelMessagesGetResponse200Item::class => false];
        }
    }
} else {
    class GlobalBlockBlockIdOutboxLevelMessagesGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdOutboxLevelMessagesGetResponse200Item::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdOutboxLevelMessagesGetResponse200Item::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rollup\Model\GlobalBlockBlockIdOutboxLevelMessagesGetResponse200Item();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('outbox_level', $data)) {
                $object->setOutboxLevel($data['outbox_level']);
                unset($data['outbox_level']);
            }
            if (\array_key_exists('message_index', $data)) {
                $object->setMessageIndex($data['message_index']);
                unset($data['message_index']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
                unset($data['message']);
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
            $data['outbox_level'] = $object->getOutboxLevel();
            $data['message_index'] = $object->getMessageIndex();
            $data['message'] = $object->getMessage();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rollup\Model\GlobalBlockBlockIdOutboxLevelMessagesGetResponse200Item::class => false];
        }
    }
}
