<?php

namespace Effectra\Contracts\Database;

use PDO;
use PDOStatement;

/**
 * Interface DBFacadeInterface
 * @package Effectra\Contracts\Database
 */
interface DBFacadeInterface
{
    /**
     * Get the database connection instance.
     * @return PDO
     */
    public static function getConn(): PDO;

    /**
     * Get the current query string.
     * @return string
     */
    public static function getQuery(): string;

    /**
     * Get the PDO statement instance.
     * @return PDOStatement|false
     */
    public static function getStatement(): PDOStatement|false;

    /**
     * Set the database connection instance.
     * @param PDO $conn
     */
    public static function setConn(PDO $conn);

    /**
     * Create a new instance with the specified query string.
     * @param string $query
     * @return self
     */
    public static function withQuery($query): self;

    /**
     * Create a new instance with the specified PDO statement.
     * @param PDOStatement|false $stmt
     * @return self
     */
    public static function withStatement(PDOStatement|false $stmt): self;

    /**
     * Append a query string to the existing query.
     * @param string $query
     * @return string The updated query string.
     */
    public static function query(string $query = ''): string;

    /**
     * Execute the query with the given parameters.
     * @param array|null $params
     * @return bool
     */
    public static function run(array|null $params = null): bool;

    /**
     * Execute the query and fetch all results.
     * @param array|null $params
     * @return array
     */
    public static function get(?array $params = null): array;

    /**
     * Set the data to be used in the query.
     * @param array $data
     * @return self
     */
    public static function data(array $data): self;

    /**
     * Set the table for the query.
     * @param string $name
     * @return self
     */
    public static function table(string $name): self;

    /**
     * Insert data into the table.
     * @param mixed $data
     */
    public static function insert($data): void;

    /**
     * Update data in the table.
     * @param mixed $data
     * @param mixed|null $conditions
     */
    public static function update($data, $conditions = null): void;

    /**
     * Get the columns of the table.
     * @return array|false
     */
    public static function getColumns(): array|false;

    /**
     * Get the field names of the table columns.
     * @return array|false
     */
    public static function getColumnsField(): array|false;
}
