<?php

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM ' . $table);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($dataArr, $table)
    {

        // insert into users (name) values ('John Doe')
        $dataKey = array_keys($dataArr);
        $cols = implode(',', $dataKey);

        $questionMark = "";
        foreach ($dataKey as $key) {
            $questionMark .= "?,";
        }

        $questionMark = rtrim($questionMark, ',');

        $sql = "insert into $table ($cols) values ($questionMark)";

        $stmt = $this->pdo->prepare($sql);

        $dataValues = array_values($dataArr);
        $stmt->execute($dataValues);
    }
}
