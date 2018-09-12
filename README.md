# epkalenteri_shortcode_joomla

# Requirements
Before using **make sure that you have installed _com_epkalenteri_ component**. You can find that from [here](https://github.com/Metatavu/com_epkalenteri)

# Installation
  1. Download latest version of the plugin from [here](https://github.com/Metatavu/epkalenteri_shortcode_joomla/releases)
  2. In Joomla! administrator page go find "Install Extensions" link and click it
  3. Select "Install" tab
  4. Drag and drop the downloaded zip file to the installation area. Or click browse for file and find and select the zip file
  5. Change to "Manage" tab and find the shortcode plugin. Click enable extension.

# Usage
  You can insert list of events to article by using shortcode [**epkalenteri**].

## Parameters
  You can pass parameters to the shortcode like this: [epkalenteri pageSize="5" sort="start_time"]

### Available parameters
  You can use all parameters that linkedevents eventList method accepts. Current parameters are:

  - string[] $include Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
  - string $text Search (case insensitive) through all multilingual text fields (name, description, short_description, info_url) of an event (every language). Multilingual fields contain the text that users are expected to care about, thus multilinguality is useful discriminator. (optional)
  - string $lastModifiedSince Search for events that have been modified since or at this time. (optional)
  - \DateTime $start Search for events beginning or ending after this time. Dates can be specified using ISO 8601 (\&quot;2016-01-12\&quot;) and additionally \&quot;today\&quot;. (optional)
  - \DateTime $end Search for events beginning or ending before this time. Dates can be specified using ISO 8601 (\&quot;2016-01-12\&quot;) and additionally \&quot;today\&quot;. (optional)
  - string[] $bbox Search for events that are within this bounding box. Decimal coordinates are given in order west, south, east, north. Period is used as decimal separator. (optional)
  - string $dataSource Search for events that come from the specified source system (optional)
  - int[] $location Search for events in given locations as specified by id. Multiple ids are separated by comma (optional)
  - bool $showAll Show all events (optional) (optional)
  - string $division You may filter places by specific OCD division id, or by division name. The latter query checks all divisions with the name, regardless of division type. (optional)
  - string $keyword Search for events with given keywords as specified by id. Multiple ids are separated by comma (optional)
  - string $recurring Search for events based on whether they are part of recurring event set. &#39;super&#39; specifies recurring, while &#39;sub&#39; is non-recurring. (optional)
  - int $minDuration Search for events that are longer than given time in seconds (optional)
  - int $maxDuration Search for events that are shorter than given time in seconds (optional)
  - string $publisher Search for events published by the given organization (optional)
  - string $sort Sort the returned events in the given order. Possible sorting criteria are &#39;start_time&#39;, &#39;end_time&#39;, &#39;days_left&#39; and &#39;last_modified_time&#39;. The default ordering is &#39;-last_modified_time&#39;. (optional)
  - int $page request particular page in paginated results (optional)
  - int $pageSize request that server delivers page_size results in response (optional)
  - string $addressLocalityFi Search for events in given address localities (fi). Multiple localities can be entered by separating them by a comma (optional)
  - string $addressLocalitySv Search for events in given address localities (sv). Multiple localities can be entered by separating them by a comma (optional)
  - string $addressLocalityEn Search for events in given address localities (en). Multiple localities can be entered by separating them by a comma (optional)
  - string $publicationStatus Filter events by publication status (either draft or public) (optional)