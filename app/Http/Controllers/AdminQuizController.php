<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Category;
// Sprawdzanie sesji admina
class AdminQuizController extends Controller
{
    private function requireAdmin()
    {
        if (!session()->has('admin_logged')) {
            return redirect()->route('admin.login');
        }

        return null;
    }

    public function dashboard()
    {
        if ($r = $this->requireAdmin()) return $r;

        $count = Quiz::count();
        $categories = Category::count();

        return view('admin.dashboard', [
            'count' => $count,
            'categories' => $categories,
        ]);
    }
    //paginate stronicuje nam po 10 pytań
    public function list(Request $request)
    {
        if ($r = $this->requireAdmin()) return $r;

        $questions = Quiz::with('category')
            ->orderBy('id', 'asc')
            ->paginate(10);

        return view('admin.list', [
            'questions' => $questions,
        ]);
    }

    public function form()
    {
        if ($r = $this->requireAdmin()) return $r;

        $categories = Category::orderBy('title')->get();

        return view('admin.add', compact('categories'));
    }

    public function store(Request $request)
    {
        if ($r = $this->requireAdmin()) return $r;

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'question' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct' => 'required|string',
        ]);

        Quiz::create([
            'category_id' => $request->category_id,
            'question' => $request->question,
            'option_a' => $request->option_a,
            'option_b' => $request->option_b,
            'option_c' => $request->option_c,
            'option_d' => $request->option_d,
            'correct' => $request->correct,
        ]);

        return redirect()->route('admin.questions')->with('success', 'Dodano pytanie');
    }
    //Pobieranie pytań o danym ID i daje błąd 404 jeśli nie ma
    public function edit($id)
    {
        if ($r = $this->requireAdmin()) return $r;

        $question = Quiz::findOrFail($id);
        $categories = Category::orderBy('title')->get();

        return view('admin.edit', compact('question', 'categories'));
    }

    public function update($id, Request $request)
    {
        if ($r = $this->requireAdmin()) return $r;

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'question' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'correct' => 'required|string',
        ]);

        $q = Quiz::findOrFail($id);

        $q->update([
            'category_id' => $request->category_id,
            'question' => $request->question,
            'option_a' => $request->option_a,
            'option_b' => $request->option_b,
            'option_c' => $request->option_c,
            'option_d' => $request->option_d,
            'correct' => $request->correct,
        ]);

        return redirect()->route('admin.questions')->with('success', 'Zaktualizowano pytanie');
    }

    public function delete($id)
    {
        if ($r = $this->requireAdmin()) return $r;

        Quiz::destroy($id);

        return back()->with('success', 'Usunięto pytanie');
    }
}
