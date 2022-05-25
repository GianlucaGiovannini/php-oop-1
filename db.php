<?php
class Movie
{
        public $id;
        public $title;
        public $description;
        public $poster;
        public $genre;
        public $year;

    function __construct($id, $title, $description, $poster, $genre, $year,)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->poster = $poster;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function getDate()
    {
        return $this->year;
    }
}

$movies = [

    new Movie (
        1,
        "Morbius",
        "Infetto da una rara e pericolosa malattia del sangue, determinato a salvare chiunque sia destinato a subire la sua stessa sorte, il Dr. Morbius tenta una scommessa disperata. Quello che inizialmente sembra essere un successo si rivela presto un rimedio potenzialmente più pericoloso della malattia stessa.",
        "https://www.themoviedb.org/t/p/original/gG9fTyDL03fiKnOpf2tr01sncnt.jpg",
        "Azione, Fantascienza, Fantasy",
        "2022"
    ),
    new Movie (
        2,
        "The Lost City",
        "La brillante, ma solitaria autrice Loretta Sage (Sandra Bullock) ha trascorso la sua carriera scrivendo di luoghi esotici nei suoi popolari romanzi d'amore e d'avventura con il bel modello da copertina Alan (Channing Tatum), che ha dedicato la sua vita a incarnare il personaggio di 'Dash'. Mentre è in tour per promuovere il suo nuovo libro con Alan, Loretta viene rapita da un eccentrico miliardario (Daniel Radcliffe) che spera che lei possa condurlo al tesoro dell'antica città perduta della suo ultimo libro. Volendo dimostrare che può essere un eroe nella vita reale e non solo sulle pagine dei suoi libri, Alan parte per salvarla. Spinta in un'epica avventura nella giungla, l'improbabile coppia dovrà lavorare insieme per sopravvivere agli elementi e trovare l'antico tesoro prima che sia perso per sempre.",
        "https://www.themoviedb.org/t/p/original/A3bsT0m1um6tvcmlIGxBwx9eAxn.jpg",
        "Azione, Avventura, Commedia",
        "2022"
    ),
    new Movie (
        3,
        "Sonic 2 - il film",
        "Dopo essersi stabilito a Green Hills, Sonic è pronto ad avere maggiore libertà. Tom e Maddie accettano allora di lasciarlo a casa mentre loro vanno in vacanza. Ma, non appena partiti, con il dottor Robotnik in compagnia di un nuovo partner alla ricerca di uno smeraldo in grado di costruire e annientare le civiltà, Sonic farà squadra con Tails per intraprendere una nuova missione.",
        "https://www.themoviedb.org/t/p/original/egoyMDLqCxzjnSrWOz50uLlJWmD.jpg",
        "Azione, Fantascienza, Commedia",
        "2022"
    ),
    new Movie (
        4,
        "The Northman",
        "All'inizio del X secolo, il giovane Amleth, un principe norreno, vede suo padre, il re Aurvandil, venire assassinato dallo zio Fjölnir che usurpa il trono e costringe la vedova, Gudrun, a restargli accanto come regina. Allontanatosi dal regno, vent'anni dopo Amleth è diventato un berserkr - un feroce guerriero - e si dirige alla volta dell'Islanda, dove risiede lo zio, nel frattempo decaduto. Lungo il suo percorso incontrerà Olga, una ragazza della Foresta delle Betulle caduta schiava, che diventerà sua compagnia e complice nella missione.",
        "https://www.themoviedb.org/t/p/original/fqw8nJLPRgKRyFSDC0xBsC06NGC.jpg",
        "Azione, Avventura, Fantasy",
        "2022"
    ),
    new Movie (
        5,
        "Uncharted",
        "Basato su una delle serie di videogiochi più vendute e acclamate dalla critica, Uncharted presenta al pubblico il giovane e furbo Nathan Drake nella sua prima avventura alla ricerca del tesoro con l’arguto partner Victor 'Sully' Sullivan. In un’epica avventura piena di azione che attraversa il mondo intero, i due protagonisti partono alla pericolosa ricerca del 'più grande tesoro mai trovato', inseguendo indizi che potrebbero condurli al fratello di Nathan, scomparso da tempo.",
        "https://www.themoviedb.org/t/p/original/aEGiJJP91HsKVTEPy1HhmN0wRLm.jpg",
        "Azione, Avventura",
        "2022"
    ),
    new Movie (
        6,
        "The Batman",
        "Quando un killer prende di mira l’élite di Gotham con una serie di malvagi stratagemmi, una scia di indizi criptici spinge il più grande detective del mondo a indagare nei bassifondi, incontrando personaggi come Selina Kyle alias Catwoman, Oswald Cobblepot alias il Pinguino, Carmine Falcone e Edward Nashton alias l’Enigmista. Mentre le prove iniziano a condurlo più vicino alla soluzione e la portata dei piani del malfattore diventa chiara, Batman deve stringere nuove alleanze, smascherare il colpevole e rendere giustizia all’abuso di potere e alla corruzione che da tempo affliggono Gotham City.",
        "https://www.themoviedb.org/t/p/original/tRS6jvPM9qPrrnx2KRp3ew96Yot.jpg",
        "Crime, Mistero, Thriller",
        "2022"
    )

];


