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
    class NetworkPeersPeerIdGetResponse200PeerMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadata::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadata::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadata();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('responses', $data)) {
                $object->setResponses($this->denormalizer->denormalize($data['responses'], \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadataResponses::class, 'json', $context));
                unset($data['responses']);
            }
            if (\array_key_exists('requests', $data)) {
                $object->setRequests($this->denormalizer->denormalize($data['requests'], \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadataRequests::class, 'json', $context));
                unset($data['requests']);
            }
            if (\array_key_exists('valid_blocks', $data)) {
                $object->setValidBlocks($data['valid_blocks']);
                unset($data['valid_blocks']);
            }
            if (\array_key_exists('old_heads', $data)) {
                $object->setOldHeads($data['old_heads']);
                unset($data['old_heads']);
            }
            if (\array_key_exists('prevalidator_results', $data)) {
                $object->setPrevalidatorResults($this->denormalizer->denormalize($data['prevalidator_results'], \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults::class, 'json', $context));
                unset($data['prevalidator_results']);
            }
            if (\array_key_exists('unactivated_chains', $data)) {
                $object->setUnactivatedChains($data['unactivated_chains']);
                unset($data['unactivated_chains']);
            }
            if (\array_key_exists('inactive_chains', $data)) {
                $object->setInactiveChains($data['inactive_chains']);
                unset($data['inactive_chains']);
            }
            if (\array_key_exists('future_blocks_advertised', $data)) {
                $object->setFutureBlocksAdvertised($data['future_blocks_advertised']);
                unset($data['future_blocks_advertised']);
            }
            if (\array_key_exists('unadvertised', $data)) {
                $object->setUnadvertised($this->denormalizer->denormalize($data['unadvertised'], \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadataUnadvertised::class, 'json', $context));
                unset($data['unadvertised']);
            }
            if (\array_key_exists('advertisements', $data)) {
                $object->setAdvertisements($this->denormalizer->denormalize($data['advertisements'], \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements::class, 'json', $context));
                unset($data['advertisements']);
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
            $data['responses'] = $this->normalizer->normalize($object->getResponses(), 'json', $context);
            $data['requests'] = $this->normalizer->normalize($object->getRequests(), 'json', $context);
            $data['valid_blocks'] = $object->getValidBlocks();
            $data['old_heads'] = $object->getOldHeads();
            $data['prevalidator_results'] = $this->normalizer->normalize($object->getPrevalidatorResults(), 'json', $context);
            $data['unactivated_chains'] = $object->getUnactivatedChains();
            $data['inactive_chains'] = $object->getInactiveChains();
            $data['future_blocks_advertised'] = $object->getFutureBlocksAdvertised();
            $data['unadvertised'] = $this->normalizer->normalize($object->getUnadvertised(), 'json', $context);
            $data['advertisements'] = $this->normalizer->normalize($object->getAdvertisements(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadata::class => false];
        }
    }
} else {
    class NetworkPeersPeerIdGetResponse200PeerMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadata::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadata::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadata();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('responses', $data)) {
                $object->setResponses($this->denormalizer->denormalize($data['responses'], \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadataResponses::class, 'json', $context));
                unset($data['responses']);
            }
            if (\array_key_exists('requests', $data)) {
                $object->setRequests($this->denormalizer->denormalize($data['requests'], \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadataRequests::class, 'json', $context));
                unset($data['requests']);
            }
            if (\array_key_exists('valid_blocks', $data)) {
                $object->setValidBlocks($data['valid_blocks']);
                unset($data['valid_blocks']);
            }
            if (\array_key_exists('old_heads', $data)) {
                $object->setOldHeads($data['old_heads']);
                unset($data['old_heads']);
            }
            if (\array_key_exists('prevalidator_results', $data)) {
                $object->setPrevalidatorResults($this->denormalizer->denormalize($data['prevalidator_results'], \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults::class, 'json', $context));
                unset($data['prevalidator_results']);
            }
            if (\array_key_exists('unactivated_chains', $data)) {
                $object->setUnactivatedChains($data['unactivated_chains']);
                unset($data['unactivated_chains']);
            }
            if (\array_key_exists('inactive_chains', $data)) {
                $object->setInactiveChains($data['inactive_chains']);
                unset($data['inactive_chains']);
            }
            if (\array_key_exists('future_blocks_advertised', $data)) {
                $object->setFutureBlocksAdvertised($data['future_blocks_advertised']);
                unset($data['future_blocks_advertised']);
            }
            if (\array_key_exists('unadvertised', $data)) {
                $object->setUnadvertised($this->denormalizer->denormalize($data['unadvertised'], \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadataUnadvertised::class, 'json', $context));
                unset($data['unadvertised']);
            }
            if (\array_key_exists('advertisements', $data)) {
                $object->setAdvertisements($this->denormalizer->denormalize($data['advertisements'], \Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements::class, 'json', $context));
                unset($data['advertisements']);
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
            $data['responses'] = $this->normalizer->normalize($object->getResponses(), 'json', $context);
            $data['requests'] = $this->normalizer->normalize($object->getRequests(), 'json', $context);
            $data['valid_blocks'] = $object->getValidBlocks();
            $data['old_heads'] = $object->getOldHeads();
            $data['prevalidator_results'] = $this->normalizer->normalize($object->getPrevalidatorResults(), 'json', $context);
            $data['unactivated_chains'] = $object->getUnactivatedChains();
            $data['inactive_chains'] = $object->getInactiveChains();
            $data['future_blocks_advertised'] = $object->getFutureBlocksAdvertised();
            $data['unadvertised'] = $this->normalizer->normalize($object->getUnadvertised(), 'json', $context);
            $data['advertisements'] = $this->normalizer->normalize($object->getAdvertisements(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\Pezos\Generated\Rpc\Model\NetworkPeersPeerIdGetResponse200PeerMetadata::class => false];
        }
    }
}
