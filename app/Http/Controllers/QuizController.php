<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    private array $topics = [
        ['id' => 'historia', 'title' => 'Historia', 'description' => 'Wydarzenia historyczne i postacie'],
        ['id' => 'chemia', 'title' => 'Chemia', 'description' => 'Pierwiastki i reakcje chemiczne'],
        ['id' => 'biologia', 'title' => 'Biologia', 'description' => 'Świat roślin i zwierząt'],
        ['id' => 'matematyka', 'title' => 'Matematyka', 'description' => 'Rachunki i logiczne myślenie'],
        ['id' => 'przyroda', 'title' => 'Przyroda', 'description' => 'Zjawiska naturalne'],
        ['id' => 'informatyka', 'title' => 'Informatyka', 'description' => 'Komputery i programowanie'],
        ['id' => 'edukacja', 'title' => 'Edukacja dla bezpieczeństwa', 'description' => 'Pierwsza pomoc i bezpieczeństwo'],
        ['id' => 'geografia', 'title' => 'Geografia', 'description' => 'Kraje, mapy, świat'],
    ];

    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('quizzes.index', ['topics' => $this->topics]);
    }

    public function show($id)
    {
        $topic = collect($this->topics)->firstWhere('id', $id);
        if (!$topic) abort(404);

        $questions = Quiz::where('category', $id)
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
        $topic = collect($this->topics)->firstWhere('id', $id);
        if (!$topic) abort(404);

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
}
