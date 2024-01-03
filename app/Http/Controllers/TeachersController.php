<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\teacher;

class TeachersController extends Controller
{
    
    /**
     * List all the teachers
     */
    public function index()
    {
        $query = teacher::all();
        return response()->json($query); 
    }

    /**
     * Create teachers info
     * 
     * @string all the variables
     */
    public function create(Request $request)
    {
        $teacher = new teacher;
        $teacher->teacherName = $request->get("teacherName");
        $teacher->class = $request->get("class");
        $teacher->teacherUniqueId = $request->get("teacherUniqueId");

        $teacher->save();

        return response()->json("Record created successfully.");
    }

    /**
     * Create teachers info
     * 
     * @string all the variables
     */
    public function update(Request $request)
    {
        teacher::where("id", $request->get("teacher_id"))->update([
            "teacherName" => $request->get("teacherName"),
            "class" => $request->get("class"),
            "teacherUniqueId" => $request->get("teacherUniqueId")
        ]);

        return response()->json("Record updated successfully.");
    }

    /**
     * Delete teachers info
     * 
     * @string all the variables
     */
    public function delete(Request $request)
    {
        teacher::where("id", $request->get("teacher_id"))->delete(); //This will delete the entry from the table
        teacher::where("id", $request->get("teacher_id"))->update(["delete_flag" => 1 ]); // Entry will not delete from the table but we will consider the record to be deleetd i.e Soft Delete. We should follow this practice        

        return response()->json("Record deleted successfully.");
    }


    /**
     * Search teachers
     * 
     * @id
     */
    public function search($id)
    {
        $query = teacher::where("id", $id)->first();
        echo $query;
        // return response()->json($query); 
    }
}
