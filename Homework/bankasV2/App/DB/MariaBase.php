<?php

namespace App\DB;

use App\DB\DataBase;
use PDO;

class MariaBase implements DataBase
{
    private $pdo, $accounts;

    public function __construct($accounts)
    {
        $host = '127.0.0.1';  //nuo cia iki ..........
        $db   = 'forest';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $this->pdo = new PDO($dsn, $user, $pass, $options); // ...cia ciskas is phpdelusions.net psl.
        $this->accounts = $accounts;
    }

    public function create(object $data) : int
    {
       // INSERT INTO table_name (column1, column2, column3, ...)   // cia is W3 SQL insert into
        // VALUES (value1, value2, value3, ...);

        $sql = "
        INSERT INTO {$this->accounts} (vardas_pavarde, akId, iban, balance)              -- atkreipti demesi, kad be kabuciu
        VALUES (?, ?, ?, ?)
        ";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([$data->vardas_pavarde, $data->akId, $data->iban, $data->balance]);

        return $this->pdo->lastInsertId();         //..kas cia toks ..last... nezinau???
    }

    public function update(int $id, object $data) : bool
    {
        // UPDATE table_name
        // SET column1 = value1, column2 = value2, ...
        // WHERE condition;

        $sql = "
        UPDATE {$this->accounts}
        SET vardas_pavarde = ?, akId = ?, balance = ?
        WHERE id = ?
        ";

        $stmt = $this->pdo->prepare($sql);
        
        return $stmt->execute([
            $data->vardas_pavarde,
            $data->akId,
            $data->balance,
            $id
        ]);
     }
       

    public function delete(int $id) : bool
    {
       //DELETE FROM table_name WHERE condition;   // ....cia is W3 SQL Delete

        $sql = "
        DELETE FROM {$this->accounts}
        WHERE id = ?
        ";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function show(int $id) : object
    {
        // SELECT column1, column2,   //info is W3 SQL select psl.
        // FROM table_name;           //info is W3 SQL select psl.
        
        $sql = "
        SELECT*                      -- SELECT * reiskia visi trulpeliai
        FROM {$this->accounts}
        WHERE id = ?
        -- WHERE type <> 'lapuotis' AND height > 10           -- cia reiskia uzkomentuota, galima matematiskai skaiciuoti
        -- ORDER BY type ASC, height DESC                      -- pirma filtravimas, tada rusiavimas
        -- LIMIT 0, 3                                          -- pirmas skaicius, kiek praleisti, antras, kiek parodyti
        ";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch();
    }
    

    public function showAll() : array
    {
        // SELECT column1, column2,   //info is W3 SQL select psl.
        // FROM table_name;           //info is W3 SQL select psl.

        $sql = "
        SELECT*                      -- SELECT * reiskia visi trulpeliai
        FROM {$this->accounts}
        -- WHERE type <> 'lapuotis' AND height > 10           -- cia reiskia uzkomentuota, galima matematiskai skaiciuoti
        -- ORDER BY type ASC, height DESC                      -- pirma filtravimas, tada rusiavimas
        -- LIMIT 0, 3                                          -- pirmas skaicius, kiek praleisti, antras, kiek parodyti
        ";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(); 
        }
}
