<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class AdminQuizController extends Controller
{
    private function requireAdmin()
    {
        if (!session()->has('admin_logged')) {
            return redirect()->route('admin.login');
        }

        return null;
    }
    //pobiera liczbę pytań/kategorii i zwraca w panelu
    public function dashboard()
    {
        if ($r = $this->requireAdmin()) return $r;

        $count = Quiz::count();
        $categories = Quiz::select('category')->distinct()->count('category');


        return view('admin.dashboard', [
            'count' => $count,
            'categories' => $categories,
        ]);
    }
    //Zbieranie pytań z filtrowaniem po kategorii i zwraca pytania
    public function list(Request $request)
    {
        if ($r = $this->requireAdmin()) return $r;

        $category = $request->category;

        $questions = Quiz::when($category, function ($q) use ($category) {
            return $q->where('category', $category);
        })->orderBy('id', 'asc')->paginate(10);

        return view('admin.list', [
            'questions' => $questions,
            'category' => $category,
        ]);
    }
    public function form()
    {
        if ($r = $this->requireAdmin()) return $r;

        return view('admin.add');
    }
    //Form - zwraca form dodawania pytania, Store waliduje dane forma i zapisuje do bazy
    public function store(Request $request)
    {
        if ($r = $this->requireAdmin()) return $r;

        $request->validate([
            'category' => 'required|in:historia,chemia,biologia,matematyka,przyroda,informatyka,edukacja,geografia',
            'question' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct' => 'required|string',
        ]);

        Quiz::create([
            'category' => $request->category,
            'question' => $request->question,
            'option_a' => $request->option_a,
            'option_b' => $request->option_b,
            'option_c' => $request->option_c,
            'option_d' => $request->option_d,
            'correct' => $request->correct,
        ]);

        return redirect()->route('admin.questions')->with('success', 'Dodano pytanie');
    }
    //Pobiera  pytanie po ID i zwraca forma edycji
    public function edit($id)
    {
        if ($r = $this->requireAdmin()) return $r;

        $q = Quiz::findOrFail($id);

        return view('admin.edit', [
            'question' => $q,

        ]);
    }

    public function update($id, Request $request)
    {
        if ($r = $this->requireAdmin()) return $r;
        //walidacja danych po edycji i aktualizacja wybranego pytania
        $request->validate([
            'category' => 'required|in:historia,chemia,biologia,matematyka,przyroda,informatyka,edukacja,geografia',
            'question' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct' => 'required|string',
        ]);

        $q = Quiz::findOrFail($id);

        $q->update([
            'category' => $request->category,
            'question' => $request->question,
            'option_a' => $request->option_a,
            'option_b' => $request->option_b,
            'option_c' => $request->option_c,
            'option_d' => $request->option_d,
            'correct' => $request->correct,
        ]);

        return redirect()->route('admin.questions')->with('success', 'Zaktualizowano pytanie');
    }
    //Usuwanie pytania i zwraca użyt do listy z komunikatem o sukcesie
    public function delete($id)
    {
        if ($r = $this->requireAdmin()) return $r;

        Quiz::destroy($id);

        return back()->with('success', 'Usunięto pytanie');
    }
}
