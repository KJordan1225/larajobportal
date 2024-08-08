<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job\Job;
use App\Models\Job\JobSaved;
use Illuminate\Support\Facades\Auth;


class JobsController extends Controller
{
    //

    public function single($id) {
			
        $job = Job::find($id);


        // check for saved job
        $savedJob = JobSaved::where('job_id', $id)
        ->where('user_id',Auth::user()->id)
        ->count();

        return view('jobs.single', compact('job','savedJob'));
        
    }

    public function saveJob(Request $request) {
			
        $saveJob = JobSaved::create ([
            'job_id' => $request->job_id,
            'user_id' => $request->user_id,
            'image' => $request->image,
            'job_region' => $request->job_region,
            'job_type' => $request->job_type,
            'job_title' => $request->job_title,
            'company' => $request->company,
        ]);

        if ($saveJob) {
            return redirect('jobs/single/'.$request->job_id.'')->with('save','Job saved successfully');
        }
    }

    public function applyJob(Request $request) {

        if ($request->cv == 'No cv') {
            return redirect('jobs/single/'.$request->job_id.'')->with('apply','Upload CV in profile page first');
        } else {
			
            $applyJob = JobSaved::create ([
                'cv' => Auth::user()->cv,
                'job_id' => $request->job_id,
                'user_id' => Auth::user()->id,
                'image' => $request->image,
                'job_region' => $request->job_region,
                'job_type' => $request->job_type,
                'job_title' => $request->job_title,
                'company' => $request->company,
            ]);

            if ($applyJob) {
                return redirect('jobs/single/'.$request->job_id.'')->with('apply','Applied for job successfully');
            }
        }
    }
}
