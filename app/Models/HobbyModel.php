<?php
namespace App\Models;

use App\Libraries\MySql;
use App\Libraries\QueryBuilder;
use PDO;

class HobbyModel extends Model
{

    // Name of the table
    protected $model = "hobbies";

    protected $limit;

    // Non writable fields
    protected $protectedFields = [
        'id',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Load class 'staticaly'
     */
    public static function load()
    {
        return new static;
    }

    public function __construct()
    {
        parent::__construct(
            $this->model, 
            $this->limit, 
            $this->protectedFields
        );   
    }



    public function getUserHobbies(int $id, array $selectedFields = null)
    {
        if ($id === 0) return null;

        $fields = "*";

        if (is_array($selectedFields) && count($selectedFields) > 0) {
            $fields = $this->composeQuery($selectedFields);
        }

        $sql = "SELECT " . $fields .  " FROM " . $this->model . " WHERE user_id=" . $id . " AND deleted IS NULL";
        $res = MySql::query($sql)->fetchAll(PDO::FETCH_CLASS);

        return count($res) > 0 ? $res : null;
    }
}