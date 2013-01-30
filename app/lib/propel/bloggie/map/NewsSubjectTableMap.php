<?php



/**
 * This class defines the structure of the 'news_subject' table.
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
class NewsSubjectTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'bloggie.map.NewsSubjectTableMap';

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
        $this->setName('news_subject');
        $this->setPhpName('NewsSubject');
        $this->setClassname('NewsSubject');
        $this->setPackage('bloggie');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('is_desc', 'IsDesc', 'BOOLEAN', true, 1, null);
        $this->addColumn('short_desc', 'ShortDesc', 'VARCHAR', true, 1000, null);
        $this->addColumn('desc', 'Desc', 'LONGVARCHAR', true, null, null);
        $this->addColumn('prio', 'Prio', 'INTEGER', true, null, null);
        $this->addColumn('category', 'Category', 'VARCHAR', true, 255, null);
        $this->addColumn('auter', 'Auter', 'VARCHAR', false, 255, null);
        $this->addColumn('date', 'Date', 'VARCHAR', true, 30, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // NewsSubjectTableMap
