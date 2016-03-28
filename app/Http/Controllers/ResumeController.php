<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Resume;
use App\Section;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
//  /**
//   * Create a new controller instance.
//   *
//   * @return void
//   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function store_resume_name(Request $request)
    {
        $resume = new Resume;
        $resume->name = $request['name'];
        $resume->user()->associate(Auth::user());
        $resume->save();

        $sections = Section::where('flag','!=','2')->get();
        foreach($sections as $section)
        {
            $resume->sections()->attach($section->id);
        }

        $sections = $resume->sections;
        foreach($sections as $section)
        {
            $subsections = $section->subsections;
            foreach($subsections as $subsection)
            {
              $subsection->mapping_sections()->attach($section->pivot->id);
            }
        }
        return redirect()->route('resume.create',[$resume]);
    }

    public function create($id)
    {
        if($id===null)
        {
            return redirect()->route('resume.dashboard');
        }
        $user = Auth::user();
        $resume = $user->resumes()->find($id);
        return view('resume.create',compact(['user','resume']));
    }

    public function store($id,Request $request)
    {
        $resume = Resume::find($id);
        foreach($resume->mapping_subsections as $mapping_subsection)
        {
            $detail = $mapping_subsection->detail;
            if($detail === null)
            {
                $detail = new Detail;
                $detail->content = $request->input($mapping_subsection->id);
                $mapping_subsection->detail()->save($detail);
            }
            else
            {
                $detail->content = $request->input($mapping_subsection->id);
                $detail->save();
            }
        }
        return redirect()->route('user.dashboard');
    }

    public function show($id)
    {
        $user = Auth::user();
        $resume = Resume::find($id);
        return view('resume.show',compact('resume','user'));
    }

    public function delete($id)
    {
        Resume::destroy($id);
        return redirect()->route('user.dashboard');
    }
}
