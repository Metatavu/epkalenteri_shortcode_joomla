<?php 
    defined('_JEXEC') or die;
    require_once(__DIR__ . '/linkedevents-controller.php');
    $document = JFactory::getDocument();
    $stylesheetUrl = JUri::base() . 'plugins/content/epkalenteri_shortcode_joomla/css/styles.css'; 
    $document->addStyleSheet($stylesheetUrl);

    class plgContentEpkalenteri_shortcode_joomla extends JPlugin {
        protected $autoloadLanguage = true;

        public function onContentPrepare($context, &$article, &$params, $limitstart) {
            $shortCodeParameters = self::processShortcode($article->text);
            $linkedEventsController = new LinkedeventsController();
            $events = $linkedEventsController::getEvents($shortCodeParameters);
            $html = self::buildHtml($events);

            $article->text = preg_replace('/\[epkalenteri(.*?)\]/', $html, $article->text);
            return true;
        }

        private function processShortcode ($content) {
            $regex = '/(\w+)\s*=\s*"(.*?)"/';
            $pattern = '/\[epkalenteri(.*?)\]/';
            preg_match_all($regex, $content, $matches);

            $shortcodeAttrs = array();
            for ($i = 0; $i < count($matches[1]); $i++) {
                $shortcodeAttrs[$matches[1][$i]] = $matches[2][$i];
            }

            return $shortcodeAttrs;
        }

        private function buildHtml ($events) {
            require_once(__DIR__.'/templates/event.php');
            $eventTemplate = new EventTemplate();
            $html = '<div class="epkalenteri-events-list">';

            foreach ($events['data'] as $event) {
                $html = $html . $eventTemplate->getEventHtml($event);
            }

            $html = $html . '</div>';
            return $html;
        }
    }
?>