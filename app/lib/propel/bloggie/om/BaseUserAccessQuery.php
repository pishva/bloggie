<?php


/**
 * Base class that represents a query for the 'user_access' table.
 *
 *
 *
 * @method UserAccessQuery orderById($order = Criteria::ASC) Order by the id column
 * @method UserAccessQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method UserAccessQuery orderByAccess($order = Criteria::ASC) Order by the access column
 *
 * @method UserAccessQuery groupById() Group by the id column
 * @method UserAccessQuery groupByUserId() Group by the user_id column
 * @method UserAccessQuery groupByAccess() Group by the access column
 *
 * @method UserAccessQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UserAccessQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UserAccessQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UserAccessQuery leftJoinUsername($relationAlias = null) Adds a LEFT JOIN clause to the query using the Username relation
 * @method UserAccessQuery rightJoinUsername($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Username relation
 * @method UserAccessQuery innerJoinUsername($relationAlias = null) Adds a INNER JOIN clause to the query using the Username relation
 *
 * @method UserAccess findOne(PropelPDO $con = null) Return the first UserAccess matching the query
 * @method UserAccess findOneOrCreate(PropelPDO $con = null) Return the first UserAccess matching the query, or a new UserAccess object populated from the query conditions when no match is found
 *
 * @method UserAccess findOneByUserId(int $user_id) Return the first UserAccess filtered by the user_id column
 * @method UserAccess findOneByAccess(string $access) Return the first UserAccess filtered by the access column
 *
 * @method array findById(int $id) Return UserAccess objects filtered by the id column
 * @method array findByUserId(int $user_id) Return UserAccess objects filtered by the user_id column
 * @method array findByAccess(string $access) Return UserAccess objects filtered by the access column
 *
 * @package    propel.generator.bloggie.om
 */
abstract class BaseUserAccessQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUserAccessQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'bloggie', $modelName = 'UserAccess', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UserAccessQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     UserAccessQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UserAccessQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UserAccessQuery) {
            return $criteria;
        }
        $query = new UserAccessQuery();
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
     * @return   UserAccess|UserAccess[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UserAccessPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UserAccessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   UserAccess A model object, or null if the key is not found
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
     * @return   UserAccess A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `user_id`, `access` FROM `user_access` WHERE `id` = :p0';
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
            $obj = new UserAccess();
            $obj->hydrate($row);
            UserAccessPeer::addInstanceToPool($obj, (string) $key);
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
     * @return UserAccess|UserAccess[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|UserAccess[]|mixed the list of results, formatted by the current formatter
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
     * @return UserAccessQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UserAccessPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UserAccessQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UserAccessPeer::ID, $keys, Criteria::IN);
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
     * @return UserAccessQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(UserAccessPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
     * </code>
     *
     * @see       filterByUsername()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserAccessQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(UserAccessPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(UserAccessPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UserAccessPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the access column
     *
     * Example usage:
     * <code>
     * $query->filterByAccess('fooValue');   // WHERE access = 'fooValue'
     * $query->filterByAccess('%fooValue%'); // WHERE access LIKE '%fooValue%'
     * </code>
     *
     * @param     string $access The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UserAccessQuery The current query, for fluid interface
     */
    public function filterByAccess($access = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($access)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $access)) {
                $access = str_replace('*', '%', $access);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UserAccessPeer::ACCESS, $access, $comparison);
    }

    /**
     * Filter the query by a related Username object
     *
     * @param   Username|PropelObjectCollection $username The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UserAccessQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsername($username, $comparison = null)
    {
        if ($username instanceof Username) {
            return $this
                ->addUsingAlias(UserAccessPeer::USER_ID, $username->getId(), $comparison);
        } elseif ($username instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UserAccessPeer::USER_ID, $username->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsername() only accepts arguments of type Username or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Username relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UserAccessQuery The current query, for fluid interface
     */
    public function joinUsername($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Username');

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
            $this->addJoinObject($join, 'Username');
        }

        return $this;
    }

    /**
     * Use the Username relation Username object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsernameQuery A secondary query class using the current class as primary query
     */
    public function useUsernameQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUsername($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Username', 'UsernameQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   UserAccess $userAccess Object to remove from the list of results
     *
     * @return UserAccessQuery The current query, for fluid interface
     */
    public function prune($userAccess = null)
    {
        if ($userAccess) {
            $this->addUsingAlias(UserAccessPeer::ID, $userAccess->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
