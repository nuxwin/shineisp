<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Statuses', 'doctrine');

/**
 * BaseStatuses
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $status_id
 * @property string $code
 * @property string $status
 * @property string $section
 * @property boolean $public
 * @property Doctrine_Collection $CancelRequests
 * @property Doctrine_Collection $DomainsProfiles
 * @property Doctrine_Collection $Customers
 * @property Doctrine_Collection $Domains
 * @property Doctrine_Collection $DomainsTasks
 * @property Doctrine_Collection $Orders
 * @property Doctrine_Collection $OrdersItems
 * @property Doctrine_Collection $PanelsActions
 * @property Doctrine_Collection $PurchaseInvoices
 * @property Doctrine_Collection $Servers
 * @property Doctrine_Collection $StatusHistory
 * @property Doctrine_Collection $Tickets
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStatuses extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('statuses');
        $this->hasColumn('status_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('code', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '200',
             ));
        $this->hasColumn('status', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '200',
             ));
        $this->hasColumn('section', 'string', 200, array(
             'type' => 'string',
             'notnull' => false,
             'length' => '200',
             ));
        $this->hasColumn('public', 'boolean', 25, array(
             'type' => 'boolean',
             'default' => 1,
             'length' => '25',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('CancelRequests', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));

        $this->hasMany('DomainsProfiles', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));

        $this->hasMany('Customers', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));

        $this->hasMany('Domains', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));

        $this->hasMany('DomainsTasks', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));

        $this->hasMany('Orders', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));

        $this->hasMany('OrdersItems', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));

        $this->hasMany('PanelsActions', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));

        $this->hasMany('PurchaseInvoices', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));

        $this->hasMany('Servers', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));

        $this->hasMany('StatusHistory', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));

        $this->hasMany('Tickets', array(
             'local' => 'status_id',
             'foreign' => 'status_id'));
    }
}