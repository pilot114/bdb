<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Database
{
    public function getCountries() : Method\GetCountries
    {
        return new Method\GetCountries();
    }
    public function getRegions() : Method\GetRegions
    {
        return new Method\GetRegions();
    }
    public function getStreetsById() : Method\GetStreetsById
    {
        return new Method\GetStreetsById();
    }
    public function getCountriesById() : Method\GetCountriesById
    {
        return new Method\GetCountriesById();
    }
    public function getCities() : Method\GetCities
    {
        return new Method\GetCities();
    }
    public function getCitiesById() : Method\GetCitiesById
    {
        return new Method\GetCitiesById();
    }
    public function getUniversities() : Method\GetUniversities
    {
        return new Method\GetUniversities();
    }
    public function getSchools() : Method\GetSchools
    {
        return new Method\GetSchools();
    }
    public function getSchoolClasses() : Method\GetSchoolClasses
    {
        return new Method\GetSchoolClasses();
    }
    public function getFaculties() : Method\GetFaculties
    {
        return new Method\GetFaculties();
    }
    public function getChairs() : Method\GetChairs
    {
        return new Method\GetChairs();
    }
}