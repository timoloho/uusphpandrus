<?php

class Connection {

    public static function make ($config) {

        try{
            return new PDO(
                "mysql:host={$config['host']};dbname={$config['db']};charset={$config['charset']}",
                $config['user'],
                $config['passwd']
            );
        } catch (\PDOException $e){
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}