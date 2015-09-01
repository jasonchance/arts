<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Teacher;

use Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $teachers = Teacher::statusPass()->paginate(5);
        dd($teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('home.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), Teacher::$rules);
        if ($validator->fails()) {
            return redirect()->bakc()->withInput()->withError($validator->error());
        }
        $rs = Teacher::create($request->all());
        if ($rs) {
            // 头像上传
            // 身份证正反面上传
            // 资质认证上传
            return response()->json(['status' => 1, 'msg' => '注册成功']);
        } else {
            return response()->json(['status' => 0, 'msg' => 'fail']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $teacher = Teacher::find($id);
        if (!$teacher || !$teacher->status) {
            return view('errors.404');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
