<?php

namespace Bdb\Addons\VkApi\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = array();
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new \Joli\Jane\Runtime\Normalizer\ReferenceNormalizer();
        $normalizers[] = new VkApiNormalizer();
        $normalizers[] = new JsonReferenceNormalizer();
        $normalizers[] = new ParameterNormalizer();
        $normalizers[] = new ParameterItemsNormalizer();
        $normalizers[] = new ErrorNormalizer();
        $normalizers[] = new MethodNormalizer();
        return $normalizers;
    }
}