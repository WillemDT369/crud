<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;
    public $newSnake;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        if (!empty($_POST['snake'])) {
            $this->newSnake = $_POST['snake'];

            $create = $this->databaseManager->database->query("INSERT INTO snakes (name) VALUES ('$this->newSnake')");

            if (!$create) {
                var_dump($this->databaseManager->database->error);
            }

            return $create;
        }
        
        $this->get();

    }
    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        // TODO: replace dummy data by real one
        // return [
        //     ['name' => 'dummy one'],
        //     ['name' => 'dummy two'],
        // ];

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->database-> (runYourQueryHere)
        $result = $this->databaseManager->database->query("SELECT * FROM snakes ORDER BY name");
        if (!$result) {
            var_dump($this->databaseManager->database->error);
        }
        // echo '<pre>';
        // var_dump($result->fetch_all(MYSQLI_ASSOC));
        // echo '</pre>';
        return $result;
    }

    public function update(int $id ,string $updateGame)
    {
        $this->databaseManager->database->query("UPDATE snakes SET name = '$updateGame' WHERE id = $id;");
      
    }

    public function delete(int $id)
    {
       
    }

}
