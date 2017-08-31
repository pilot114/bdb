<?php

namespace Bdb\Addons\VkApi\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class VkApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Bdb\\Addons\\VkApi\\Model\\VkApi') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Bdb\Addons\VkApi\Model\VkApi) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Bdb\Addons\VkApi\Model\VkApi();
        if (property_exists($data, 'errors')) {
            $values = array();
            foreach ($data->{'errors'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Bdb\\Addons\\VkApi\\Model\\Error', 'json', $context);
            }
            $object->setErrors($values);
        }
//        if (property_exists($data, 'methods')) {
//            $values_1 = array();
//            foreach ($data->{'methods'} as $value_1) {
//                $values_1[] = $this->denormalizer->denormalize($value_1, 'Bdb\\Addons\\VkApi\\Model\\Method', 'json', $context);
//            }
//            $object->setMethods($values_1);
//        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getErrors()) {
            $values = array();
            foreach ($object->getErrors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'errors'} = $values;
        }
        if (null !== $object->getMethods()) {
            $values_1 = array();
            foreach ($object->getMethods() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'methods'} = $values_1;
        }
        return $data;
    }
}