<?php


/**
 * Base class that represents a query for the 'username' table.
 *
 *
 *
 * @method UsernameQuery orderById($order = Criteria::ASC) Order by the id column
 * @method UsernameQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method UsernameQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method UsernameQuery orderByEnabled($order = Criteria::ASC) Order by the enabled column
 * @method UsernameQuery orderByLoginCount($order = Criteria::ASC) Order by the login_count column
 * @method UsernameQuery orderByFailedLoginCount($order = Criteria::ASC) Order by the failed_login_count column
 * @method UsernameQuery orderByUname($order = Criteria::ASC) Order by the uname column
 * @method UsernameQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method UsernameQuery orderByModified($order = Criteria::ASC) Order by the modified column
 * @method UsernameQuery orderByNote($order = Criteria::ASC) Order by the note column
 *
 * @method UsernameQuery groupById() Group by the id column
 * @method UsernameQuery groupByName() Group by the name column
 * @method UsernameQuery groupByEmail() Group by the email column
 * @method UsernameQuery groupByEnabled() Group by the enabled column
 * @method UsernameQuery groupByLoginCount() Group by the login_count column
 * @method UsernameQuery groupByFailedLoginCount() Group by the failed_login_count column
 * @method UsernameQuery groupByUname() Group by the uname column
 * @method UsernameQuery groupByPassword() Group by the password column
 * @method UsernameQuery groupByModified() Group by the modified column
 * @method UsernameQuery groupByNote() Group by the note column
 *
 * @method UsernameQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UsernameQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UsernameQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UsernameQuery leftJoinUserAccess($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserAccess relation
 * @method UsernameQuery rightJoinUserAccess($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserAccess relation
 * @method UsernameQuery innerJoinUserAccess($relationAlias = null) Adds a INNER JOIN clause to the query using the UserAccess relation
 *
 * @method Username findOne(PropelPDO $con = null) Return the first Username matching the query
 * @method Username findOneOrCreate(PropelPDO $con = null) Return the first Username matching the query, or a new Username object populated from the query conditions when no match is found
 *
 * @method Username findOneByName(string $name) Return the first Username filtered by the name column
 * @method Username findOneByEmail(string $email) Return the first Username filtered by the email column
 * @method Username findOneByEnabled(boolean $enabled) Return the first Username filtered by the enabled column
 * @method Username findOneByLoginCount(int $login_count) Return the first Username filtered by the login_count column
 * @method Username findOneByFailedLoginCount(int $failed_login_count) Return the first Username filtered by the failed_login_count column
 * @method Username findOneByUname(string $uname) Return the first Username filtered by the uname column
 * @method Username findOneByPassword(string $password) Return the first Username filtered by the password column
 * @method Username findOneByModified(string $modified) Return the first Username filtered by the modified column
 * @method Username findOneByNote(string $note) Return the first Username filtered by the note column
 *
 * @method array findById(int $id) Return Username objects filtered by the id column
 * @method array findByName(string $name) Return Username objects filtered by the name column
 * @method array findByEmail(string $email) Return Username objects filtered by the email column
 * @method array findByEnabled(boolean $enabled) Return Username objects filtered by the enabled column
 * @method array findByLoginCount(int $login_count) Return Username objects filtered by the login_count column
 * @method array findByFailedLoginCount(int $failed_login_count) Return Username objects filtered by the failed_login_count column
 * @method array findByUname(string $uname) Return Username objects filtered by the uname column
 * @method array findByPassword(string $password) Return Username objects filtered by the password column
 * @method array findByModified(string $modified) Return Username objects filtered by the modified column
 * @method array findByNote(string $note) Return Username objects filtered by the note column
 *
 * @package    propel.generator.bloggie.om
 */
