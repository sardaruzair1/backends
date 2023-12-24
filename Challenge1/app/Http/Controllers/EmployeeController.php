<?php

// app/Http/Controllers/EmployeeController.php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee(){
        $attendances = Attendance::all();
        return view('attendance.employee',compact('attendances'));
    }
    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
        ]);

        Employee::create($data);

        return redirect()->route('attendance.index');
    }
}
