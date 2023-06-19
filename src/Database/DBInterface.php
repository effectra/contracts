<?php

namespace Effectra\Contracts\Database;

use PDO;
use PDOStatement;

/**
 * Interface DBInterface
 * @package Effectra\Contracts\Database
 */
interface DBInterface
{
    /**
     * DBInterface constructor.
     * @param PDO|null $conn
     */
    public function __construct(PDO $conn = null);

    /**
     * Get the database connection instance.
     * @return PDO
     */
    public function getConn(): PDO;

    /**
     * Get the current query string.
     * @return string
     */
    public function getQuery(): string;

    /**
     * Get the PDO statement instance.
     * @return PDOStatement|false
     */
    public function getStatement(): PDOStatement|false;

    /**
     * Set the database connection instance.
     * @param PDO $conn
     */
    public function setConn(PDO $conn);

    /**
     * Create a new instance with the specified query string.
     * @param string $query
     * @return self
     */
    public function withQuery($query): self;

    /**
     * Create a new instance with the specified PDO statement.
     * @param PDOStatement|false $stmt
     * @return self
     */
    public function withStatement(PDOStatement|false $stmt): self;

    /**
     * Append a query string to the existing query.
     * @param string $query
     * @return string The updated query string.
     */
    public function query(string $query = ''): string;

    /**
     * Execute the query with the given parameters.
     * @param array|null $params
     * @return bool
     */
    public function run(array|null $params = null): bool;

    /**
     * Execute the query and fetch all results.
     * @param array|null $params
     * @return array
     */
    public function get(?array $params = null): array;

    /**
     * Set the data to be used in the query.
     * @param array $data
     * @return self
     */
    public function data(array $data): self;

    /**
     * Set the table for the query.
     * @param string $name
     * @return self
     */
    public function table(string $name): self;

    /**
     * Insert data into the table.
     * @param mixed $data
     */
    public function insert($data): void;

    /**
     * Update data in the table.
     * @param mixed $data
     * @param mixed|null $conditions
     */
    public function update($data, $conditions = null): void;

    /**
     * Get the columns of the table.
     * @return array|false
     */
    public function getColumns(): array|false;

    /**
     * Get the field names of the table columns.
     * @return array|false
     */
    public function getColumnsField(): array|false;
}
