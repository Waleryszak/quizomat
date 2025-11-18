<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private array $topics = [
        ['id' => 'historia', 'title' => 'Historia', 'description' => 'Wydarzenia historyczne i postacie'],
        ['id' => 'chemia', 'title' => 'Chemia', 'description' => 'Pierwiastki, związki i reakcje chemiczne'],
        ['id' => 'biologia', 'title' => 'Biologia', 'description' => 'Świat roślin, zwierząt i człowieka'],
        ['id' => 'matematyka', 'title' => 'Matematyka', 'description' => 'Obliczenia, wzory i logika'],
        ['id' => 'przyroda', 'title' => 'Przyroda', 'description' => 'Zjawiska naturalne i środowisko'],
        ['id' => 'informatyka', 'title' => 'Informatyka', 'description' => 'Komputery, sieci i programowanie'],
        ['id' => 'edukacja', 'title' => 'Edukacja dla bezpieczeństwa', 'description' => 'Zasady bezpieczeństwa i pierwsza pomoc'],
        ['id' => 'geografia', 'title' => 'Geografia', 'description' => 'Mapa świata, kontynenty i kraje'],
    ];

    private array $questionPool = [
        'historia' => [
            ['question' => 'Kiedy była bitwa pod Grunwaldem?', 'options' => ['1410', '1492', '1914', '1795'], 'correct' => '1410'],
            ['question' => 'Kto był królem Polski w 1683?', 'options' => ['Jan III Sobieski', 'Zygmunt III', 'August II', 'Mieszko I'], 'correct' => 'Jan III Sobieski'],
            ['question' => 'W którym roku uchwalono Konstytucję 3 Maja?', 'options' => ['1791', '1772', '1815', '1795'], 'correct' => '1791'],
            ['question' => 'Kiedy rozpoczęła się II wojna światowa?', 'options' => ['1939', '1945', '1920', '1918'], 'correct' => '1939'],
            ['question' => 'Ile było rozbiorów Polski?', 'options' => ['3', '2', '4', '1'], 'correct' => '3'],
            ['question' => 'Kiedy Polska odzyskała niepodległość?', 'options' => ['1918', '1945', '1791', '1989'], 'correct' => '1918'],
            ['question' => 'Kto podpisał Unię Lubelską?', 'options' => ['Polska i Litwa', 'Polska i Niemcy', 'Polska i Rosja', 'Polska i Austria'], 'correct' => 'Polska i Litwa'],
            ['question' => 'W którym wieku był Chrzest Polski?', 'options' => ['X', 'XI', 'XII', 'IX'], 'correct' => 'X'],
            ['question' => 'Kiedy była wojna secesyjna w USA?', 'options' => ['1861', '1776', '1914', '1812'], 'correct' => '1861'],
            ['question' => 'Zamach na Kennedy’ego?', 'options' => ['1963', '1955', '1972', '1945'], 'correct' => '1963'],
        ],
        'chemia' => [
            ['question' => 'Symbol wody?', 'options' => ['H2O', 'CO2', 'O2', 'HCl'], 'correct' => 'H2O'],
            ['question' => 'Liczba atomowa wodoru?', 'options' => ['1', '2', '0', '4'], 'correct' => '1'],
            ['question' => 'Z czego składa się CO2?', 'options' => ['C i O2', 'C i H', 'C i O', 'H2 i O'], 'correct' => 'C i O2'],
            ['question' => 'pH kwasu?', 'options' => ['<7', '>7', '=7', '0'], 'correct' => '<7'],
            ['question' => 'Na to pierwiastek?', 'options' => ['Sód', 'Azot', 'Cynk', 'Żelazo'], 'correct' => 'Sód'],
            ['question' => 'C2H5OH to?', 'options' => ['Etanol', 'Metan', 'Woda', 'Kwas'], 'correct' => 'Etanol'],
            ['question' => 'HCl to?', 'options' => ['Kwas solny', 'Tlenek', 'Zasada', 'Woda'], 'correct' => 'Kwas solny'],
            ['question' => 'Z czego składa się NaCl?', 'options' => ['Sód i chlor', 'Węgiel i tlen', 'Cynk i miedź', 'Wodór i węgiel'], 'correct' => 'Sód i chlor'],
            ['question' => 'Który gaz jest szlachetny?', 'options' => ['Hel', 'Tlen', 'Azot', 'Wodór'], 'correct' => 'Hel'],
            ['question' => 'Stan skupienia rtęci?', 'options' => ['Ciecz', 'Gaz', 'Stały', 'Plazma'], 'correct' => 'Ciecz'],
        ],
        'biologia' => [
            ['question' => 'Komórka roślinna ma?', 'options' => ['Chloroplasty', 'Lizozomy', 'Mitochondria', 'Żadne'], 'correct' => 'Chloroplasty'],
            ['question' => 'DNA znajduje się?', 'options' => ['W jądrze', 'W cytoplazmie', 'W ścianie komórkowej', 'W rybosomie'], 'correct' => 'W jądrze'],
            ['question' => 'Największy narząd człowieka?', 'options' => ['Skóra', 'Wątroba', 'Mózg', 'Płuca'], 'correct' => 'Skóra'],
            ['question' => 'Fotosynteza zachodzi w?', 'options' => ['Liściach', 'Korzeniu', 'Łodydze', 'Owocu'], 'correct' => 'Liściach'],
            ['question' => 'Układ krwionośny zawiera?', 'options' => ['Serce', 'Płuca', 'Jelita', 'Mózg'], 'correct' => 'Serce'],
            ['question' => 'Cukier w owocach?', 'options' => ['Fruktoza', 'Glukoza', 'Laktoza', 'Sacharoza'], 'correct' => 'Fruktoza'],
            ['question' => 'Komórki nerwowe to?', 'options' => ['Neurony', 'Limfocyty', 'Fibroblasty', 'Miocyty'], 'correct' => 'Neurony'],
            ['question' => 'Oddychanie komórkowe zachodzi w?', 'options' => ['Mitochondriach', 'Jądrze', 'Rybosomach', 'Chloroplastach'], 'correct' => 'Mitochondriach'],
            ['question' => 'RNA odpowiada za?', 'options' => ['Syntezę białek', 'Oddychanie', 'Ruch', 'Transport'], 'correct' => 'Syntezę białek'],
            ['question' => 'Zęby mleczne ile sztuk?', 'options' => ['20', '32', '28', '24'], 'correct' => '20'],
        ],
        'matematyka' => [
            ['question' => '5 + 7 = ?', 'options' => ['12', '10', '14', '11'], 'correct' => '12'],
            ['question' => 'Pole kwadratu to?', 'options' => ['a²', '2a', '4a', 'a·b'], 'correct' => 'a²'],
            ['question' => 'Liczba π to około?', 'options' => ['3.14', '2.71', '1.41', '1.73'], 'correct' => '3.14'],
            ['question' => 'Pierwiastek z 16?', 'options' => ['4', '5', '3', '2'], 'correct' => '4'],
            ['question' => '1/2 + 1/2 = ?', 'options' => ['1', '2', '3/4', '1/4'], 'correct' => '1'],
            ['question' => '4³ = ?', 'options' => ['64', '16', '12', '32'], 'correct' => '64'],
            ['question' => '45° to?', 'options' => ['kąt ostry', 'prostokątny', 'rozwarty', 'pełny'], 'correct' => 'kąt ostry'],
            ['question' => 'Sinus 90° = ?', 'options' => ['1', '0', '√2/2', '√3/2'], 'correct' => '1'],
            ['question' => 'Ile boków ma sześciokąt?', 'options' => ['6', '5', '8', '4'], 'correct' => '6'],
            ['question' => '100 ÷ 4 = ?', 'options' => ['25', '20', '30', '24'], 'correct' => '25'],
        ],
        'przyroda' => [
            ['question' => 'Gdzie żyją niedźwiedzie polarne?', 'options' => ['Arktyka', 'Antarktyda', 'Afryka', 'Azja'], 'correct' => 'Arktyka'],
            ['question' => 'Pora roku po lecie?', 'options' => ['Jesień', 'Zima', 'Wiosna', 'Lato'], 'correct' => 'Jesień'],
            ['question' => 'Największy ocean?', 'options' => ['Spokojny', 'Atlantycki', 'Indyjski', 'Arktyczny'], 'correct' => 'Spokojny'],
            ['question' => 'Fotosynteza to?', 'options' => ['Tworzenie tlenu', 'Oddychanie', 'Parowanie', 'Ogrzewanie'], 'correct' => 'Tworzenie tlenu'],
            ['question' => 'Z czego zbudowana jest tęcza?', 'options' => ['Światło i woda', 'Z ognia', 'Z powietrza', 'Z pyłu'], 'correct' => 'Światło i woda'],
            ['question' => 'Co to rosa?', 'options' => ['Skroplona para wodna', 'Deszcz', 'Śnieg', 'Lód'], 'correct' => 'Skroplona para wodna'],
            ['question' => 'Ile planet w Układzie Słonecznym?', 'options' => ['8', '9', '7', '6'], 'correct' => '8'],
            ['question' => 'Największe zwierzę?', 'options' => ['Płetwal błękitny', 'Słoń', 'Rekin', 'Goryl'], 'correct' => 'Płetwal błękitny'],
            ['question' => 'Najwyższe drzewo?', 'options' => ['Sekwoja', 'Dąb', 'Sosna', 'Buk'], 'correct' => 'Sekwoja'],
            ['question' => 'Który pierwiastek potrzebny do oddychania?', 'options' => ['Tlen', 'Wodór', 'Azot', 'Hel'], 'correct' => 'Tlen'],
        ],
        'informatyka' => [
            ['question' => 'Co oznacza skrót CPU?', 'options' => ['Procesor', 'Karta graficzna', 'Pamięć RAM', 'Dysk'], 'correct' => 'Procesor'],
            ['question' => 'Jaki system operacyjny to open source?', 'options' => ['Linux', 'Windows', 'macOS', 'Android'], 'correct' => 'Linux'],
            ['question' => 'Który język jest backendowy?', 'options' => ['PHP', 'HTML', 'CSS', 'Photoshop'], 'correct' => 'PHP'],
            ['question' => 'Za co odpowiada RAM?', 'options' => ['Pamięć operacyjna', 'Przechowywanie plików', 'Grafika', 'Dźwięk'], 'correct' => 'Pamięć operacyjna'],
            ['question' => 'Co to jest HTML?', 'options' => ['Język znaczników', 'Program', 'System', 'Aplikacja'], 'correct' => 'Język znaczników'],
            ['question' => 'Czym jest Git?', 'options' => ['System kontroli wersji', 'Silnik gry', 'Antywirus', 'Serwer'], 'correct' => 'System kontroli wersji'],
            ['question' => 'Jakie rozszerzenie ma plik PHP?', 'options' => ['.php', '.html', '.exe', '.doc'], 'correct' => '.php'],
            ['question' => 'Co to SSD?', 'options' => ['Typ dysku', 'Procesor', 'Zasilacz', 'Port USB'], 'correct' => 'Typ dysku'],
            ['question' => 'Ile bitów ma bajt?', 'options' => ['8', '16', '32', '4'], 'correct' => '8'],
            ['question' => 'Jaki język służy do stylowania stron?', 'options' => ['CSS', 'JS', 'Python', 'SQL'], 'correct' => 'CSS'],
],

        'edukacja' => [
    ['question' => 'Numer alarmowy w Polsce?', 'options' => ['112', '911', '998', '997'], 'correct' => '112'],
    ['question' => 'Pierwszy krok RKO?', 'options' => ['Sprawdzenie oddechu', 'Wezwanie pomocy', 'Rozpięcie ubrania', 'Zadzwonienie do rodziny'], 'correct' => 'Wezwanie pomocy'],
    ['question' => 'Co oznacza AED?', 'options' => ['Defibrylator', 'Kamera', 'System GPS', 'Radiotelefon'], 'correct' => 'Defibrylator'],
    ['question' => 'Kiedy używamy opatrunku uciskowego?', 'options' => ['Krwotok', 'Kaszel', 'Oparzenie', 'Zatrucie'], 'correct' => 'Krwotok'],
    ['question' => 'Co robimy przy poparzeniu?', 'options' => ['Schładzamy wodą', 'Nakładamy masło', 'Zasypujemy solą', 'Zostawiamy'], 'correct' => 'Schładzamy wodą'],
    ['question' => 'Co grozi za brak pasów w aucie?', 'options' => ['Mandat', 'Ostrzeżenie', 'Nic', 'Tylko pouczenie'], 'correct' => 'Mandat'],
    ['question' => 'Kiedy dzwonić po karetkę?', 'options' => ['Zagrażające życiu', 'Brak internetu', 'Złe samopoczucie', 'Ból palca'], 'correct' => 'Zagrażające życiu'],
    ['question' => 'Pozycja bezpieczna to?', 'options' => ['Boczna', 'Na plecach', 'Na brzuchu', 'Na kolanach'], 'correct' => 'Boczna'],
    ['question' => 'Co oznacza znak ostrzegawczy?', 'options' => ['Trójkąt', 'Koło', 'Kwadrat', 'Prostokąt'], 'correct' => 'Trójkąt'],
    ['question' => 'Podstawowy środek gaśniczy?', 'options' => ['Gaśnica', 'Woda', 'Piasek', 'Trawa'], 'correct' => 'Gaśnica'],
],

        'geografia' => [
    ['question' => 'Najwyższa góra świata?', 'options' => ['Mount Everest', 'K2', 'Alpy', 'Rysy'], 'correct' => 'Mount Everest'],
    ['question' => 'Najdłuższa rzeka?', 'options' => ['Nil', 'Amazonka', 'Wisła', 'Jangcy'], 'correct' => 'Nil'],
    ['question' => 'Stolica Francji?', 'options' => ['Paryż', 'Rzym', 'Madryt', 'Berlin'], 'correct' => 'Paryż'],
    ['question' => 'Który kontynent jest największy?', 'options' => ['Azja', 'Afryka', 'Europa', 'Australia'], 'correct' => 'Azja'],
    ['question' => 'Jaki ocean leży przy Polsce?', 'options' => ['Atlantycki', 'Spokojny', 'Arktyczny', 'Żaden'], 'correct' => 'Atlantycki'],
    ['question' => 'Który kraj graniczy z Polską?', 'options' => ['Niemcy', 'Włochy', 'Hiszpania', 'Norwegia'], 'correct' => 'Niemcy'],
    ['question' => 'Który kraj jest wyspą?', 'options' => ['Japonia', 'Czechy', 'Austria', 'Polska'], 'correct' => 'Japonia'],
    ['question' => 'Stolica Niemiec?', 'options' => ['Berlin', 'Hamburg', 'Monachium', 'Kolonia'], 'correct' => 'Berlin'],
    ['question' => 'Pustynia w Afryce?', 'options' => ['Sahara', 'Gobi', 'Kalahari', 'Atakama'], 'correct' => 'Sahara'],
    ['question' => 'Morze na północy Polski?', 'options' => ['Bałtyckie', 'Północne', 'Czarne', 'Śródziemne'], 'correct' => 'Bałtyckie'],
],

    ];

    public function show($id)
    {
        $topic = collect($this->topics)->firstWhere('id', $id);
        if (!$topic) abort(404);

        $questions = collect($this->questionPool[$id] ?? [])->shuffle()->take(4)->values()->toArray();
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

        $questions = session("quiz_{$id}_questions", []);
        $score = 0;

        foreach ($questions as $index => $q) {
            $answer = $request->input("question_$index");
            if ($answer === $q['correct']) $score++;
        }

        session()->forget("quiz_{$id}_questions");

        return view('quiz', [
            'topic' => $topic,
            'questions' => $questions,
            'score' => $score
        ]);
    }

    public function index()
    {
        return view('quizzes.index', ['topics' => $this->topics]);
    }

    public function home()
    {
        return view('home');
    }
}
