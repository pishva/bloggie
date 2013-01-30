<?php


/**
 * Base class that represents a query for the 'news_subject' table.
 *
 *
 *
 * @method NewsSubjectQuery orderById($order = Criteria::ASC) Order by the id column
 * @method NewsSubjectQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method NewsSubjectQuery orderByIsDesc($order = Criteria::ASC) Order by the is_desc column
 * @method NewsSubjectQuery orderByShortDesc($order = Criteria::ASC) Order by the short_desc column
 * @method NewsSubjectQuery orderByDesc($order = Criteria::ASC) Order by the desc column
 * @method NewsSubjectQuery orderByPrio($order = Criteria::ASC) Order by the prio column
 * @method NewsSubjectQuery orderByCategory($order = Criteria::ASC) Order by the category column
 * @method NewsSubjectQuery orderByAuter($order = Criteria::ASC) Order by the auter column
 * @method NewsSubjectQuery orderByDate($order = Criteria::ASC) Order by the date column
 *
 * @method NewsSubjectQuery groupById() Group by the id column
 * @method NewsSubjectQuery groupByName() Group by the name column
 * @method NewsSubjectQuery groupByIsDesc() Group by the is_desc column
 * @method NewsSubjectQuery groupByShortDesc() Group by the short_desc column
 * @method NewsSubjectQuery groupByDesc() Group by the desc column
 * @method NewsSubjectQuery groupByPrio() Group by the prio column
 * @method NewsSubjectQuery groupByCategory() Group by the category column
 * @method NewsSubjectQuery groupByAuter() Group by the auter column
 * @method NewsSubjectQuery groupByDate() Group by the date column
 *
 * @method NewsSubjectQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method NewsSubjectQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method NewsSubjectQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method NewsSubject findOne(PropelPDO $con = null) Return the first NewsSubject matching the query
 * @method NewsSubject findOneOrCreate(PropelPDO $con = null) Return the first NewsSubject matching the query, or a new NewsSubject object populated from the query conditions when no match is found
 *
 * @method NewsSubject findOneByName(string $name) Return the first NewsSubject filtered by the name column
 * @method NewsSubject findOneByIsDesc(boolean $is_desc) Return the first NewsSubject filtered by the is_desc column
 * @method NewsSubject findOneByShortDesc(string $short_desc) Return the first NewsSubject filtered by the short_desc column
 * @method NewsSubject findOneByDesc(string $desc) Return the first NewsSubject filtered by the desc column
 * @method NewsSubject findOneByPrio(int $prio) Return the first NewsSubject filtered by the prio column
 * @method NewsSubject findOneByCategory(string $category) Return the first NewsSubject filtered by the category column
 * @method NewsSubject findOneByAuter(string $auter) Return the first NewsSubject filtered by the auter column
 * @method NewsSubject findOneByDate(string $date) Return the first NewsSubject filtered by the date column
 *
 * @method array findById(int $id) Return NewsSubject objects filtered by the id column
 * @method array findByName(string $name) Return NewsSubject objects filtered by the name column
 * @method array findByIsDesc(boolean $is_desc) Return NewsSubject objects filtered by the is_desc column
 * @method array findByShortDesc(string $short_desc) Return NewsSubject objects filtered by the short_desc column
 * @method array findByDesc(string $desc) Return NewsSubject objects filtered by the desc column
 * @method array findByPrio(int $prio) Return NewsSubject objects filtered by the prio column
 * @method array findByCategory(string $category) Return NewsSubject objects filtered by the category column
 * @method array findByAuter(string $auter) Return NewsSubject objects filtered by the auter column
 * @method array findByDate(string $date) Return NewsSubject objects filtered by the date column
 *
 * @package    propel.generator.bloggie.om
 */
