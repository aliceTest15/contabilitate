<?php

namespace App\Imports\Settings;

use App\Abstracts\Import;
use App\Http\Requests\Setting\Tax as Request;
use App\Models\Setting\Tax as Model;

class Taxes extends Import
{
    public $request_class = Request::class;

    public function model(array $row)
    {
        return new Model($row);
    }
}
