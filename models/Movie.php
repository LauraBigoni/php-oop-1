<?php 
class Movie
{
    public $id;
    public $title;
    public $genre;
    public $year;
    public $description;
    public $vote;

    public function __construct($id, $title, $genre, $year, $description, $vote = 'Unknown')
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->description = $description;
        $this->vote = $vote;
    }

    public function __toString()
    {
        return $this->title . "<br />" . $this->genre . "<br />" . $this->year . "<br />" . $this->cutDescription() . "<br />" . $this->vote . "<br /><br />";
    }

    public function cutDescription()
    {
        return substr($this->description, 0, 260) . '...';
    }
}

$text1 = "I Sette Peccati Capitali, un gruppo di cavalieri malvagi che tentò di rovesciare il regno di Britannia, vennero dichiarati tutti morti, ma alcuni sostengono che siano ancora in vita. Dieci anni dopo, i Paladini, guerrieri scelti del regno, orchestrano un colpo di stato e spodestano il re, diventando i nuovi sovrani. Elizabeth, l'unica figlia del re, parte per un viaggio alla ricerca dei Sette Peccati Capitali, con l'intenzione di reclutarli e riprendersi il suo regno.";

$text2 = "Tanjiro è il primogenito di una numerosa famiglia priva di padre, che vive in una isolata casa di montagna trai boschi. Un giorno, dopo una fitta nevicata, il ragazzo si reca da solo in città per vendere del carbone, perché il percorso innevato è troppo difficile per i suoi fratellini. Non riesce a far ritorno a casa prima dell'imbrunire e un amico di famiglia lo esorta a passare la notte da lui ai piedi della montagna, sconsigliandogli di addentrasi nel bosco di notte, per via di una voce riguardante la presenza di demoni notturni in zona. La storia era vera e a pagarne le conseguenze è stata la famiglia di Tanjiro. Il ragazzo, tornato a casa il mattino seguente, trova una scena straziante: sono stati tutti sbranati, tranne sua sorella Nezuko, che è diventata un demone. Inizia ora un avventuroso viaggio alla ricerca di una cura per far tornare umana Nezuko e nel farlo Tanjiro dovrà allenarsi duramente per unirsi ai cacciatori di demoni.";

$first_movie = new Movie(1, "Nanatsu no Taizai - The Seven Deadly Sins", "Adventure - Action - Comedy - Fantasy", "2012", $text1);
$second_movie = new Movie(2, "Demon Slayer", "Adventure - Action - Horror - Supernatural", "2019", $text2, 7.7);

// var_dump($first_movie);
// var_dump($second_movie);

// echo $first_movie;
// echo $second_movie;
