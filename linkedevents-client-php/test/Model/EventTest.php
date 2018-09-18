<?php
/**
 * EventTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  LinkedEvents
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Linked Events information API
 *
 * Linked Events provides categorized data on events and places using JSON-LD format.  Events can be searched by date and location. Location can be exact address or larger area such as neighbourhood or borough  JSON-LD format is streamlined using include mechanism. API users can request that certain fields are included directly into the result, instead of being hyperlinks to objects.  Several fields are multilingual. These are implemented as object with each language variant as property. In this specification each multilingual field has (fi,sv,en) property triplet as example.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace LinkedEvents;

/**
 * EventTest Class Doc Comment
 *
 * @category    Class */
// * @description Describes the actual events. Linked events API supports organizing events into hierarchies. This is implemented with collection events called \&quot;super events\&quot;. Super events are normal event objects, that reference contained events in \&quot;sub_events\&quot; property. Currently there are two major use cases: events such as \&quot;Helsinki Festival\&quot;, which consist of unique events over a span of time and recurring events such as theatrical productions with multiple showings. It is implementation dependent how the grouping of events is done. It should be noted that grouping might be automatic based on eg. event name and thus group unrelated events together and miss related events. Users of data are advised to prepare for this.
/**
 * @package     LinkedEvents
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EventTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "Event"
     */
    public function testEvent()
    {

    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {

    }

    /**
     * Test attribute "location"
     */
    public function testPropertyLocation()
    {

    }

    /**
     * Test attribute "keywords"
     */
    public function testPropertyKeywords()
    {

    }

    /**
     * Test attribute "inLanguage"
     */
    public function testPropertyInLanguage()
    {

    }

    /**
     * Test attribute "superEvent"
     */
    public function testPropertySuperEvent()
    {

    }

    /**
     * Test attribute "superEventType"
     */
    public function testPropertySuperEventType()
    {

    }

    /**
     * Test attribute "eventStatus"
     */
    public function testPropertyEventStatus()
    {

    }

    /**
     * Test attribute "publicationStatus"
     */
    public function testPropertyPublicationStatus()
    {

    }

    /**
     * Test attribute "externalLinks"
     */
    public function testPropertyExternalLinks()
    {

    }

    /**
     * Test attribute "offers"
     */
    public function testPropertyOffers()
    {

    }

    /**
     * Test attribute "subEvents"
     */
    public function testPropertySubEvents()
    {

    }

    /**
     * Test attribute "customData"
     */
    public function testPropertyCustomData()
    {

    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {

    }

    /**
     * Test attribute "images"
     */
    public function testPropertyImages()
    {

    }

    /**
     * Test attribute "createdTime"
     */
    public function testPropertyCreatedTime()
    {

    }

    /**
     * Test attribute "lastModifiedTime"
     */
    public function testPropertyLastModifiedTime()
    {

    }

    /**
     * Test attribute "infoUrl"
     */
    public function testPropertyInfoUrl()
    {

    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {

    }

    /**
     * Test attribute "shortDescription"
     */
    public function testPropertyShortDescription()
    {

    }

    /**
     * Test attribute "datePublished"
     */
    public function testPropertyDatePublished()
    {

    }

    /**
     * Test attribute "provider"
     */
    public function testPropertyProvider()
    {

    }

    /**
     * Test attribute "locationExtraInfo"
     */
    public function testPropertyLocationExtraInfo()
    {

    }

    /**
     * Test attribute "startTime"
     */
    public function testPropertyStartTime()
    {

    }

    /**
     * Test attribute "endTime"
     */
    public function testPropertyEndTime()
    {

    }

    /**
     * Test attribute "audience"
     */
    public function testPropertyAudience()
    {

    }

    /**
     * Test attribute "dataSource"
     */
    public function testPropertyDataSource()
    {

    }

    /**
     * Test attribute "createdBy"
     */
    public function testPropertyCreatedBy()
    {

    }

    /**
     * Test attribute "lastModifiedBy"
     */
    public function testPropertyLastModifiedBy()
    {

    }

    /**
     * Test attribute "publisher"
     */
    public function testPropertyPublisher()
    {

    }

}
