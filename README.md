# numCMS

Un piccolo CMS basato su file, basato su un'idea di Francesca San Severino.
La prima aplicazione di tale CMS è disponibile sul [sito di numerone](https://numerone.altervista.org)

# Come si utilizza:
Per prima cosa bisogna rendere illegibile, tramite htaccess, la cartella include.
In seguito bisogna creare un file con nome esplificativo per ogni pagina che si vuole creare nella cartella include.
IL file deve avere estensione php em deve avere la seguennte forma:

<img width="768" alt="2022-09-08 (2)" src="https://user-images.githubusercontent.com/49764967/189149863-f5eb0d21-28d6-4960-bedf-f977153e74b2.png">

In seguito bisogna aprire il file index.php, modificare il numero massimo che può assumere la variabile passata come get id, a seconda di quanti files di inclusione si è creato, ed infine bisogna costruire il menù usando la funzione menù che accetta in input:
l'id della pagina su cui si è
l'id che corrisponde alla pagina presa in seame dal menù
la dicitura del menù che si vuole far corrispondere

Tale funzione restituisce in output true se la pagina del menù è la corrispondente, false altrimenti, e se è true bisogna includere il relativo file.

A questo punto il menù può continuare ed alla fine si mostra il contenuto della variabile contenuto.

<img width="768" alt="2022-09-08 (3)" src="https://user-images.githubusercontent.com/49764967/189151543-80533429-a9fd-43ce-8ff4-6f78fa79bc92.png">

# Donazione

[![paypal](https://www.paypalobjects.com/it_IT/IT/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JZVR4QQFGLR6Q)

Puoi donare anche tramite carta Hype a patto di avere il mio numero di cellulare nella rubrica. Sai dove lo puoi trovare? Sul mio curriculum.
Apri l'app Hype, fai il login, seleziona PAGAMENTI, INVIA DENARO, seleziona il mio numero nella rubrica, imposta l'importo, INSERISCI LA CAUSALE e segui le istruzioni a video.
