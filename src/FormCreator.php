<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/4/19
 * Time: 10:32
 */

namespace Chyis\LaravelFormCreator;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;

class FormCreator
{
    protected $dataSource = null;

    protected $name = '';

    protected $columns = [];

    public function __construct(Model $model)
    {
        $this->initialize($model);
    }

    public function initialize($model)
    {
        $this->dataSource = $model;
    }

    public function name($name = '')
    {

    }

    public function setName($name = '')
    {

    }

    public function getName()
    {

    }

    public function addColumn($columnName)
    {

    }

    public function column($columnName, $type = 'input', $value = '', $attributes = [])
    {
        if (is_array($columnName)) {

        }

        return ;
    }
}