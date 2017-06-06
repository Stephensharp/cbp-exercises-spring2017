<?php


class database
{
    public static $pdo = null;

    public static function connect()
    {
        if(static::$pdo === null)
        {
            $database_name = 'games_list';
            $database_host = '127.0.0.1';
            $database_user = 'root';
            $database_pass = 'rootroot';

            static::$pdo = new PDO(
                'mysql:dbname='.$database_name.';host='.$database_host.';charset=utf8',
                $database_user,
                $database_pass
            );

            // set error reporting
            static::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return static::$pdo;
    }

    public static function query($sql, $substitutions = [])
    {
        // get PDO connection object
        $pdo = static::connect();

        // prepare a statement out of SQL
        $statement = $pdo->prepare($sql);

        // we run the query and keep the outcome (true or false)
        $output = $statement->execute($substitutions);

        // if there was an error
        if($output === false)
        {
            // print the error and exit
            return static::exitWithError();
        }

        // return the statement (pointing to the result)
        return $statement;
    }

    protected function exitWithError()
    {
        // print a <h1>
        echo '<h1>MySQL error:</h1>';

        // dump information about the error
        var_dump(static::connect()->errorInfo());

        // end execution
        exit();
    }
}