## Progetto M133: Realizzazione di un Base-Converter in PHP

Davide Ceresa – I3C

CPT Locarno – Anno 2019/2020

# Indice :

1.Descrizione Progetto

2.Tecnologie utilizzate

3.Descrizione funzioni

4.Conclusioni finali

## Descrizione Progetto :

Sviluppare un&#39;applicazione web per la conversioni di valori da base n a base m, dove n e m sono compresi tra 2 e 16.

Il sistema deve essere in grado di eseguire un qualsiasi tipo di conversione nei 2 sensi e mostrare a schermo il procedimento seguito nella risoluzione. Nello specifico quindi bisogna avere:

1. Interfaccia per l&#39;inserimento del valore, della base di partenza e della base di destinazione
2. Verificare se il valore inserito è corretto (compatibile con la base di partenza)
3. Eseguire la conversione dalla base di partenza alla base di destinazione e mostrare a schermo i passaggi seguiti, cioé i calcoli fatti.
4. Indicare il risultato (o eventuali errori)

Creare un&#39;interfaccia funzionale e gradevole all&#39;uso.

## Tecnologie utilizzate :

Per la realizzazione di questo progetto mi sono basato su due tecnologie:

PHP: ([https://www.php.net/](https://www.php.net/)), è un linguaggio di Scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche.

Bootstrap: ([https://getbootstrap.com/](https://getbootstrap.com/)), è una raccolta di strumenti open source per la creazione di siti e applicazioni Web.

## Descrizione funzioni :

Durante lo sviluppo del progetto ho suddiviso le funzioni necessarie in due file distinti: uno è il file actions.php, il quale contiente tutte le funzioni che eseguono delle procedure di verifica o calcoli. Nell&#39;altro file invece, chiamato render.php ho inserito delle funzione che tramite il comando echo e la concatenazione delle stringhe mi permetteva di passare del codice html dinamico.

In seguito presenterò nel dettaglio le funzioni più importanti del progetto:

La funzione _ **renderResult** _ si incarica di mostrare i risultati derivanti dalla compilazione dei forms nel caso i dati siano validi o no; innanzitutto si verifica la esistenza di questi dati guardando se la richiesta è POST, se lo è si verifica la presenza di errori tramite la funzione _ **checkIfHasErrors** _(spiegata in seguito).

Al termine della verifica se non ci sono errori viene chamata la funzione _ **renderConvertionSteps** _la quale si incarica di mostrare dei passaggi intermedi nella procedura di conversione e il risultato finale. Nel caso ci fossero errori viene chiamata la funzione _ **renderErrors** _, la quale stampa una lista contenente tutti gli errori trovati nei dati inseriti dell&#39;utente.

La funzione _ **checkIfHasErrors** _ serve a controllare la validità dei valori inseriti dall&#39; utente: nel caso delle basi controlla se i valori sono tra il 2 e il 16, mentre per il numero da convertire deve controllare innanzitutto se sia un numero e poi verificare se il numero è valido nella base iniziale inserita, questa operiazione viene eseguita nella funzione _ **checkIfIsAValidNumber** _.

La funzione _ **renderForm** _ si incarica di mostrare il form nel quale inserire i valori necessari per la conversione; il suo funzionamento è molto semplice: se il metodo di richiesta è POST significa che sono già stati inseriti dei valori, quindi per praticità li mostra all&#39;utente nei rispettivi form tramite la funzione _ **renderCompliledForm** _. Nel caso la chiamata fosse GET, non vi è nessun valore da mostrare e quindi i forms mostrano un placeholder invocando la funzione _ **renderEmptyForm** _.

