<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Google faq</title>

    <?php
        $faqs = [
            [
                'question' => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
                'answers' => [
                    "La recente <a href='http://curia.europa.eu/juris/document/document.jsf?text=&docid=152065&amppageIndex=0&doclang=it&mode=lst&dir=&occ=first&part=1&cid=276332' class='blue'> decisione della Corte di giustizia dell'Unione europea </a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",

                    "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",

                    "Per presentare una richiesta di rimozione, compila questo <a href='https://support.google.com/legal/contact/lr_eudpa?product=websearch&hl=it' class='blue'> modulo web </a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",

                    "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",

                    "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.",
                ]
            ],
            [
                'question' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
                'answers' => [
                    "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",

                    "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",

                    "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='https://www.google.com/safetycenter/' class='blue'> Centro Google per la sicurezza online </a>.",

                    "<a href='https://privacy.google.com/' class='blue'> Scopri </a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.",
                ]
            ],
            [
                'question' => "Perché il mio account è associato a un paese?",
                'answers' => [
                    "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose: 
                    <ol> 
                        <li> La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:
                            <ol type='a'>
                                <li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera. </li>
                                <li> Google LLC, con sede negli Stati Uniti, per il resto del mondo. </li>
                            </ol>

                        <li> La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali. </li>
                    </ol>",

                    "Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.",
                ]
            ],
            [
                'question' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
                'answers' => [
                    "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi <a href='https://support.google.com/websearch/answer/9109?hl=it' class='blue'> contattare il webmaster </a> del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, <a href='https://support.google.com/legal/contact/lr_eudpa?product=websearch&hl=it' class='blue'> fai clic qui </a>. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile <a href='https://support.google.com/websearch/troubleshooter/3111061?hl=it' class='blue'> visitare la nostra pagina di assistenza per avere ulteriori informazioni </a>.",
                ]
            ],
            [
                'question' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
                'answers' => [
                    "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a href='https://policies.google.com/privacy/key-terms#toc-terms-referrer-url' class='blue'> URL referrer </a>. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a href='https://support.google.com/websearch/answer/173733' class='blue'> qui </a> . Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio.",
                ]
            ],
        ]
    ?>
</head>
<body>
    <header>
        <div class="header-top">
            <h2>Google Privacy e termini</h2>

            <div class="button">
                
            </div>
        </div>

        <div class="header-nav">
            <ul>
                <li>
                    <a href="#">Introduzione</a>
                </li>
                <li>
                    <a href="#">Norme sulla privacy</a>
                </li>
                <li>
                    <a href="#">Termini di servizio</a>
                </li>
                <li>
                    <a href="#">Tecnologie</a>
                </li>
                <li>
                    <a href="#" class="active">Domande frequenti</a>
                </li>
            </ul>
        </div>
    </header>

    <main>
        <div class="container">
            <?php
                foreach ($faqs as $faq) {
                    echo "<div class='faq-container'>";
                    echo "<h2>" . $faq['question'] . "</h2>";
    
                    foreach ($faq['answers'] as $answer) {
                        echo "<p>" . $answer . "</p>";
                    }
    
                    echo "</div>";
                }
            ?>
        </div>
    </main>

    <footer>
        <div class="container">
            <div id="footer-list">
                <ul>
                    <li>
                        <a href="#">Google</a>
                    </li>
                    <li>
                        <a href="#">Tutto su Google</a>
                    </li>
                    <li>
                        <a href="#">Privacy</a>
                    </li>
                    <li>
                        <a href="#">Termini</a>
                    </li>
                </ul>
            </div>

            <div id="footer-select">
                <i class="fas fa-globe"></i>
                <select>
                    <option value="italiano" selected> Italiano </option>
                    <option value="inglese"> Inglese </option>
                    <option value="francese"> Francese </option>
                    <option value="spagnolo"> Spagnolo </option>
                </select>
            </div>
        </div>
    </footer>

</body>
</html>