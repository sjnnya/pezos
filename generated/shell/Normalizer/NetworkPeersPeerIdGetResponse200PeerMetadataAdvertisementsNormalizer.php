<?php

namespace Pezos\Generated\Shell\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisements();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sent', $data)) {
            $object->setSent($this->denormalizer->denormalize($data['sent'], 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsSent', 'json', $context));
        }
        if (\array_key_exists('received', $data)) {
            $object->setReceived($this->denormalizer->denormalize($data['received'], 'Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataAdvertisementsReceived', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['sent'] = $this->normalizer->normalize($object->getSent(), 'json', $context);
        $data['received'] = $this->normalizer->normalize($object->getReceived(), 'json', $context);
        return $data;
    }
}