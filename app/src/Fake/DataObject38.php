<?php


namespace MyProject\Fake;

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Permission;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TabSet;

class DataObject38 extends DataObject
{
    /**
     * @var array
     */
    private static $db = [
        'Field1' => 'Varchar',
        'Field2' => 'Text',
        'Field3' => 'Int',
        'Field4' => 'Boolean',
        'Field5' => 'Currency',
        'Field6' => 'Varchar',
        'Field7' => 'Text',
        'Field8' => 'Int',
        'Field9' => 'Boolean',
        'Field10' => 'Currency',
        'Field11' => 'Varchar',
        'Field12' => 'Text',
        'Field13' => 'Int',
        'Field14' => 'Boolean',
        'Field15' => 'Currency',

    ];

    private static $has_one = [
        'DataObject37' => DataObject37::class,
        'DataObject36' => DataObject36::class,
        'DataObject35' => DataObject35::class,
        'DataObject34' => DataObject34::class,

    ];

    private static $extensions = [
        'SilverStripe\\Versioned\\Versioned',
    ];

    /**
     * @var array
     */
    private static $summary_fields = [

    ];

    /**
     * @var string
     */
    private static $table_name = 'DataObject38';

    /**
     * @var string
     */
    private static $singular_name = 'DataObject38';

    /**
     * @var string
     */
    private static $plural_name = 'DataObject38s';

    /**
     * @var string
     */
    private static $default_sort = 'ID ASC';

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canCreate($member = null, $context = [])
    {
        return Permission::checkMember($member, 'CMS_ACCESS_CMSMain');
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canEdit($member = null, $context = [])
    {
        return Permission::checkMember($member, 'CMS_ACCESS_CMSMain');
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canDelete($member = null, $context = [])
    {
        return Permission::checkMember($member, 'CMS_ACCESS_CMSMain');
    }

    /**
     * @param null
     * @param array
     * @return bool
     */
    public function canView($member = null, $context = [])
    {
        return true;
    }

}
