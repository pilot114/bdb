<?php

namespace Bdb\Addons\VK\Domain;

use Bdb\Addons\VK\Method;
class Ads
{
    public function getAccounts() : Method\GetAccounts
    {
        return new Method\GetAccounts();
    }
    public function getClients() : Method\GetClients
    {
        return new Method\GetClients();
    }
    public function createClients() : Method\CreateClients
    {
        return new Method\CreateClients();
    }
    public function updateClients() : Method\UpdateClients
    {
        return new Method\UpdateClients();
    }
    public function deleteClients() : Method\DeleteClients
    {
        return new Method\DeleteClients();
    }
    public function getCampaigns() : Method\GetCampaigns
    {
        return new Method\GetCampaigns();
    }
    public function createCampaigns() : Method\CreateCampaigns
    {
        return new Method\CreateCampaigns();
    }
    public function updateCampaigns() : Method\UpdateCampaigns
    {
        return new Method\UpdateCampaigns();
    }
    public function deleteCampaigns() : Method\DeleteCampaigns
    {
        return new Method\DeleteCampaigns();
    }
    public function getAds() : Method\GetAds
    {
        return new Method\GetAds();
    }
    public function getAdsLayout() : Method\GetAdsLayout
    {
        return new Method\GetAdsLayout();
    }
    public function getAdsTargeting() : Method\GetAdsTargeting
    {
        return new Method\GetAdsTargeting();
    }
    public function createAds() : Method\CreateAds
    {
        return new Method\CreateAds();
    }
    public function updateAds() : Method\UpdateAds
    {
        return new Method\UpdateAds();
    }
    public function deleteAds() : Method\DeleteAds
    {
        return new Method\DeleteAds();
    }
    public function checkLink() : Method\CheckLink
    {
        return new Method\CheckLink();
    }
    public function getStatistics() : Method\GetStatistics
    {
        return new Method\GetStatistics();
    }
    public function getDemographics() : Method\GetDemographics
    {
        return new Method\GetDemographics();
    }
    public function getAdsPostsReach() : Method\GetAdsPostsReach
    {
        return new Method\GetAdsPostsReach();
    }
    public function getBudget() : Method\GetBudget
    {
        return new Method\GetBudget();
    }
    public function getOfficeUsers() : Method\GetOfficeUsers
    {
        return new Method\GetOfficeUsers();
    }
    public function addOfficeUsers() : Method\AddOfficeUsers
    {
        return new Method\AddOfficeUsers();
    }
    public function removeOfficeUsers() : Method\RemoveOfficeUsers
    {
        return new Method\RemoveOfficeUsers();
    }
    public function getTargetingStats() : Method\GetTargetingStats
    {
        return new Method\GetTargetingStats();
    }
    public function getSuggestions() : Method\GetSuggestions
    {
        return new Method\GetSuggestions();
    }
    public function getCategories() : Method\GetCategories
    {
        return new Method\GetCategories();
    }
    public function getUploadURL() : Method\GetUploadURL
    {
        return new Method\GetUploadURL();
    }
    public function getVideoUploadURL() : Method\GetVideoUploadURL
    {
        return new Method\GetVideoUploadURL();
    }
    public function getFloodStats() : Method\GetFloodStats
    {
        return new Method\GetFloodStats();
    }
    public function getRejectionReason() : Method\GetRejectionReason
    {
        return new Method\GetRejectionReason();
    }
    public function createTargetGroup() : Method\CreateTargetGroup
    {
        return new Method\CreateTargetGroup();
    }
    public function updateTargetGroup() : Method\UpdateTargetGroup
    {
        return new Method\UpdateTargetGroup();
    }
    public function deleteTargetGroup() : Method\DeleteTargetGroup
    {
        return new Method\DeleteTargetGroup();
    }
    public function getTargetGroups() : Method\GetTargetGroups
    {
        return new Method\GetTargetGroups();
    }
    public function importTargetContacts() : Method\ImportTargetContacts
    {
        return new Method\ImportTargetContacts();
    }
}