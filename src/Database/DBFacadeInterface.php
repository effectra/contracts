<?php

namespace Effectra\Contracts\Database;

use PDO;
use PDOStatement;

interface DBFacadeInterface
{
    public static function getConn(): PDO;
    public static function getQuery(): string;
    public static function getStatement(): PDOStatement|false;
    public static function setConn(PDO $conn);
    public static function withQuery($query): self;
    public static function withStatement(PDOStatement|false $stmt): self;
    public static function query(string $query = ''): string;
    public static function run(array|null $params = null): bool;
    public static function get(?array $params = null): array;
    public static function data(array $data): self;
    public static function table(string $name):self;
    public static function insert($data):void;
    public static function update($data,$conditions = null):void;
    public static function getColumns():array|false;
    public static function getColumnsField():array|false;

}