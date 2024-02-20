<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Kelas;


class StudashController extends Controller
{
    public function index()

    {
        return view('dashboard.student2.all', [
            "title" => "student",
            "students" => Student::all()
        ]);
    }

    public function show(Student $student)
    {
        return view('dashboard.student2.detail', [
            'student' => $student]);
    }

    public function create()

    {
        return view('dashboard.student2.create', [
            "title" => "create-new-data",
            "kelas" => Kelas::all()
            
        ]);
    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            "NIS" => "required|max:255",
            "nama" => "required|max:255",
            'kelas_id' => 'required',
            "alamat" => "required",
        ]);

        $result = Student::create($validateData);
        if ($result){
            return  redirect('/dashboard/student2/all')->with('success', 'Data berhasil ditambahkan !');
        }
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $result = $student->delete();

        if ($result) {
            return redirect('/dashboard/student2/all')->with('success', 'Student deleted successfully');
        } else {
            return redirect('/dashboard/student2/all')->with('error', 'Failed to delete student');
        }
    }

    public function edit($id)
{
    $student = Student::findOrFail($id);
    $kelas = Kelas::all();

        return view('dashboard.student2.edit', [
            'student' => $student,
            'kelas' => $kelas,
            'title' => 'Edit Data',
     ]);
    }

    public function update (Request $request, Student $student)
    {
        $validateData = $request->validate ([
            'nis'       => 'required|max:255',
            'nama'      => 'required|max:255',
            'kelas_id'     => 'required',
            'alamat'    => 'required',

            
        ]);

        $result = Student::where('id', $student->id)->update($validateData);
        if ($result){
            return redirect('/dashboard/student2/all')->with('success','Data siswa berhasil diubah!');
        }
    }
}

    



