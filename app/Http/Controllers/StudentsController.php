<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class StudentsController extends Controller
{
    
    /**
     * List all the students
     */
    public function index()
    {
        $query = student::all();
        return response()->json($query); 
    }

    /**
     * Create stuents info
     * 
     * @string all the variables
     */
    public function create(Request $request)
    {
        $student = new student;
        $student->firstName = $request->get("firstName");
        $student->lastName = $request->get("lastName");
        $student->rollNumber = $request->get("rollNumber");
        $student->grade = $request->get("grade");

        $student->save();

        return response()->json("Record created successfully.");
    }

    /**
     * Create stuents info
     * 
     * @string all the variables
     */
    public function update(Request $request)
    {
        student::where("id", $request->get("student_id"))->update([
            "firstName" => $request->get("firstName"),
            "lastName" => $request->get("lastName"),
            "rollNumber" => $request->get("rollNumber"),
            "grade" => $request->get("grade"), 
        ]);

        return response()->json("Record updated successfully.");
    }

    /**
     * Delete stuents info
     * 
     * @string all the variables
     */
    public function delete(Request $request)
    {
        student::where("id", $request->get("student_id"))->delete(); //This will delete the entry from the table
        student::where("id", $request->get("student_id"))->update(["delete_flag" => 1 ]); // Entry will not delete from the table but we will consider the record to be deleetd i.e Soft Delete. We should follow this practice        

        return response()->json("Record deleted successfully.");
    }


    /**
     * Search students
     * 
     * @id
     */
    public function search($id)
    {
        $query = student::where("id", $id)->first();
        echo $query;
        // return response()->json($query); 
    }
}
