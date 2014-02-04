<?php include("incl/config.php"); ?>

<?php 
 $pageId = "report";
 $title = "Mina redovisningar av kursmomenten";
 include("incl/header.php"); 
?>
  <div id="content">
   <h1>Redovisning av kursmomenten</h1>
   <h2>Kmom06: PHP och SQLite</h2>
   <p>Det h&auml;r kursmomentet gick &auml;ven det ganska sm&auml;rtfritt. Mitt SQLite Manager s&aring;g inte exakt likadant ut bara men jag lyckades hitta motsvarande funktioner ganska snabbt &auml;nd&aring; och uppn&aring; &ouml;nskat resultat.</p>
   <p>Det var ganska snurrigt med hur SQL funkar egentligen men efter att ha provat n&aring;gra g&aring;nger med olika exempel, databaser och tabeller s&aring; b&ouml;rjade det g&aring; ganska bra och jag tycker sj&auml;lv att jag f&ouml;rst&aring;r v&auml;l hur det fungerar. Guiden var ganska bra men tyv&auml;rr k&auml;nner jag att den fattas lite information. Jag hade t.ex. ingen aning om vad "INTEGER" och "VARCHAR" betydde och det var inte s&aring;d&auml;r j&auml;ttel&auml;tt att googla sig till det heller, det verkade vara alldeles f&ouml;r uppenbara saker. Det &auml;r nog l&auml;tt att ta s&aring;na saker f&ouml;r givet n&auml;r man redan kan det (och det ju faktiskt &auml;r ganska uppenbara saker) men jag skulle g&auml;rna vilja ha tillg&aring;ng till ett uppslagsverk av n&aring;got slag d&auml;r man kan sl&aring; upp ord som man inte riktigt f&ouml;rst&aring;r. N&auml;r jag b&ouml;rjade med PHP d&ouml;k ordet "boolean" upp hela tiden ocks&aring; och det l&aring;ng tid f&ouml;r mig innan jag lyckades komma underfund med vad det egentligen innebar!</p>
   <p>SQLite och PDO gjorde den h&auml;r uppgiften v&auml;ldigt enkel, det i kombination med att ta sig tiden att faktiskt l&auml;sa igenom k&auml;llkoden som "mos" har skrivit. Jag b&ouml;rjar k&auml;nna mig v&auml;ldigt trygg i att tolka andras kod.</p>
   <hr>
   <h2>Kmom05: HTML-formul&auml;r och PHP</h2>
   <p>En ynka dag tog det f&ouml;r mig att ta mig igenom den h&auml;r v&auml;ldigt roliga och l&auml;rorika uppgift! Det KAN h&auml;nda att jag b&ouml;rjar k&auml;nna att PHP inte &auml;r s&aring; himla sv&aring;rt &auml;nd&aring; och de sista pusselbitarna verkar ha fallit p&aring; plats... en enorm l&auml;ttnad faktiskt, himla n&ouml;jd med min insats! Det &auml;r sv&aring;rt att peka p&aring; n&aring;got s&auml;rskilt som jag tyckte var sv&aring;rt eller problematiskt d&aring; fels&ouml;kningen gick s&aring; l&auml;tt att det aldrig k&auml;ndes som n&aring;got riktigt problem. Alla nya begrepp och funktioner som jag f&aring;tt l&auml;ra mig har k&auml;nts mer eller mindre sj&auml;lvklara.</p>
   <p>Mina tips till en ovan PHP-programmerare &auml;r bara att ge det tid. R&auml;tt vad det &auml;r s&aring; sl&auml;pper det och sen &auml;r det bara sm&aring;saker att f&ouml;rs&ouml;ka minnas, som vad funktionerna heter eller hur man s&auml;tter en variabel (till exempel, s&aring;klart!)... och s&aring;nt kan man faktiskt dubbelkolla med lite enkla verktyg som Google eller PHP-manualen p&aring; n&auml;tet!</p> 
   <p>Inte heller i denna uppgift har jag haft n&aring;gon direkt anv&auml;ndning av guiden php20, jag har i f&ouml;rsta hand bett programmerarv&auml;nner om hj&auml;lp eller l&auml;st i f&ouml;rv&auml;g om kommande moment i boken "Beginning PHP and MySQL: From Novice to Professional". Mycket n&ouml;jd med den boken faktiskt, bra val!</p>
   <hr>
   <h2>Kmom04: CSS och en style-v&auml;ljare i PHP</h2>
   <p>CSS &auml;r n&aring;got jag k&auml;nner mig v&auml;ldigt s&auml;ker p&aring; och d&auml;rf&ouml;r gick denna uppgift v&auml;ldigt snabbt. Jag har lekt med CSS otaliga g&aring;nger, s&aring; det d&auml;r med att skapa ett nytt stylesheet eller tre k&auml;ndes inte som n&aring;got problem! CSS &auml;r ett roligt och kreativt verktyg, &auml;ven om det kan vara lite knixigt n&auml;r man r&aring;kat f&aring; in lite f&ouml;r mycket och sakerna b&ouml;rjar krocka med varandra! Det var dock lite klurigt att f&ouml;rst&aring; hela processen i sj&auml;lva stylesheetv&auml;ljaren (just PHP-delen av det) men till slut nystade garnnystanet upp sig och fick lite mera klarhet! PHP &auml;r fortfarande sv&aring;rt f&ouml;r mig men det blir b&auml;ttre och b&auml;ttre. Med &ouml;vning kommer det att flyta p&aring; lika bra som HTML och CSS redan g&ouml;r f&ouml;r mig.</p>
   <p>N&auml;r jag gjorde stylesheet2.css s&aring; utgick jag fr&aring;n ingen CSS alls men tittade tillbaka p&aring; mitt f&ouml;reg&aring;ende stylesheet f&ouml;r att anv&auml;nda mig av de element som jag ville skulle &aring;terkomma. Jag blir lite allergisk n&auml;r man blandar allt f&ouml;r m&aring;nga olika element i samma stylesheet, jag tycker bara det ser ihoptryckt och p&aring;tvingat ut, s&aring; jag h&ouml;ll mig till ett enkelt tema.</p>
   <hr>
   <h2>Kmom03: Dynamisk webbplats med PHP</h2>
   <p>Det h&auml;r momentet har fungerat extremt mycket s&auml;mre &auml;n de tidigare. Dels har det tagit l&aring;ng tid, av personliga sk&auml;l som orsakat tidsbrist men ocks&aring; f&ouml;r att jag har haft mycket sv&aring;rt att f&ouml;rst&aring; uppgifterna. Hade jag inte haft en programmerarv&auml;n till hj&auml;lp hade jag f&ouml;rmodligen gett upp. Guiden php20 hj&auml;lpte mig inte alls och inte heller manualen. Jag &auml;r definitivt en nyb&ouml;rjare och ingenting som jag har l&auml;st mig till har egentligen l&auml;rt mig n&aring;got f&ouml;rr&auml;n n&aring;gon annan f&ouml;rklarat dem p&aring; ett annat vis. Efter att ha haft studiecirklar med v&auml;nner har jag i alla fall lyckats ta mig igenom kursmomentet och k&auml;nner nu att jag i enkla drag begriper vad det &auml;r f&ouml;r kod jag skrivit. Jag kommer att &ouml;va mycket mer p&aring; vad vi gjort med hj&auml;lp av kurslitteraturen.</p>
   <p>(M&ouml;jligen irrelevant men...) Under det h&auml;r kursmomentet har jag hunnit prova lite andra textredigerare och har fastnat f&ouml;r Sublime Text 2 ist&auml;llet f&ouml;r jEdit. F&ouml;rst provade jag Textmate men d&aring; det bara fanns till OS X fick det &aring;ka i soptunnan till f&ouml;rdel f&ouml;r Sublime som fungerar i b&aring;de OS X, Linux och Windows. Sk&ouml;nt!</p>
   <p>Min k&auml;ra supersambo har &auml;ven f&ouml;rsett mig med en egen utvecklingsmilj&ouml; baserad p&aring; hans server och tj&auml;nsten ownCloud s&aring; att jag kommer &aring;t mina skoluppgifter fr&aring;n alla m&ouml;jliga burkar om n&ouml;den f&ouml;r detta skulle vara framme, samt att jag har en s&auml;ker backup om jag skulle ha v&auml;ntat ett tag med att ladda upp mina skoluppgifter till studentservern. Det har gjort det mycket l&auml;ttare f&ouml;r mig att komma ig&aring;ng med skoluppgifterna igen s&aring; nu kommer jag (f&ouml;rhoppningsvis) kunna spotta ur mig uppgift p&aring; uppgift och hamna i fas igen! (Med lite hj&auml;lp av appen Self Control till OS X...)</p>
   <hr>
   <h2>Kmom02: HTML-element och CSS-konstruktioner</h2>
   <p>&Ouml;verlag har den h&auml;r uppgiften g&aring;tt betydligt b&auml;ttre &auml;n den f&ouml;rsta, f&ouml;rmodligen eftersom att jag hunnit komma in i t&auml;nket mer och har b&auml;ttre f&ouml;rst&aring;else f&ouml;r hur det fungerar. Den enda sv&aring;righeten jag har st&ouml;tt p&aring; har handlat om att tolka koden och f&aring; den att forma sig som jag vill, men inte ens det har tagit mer &auml;n 10 minuter att l&ouml;sa.</p>
   <p>Jag &auml;r v&auml;ldigt n&ouml;jd med resultatet av min design &auml;ven om jag vet att jag utan problem kunnat l&auml;gga ner n&aring;gra timmar extra f&ouml;r att omforma fler element &auml;n de jag r&ouml;rde. Navigeringsmenyn till exempel, &auml;ven om jag gillar hur den ser ut nu hade jag g&auml;rna lagt n&aring;gra timmar p&aring; att g&ouml;ra grafik och spejsa ut den.</p>
   <p>Jag vill p&aring;st&aring; att jag kan HTML och CSS ganska v&auml;l, mycket tack vare kursen jag l&auml;ste i v&aring;ras, men den h&auml;r &ouml;vningen l&auml;rde mig &auml;nd&aring; en del nya saker (t.ex Opaque). PHP d&auml;remot &auml;r fullkomligt nytt f&ouml;r mig och det &auml;r roligt att l&auml;ra sig nya tekniker och anv&auml;ndningsomr&aring;den!</p>
   <p>Jag tyckte att guiderna html20 och css20 var v&auml;lplanerade och t&auml;ckte en bra bas, men &aring; andra sidan hade jag redan st&ouml;rre delen av den kunskap som d&auml;r var t&auml;ckt. Hittills &auml;r jag mycket n&ouml;jd med uppl&auml;gget p&aring; kursen.</p> 
   <p>Det mesta i min me-sida k&auml;nns v&auml;ldigt logiskt och bra, jag tycker lite extra mycket om att f&aring; ha fria h&auml;nder med m&aring;nga saker. Enligt min &aring;sikt finns det inga s&auml;tt som &auml;r fel - bara s&auml;tt med olika effektivitet och tillv&auml;gag&aring;ngss&auml;tt. Det &auml;r i alla fall vad jag lever efter och det gl&auml;djer mig att den h&auml;r kursen l&aring;ter mig g&ouml;ra det.</p>
   <hr>
   <h2>Kmom01: Kom ig&aring;ng med HTML, CSS och PHP</h2>
   <p>N&auml;r jag v&auml;l kom ig&aring;ng med uppgifterna tyckte jag att det gick v&auml;ldigt l&auml;tt att g&aring; igenom. Det v&auml;rsta var egentligen l&auml;sningen, d&aring; jag l&auml;st HTML och CSS tidigare och redan k&auml;nde igen det mesta som stod i kurslitteraturen blev det l&auml;tt tr&aring;kigt och tr&ouml;ttsamt att l&auml;sa. Att installera MAMP (jag anv&auml;nder Mac OSX) var en tradig historia... jag gjorde min testsida men fick endast fram k&auml;llkod n&auml;r jag gick in p&aring; sidan i min webbl&auml;sare. Det visade sig efter  	ett tags kn&aring;pande att MAMP anv&auml;nder MAMP ports som default portar ist&auml;llet f&ouml;r 80, 443 och 3306. En g&aring;ng till k&ouml;rde jag fast lite, men det r&ouml;rde sig om slarv i b&aring;de kod och fels&ouml;kning. Nu har jag i alla fall l&auml;rt mig att det spelar roll i vilken ordning man skriver in sin php!</p>
   <p>Jag sitter p&aring; en lite halvgammal, men trofast, Macbook Pro med Mac OSX p&aring; f&ouml;r den h&auml;r kursen. Enligt vad som rekommenderades i kursmaterialet anv&auml;nder jag MAMP f&ouml;r att enkelt s&auml;tta upp min utvecklingsmilj&ouml; (min sambo ska visa mig hur man g&ouml;r allt f&ouml;r sig ocks&aring; senare, men f&ouml;r enkelhetens skull s&aring; b&ouml;rjar jag s&aring;), jEdit som texteditor och FileZilla som sftp-klient. FileZilla anv&auml;nder jag i vardagen ocks&aring; s&aring; det programmet &auml;r jag v&auml;lbekant med. Den webbl&auml;sare jag anv&auml;nder mest &auml;r &ouml;verl&auml;gset Google Chrome. N&auml;r jag beh&ouml;ver en annan webbl&auml;sare f&ouml;r sidor som inte rekommenderar att man anv&auml;nder Chrome hoppar jag oftast &ouml;ver till Safari men har &auml;ven Mozilla Firefox installerat.</p>
  </div>

<?php include("incl/footer.php"); ?>
