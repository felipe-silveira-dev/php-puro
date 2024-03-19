<?php

class Database
{
    public PDO $connection;

    public function __construct(
        protected array $config,
        protected string $username = 'root',
        protected string $password = ''
    ) {
        $dsn = "{$config['database']}:" . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}