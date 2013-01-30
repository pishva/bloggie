<?php



/**
 * This class defines the structure of the 'username' table.
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
class UsernameTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'bloggie.map.UsernameTableMap';

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
        $this->setName('username');
        $this->setPhpName('Username');
        $this->setClassname('Username');
        $this->setPackage('bloggie');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 255, null);
        $this->addColumn('enabled', 'Enabled', 'BOOLEAN', true, 1, true);
        $this->addColumn('login_count', 'LoginCount', 'INTEGER', true, null, 0);
        $this->addColumn('failed_login_count', 'FailedLoginCount', 'INTEGER', true, null, 0);
        $this->addColumn('uname', 'Uname', 'VARCHAR', true, 255, null);
        $this->addColumn('password', 'Password', 'VARCHAR', true, 255, null);
        $this->addColumn('modified', 'Modified', 'TIMESTAMP', true, null, null);
        $this->addColumn('note', 'Note', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('UserAccess', 'UserAccess', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null, 'UserAccesss');
    } // buildRelations()

} // UsernameTableMap
