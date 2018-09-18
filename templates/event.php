<?php 
  class EventTemplate {
    public function getEventHtml($event) {
      require_once(__DIR__.'/../vendor/autoload.php');
      
      $eventTemplate = ['eventTemplate' => self::getEventTemplate()];
      $loader = new \Twig_Loader_Array($eventTemplate);
      $twig = new Twig_Environment($loader);
      
      $eventHtml = $twig->render('eventTemplate', array('event' => $event));
      return $eventHtml;
    }

    private function getEventTemplate() {
      $db = JFactory::getDbo();
      $query = $db->getQuery(true)
        ->select('*')
        ->from($db->quoteName('#__epkalenteriEventTemplate'));

      $db->setQuery($query);
      $results = $db->loadObjectList();
      return $results[0]->template;
    }
  }
?>