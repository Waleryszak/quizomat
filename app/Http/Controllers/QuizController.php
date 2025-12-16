<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Category;

class QuizController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $topics = Category::orderBy('title')->get();

        return view('quizzes.index', ['topics' => $topics]);
    }
    //Losowanie pytań przez Order by rand i take() bierze tylko 4
    public function show($id)
    {
        $topic = Category::findOrFail($id);

        $questions = Quiz::where('category_id', $id)
            ->inRandomOrder()
            ->take(4)
            ->get();

        session()->put("quiz_{$id}_questions", $questions);

        return view('quiz', [
            'topic' => $topic,
            'questions' => $questions,
            'score' => null
        ]);
    }

    public function submit($id, Request $request)
    {
        $topic = Category::findOrFail($id);

        $questions = session("quiz_{$id}_questions", collect());

        $score = 0;
        foreach ($questions as $index => $q) {
            $userAnswer = $request->input("question_$index");
            if ($userAnswer === $q->correct) {
                $score++;
            }
        }

        session()->forget("quiz_{$id}_questions");

        return view('quiz', [
            'topic' => $topic,
            'questions' => $questions,
            'score' => $score
        ]);
    }
    //Pobiera odpowiedzi użytkownika i oblicza wynik
}