abstract class BaseNewsSubjectQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseNewsSubjectQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'bloggie', $modelName = 'NewsSubject', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new NewsSubjectQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     NewsSubjectQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return NewsSubjectQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof NewsSubjectQuery) {
            return $criteria;
        }
        $query = new NewsSubjectQuery();
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
     * @return   NewsSubject|NewsSubject[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = NewsSubjectPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(NewsSubjectPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   NewsSubject A model object, or null if the key is not found
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
     * @return   NewsSubject A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `name`, `is_desc`, `short_desc`, `desc`, `prio`, `category`, `auter`, `date` FROM `news_subject` WHERE `id` = :p0';
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
            $obj = new NewsSubject();
            $obj->hydrate($row);
            NewsSubjectPeer::addInstanceToPool($obj, (string) $key);
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
     * @return NewsSubject|NewsSubject[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|NewsSubject[]|mixed the list of results, formatted by the current formatter
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
     * @return NewsSubjectQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(NewsSubjectPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return NewsSubjectQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(NewsSubjectPeer::ID, $keys, Criteria::IN);
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
     * @return NewsSubjectQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(NewsSubjectPeer::ID, $id, $comparison);
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
     * @return NewsSubjectQuery The current query, for fluid interface
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

        return $this->addUsingAlias(NewsSubjectPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the is_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByIsDesc(true); // WHERE is_desc = true
     * $query->filterByIsDesc('yes'); // WHERE is_desc = true
     * </code>
     *
     * @param     boolean|string $isDesc The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NewsSubjectQuery The current query, for fluid interface
     */
    public function filterByIsDesc($isDesc = null, $comparison = null)
    {
        if (is_string($isDesc)) {
            $is_desc = in_array(strtolower($isDesc), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(NewsSubjectPeer::IS_DESC, $isDesc, $comparison);
    }

    /**
     * Filter the query on the short_desc column
     *
     * Example usage:
     * <code>
     * $query->filterByShortDesc('fooValue');   // WHERE short_desc = 'fooValue'
     * $query->filterByShortDesc('%fooValue%'); // WHERE short_desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shortDesc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NewsSubjectQuery The current query, for fluid interface
     */
    public function filterByShortDesc($shortDesc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shortDesc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shortDesc)) {
                $shortDesc = str_replace('*', '%', $shortDesc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NewsSubjectPeer::SHORT_DESC, $shortDesc, $comparison);
    }

    /**
     * Filter the query on the desc column
     *
     * Example usage:
     * <code>
     * $query->filterByDesc('fooValue');   // WHERE desc = 'fooValue'
     * $query->filterByDesc('%fooValue%'); // WHERE desc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $desc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NewsSubjectQuery The current query, for fluid interface
     */
    public function filterByDesc($desc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($desc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $desc)) {
                $desc = str_replace('*', '%', $desc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NewsSubjectPeer::DESC, $desc, $comparison);
    }

    /**
     * Filter the query on the prio column
     *
     * Example usage:
     * <code>
     * $query->filterByPrio(1234); // WHERE prio = 1234
     * $query->filterByPrio(array(12, 34)); // WHERE prio IN (12, 34)
     * $query->filterByPrio(array('min' => 12)); // WHERE prio > 12
     * </code>
     *
     * @param     mixed $prio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NewsSubjectQuery The current query, for fluid interface
     */
    public function filterByPrio($prio = null, $comparison = null)
    {
        if (is_array($prio)) {
            $useMinMax = false;
            if (isset($prio['min'])) {
                $this->addUsingAlias(NewsSubjectPeer::PRIO, $prio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prio['max'])) {
                $this->addUsingAlias(NewsSubjectPeer::PRIO, $prio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NewsSubjectPeer::PRIO, $prio, $comparison);
    }

    /**
     * Filter the query on the category column
     *
     * Example usage:
     * <code>
     * $query->filterByCategory('fooValue');   // WHERE category = 'fooValue'
     * $query->filterByCategory('%fooValue%'); // WHERE category LIKE '%fooValue%'
     * </code>
     *
     * @param     string $category The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NewsSubjectQuery The current query, for fluid interface
     */
    public function filterByCategory($category = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($category)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $category)) {
                $category = str_replace('*', '%', $category);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NewsSubjectPeer::CATEGORY, $category, $comparison);
    }

    /**
     * Filter the query on the auter column
     *
     * Example usage:
     * <code>
     * $query->filterByAuter('fooValue');   // WHERE auter = 'fooValue'
     * $query->filterByAuter('%fooValue%'); // WHERE auter LIKE '%fooValue%'
     * </code>
     *
     * @param     string $auter The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NewsSubjectQuery The current query, for fluid interface
     */
    public function filterByAuter($auter = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($auter)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $auter)) {
                $auter = str_replace('*', '%', $auter);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NewsSubjectPeer::AUTER, $auter, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('fooValue');   // WHERE date = 'fooValue'
     * $query->filterByDate('%fooValue%'); // WHERE date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $date The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NewsSubjectQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($date)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $date)) {
                $date = str_replace('*', '%', $date);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NewsSubjectPeer::DATE, $date, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   NewsSubject $newsSubject Object to remove from the list of results
     *
     * @return NewsSubjectQuery The current query, for fluid interface
     */
    public function prune($newsSubject = null)
    {
        if ($newsSubject) {
            $this->addUsingAlias(NewsSubjectPeer::ID, $newsSubject->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
