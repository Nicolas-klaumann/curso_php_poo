<?php
namespace Livro\Database;

use FFI\Exception;

class Repository
{
    private $activeRecord;
    public function __construct($class)
    {
        $this->activeRecord = $class;

    }
    public function load(Criteria $criteria)
    {
        $sql = "SELECT * FROM " . $this->activeRecord;

        if($criteria)
        {
            $expression = $criteria->dump();
            if($expression)
            {
                $sql .=  ' WHERE ' . $expression;
            }

            $order  = $criteria->getProperty('order');
            $limit  = $criteria->getProperty('limit');
            $offset = $criteria->getProperty('offset');

            if($order)
            {
                $sql .= ' ORDER BY '. $order;
            }
            if($limit)
            {
                $sql .= ' LIMIT ' . $limit;
            }
            if($offset)
            {
                $offset .= ' OFFSET ' . $offset;
            }
        }
        $results = [];

        if($conn = Transaction::get())
        {
            $result = $conn->query($sql);

            if($result)
            {
                return $result->fetchAll(\PDO::FETCH_OBJ);
            }
        }
        else
        {
            throw new Exception('Não há transação ativa!');
        }
        return $results;
    }

    public function delete(Criteria $criteria)
    {
        $sql = "DELETE FROM " . constant ($this->activeRecord . '::TABLENAME');

        if($criteria)
        {
            $expression = $criteria->dump();
            if($expression)
            {
                $sql .= 'WHERE' . $expression;
            }
        }

        if ($conn = Transaction::get())
        {
            Transaction::log($sql);
            return $conn->exec($sql);
        }
        else
        {
            throw new Exception('Não há transação ativa');
        }
    }

    public function count(Criteria $criteria)
    {
    $sql = "SELECT count(*) FROM " . constant ($this->activeRecord . '::TABLENAME');

    if($criteria)
    {
        $expression = $criteria->dump();
        if($expression)
        {
            $sql .= 'WHERE' . $expression;
        }
    }

        if ($conn = Transaction::get())
        {
            Transaction::log($sql);
            $result = $conn->exec($sql);
            if($result)
            {
                $row = $result-> fetch();
                return $row[0];
            }
        }
        else
        {
            throw new Exception('Não há transação ativa');
        }
    }
}
