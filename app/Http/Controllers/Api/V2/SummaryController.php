<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskSummaryResource;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tasks = $request->user()->tasksSummary();

        return $tasks->mapToGroups(function ($item, $key){
            return [
                ($item->is_completed ? 'completed' : 'uncompleted') => TaskSummaryResource::make($item)
            ];
        });
    }
}
