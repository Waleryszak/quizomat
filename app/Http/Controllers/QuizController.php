<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private array $topics = [
        [
            'id' => 'historia',
            'title' => 'Historia',
            'description' => 'Sprawdź swoją wiedzę o wydarzeniach historycznych i postaciach',
        ],
        [
            'id' => 'chemia',
            'title' => 'Chemia',
            'description' => 'Poznaj tajniki pierwiastków, związków i reakcji chemicznych',
        ],
        [
            'id' => 'biologia',
            'title' => 'Biologia',
            'description' => 'Zgłęb tajemnice życia, organizmów i ekosystemów',
        ],
        [
            'id' => 'matematyka',
            'title' => 'Matematyka',
            'description' => 'Rozwiąż zagadki matematyczne i sprawdź swoje umiejętności',
        ],
        [
            'id' => 'przyroda',
            'title' => 'Przyroda',
            'description' => 'Odkryj cuda natury i środowiska naturalnego',
        ],
        [
            'id' => 'informatyka',
            'title' => 'Informatyka',
            'description' => 'Testuj swoją wiedzę z zakresu technologii i programowania',
        ],
        [
            'id' => 'edukacja-bezpieczenstwa',
            'title' => 'Edukacja dla bezpieczeństwa',
            'description' => 'Naucz się zasad bezpieczeństwa w różnych sytuacjach',
        ],
        [
            'id' => 'geografia',
            'title' => 'Geografia',
            'description' => 'Poznaj świat i jego zróżnicowanie geograficzne',
        ],
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

        if (!$topic) {
            abort(404);
        }

        return view('quizzes.quiz', compact('topic'));
    }
}

