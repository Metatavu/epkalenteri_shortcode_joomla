<?php 
  defined('_JEXEC') or die;
  require_once(__DIR__ . '/linkedevents-client-php/autoload.php');

  class LinkedeventsController {
      public function __construct () {
      }

      /**
       * Get events
       * 
       * @param $params api call parameters
       * @return Array events
       */
      public function getEvents ($params) {
        $eventApi = self::getEventApi();
        $include = self::parameterExists($params, 'include') ? $params['include'] : null; 
        $text = self::parameterExists($params, 'text') ? $params['text'] : null; 
        $lastModifiedSince = self::parameterExists($params, 'lastModifiedSince') ? $params['lastModifiedSince'] : null; 
        $start = self::parameterExists($params, 'start') ? $params['start'] : null;
        $end = self::parameterExists($params, 'end') ? $params['end'] : null; 
        $bbox = self::parameterExists($params, 'bbox') ? $params['bbox'] : null; 
        $dataSource = self::parameterExists($params, 'dataSource') ? $params['dataSource'] : null; 
        $location = self::parameterExists($params, 'location') ? $params['location'] : null;
        $showAll = self::parameterExists($params, 'showAll') ? $params['showAll'] : null;
        $division = self::parameterExists($params, 'division') ? $params['division'] : null; 
        $keyword = self::parameterExists($params, 'keyword') ? $params['keyword'] : null; 
        $recurring = self::parameterExists($params, 'recurring') ? $params['recurring'] : null; 
        $minDuration = self::parameterExists($params, 'minDuration') ? $params['minDuration'] : null;
        $maxDuration = self::parameterExists($params, 'maxDuration') ? $params['maxDuration'] : null;
        $publisher = self::parameterExists($params, 'publisher') ? $params['publisher'] : null; 
        $sort = self::parameterExists($params, 'sort') ? $params['sort'] : null; 
        $page = self::parameterExists($params, 'page') ? $params['page'] : null; 
        $pageSize = self::parameterExists($params, 'pageSize') ? $params['pageSize'] : null;
        $addressLocalityFi = self::parameterExists($params, 'addressLocalityFi') ? $params['addressLocalityFi'] : null; 
        $addressLocalitySv = self::parameterExists($params, 'addressLocalitySv') ? $params['addressLocalitySv'] : null; 
        $addressLocalityEn = self::parameterExists($params, 'addressLocalityEn') ? $params['addressLocalityEn'] : null; 
        $publicationStatus = self::parameterExists($params, 'publicationStatus') ? $params['publicationStatus'] : null; 
        
        $events = $eventApi->eventList($include, $text, $lastModifiedSince, $start, $end, $bbox, $dataSource, $location, $showAll, $division, $keyword, $recurring, $minDuration, $maxDuration, $publisher, $sort, $page, $pageSize, $addressLocalityFi, $addressLocalitySv, $addressLocalityEn, $publicationStatus);
  
        return $events;
      }

      private static function parameterExists ($params, $parameter) {
        if (array_key_exists($parameter, $params)) {
          return true;
        }
        return false;
      }

      /**
       * Constructs EventApi instance
       * 
       * @return \Metatavu\LinkedEvents\Client\EventApi event api
       */
      public static function getEventApi() {
        $client = self::getClient();
        return new \Metatavu\LinkedEvents\Client\EventApi($client);
      }

      /**
       * Creates initialize ApiClient
       * 
       * @return \Metatavu\LinkedEvents\ApiClient api client
       */
      private static function getClient() {
        return new \Metatavu\LinkedEvents\ApiClient(self::getConfiguration());
      }

      /**
       * Creates configuration
       * 
       * @return \Metatavu\LinkedEvents\Configuration configuration
       */
      private static function getConfiguration() {
        $configuration = new \Metatavu\LinkedEvents\Configuration();
        $result = $configuration->getDefaultConfiguration();
        $result->setHost(self::getApiUrl());
        return $result;
      }

      /**
       * Get apiurl
       * 
       * @return String apiurl
       */
      private static function getApiUrl () {
        $linkedeventsSettings = self::getLinkedeventsSettings();
        return $linkedeventsSettings[0]->apiurl;
      }

      /**
       * Get datasource
       * 
       * @return String datasource
       */
      private static function getDatasource () {
        $linkedeventsSettings = self::getLinkedeventsSettings();
        return $linkedeventsSettings[0]->datasource;
      }

      /**
       * Get organization
       * 
       * @return String organization
       */
      private static function getOrganization () {
        $linkedeventsSettings = self::getLinkedeventsSettings();
        return $linkedeventsSettings[0]->organization;
      }

      /**
       * Get apikey
       * 
       * @return String apikey
       */
      private static function getApiKey () {
        $linkedeventsSettings = self::getLinkedeventsSettings();
        return $linkedeventsSettings[0]->apikey;
      }

      /**
       * Get linkedevent settings from db
       * 
       * @return Array settings
       */
      private static function getLinkedeventsSettings () {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true)
          ->select('*')
          ->from($db->quoteName('#__epkalenteriConfig'));

        $db->setQuery($query);
        return $db->loadObjectList();
      }
  }
?>