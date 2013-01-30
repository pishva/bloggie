<?php



/**
 * This class defines the structure of the 'user_access' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.bloggie.map
 */
class UserAccessTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'bloggie.map.UserAccessTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('user_access');
        $this->setPhpName('UserAccess');
        $this->setClassname('UserAccess');
        $this->setPackage('bloggie');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'username', 'id', true, null, null);
        $this->addColumn('access', 'Access', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Username', 'Username', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), null, null);
    } // buildRelations()

} // UserAccessTableMap
