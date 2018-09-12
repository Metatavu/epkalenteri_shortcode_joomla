<?php 
    defined('_JEXEC') or die;
    require_once(__DIR__ . '/linkedevents-controller.php');

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
            $html = '<ul class="epkalenteri-events-list">';

            foreach ($events['data'] as $event) {
                $html = $html . '<li class="epkalenteri-events-list-item">';
                $html = $html . sprintf('<a href="%s" target="_blank"> %s </a> </li>', $event['infoUrl']['fi'], $event['name']['fi']);
            }

            $html = $html . '</ul>';
            return $html;
        }
    }
?>