<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    /**
     * Class variables
     */
    protected $request;
    protected $todo;

    /**
     * Class construct
     *
     * @param Request $request
     * @param Todo $todo
     */
    public function __construct(Request $request, Todo $todo)
    {
        $this->request = $request;
        $this->todo = $todo;
    }
}
