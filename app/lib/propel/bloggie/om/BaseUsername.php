<?php


/**
 * Base class that represents a row from the 'username' table.
 *
 *
 *
 * @package    propel.generator.bloggie.om
 */
abstract class BaseUsername extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'UsernamePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        UsernamePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the enabled field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $enabled;

    /**
     * The value for the login_count field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $login_count;

    /**
     * The value for the failed_login_count field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $failed_login_count;

    /**
     * The value for the uname field.
     * @var        string
     */
    protected $uname;

    /**
     * The value for the password field.
     * @var        string
     */
    protected $password;

    /**
     * The value for the modified field.
     * @var        string
     */
    protected $modified;

    /**
     * The value for the note field.
     * @var        string
     */
    protected $note;

    /**
     * @var        PropelObjectCollection|UserAccess[] Collection to store aggregation of UserAccess objects.
     */
    protected $collUserAccesss;
    protected $collUserAccesssPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $userAccesssScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->enabled = true;
        $this->login_count = 0;
        $this->failed_login_count = 0;
    }

    /**
     * Initializes internal state of BaseUsername object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the [enabled] column value.
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Get the [login_count] column value.
     *
     * @return int
     */
    public function getLoginCount()
    {
        return $this->login_count;
    }

    /**
     * Get the [failed_login_count] column value.
     *
     * @return int
     */
    public function getFailedLoginCount()
    {
        return $this->failed_login_count;
    }

    /**
     * Get the [uname] column value.
     *
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Get the [password] column value.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the [optionally formatted] temporal [modified] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getModified($format = 'Y-m-d H:i:s')
    {
        if ($this->modified === null) {
            return null;
        }

        if ($this->modified === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->modified);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->modified, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [note] column value.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return Username The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = UsernamePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [name] column.
     *
     * @param string $v new value
     * @return Username The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = UsernamePeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [email] column.
     *
     * @param string $v new value
     * @return Username The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = UsernamePeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Sets the value of the [enabled] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Username The current object (for fluent API support)
     */
    public function setEnabled($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->enabled !== $v) {
            $this->enabled = $v;
            $this->modifiedColumns[] = UsernamePeer::ENABLED;
        }


        return $this;
    } // setEnabled()

    /**
     * Set the value of [login_count] column.
     *
     * @param int $v new value
     * @return Username The current object (for fluent API support)
     */
    public function setLoginCount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->login_count !== $v) {
            $this->login_count = $v;
            $this->modifiedColumns[] = UsernamePeer::LOGIN_COUNT;
        }


        return $this;
    } // setLoginCount()

    /**
     * Set the value of [failed_login_count] column.
     *
     * @param int $v new value
     * @return Username The current object (for fluent API support)
     */
    public function setFailedLoginCount($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        if ($this->failed_login_count !== $v) {
            $this->failed_login_count = $v;
            $this->modifiedColumns[] = UsernamePeer::FAILED_LOGIN_COUNT;
        }


        return $this;
    } // setFailedLoginCount()

    /**
     * Set the value of [uname] column.
     *
     * @param string $v new value
     * @return Username The current object (for fluent API support)
     */
    public function setUname($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->uname !== $v) {
            $this->uname = $v;
            $this->modifiedColumns[] = UsernamePeer::UNAME;
        }


        return $this;
    } // setUname()

    /**
     * Set the value of [password] column.
     *
     * @param string $v new value
     * @return Username The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = UsernamePeer::PASSWORD;
        }


        return $this;
    } // setPassword()

    /**
     * Sets the value of [modified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Username The current object (for fluent API support)
     */
    public function setModified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modified !== null || $dt !== null) {
            $currentDateAsString = ($this->modified !== null && $tmpDt = new DateTime($this->modified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->modified = $newDateAsString;
                $this->modifiedColumns[] = UsernamePeer::MODIFIED;
            }
        } // if either are not null


        return $this;
    } // setModified()

    /**
     * Set the value of [note] column.
     *
     * @param string $v new value
     * @return Username The current object (for fluent API support)
     */
    public function setNote($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->note !== $v) {
            $this->note = $v;
            $this->modifiedColumns[] = UsernamePeer::NOTE;
        }


        return $this;
    } // setNote()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->enabled !== true) {
                return false;
            }

            if ($this->login_count !== 0) {
                return false;
            }

            if ($this->failed_login_count !== 0) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->email = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->enabled = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->login_count = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->failed_login_count = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->uname = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->password = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->modified = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->note = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 10; // 10 = UsernamePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Username object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = UsernamePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collUserAccesss = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = UsernameQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                UsernamePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->userAccesssScheduledForDeletion !== null) {
                if (!$this->userAccesssScheduledForDeletion->isEmpty()) {
                    UserAccessQuery::create()
                        ->filterByPrimaryKeys($this->userAccesssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->userAccesssScheduledForDeletion = null;
                }
            }

            if ($this->collUserAccesss !== null) {
                foreach ($this->collUserAccesss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = UsernamePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . UsernamePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(UsernamePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(UsernamePeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(UsernamePeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(UsernamePeer::ENABLED)) {
            $modifiedColumns[':p' . $index++]  = '`enabled`';
        }
        if ($this->isColumnModified(UsernamePeer::LOGIN_COUNT)) {
            $modifiedColumns[':p' . $index++]  = '`login_count`';
        }
        if ($this->isColumnModified(UsernamePeer::FAILED_LOGIN_COUNT)) {
            $modifiedColumns[':p' . $index++]  = '`failed_login_count`';
        }
        if ($this->isColumnModified(UsernamePeer::UNAME)) {
            $modifiedColumns[':p' . $index++]  = '`uname`';
        }
        if ($this->isColumnModified(UsernamePeer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`password`';
        }
        if ($this->isColumnModified(UsernamePeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = '`modified`';
        }
        if ($this->isColumnModified(UsernamePeer::NOTE)) {
            $modifiedColumns[':p' . $index++]  = '`note`';
        }

        $sql = sprintf(
            'INSERT INTO `username` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`email`':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`enabled`':
                        $stmt->bindValue($identifier, (int) $this->enabled, PDO::PARAM_INT);
                        break;
                    case '`login_count`':
                        $stmt->bindValue($identifier, $this->login_count, PDO::PARAM_INT);
                        break;
                    case '`failed_login_count`':
                        $stmt->bindValue($identifier, $this->failed_login_count, PDO::PARAM_INT);
                        break;
                    case '`uname`':
                        $stmt->bindValue($identifier, $this->uname, PDO::PARAM_STR);
                        break;
                    case '`password`':
                        $stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                    case '`modified`':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_STR);
                        break;
                    case '`note`':
                        $stmt->bindValue($identifier, $this->note, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = UsernamePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collUserAccesss !== null) {
                    foreach ($this->collUserAccesss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = UsernamePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getEmail();
                break;
            case 3:
                return $this->getEnabled();
                break;
            case 4:
                return $this->getLoginCount();
                break;
            case 5:
                return $this->getFailedLoginCount();
                break;
            case 6:
                return $this->getUname();
                break;
            case 7:
                return $this->getPassword();
                break;
            case 8:
                return $this->getModified();
                break;
            case 9:
                return $this->getNote();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Username'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Username'][$this->getPrimaryKey()] = true;
        $keys = UsernamePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getEmail(),
            $keys[3] => $this->getEnabled(),
            $keys[4] => $this->getLoginCount(),
            $keys[5] => $this->getFailedLoginCount(),
            $keys[6] => $this->getUname(),
            $keys[7] => $this->getPassword(),
            $keys[8] => $this->getModified(),
            $keys[9] => $this->getNote(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collUserAccesss) {
                $result['UserAccesss'] = $this->collUserAccesss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = UsernamePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setEmail($value);
                break;
            case 3:
                $this->setEnabled($value);
                break;
            case 4:
                $this->setLoginCount($value);
                break;
            case 5:
                $this->setFailedLoginCount($value);
                break;
            case 6:
                $this->setUname($value);
                break;
            case 7:
                $this->setPassword($value);
                break;
            case 8:
                $this->setModified($value);
                break;
            case 9:
                $this->setNote($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = UsernamePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmail($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEnabled($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLoginCount($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setFailedLoginCount($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUname($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPassword($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setModified($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNote($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(UsernamePeer::DATABASE_NAME);

        if ($this->isColumnModified(UsernamePeer::ID)) $criteria->add(UsernamePeer::ID, $this->id);
        if ($this->isColumnModified(UsernamePeer::NAME)) $criteria->add(UsernamePeer::NAME, $this->name);
        if ($this->isColumnModified(UsernamePeer::EMAIL)) $criteria->add(UsernamePeer::EMAIL, $this->email);
        if ($this->isColumnModified(UsernamePeer::ENABLED)) $criteria->add(UsernamePeer::ENABLED, $this->enabled);
        if ($this->isColumnModified(UsernamePeer::LOGIN_COUNT)) $criteria->add(UsernamePeer::LOGIN_COUNT, $this->login_count);
        if ($this->isColumnModified(UsernamePeer::FAILED_LOGIN_COUNT)) $criteria->add(UsernamePeer::FAILED_LOGIN_COUNT, $this->failed_login_count);
        if ($this->isColumnModified(UsernamePeer::UNAME)) $criteria->add(UsernamePeer::UNAME, $this->uname);
        if ($this->isColumnModified(UsernamePeer::PASSWORD)) $criteria->add(UsernamePeer::PASSWORD, $this->password);
        if ($this->isColumnModified(UsernamePeer::MODIFIED)) $criteria->add(UsernamePeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(UsernamePeer::NOTE)) $criteria->add(UsernamePeer::NOTE, $this->note);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(UsernamePeer::DATABASE_NAME);
        $criteria->add(UsernamePeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Username (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setEnabled($this->getEnabled());
        $copyObj->setLoginCount($this->getLoginCount());
        $copyObj->setFailedLoginCount($this->getFailedLoginCount());
        $copyObj->setUname($this->getUname());
        $copyObj->setPassword($this->getPassword());
        $copyObj->setModified($this->getModified());
        $copyObj->setNote($this->getNote());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getUserAccesss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addUserAccess($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Username Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return UsernamePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new UsernamePeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('UserAccess' == $relationName) {
            $this->initUserAccesss();
        }
    }

    /**
     * Clears out the collUserAccesss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Username The current object (for fluent API support)
     * @see        addUserAccesss()
     */
    public function clearUserAccesss()
    {
        $this->collUserAccesss = null; // important to set this to null since that means it is uninitialized
        $this->collUserAccesssPartial = null;

        return $this;
    }

    /**
     * reset is the collUserAccesss collection loaded partially
     *
     * @return void
     */
    public function resetPartialUserAccesss($v = true)
    {
        $this->collUserAccesssPartial = $v;
    }

    /**
     * Initializes the collUserAccesss collection.
     *
     * By default this just sets the collUserAccesss collection to an empty array (like clearcollUserAccesss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initUserAccesss($overrideExisting = true)
    {
        if (null !== $this->collUserAccesss && !$overrideExisting) {
            return;
        }
        $this->collUserAccesss = new PropelObjectCollection();
        $this->collUserAccesss->setModel('UserAccess');
    }

    /**
     * Gets an array of UserAccess objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Username is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|UserAccess[] List of UserAccess objects
     * @throws PropelException
     */
    public function getUserAccesss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collUserAccesssPartial && !$this->isNew();
        if (null === $this->collUserAccesss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collUserAccesss) {
                // return empty collection
                $this->initUserAccesss();
            } else {
                $collUserAccesss = UserAccessQuery::create(null, $criteria)
                    ->filterByUsername($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collUserAccesssPartial && count($collUserAccesss)) {
                      $this->initUserAccesss(false);

                      foreach($collUserAccesss as $obj) {
                        if (false == $this->collUserAccesss->contains($obj)) {
                          $this->collUserAccesss->append($obj);
                        }
                      }

                      $this->collUserAccesssPartial = true;
                    }

                    return $collUserAccesss;
                }

                if($partial && $this->collUserAccesss) {
                    foreach($this->collUserAccesss as $obj) {
                        if($obj->isNew()) {
                            $collUserAccesss[] = $obj;
                        }
                    }
                }

                $this->collUserAccesss = $collUserAccesss;
                $this->collUserAccesssPartial = false;
            }
        }

        return $this->collUserAccesss;
    }

    /**
     * Sets a collection of UserAccess objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $userAccesss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Username The current object (for fluent API support)
     */
    public function setUserAccesss(PropelCollection $userAccesss, PropelPDO $con = null)
    {
        $userAccesssToDelete = $this->getUserAccesss(new Criteria(), $con)->diff($userAccesss);

        $this->userAccesssScheduledForDeletion = unserialize(serialize($userAccesssToDelete));

        foreach ($userAccesssToDelete as $userAccessRemoved) {
            $userAccessRemoved->setUsername(null);
        }

        $this->collUserAccesss = null;
        foreach ($userAccesss as $userAccess) {
            $this->addUserAccess($userAccess);
        }

        $this->collUserAccesss = $userAccesss;
        $this->collUserAccesssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related UserAccess objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related UserAccess objects.
     * @throws PropelException
     */
    public function countUserAccesss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collUserAccesssPartial && !$this->isNew();
        if (null === $this->collUserAccesss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collUserAccesss) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getUserAccesss());
            }
            $query = UserAccessQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByUsername($this)
                ->count($con);
        }

        return count($this->collUserAccesss);
    }

    /**
     * Method called to associate a UserAccess object to this object
     * through the UserAccess foreign key attribute.
     *
     * @param    UserAccess $l UserAccess
     * @return Username The current object (for fluent API support)
     */
    public function addUserAccess(UserAccess $l)
    {
        if ($this->collUserAccesss === null) {
            $this->initUserAccesss();
            $this->collUserAccesssPartial = true;
        }
        if (!in_array($l, $this->collUserAccesss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddUserAccess($l);
        }

        return $this;
    }

    /**
     * @param	UserAccess $userAccess The userAccess object to add.
     */
    protected function doAddUserAccess($userAccess)
    {
        $this->collUserAccesss[]= $userAccess;
        $userAccess->setUsername($this);
    }

    /**
     * @param	UserAccess $userAccess The userAccess object to remove.
     * @return Username The current object (for fluent API support)
     */
    public function removeUserAccess($userAccess)
    {
        if ($this->getUserAccesss()->contains($userAccess)) {
            $this->collUserAccesss->remove($this->collUserAccesss->search($userAccess));
            if (null === $this->userAccesssScheduledForDeletion) {
                $this->userAccesssScheduledForDeletion = clone $this->collUserAccesss;
                $this->userAccesssScheduledForDeletion->clear();
            }
            $this->userAccesssScheduledForDeletion[]= clone $userAccess;
            $userAccess->setUsername(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->name = null;
        $this->email = null;
        $this->enabled = null;
        $this->login_count = null;
        $this->failed_login_count = null;
        $this->uname = null;
        $this->password = null;
        $this->modified = null;
        $this->note = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep) {
            if ($this->collUserAccesss) {
                foreach ($this->collUserAccesss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        if ($this->collUserAccesss instanceof PropelCollection) {
            $this->collUserAccesss->clearIterator();
        }
        $this->collUserAccesss = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(UsernamePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
