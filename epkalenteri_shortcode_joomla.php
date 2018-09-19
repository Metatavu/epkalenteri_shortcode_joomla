<?php 
    defined('_JEXEC') or die;
    $document = JFactory::getDocument();
    $stylesheetUrl = JUri::base() . 'plugins/content/epkalenteri_shortcode_joomla/css/styles.css'; 
    $scriptUrl = JUri::base() . 'plugins/content/epkalenteri_shortcode_joomla/js/events.js'; 
    $document->addStyleSheet($stylesheetUrl);
    $document->addScript($scriptUrl, $type = "text/javascript", $defer = true, $async = false);

    class plgContentEpkalenteri_shortcode_joomla extends JPlugin {
        protected $autoloadLanguage = true;

        public function onContentPrepare($context, &$article, &$params, $limitstart) {
            $shortCodeParameters = self::processShortcode($article->text);
            $parameters = json_encode($shortCodeParameters);
            $loaderUrl = JUri::base() . 'plugins/content/epkalenteri_shortcode_joomla/img/loader.gif';
            $loader = '<img src="'.$loaderUrl.'" alt="Loading..." class="events-loading"/>';
            
            $div = "<div class='epkalenteri-events-list-container' data-epkalenteri-params='$parameters'>$loader</div>";
            $article->text = preg_replace('/\[epkalenteri(.*?)\]/', $div, $article->text);
            return true;
        }

        private static function processShortcode ($content) {
            $regex = '/(\w+)\s*=\s*"(.*?)"/';
            $pattern = '/\[epkalenteri(.*?)\]/';
            preg_match_all($regex, $content, $matches);

            $shortcodeAttrs = array();
            for ($i = 0; $i < count($matches[1]); $i++) {
                $shortcodeAttrs[$matches[1][$i]] = $matches[2][$i];
            }

            return $shortcodeAttrs;
        }
    }
?>