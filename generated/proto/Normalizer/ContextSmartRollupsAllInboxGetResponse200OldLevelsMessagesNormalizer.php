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
    class ContextSmartRollupsAllInboxGetResponse200OldLevelsMessagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextSmartRollupsAllInboxGetResponse200OldLevelsMessages::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextSmartRollupsAllInboxGetResponse200OldLevelsMessages::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextSmartRollupsAllInboxGetResponse200OldLevelsMessages();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
                unset($data['index']);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($this->denormalizer->denormalize($data['content'], \Pezos\Generated\Proto\Model\ContextSmartRollupsAllInboxGetResponse200OldLevelsMessagesContent::class, 'json', $context));
                unset($data['content']);
            }
            if (\array_key_exists('back_pointers', $data)) {
                $values = [];
                foreach ($data['back_pointers'] as $value) {
                    $values[] = $value;
                }
                $object->setBackPointers($values);
                unset($data['back_pointers']);
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
            $data['index'] = $object->getIndex();
            $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
            $values = [];
            foreach ($object->getBackPointers() as $value) {
                $values[] = $value;
            }
            $data['back_pointers'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextSmartRollupsAllInboxGetResponse200OldLevelsMessages::class => false];
        }
    }
} else {
    class ContextSmartRollupsAllInboxGetResponse200OldLevelsMessagesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Proto\Model\ContextSmartRollupsAllInboxGetResponse200OldLevelsMessages::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Proto\Model\ContextSmartRollupsAllInboxGetResponse200OldLevelsMessages::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Proto\Model\ContextSmartRollupsAllInboxGetResponse200OldLevelsMessages();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('index', $data)) {
                $object->setIndex($data['index']);
                unset($data['index']);
            }
            if (\array_key_exists('content', $data)) {
                $object->setContent($this->denormalizer->denormalize($data['content'], \Pezos\Generated\Proto\Model\ContextSmartRollupsAllInboxGetResponse200OldLevelsMessagesContent::class, 'json', $context));
                unset($data['content']);
            }
            if (\array_key_exists('back_pointers', $data)) {
                $values = [];
                foreach ($data['back_pointers'] as $value) {
                    $values[] = $value;
                }
                $object->setBackPointers($values);
                unset($data['back_pointers']);
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
            $data['index'] = $object->getIndex();
            $data['content'] = $this->normalizer->normalize($object->getContent(), 'json', $context);
            $values = [];
            foreach ($object->getBackPointers() as $value) {
                $values[] = $value;
            }
            $data['back_pointers'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Proto\Model\ContextSmartRollupsAllInboxGetResponse200OldLevelsMessages::class => false];
        }
    }
}
