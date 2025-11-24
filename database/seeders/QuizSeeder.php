<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run()
    {
        $data = [


            // HISTORIA (10 PYTAŃ)

            ['category'=>'historia','question'=>'Kiedy była bitwa pod Grunwaldem?','option_a'=>'1410','option_b'=>'1492','option_c'=>'1914','option_d'=>'1795','correct'=>'1410'],
            ['category'=>'historia','question'=>'Kto był królem Polski w 1683?','option_a'=>'Jan III Sobieski','option_b'=>'Zygmunt III','option_c'=>'August II','option_d'=>'Mieszko I','correct'=>'Jan III Sobieski'],
            ['category'=>'historia','question'=>'Konstytucja 3 maja została uchwalona w roku','option_a'=>'1791','option_b'=>'1772','option_c'=>'1815','option_d'=>'1795','correct'=>'1791'],
            ['category'=>'historia','question'=>'Początek II wojny światowej','option_a'=>'1939','option_b'=>'1945','option_c'=>'1920','option_d'=>'1918','correct'=>'1939'],
            ['category'=>'historia','question'=>'Ile było rozbiorów Polski?','option_a'=>'3','option_b'=>'2','option_c'=>'4','option_d'=>'1','correct'=>'3'],
            ['category'=>'historia','question'=>'Polska odzyskała niepodległość w','option_a'=>'1918','option_b'=>'1945','option_c'=>'1791','option_d'=>'1989','correct'=>'1918'],
            ['category'=>'historia','question'=>'Unia Lubelska łączyła','option_a'=>'Polskę i Litwę','option_b'=>'Polskę i Niemcy','option_c'=>'Polskę i Rosję','option_d'=>'Polskę i Austrię','correct'=>'Polskę i Litwę'],
            ['category'=>'historia','question'=>'Chrzest Polski miał miejsce w wieku','option_a'=>'X','option_b'=>'XI','option_c'=>'XII','option_d'=>'IX','correct'=>'X'],
            ['category'=>'historia','question'=>'Wojna secesyjna rozpoczęła się w','option_a'=>'1861','option_b'=>'1776','option_c'=>'1914','option_d'=>'1812','correct'=>'1861'],
            ['category'=>'historia','question'=>'Zamach na Kennedy’ego','option_a'=>'1963','option_b'=>'1955','option_c'=>'1972','option_d'=>'1945','correct'=>'1963'],

            // CHEMIA (10 PYTAŃ)

            ['category'=>'chemia','question'=>'Symbol wody','option_a'=>'H2O','option_b'=>'CO2','option_c'=>'O2','option_d'=>'HCl','correct'=>'H2O'],
            ['category'=>'chemia','question'=>'Liczba atomowa wodoru','option_a'=>'1','option_b'=>'2','option_c'=>'0','option_d'=>'4','correct'=>'1'],
            ['category'=>'chemia','question'=>'CO2 składa się z','option_a'=>'C i O2','option_b'=>'C i H','option_c'=>'H i O','option_d'=>'C i CO','correct'=>'C i O2'],
            ['category'=>'chemia','question'=>'Kwas ma pH','option_a'=>'<7','option_b'=>'>7','option_c'=>'=7','option_d'=>'10','correct'=>'<7'],
            ['category'=>'chemia','question'=>'Na to pierwiastek','option_a'=>'Sód','option_b'=>'Azot','option_c'=>'Cynk','option_d'=>'Fosfor','correct'=>'Sód'],
            ['category'=>'chemia','question'=>'C2H5OH to','option_a'=>'Etanol','option_b'=>'Metan','option_c'=>'Woda','option_d'=>'Kwas','correct'=>'Etanol'],
            ['category'=>'chemia','question'=>'HCl to','option_a'=>'Kwas solny','option_b'=>'Tlenek','option_c'=>'Zasada','option_d'=>'Sól','correct'=>'Kwas solny'],
            ['category'=>'chemia','question'=>'NaCl to','option_a'=>'Sód i chlor','option_b'=>'Węgiel i tlen','option_c'=>'Miedź i cynk','option_d'=>'Wodór i tlen','correct'=>'Sód i chlor'],
            ['category'=>'chemia','question'=>'Gaz szlachetny to','option_a'=>'Hel','option_b'=>'Tlen','option_c'=>'Azot','option_d'=>'Wodór','correct'=>'Hel'],
            ['category'=>'chemia','question'=>'Rtęć w temperaturze pokojowej jest','option_a'=>'Cieczą','option_b'=>'Gazem','option_c'=>'Ciałem stałym','option_d'=>'Plazmą','correct'=>'Cieczą'],

            // BIOLOGIA (10 PYTAŃ)

            ['category'=>'biologia','question'=>'Komórka roślinna ma','option_a'=>'Chloroplasty','option_b'=>'Lizozomy','option_c'=>'Rybosomy','option_d'=>'Żadnego','correct'=>'Chloroplasty'],
            ['category'=>'biologia','question'=>'DNA znajduje się','option_a'=>'W jądrze','option_b'=>'W cytoplazmie','option_c'=>'W błonie','option_d'=>'W wakuoli','correct'=>'W jądrze'],
            ['category'=>'biologia','question'=>'Największy narząd człowieka','option_a'=>'Skóra','option_b'=>'Wątroba','option_c'=>'Płuca','option_d'=>'Serce','correct'=>'Skóra'],
            ['category'=>'biologia','question'=>'Fotosynteza zachodzi w','option_a'=>'Liściach','option_b'=>'Korzeniu','option_c'=>'Łodydze','option_d'=>'Owocu','correct'=>'Liściach'],
            ['category'=>'biologia','question'=>'Podstawowy cukier owocowy','option_a'=>'Fruktoza','option_b'=>'Sacharoza','option_c'=>'Glukoza','option_d'=>'Laktoza','correct'=>'Fruktoza'],
            ['category'=>'biologia','question'=>'Komórki nerwowe to','option_a'=>'Neurony','option_b'=>'Fibroblasty','option_c'=>'Limfocyty','option_d'=>'Miocyty','correct'=>'Neurony'],
            ['category'=>'biologia','question'=>'Oddychanie komórkowe zachodzi w','option_a'=>'Mitochondriach','option_b'=>'Jądrze','option_c'=>'Chloroplastach','option_d'=>'Rybosomach','correct'=>'Mitochondriach'],
            ['category'=>'biologia','question'=>'RNA odpowiada za','option_a'=>'Syntezę białek','option_b'=>'Oddychanie','option_c'=>'Poruszanie','option_d'=>'Transport tlenu','correct'=>'Syntezę białek'],
            ['category'=>'biologia','question'=>'Zębów mlecznych jest','option_a'=>'20','option_b'=>'32','option_c'=>'28','option_d'=>'24','correct'=>'20'],
            ['category'=>'biologia','question'=>'Krew pompuje','option_a'=>'Serce','option_b'=>'Mózg','option_c'=>'Jelito','option_d'=>'Płuco','correct'=>'Serce'],


            // MATEMATYKA (10 PYTAŃ)

            ['category'=>'matematyka','question'=>'5 + 7 =','option_a'=>'12','option_b'=>'10','option_c'=>'14','option_d'=>'11','correct'=>'12'],
            ['category'=>'matematyka','question'=>'Pole kwadratu to','option_a'=>'a²','option_b'=>'2a','option_c'=>'4a','option_d'=>'a+b','correct'=>'a²'],
            ['category'=>'matematyka','question'=>'π ≈','option_a'=>'3.14','option_b'=>'2.71','option_c'=>'1.41','option_d'=>'1.73','correct'=>'3.14'],
            ['category'=>'matematyka','question'=>'Pierwiastek z 16','option_a'=>'4','option_b'=>'5','option_c'=>'3','option_d'=>'2','correct'=>'4'],
            ['category'=>'matematyka','question'=>'1/2 + 1/2 =','option_a'=>'1','option_b'=>'2','option_c'=>'3/4','option_d'=>'1/4','correct'=>'1'],
            ['category'=>'matematyka','question'=>'4³ =','option_a'=>'64','option_b'=>'16','option_c'=>'32','option_d'=>'48','correct'=>'64'],
            ['category'=>'matematyka','question'=>'Ile boków ma sześciokąt?','option_a'=>'6','option_b'=>'5','option_c'=>'8','option_d'=>'4','correct'=>'6'],
            ['category'=>'matematyka','question'=>'Sin 90° =','option_a'=>'1','option_b'=>'0','option_c'=>'√2/2','option_d'=>'√3/2','correct'=>'1'],
            ['category'=>'matematyka','question'=>'100 ÷ 4 =','option_a'=>'25','option_b'=>'20','option_c'=>'30','option_d'=>'24','correct'=>'25'],
            ['category'=>'matematyka','question'=>'2 + 2 × 2 =','option_a'=>'6','option_b'=>'8','option_c'=>'4','option_d'=>'10','correct'=>'6'],

            // PRZYRODA (10 PYTAŃ)

            ['category'=>'przyroda','question'=>'Gdzie żyją niedźwiedzie polarne?','option_a'=>'Arktyka','option_b'=>'Antarktyda','option_c'=>'Afryka','option_d'=>'Azja','correct'=>'Arktyka'],
            ['category'=>'przyroda','question'=>'Pora roku po lecie','option_a'=>'Jesień','option_b'=>'Zima','option_c'=>'Wiosna','option_d'=>'Lato','correct'=>'Jesień'],
            ['category'=>'przyroda','question'=>'Największy ocean','option_a'=>'Spokojny','option_b'=>'Atlantycki','option_c'=>'Indyjski','option_d'=>'Arktyczny','correct'=>'Spokojny'],
            ['category'=>'przyroda','question'=>'Tęcza powstaje z','option_a'=>'Światła i wody','option_b'=>'Ognia','option_c'=>'Powietrza','option_d'=>'Piasku','correct'=>'Światła i wody'],
            ['category'=>'przyroda','question'=>'Co to rosa?','option_a'=>'Skroplona para wodna','option_b'=>'Deszcz','option_c'=>'Śnieg','option_d'=>'Lód','correct'=>'Skroplona para wodna'],
            ['category'=>'przyroda','question'=>'Ile planet w Układzie Słonecznym?','option_a'=>'8','option_b'=>'7','option_c'=>'6','option_d'=>'9','correct'=>'8'],
            ['category'=>'przyroda','question'=>'Największe zwierzę','option_a'=>'Płetwal błękitny','option_b'=>'Słoń','option_c'=>'Rekin','option_d'=>'Goryl','correct'=>'Płetwal błękitny'],
            ['category'=>'przyroda','question'=>'Najwyższe drzewo','option_a'=>'Sekwoja','option_b'=>'Dąb','option_c'=>'Sosna','option_d'=>'Buk','correct'=>'Sekwoja'],
            ['category'=>'przyroda','question'=>'Pierwiastek potrzebny do oddychania','option_a'=>'Tlen','option_b'=>'Wodór','option_c'=>'Azot','option_d'=>'Hel','correct'=>'Tlen'],
            ['category'=>'przyroda','question'=>'Pora roku przed latem','option_a'=>'Wiosna','option_b'=>'Jesień','option_c'=>'Zima','option_d'=>'Lato','correct'=>'Wiosna'],


            // INFORMATYKA (10 PYTAŃ)

            ['category'=>'informatyka','question'=>'CPU to','option_a'=>'Procesor','option_b'=>'Karta graficzna','option_c'=>'Dysk','option_d'=>'RAM','correct'=>'Procesor'],
            ['category'=>'informatyka','question'=>'Linux to','option_a'=>'System','option_b'=>'Gra','option_c'=>'Procesor','option_d'=>'Edytor','correct'=>'System'],
            ['category'=>'informatyka','question'=>'CSS służy do','option_a'=>'Stylowania','option_b'=>'Logiki','option_c'=>'Backendu','option_d'=>'SQL','correct'=>'Stylowania'],
            ['category'=>'informatyka','question'=>'Plik PHP ma rozszerzenie','option_a'=>'.php','option_b'=>'.exe','option_c'=>'.html','option_d'=>'.css','correct'=>'.php'],
            ['category'=>'informatyka','question'=>'RAM to','option_a'=>'Pamięć operacyjna','option_b'=>'Dysk','option_c'=>'Procesor','option_d'=>'Karta','correct'=>'Pamięć operacyjną'],
            ['category'=>'informatyka','question'=>'SSD to','option_a'=>'Dysk','option_b'=>'Procesor','option_c'=>'Zasilacz','option_d'=>'Program','correct'=>'Dysk'],
            ['category'=>'informatyka','question'=>'Git to','option_a'=>'Kontrola wersji','option_b'=>'Edytor','option_c'=>'Serwer','option_d'=>'Wirus','correct'=>'Kontrola wersji'],
            ['category'=>'informatyka','question'=>'Ile bitów ma bajt','option_a'=>'8','option_b'=>'4','option_c'=>'16','option_d'=>'32','correct'=>'8'],
            ['category'=>'informatyka','question'=>'HTML to','option_a'=>'Znaczniki','option_b'=>'Baza danych','option_c'=>'Język backendowy','option_d'=>'Program','correct'=>'Znaczniki'],
            ['category'=>'informatyka','question'=>'Który to język backendowy?','option_a'=>'PHP','option_b'=>'HTML','option_c'=>'CSS','option_d'=>'SVG','correct'=>'PHP'],


            // EDUKACJA (10 PYTAŃ)

            ['category'=>'edukacja','question'=>'Numery alarmowe to','option_a'=>'112','option_b'=>'911','option_c'=>'997','option_d'=>'998','correct'=>'112'],
            ['category'=>'edukacja','question'=>'AED to','option_a'=>'Defibrylator','option_b'=>'Kamera','option_c'=>'GPS','option_d'=>'Radiotelefon','correct'=>'Defibrylator'],
            ['category'=>'edukacja','question'=>'Pierwszy krok RKO','option_a'=>'Wezwanie pomocy','option_b'=>'Masaż','option_c'=>'Wdechy','option_d'=>'Obrócenie','correct'=>'Wezwanie pomocy'],
            ['category'=>'edukacja','question'=>'Pozycja boczna to','option_a'=>'Bezpieczna','option_b'=>'Niebezpieczna','option_c'=>'Wysoka','option_d'=>'Atakująca','correct'=>'Bezpieczna'],
            ['category'=>'edukacja','question'=>'Oparzenie chłodzimy','option_a'=>'Wodą','option_b'=>'Masłem','option_c'=>'Sól','option_d'=>'Tłuszczem','correct'=>'Wodą'],
            ['category'=>'edukacja','question'=>'Co zrobić przy krwawieniu?','option_a'=>'Ucisk','option_b'=>'Lód','option_c'=>'Zimny okład','option_d'=>'Nic','correct'=>'Ucisk'],
            ['category'=>'edukacja','question'=>'Gaśnica służy do','option_a'=>'Gaszenia','option_b'=>'Oświetlenia','option_c'=>'Jedzenia','option_d'=>'Sprzątania','correct'=>'Gaszenia'],
            ['category'=>'edukacja','question'=>'Co to ewakuacja?','option_a'=>'Opuszczenie miejsca','option_b'=>'Wyciszanie','option_c'=>'Szukanie','option_d'=>'Nauczanie','correct'=>'Opuszczenie miejsca'],
            ['category'=>'edukacja','question'=>'Znaki ostrzegawcze mają kształt','option_a'=>'Trójkąta','option_b'=>'Koła','option_c'=>'Kwadratu','option_d'=>'Prostokąta','correct'=>'Trójkąta'],
            ['category'=>'edukacja','question'=>'Przy złamaniu należy','option_a'=>'Unieruchomić','option_b'=>'Zginąć','option_c'=>'Umyć','option_d'=>'Przykryć','correct'=>'Unieruchomić'],

            // GEOGRAFIA (10 PYTAŃ)

            ['category'=>'geografia','question'=>'Najwyższa góra','option_a'=>'Everest','option_b'=>'K2','option_c'=>'Rysy','option_d'=>'Gerlach','correct'=>'Everest'],
            ['category'=>'geografia','question'=>'Najdłuższa rzeka','option_a'=>'Nil','option_b'=>'Amazonka','option_c'=>'Jangcy','option_d'=>'Wisła','correct'=>'Nil'],
            ['category'=>'geografia','question'=>'Stolica Francji','option_a'=>'Paryż','option_b'=>'Berlin','option_c'=>'Madryt','option_d'=>'Lizbona','correct'=>'Paryż'],
            ['category'=>'geografia','question'=>'Największy kontynent','option_a'=>'Azja','option_b'=>'Afryka','option_c'=>'Europa','option_d'=>'Australia','correct'=>'Azja'],
            ['category'=>'geografia','question'=>'Ocean przy Polsce','option_a'=>'Atlantycki','option_b'=>'Spokojny','option_c'=>'Arktyczny','option_d'=>'Żaden','correct'=>'Atlantycki'],
            ['category'=>'geografia','question'=>'Kraj graniczący z Polską','option_a'=>'Niemcy','option_b'=>'Hiszpania','option_c'=>'Włochy','option_d'=>'Norwegia','correct'=>'Niemcy'],
            ['category'=>'geografia','question'=>'Wyspiarskie państwo','option_a'=>'Japonia','option_b'=>'Polska','option_c'=>'Austria','option_d'=>'Czechy','correct'=>'Japonia'],
            ['category'=>'geografia','question'=>'Stolica Niemiec','option_a'=>'Berlin','option_b'=>'Hamburg','option_c'=>'Monachium','option_d'=>'Kolonia','correct'=>'Berlin'],
            ['category'=>'geografia','question'=>'Pustynia w Afryce','option_a'=>'Sahara','option_b'=>'Gobi','option_c'=>'Kalahari','option_d'=>'Atakama','correct'=>'Sahara'],
            ['category'=>'geografia','question'=>'Morze przy Polsce','option_a'=>'Bałtyckie','option_b'=>'Czarne','option_c'=>'Śródziemne','option_d'=>'Północne','correct'=>'Bałtyckie'],
        ];

        foreach ($data as $row) {
            Quiz::create($row);
        }
    }
}
