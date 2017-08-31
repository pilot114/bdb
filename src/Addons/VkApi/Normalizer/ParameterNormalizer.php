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
class ParameterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Bdb\\Addons\\VkApi\\Model\\Parameter') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Bdb\Addons\VkApi\Model\Parameter) {
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
        $object = new \Bdb\Addons\VkApi\Model\Parameter();
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'items')) {
            $object->setItems($this->denormalizer->denormalize($data->{'items'}, 'Bdb\\Addons\\VkApi\\Model\\ParameterItems', 'json', $context));
        }
        if (property_exists($data, 'maxItems')) {
            $object->setMaxItems($data->{'maxItems'});
        }
        if (property_exists($data, 'minItems')) {
            $object->setMinItems($data->{'minItems'});
        }
        if (property_exists($data, 'maximum')) {
            $object->setMaximum($data->{'maximum'});
        }
        if (property_exists($data, 'minimum')) {
            $object->setMinimum($data->{'minimum'});
        }
        if (property_exists($data, 'enum')) {
            $values = array();
            foreach ($data->{'enum'} as $value) {
                $values[] = $value;
            }
            $object->setEnum($values);
        }
        if (property_exists($data, 'default')) {
            $object->setDefault($data->{'default'});
        }
        if (property_exists($data, 'required')) {
            $object->setRequired($data->{'required'});
        }
        if (property_exists($data, 'maxLength')) {
            $object->setMaxLength($data->{'maxLength'});
        }
        if (property_exists($data, 'minLength')) {
            $object->setMinLength($data->{'minLength'});
        }
        if (property_exists($data, 'description')) {
            $object->setDescription($data->{'description'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getItems()) {
            $data->{'items'} = $this->normalizer->normalize($object->getItems(), 'json', $context);
        }
        if (null !== $object->getMaxItems()) {
            $data->{'maxItems'} = $object->getMaxItems();
        }
        if (null !== $object->getMinItems()) {
            $data->{'minItems'} = $object->getMinItems();
        }
        if (null !== $object->getMaximum()) {
            $data->{'maximum'} = $object->getMaximum();
        }
        if (null !== $object->getMinimum()) {
            $data->{'minimum'} = $object->getMinimum();
        }
        if (null !== $object->getEnum()) {
            $values = array();
            foreach ($object->getEnum() as $value) {
                $values[] = $value;
            }
            $data->{'enum'} = $values;
        }
        if (null !== $object->getDefault()) {
            $data->{'default'} = $object->getDefault();
        }
        if (null !== $object->getRequired()) {
            $data->{'required'} = $object->getRequired();
        }
        if (null !== $object->getMaxLength()) {
            $data->{'maxLength'} = $object->getMaxLength();
        }
        if (null !== $object->getMinLength()) {
            $data->{'minLength'} = $object->getMinLength();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        return $data;
    }
}