
Warning: PHP Startup: Unable to load dynamic library 'pdo_firebird' (tried: ext\pdo_firebird (N├úo foi poss├¡vel encontrar o m├│dulo especificado), ext\php_pdo_firebird.dll (N├úo foi poss├¡vel encontrar o m├│dulo especificado)) in Unknown on line 0

Warning: PHP Startup: Unable to load dynamic library 'pdo_oci' (tried: ext\pdo_oci (N├úo foi poss├¡vel encontrar o m├│dulo especificado), ext\php_pdo_oci.dll (N├úo foi poss├¡vel encontrar o m├│dulo especificado)) in Unknown on line 0

   WARN  The database 'laravel' does not exist on the 'mysql' connection.  

  Would you like to create it? (yes/no) [no]
ÔØ» 

   Illuminate\Database\QueryException 

  SQLSTATE[HY000] [1049] Unknown database 'laravel' (Connection: mysql, SQL: select * from information_schema.tables where table_schema = laravel and table_name = migrations and table_type = 'BASE TABLE')

  at vendor\laravel\framework\src\Illuminate\Database\Connection.php:801
    797Ôûò                     $this->getName(), $query, $this->prepareBindings($bindings), $e
    798Ôûò                 );
    799Ôûò             }
    800Ôûò 
  Ô×£ 801Ôûò             throw new QueryException(
    802Ôûò                 $this->getName(), $query, $this->prepareBindings($bindings), $e
    803Ôûò             );
    804Ôûò         }
    805Ôûò     }

  i   Database name seems incorrect: You're using the default database name `laravel`. This database does not exist.
    
    Edit the `.env` file and use the correct database name in the `DB_DATABASE` key. 
      https://laravel.com/docs/master/database#configuration

  1   vendor\laravel\framework\src\Illuminate\Database\Connectors\Connector.php:65
      PDOException::("SQLSTATE[HY000] [1049] Unknown database 'laravel'")

  2   vendor\laravel\framework\src\Illuminate\Database\Connectors\Connector.php:65
      PDO::__construct("mysql:host=127.0.0.1;port=3306;dbname=laravel", "root", Object(SensitiveParameterValue), [])

