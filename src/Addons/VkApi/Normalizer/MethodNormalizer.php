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
class MethodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Bdb\\Addons\\VkApi\\Model\\Method') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Bdb\Addons\VkApi\Model\Method) {
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
        $object = new \Bdb\Addons\VkApi\Model\Method();
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'open')) {
            $object->setOpen($data->{'open'});
        }
        if (property_exists($data, 'parameters')) {
            $values = array();
            foreach ($data->{'parameters'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Bdb\\Addons\\VkApi\\Model\\Parameter', 'json', $context);
            }
            $object->setParameters($values);
        }
        if (property_exists($data, 'responses')) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'responses'} as $key => $value_1) {
                if (preg_match('/^(a-zA-Z)+$/', $key) && (is_object($value_1) and isset($value_1->{'$ref'}))) {
                    $values_1[$key] = $this->denormalizer->denormalize($value_1, 'Bdb\\Addons\\VkApi\\Model\\JsonReference', 'json', $context);
                    continue;
                }
            }
            $object->setResponses($values_1);
        }
        if (property_exists($data, 'errors')) {
            $values_2 = array();
            foreach ($data->{'errors'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Bdb\\Addons\\VkApi\\Model\\Error', 'json', $context);
            }
            $object->setErrors($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getOpen()) {
            $data->{'open'} = $object->getOpen();
        }
        if (null !== $object->getParameters()) {
            $values = array();
            foreach ($object->getParameters() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'parameters'} = $values;
        }
        if (null !== $object->getResponses()) {
            $values_1 = new \stdClass();
            foreach ($object->getResponses() as $key => $value_1) {
                if (preg_match('/^(a-zA-Z)+$/', $key) && is_object($value_1)) {
                    $values_1->{$key} = $this->normalizer->normalize($value_1, 'json', $context);
                    continue;
                }
            }
            $data->{'responses'} = $values_1;
        }
        if (null !== $object->getErrors()) {
            $values_2 = array();
            foreach ($object->getErrors() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'errors'} = $values_2;
        }
        return $data;
    }
}