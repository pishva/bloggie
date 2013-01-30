<?php


/**
 * Base static class for performing query and update operations on the 'username' table.
 *
 *
 *
 * @package propel.generator.bloggie.om
 */
abstract class BaseUsernamePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'bloggie';

    /** the table name for this class */
    const TABLE_NAME = 'username';

    /** the related Propel class for this table */
    const OM_CLASS = 'Username';

    /** the related TableMap class for this table */
    const TM_CLASS = 'UsernameTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the id field */
    const ID = 'username.id';

    /** the column name for the name field */
    const NAME = 'username.name';

    /** the column name for the email field */
    const EMAIL = 'username.email';

    /** the column name for the enabled field */
    const ENABLED = 'username.enabled';

    /** the column name for the login_count field */
    const LOGIN_COUNT = 'username.login_count';

    /** the column name for the failed_login_count field */
    const FAILED_LOGIN_COUNT = 'username.failed_login_count';

    /** the column name for the uname field */
    const UNAME = 'username.uname';

    /** the column name for the password field */
    const PASSWORD = 'username.password';

    /** the column name for the modified field */
    const MODIFIED = 'username.modified';

    /** the column name for the note field */
    const NOTE = 'username.note';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Username objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Username[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. UsernamePeer::$fieldNames[UsernamePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'Email', 'Enabled', 'LoginCount', 'FailedLoginCount', 'Uname', 'Password', 'Modified', 'Note', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'name', 'email', 'enabled', 'loginCount', 'failedLoginCount', 'uname', 'password', 'modified', 'note', ),
        BasePeer::TYPE_COLNAME => array (UsernamePeer::ID, UsernamePeer::NAME, UsernamePeer::EMAIL, UsernamePeer::ENABLED, UsernamePeer::LOGIN_COUNT, UsernamePeer::FAILED_LOGIN_COUNT, UsernamePeer::UNAME, UsernamePeer::PASSWORD, UsernamePeer::MODIFIED, UsernamePeer::NOTE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NAME', 'EMAIL', 'ENABLED', 'LOGIN_COUNT', 'FAILED_LOGIN_COUNT', 'UNAME', 'PASSWORD', 'MODIFIED', 'NOTE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'email', 'enabled', 'login_count', 'failed_login_count', 'uname', 'password', 'modified', 'note', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. UsernamePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'Email' => 2, 'Enabled' => 3, 'LoginCount' => 4, 'FailedLoginCount' => 5, 'Uname' => 6, 'Password' => 7, 'Modified' => 8, 'Note' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'name' => 1, 'email' => 2, 'enabled' => 3, 'loginCount' => 4, 'failedLoginCount' => 5, 'uname' => 6, 'password' => 7, 'modified' => 8, 'note' => 9, ),
        BasePeer::TYPE_COLNAME => array (UsernamePeer::ID => 0, UsernamePeer::NAME => 1, UsernamePeer::EMAIL => 2, UsernamePeer::ENABLED => 3, UsernamePeer::LOGIN_COUNT => 4, UsernamePeer::FAILED_LOGIN_COUNT => 5, UsernamePeer::UNAME => 6, UsernamePeer::PASSWORD => 7, UsernamePeer::MODIFIED => 8, UsernamePeer::NOTE => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NAME' => 1, 'EMAIL' => 2, 'ENABLED' => 3, 'LOGIN_COUNT' => 4, 'FAILED_LOGIN_COUNT' => 5, 'UNAME' => 6, 'PASSWORD' => 7, 'MODIFIED' => 8, 'NOTE' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'email' => 2, 'enabled' => 3, 'login_count' => 4, 'failed_login_count' => 5, 'uname' => 6, 'password' => 7, 'modified' => 8, 'note' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = UsernamePeer::getFieldNames($toType);
        $key = isset(UsernamePeer::$fieldKeys[$fromType][$name]) ? UsernamePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(UsernamePeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, UsernamePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return UsernamePeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. UsernamePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(UsernamePeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(UsernamePeer::ID);
            $criteria->addSelectColumn(UsernamePeer::NAME);
            $criteria->addSelectColumn(UsernamePeer::EMAIL);
            $criteria->addSelectColumn(UsernamePeer::ENABLED);
            $criteria->addSelectColumn(UsernamePeer::LOGIN_COUNT);
            $criteria->addSelectColumn(UsernamePeer::FAILED_LOGIN_COUNT);
            $criteria->addSelectColumn(UsernamePeer::UNAME);
            $criteria->addSelectColumn(UsernamePeer::PASSWORD);
            $criteria->addSelectColumn(UsernamePeer::MODIFIED);
            $criteria->addSelectColumn(UsernamePeer::NOTE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.enabled');
            $criteria->addSelectColumn($alias . '.login_count');
            $criteria->addSelectColumn($alias . '.failed_login_count');
            $criteria->addSelectColumn($alias . '.uname');
            $criteria->addSelectColumn($alias . '.password');
            $criteria->addSelectColumn($alias . '.modified');
            $criteria->addSelectColumn($alias . '.note');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(UsernamePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsernamePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(UsernamePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 Username
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = UsernamePeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return UsernamePeer::populateObjects(UsernamePeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            UsernamePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(UsernamePeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      Username $obj A Username object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            UsernamePeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Username object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Username) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Username object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(UsernamePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Username Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(UsernamePeer::$instances[$key])) {
                return UsernamePeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool()
    {
        UsernamePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to username
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = UsernamePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = UsernamePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = UsernamePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                UsernamePeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Username object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = UsernamePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = UsernamePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + UsernamePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = UsernamePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            UsernamePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(UsernamePeer::DATABASE_NAME)->getTable(UsernamePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseUsernamePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseUsernamePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new UsernameTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass()
    {
        return UsernamePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Username or Criteria object.
     *
     * @param      mixed $values Criteria or Username object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Username object
        }

        if ($criteria->containsKey(UsernamePeer::ID) && $criteria->keyContainsValue(UsernamePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.UsernamePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(UsernamePeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Username or Criteria object.
     *
     * @param      mixed $values Criteria or Username object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(UsernamePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(UsernamePeer::ID);
            $value = $criteria->remove(UsernamePeer::ID);
            if ($value) {
                $selectCriteria->add(UsernamePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(UsernamePeer::TABLE_NAME);
            }

        } else { // $values is Username object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(UsernamePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the username table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(UsernamePeer::TABLE_NAME, $con, UsernamePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UsernamePeer::clearInstancePool();
            UsernamePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Username or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Username object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            UsernamePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Username) { // it's a model object
            // invalidate the cache for this single object
            UsernamePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(UsernamePeer::DATABASE_NAME);
            $criteria->add(UsernamePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                UsernamePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(UsernamePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            UsernamePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Username object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Username $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(UsernamePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(UsernamePeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(UsernamePeer::DATABASE_NAME, UsernamePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Username
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = UsernamePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(UsernamePeer::DATABASE_NAME);
        $criteria->add(UsernamePeer::ID, $pk);

        $v = UsernamePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Username[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(UsernamePeer::DATABASE_NAME);
            $criteria->add(UsernamePeer::ID, $pks, Criteria::IN);
            $objs = UsernamePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseUsernamePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseUsernamePeer::buildTableMap();

