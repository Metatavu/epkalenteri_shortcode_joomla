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

  - **include** Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
  - **Search** (case insensitive) through all multilingual text fields (name, description, short_description, info_url) of an event (every language). Multilingual fields contain the text that users are expected to care about, thus multilinguality is useful discriminator. (optional)
  - **lastModifiedSince** Search for events that have been modified since or at this time. (optional)
  - **start** Search for events beginning or ending after this time. Dates can be specified using ISO 8601 (2016-01-12) and additionally today. (optional)
  - **end** Search for events beginning or ending before this time. Dates can be specified using ISO 8601 (2016-01-12) and additionally today. (optional)
  - **bbox** Search for events that are within this bounding box. Decimal coordinates are given in order west, south, east, north. Period is used as decimal separator. (optional)
  - **dataSource** Search for events that come from the specified source system (optional)
  - **location** Search for events in given locations as specified by id. Multiple ids are separated by comma (optional)
  - **showAll** Show all events (optional) (optional)
  - **division** You may filter places by specific OCD division id, or by division name. The latter query checks all divisions with the name, regardless of division type. (optional)
  - **keyword** Search for events with given keywords as specified by id. Multiple ids are separated by comma (optional)
  - **recurring** Search for events based on whether they are part of recurring event set. super specifies recurring, while sub is non-recurring. (optional)
  - **minDuration** Search for events that are longer than given time in seconds (optional)
  - **maxDuration** Search for events that are shorter than given time in seconds (optional)
  - **publisher** Search for events published by the given organization (optional)
  - **sort** Sort the returned events in the given order. Possible sorting criteria are start_time, end_time, days_left and last_modified_time. The default ordering is -last_modified_time. (optional)
  - **page** request particular page in paginated results (optional)
  - **pageSize** request that server delivers page_size results in response (optional)
  - **addressLocalityFi** Search for events in given address localities (fi). Multiple localities can be entered by separating them by a comma (optional)
  - **addressLocalitySv** Search for events in given address localities (sv). Multiple localities can be entered by separating them by a comma (optional)
  - **addressLocalityEn** Search for events in given address localities (en). Multiple localities can be entered by separating them by a comma (optional)
  - **publicationStatus** Filter events by publication status (either draft or public) (optional)