abstract class BaseUsernameQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUsernameQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'bloggie', $modelName = 'Username', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UsernameQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     UsernameQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UsernameQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UsernameQuery) {
            return $criteria;
        }
        $query = new UsernameQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Username|Username[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UsernamePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UsernamePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Username A model object, or null if the key is not found
     * @throws   PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   Username A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `email`, `enabled`, `login_count`, `failed_login_count`, `uname`, `password`, `modified`, `note` FROM `username` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Username();
            $obj->hydrate($row);
            UsernamePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Username|Username[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Username[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UsernamePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UsernamePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(UsernamePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsernamePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsernamePeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the enabled column
     *
     * Example usage:
     * <code>
     * $query->filterByEnabled(true); // WHERE enabled = true
     * $query->filterByEnabled('yes'); // WHERE enabled = true
     * </code>
     *
     * @param     boolean|string $enabled The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterByEnabled($enabled = null, $comparison = null)
    {
        if (is_string($enabled)) {
            $enabled = in_array(strtolower($enabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(UsernamePeer::ENABLED, $enabled, $comparison);
    }

    /**
     * Filter the query on the login_count column
     *
     * Example usage:
     * <code>
     * $query->filterByLoginCount(1234); // WHERE login_count = 1234
     * $query->filterByLoginCount(array(12, 34)); // WHERE login_count IN (12, 34)
     * $query->filterByLoginCount(array('min' => 12)); // WHERE login_count > 12
     * </code>
     *
     * @param     mixed $loginCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterByLoginCount($loginCount = null, $comparison = null)
    {
        if (is_array($loginCount)) {
            $useMinMax = false;
            if (isset($loginCount['min'])) {
                $this->addUsingAlias(UsernamePeer::LOGIN_COUNT, $loginCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loginCount['max'])) {
                $this->addUsingAlias(UsernamePeer::LOGIN_COUNT, $loginCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsernamePeer::LOGIN_COUNT, $loginCount, $comparison);
    }

    /**
     * Filter the query on the failed_login_count column
     *
     * Example usage:
     * <code>
     * $query->filterByFailedLoginCount(1234); // WHERE failed_login_count = 1234
     * $query->filterByFailedLoginCount(array(12, 34)); // WHERE failed_login_count IN (12, 34)
     * $query->filterByFailedLoginCount(array('min' => 12)); // WHERE failed_login_count > 12
     * </code>
     *
     * @param     mixed $failedLoginCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterByFailedLoginCount($failedLoginCount = null, $comparison = null)
    {
        if (is_array($failedLoginCount)) {
            $useMinMax = false;
            if (isset($failedLoginCount['min'])) {
                $this->addUsingAlias(UsernamePeer::FAILED_LOGIN_COUNT, $failedLoginCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($failedLoginCount['max'])) {
                $this->addUsingAlias(UsernamePeer::FAILED_LOGIN_COUNT, $failedLoginCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsernamePeer::FAILED_LOGIN_COUNT, $failedLoginCount, $comparison);
    }

    /**
     * Filter the query on the uname column
     *
     * Example usage:
     * <code>
     * $query->filterByUname('fooValue');   // WHERE uname = 'fooValue'
     * $query->filterByUname('%fooValue%'); // WHERE uname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterByUname($uname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uname)) {
                $uname = str_replace('*', '%', $uname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsernamePeer::UNAME, $uname, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsernamePeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified('2011-03-14'); // WHERE modified = '2011-03-14'
     * $query->filterByModified('now'); // WHERE modified = '2011-03-14'
     * $query->filterByModified(array('max' => 'yesterday')); // WHERE modified > '2011-03-13'
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(UsernamePeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(UsernamePeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UsernamePeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote('fooValue');   // WHERE note = 'fooValue'
     * $query->filterByNote('%fooValue%'); // WHERE note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $note The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($note)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $note)) {
                $note = str_replace('*', '%', $note);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UsernamePeer::NOTE, $note, $comparison);
    }

    /**
     * Filter the query by a related UserAccess object
     *
     * @param   UserAccess|PropelObjectCollection $userAccess  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UsernameQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUserAccess($userAccess, $comparison = null)
    {
        if ($userAccess instanceof UserAccess) {
            return $this
                ->addUsingAlias(UsernamePeer::ID, $userAccess->getUserId(), $comparison);
        } elseif ($userAccess instanceof PropelObjectCollection) {
            return $this
                ->useUserAccessQuery()
                ->filterByPrimaryKeys($userAccess->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUserAccess() only accepts arguments of type UserAccess or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UserAccess relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function joinUserAccess($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UserAccess');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'UserAccess');
        }

        return $this;
    }

    /**
     * Use the UserAccess relation UserAccess object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserAccessQuery A secondary query class using the current class as primary query
     */
    public function useUserAccessQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUserAccess($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UserAccess', 'UserAccessQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Username $username Object to remove from the list of results
     *
     * @return UsernameQuery The current query, for fluid interface
     */
    public function prune($username = null)
    {
        if ($username) {
            $this->addUsingAlias(UsernamePeer::ID, $username->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
