<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizRequest;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function store(QuizRequest $request)
    {
        DB::beginTransaction();

        try {

            Quiz::create([
                'title' => $request->title,
            ]);

            DB::commit();
            return redirect()->back()->with('success', 'Quiz Successfully Created');
        } catch (\Exception $exception) {
            report($exception);
            DB::rollBack();
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

    public function update(QuizRequest $request, Quiz $quiz)
    {
        DB::beginTransaction();

        try {

            $quiz->update([
                'title' => $request->title,
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Quiz Successfully Updated');

        } catch (\Exception $exception) {
            report($exception);
            DB::rollBack();

            return redirect()->back()->with('error', $exception->getMessage());
        }
    }


    public function destroy(Quiz $quiz)
    {
        DB::beginTransaction();

        try {

            $quiz->delete();

            DB::commit();

            return redirect()->route('admin.quiz.index')->with('success', 'Quiz Successfully Deleted');

        } catch (\Exception $exception) {
            report($exception);
            DB::rollBack();

            return redirect()->route('admin.quiz.index')->with('error', $exception->getMessage());
        }
    }


}
