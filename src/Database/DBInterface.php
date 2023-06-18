<?php

namespace Effectra\Contracts\Database;

use PDO;
use PDOStatement;

interface DBInterface
{
    public function __construct(PDO $conn = null);
    public function getConn(): PDO;
    public function getQuery(): string;
    public function getStatement(): PDOStatement|false;
    public function setConn(PDO $conn);
    public function withQuery($query): self;
    public function withStatement(PDOStatement|false $stmt): self;
    public function query(string $query = ''): string;
    public function run(array|null $params = null): bool;
    public function get(?array $params = null): array;
    public function data(array $data): self;
    public function table(string $name):self;
    public function insert($data):void;
    public function update($data,$conditions = null):void;
    public function getColumns():array|false;
    public function getColumnsField():array|false;

}