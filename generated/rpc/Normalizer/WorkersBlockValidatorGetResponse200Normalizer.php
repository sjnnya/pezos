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
    class WorkersBlockValidatorGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('pending_requests', $data)) {
                $values = [];
                foreach ($data['pending_requests'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200PendingRequestsItem::class, 'json', $context);
                }
                $object->setPendingRequests($values);
                unset($data['pending_requests']);
            }
            if (\array_key_exists('current_request', $data)) {
                $object->setCurrentRequest($this->denormalizer->denormalize($data['current_request'], \Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200CurrentRequest::class, 'json', $context));
                unset($data['current_request']);
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
            $data['status'] = $object->getStatus();
            $values = [];
            foreach ($object->getPendingRequests() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['pending_requests'] = $values;
            if ($object->isInitialized('currentRequest') && null !== $object->getCurrentRequest()) {
                $data['current_request'] = $this->normalizer->normalize($object->getCurrentRequest(), 'json', $context);
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
            return [\Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200::class => false];
        }
    }
} else {
    class WorkersBlockValidatorGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('pending_requests', $data)) {
                $values = [];
                foreach ($data['pending_requests'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200PendingRequestsItem::class, 'json', $context);
                }
                $object->setPendingRequests($values);
                unset($data['pending_requests']);
            }
            if (\array_key_exists('current_request', $data)) {
                $object->setCurrentRequest($this->denormalizer->denormalize($data['current_request'], \Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200CurrentRequest::class, 'json', $context));
                unset($data['current_request']);
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
            $data['status'] = $object->getStatus();
            $values = [];
            foreach ($object->getPendingRequests() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['pending_requests'] = $values;
            if ($object->isInitialized('currentRequest') && null !== $object->getCurrentRequest()) {
                $data['current_request'] = $this->normalizer->normalize($object->getCurrentRequest(), 'json', $context);
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
            return [\Pezos\Generated\Rpc\Model\WorkersBlockValidatorGetResponse200::class => false];
        }
    }
}
