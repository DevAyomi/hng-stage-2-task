<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArithemeticRequest;

class ArithemeticController extends Controller
{
    public function performArithemetic(ArithemeticRequest $request)
    {
        $formData = $request->validated();

       switch ( $formData['operation_type']) {
          case "addition":
            $result = $formData['x'] + $formData['y'];
            break;
          case "subtraction":
            $result = $formData['x'] - $formData['y'];
            break;
          case "multiplication":
            $result = $formData['x'] * $formData['y'];
            break;
        }

        return response()->json([
            "slackUsername" => "Devayo",
            "result" => $result,
            "operation_type" => $formData['operation_type']
        ], 200);
    }
}
