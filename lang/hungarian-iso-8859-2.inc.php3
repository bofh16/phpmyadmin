<?php
/* $Id$ */

// Peter Bakondy <bakondyp@freemail.hu>

$charset = 'iso-8859-2';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('B�jt', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('V', 'H', 'K', 'Sze', 'Cs', 'P', 'Szo');
$month = array('Jan', 'Feb', 'M�rc', '�pr', 'M�j', 'J�n', 'J�l', 'Aug', 'Szept', 'Okt', 'Nov', 'Dec');
// Le�r�s a $datefmt v�ltoz� defini�l�s�hoz:
// http://www.php.net/manual/en/function.strftime.php
$datefmt = '%Y. %B %d. %H:%M';

$strAccessDenied = 'Hozz�f�r�s megtagadva';
$strAction = 'Parancs';
$strAddDeleteColumn = 'Mez&#0337 Oszlopokat Hozz�ad/T�r�l';
$strAddDeleteRow = 'Krit�rium Sort Hozz�ad/T�r�l';
$strAddNewField = '�j mez&#0337 hozz�ad�sa';
$strAddPriv = '�j privil�giumot ad';
$strAddPrivMessage = 'Az �j privil�giumot hozz�adtam.';
$strAddSearchConditions = 'Keres�si felt�telek megad�sa (az "ahol" kik�t�sek):';
$strAddToIndex = 'Adj az indexhez &nbsp;%s&nbsp;oszlopot';
$strAddUser = '�j felhaszn�l� hozz�ad�sa';
$strAddUserMessage = 'Az �j felhaszn�l�t felvettem.';
$strAffectedRows = 'Keresett sorok:';
$strAfter = '%s ut�n';
$strAfterInsertBack = 'Vissza az el&#0337z&#0337 oldalra';
$strAfterInsertNewInsert = '�j sor besz�r�sa';
$strAll = 'Mind';
$strAllTableSameWidth = 'minden t�bla ezzel a sz�less�ggel jelenjen meg?';
$strAlterOrderBy = 'T�bla megv�ltoz�sa rendezve e szerint:';
$strAnalyzeTable = 'T�bla vizsg�lat';
$strAnd = '�s';
$strAnIndex = 'Indexet hozz�adtam: %s';
$strAny = 'B�rmely';
$strAnyColumn = 'B�rmely oszlop';
$strAnyDatabase = 'B�rmely adatb�zis';
$strAnyHost = 'B�rmely hoszt';
$strAnyTable = 'B�rmely t�bla';
$strAnyUser = 'B�rmely felhaszn�l�';
$strAPrimaryKey = 'Elsodleges kulcsot hozz�adtam: %s';
$strAscending = 'N�vekv&#0337';
$strAtBeginningOfTable = 'A t�bla elej�n�l';
$strAtEndOfTable = 'A t�bla v�g�n�l';
$strAttr = 'Tulajdons�gok';

$strBack = 'Vissza';
$strBeginCut = 'Kiv�g�s Kezdete';
$strBeginRaw = 'Feldolgozatlan Kezdete';
$strBinary = 'Bin�ris';
$strBinaryDoNotEdit = 'Bin�ris - nem szerkeszthet&#0337';
$strBookmarkDeleted = 'A k�nyvjelzot t�r�ltem.';
$strBookmarkLabel = 'Felirat';
$strBookmarkQuery = 'Feljegyzett SQL-k�r�s';
$strBookmarkThis = 'Jegyezd fel az SQL-k�r�s';
$strBookmarkView = 'Csak megn�zhet&#0337';
$strBrowse = 'Tartalom';
$strBzip = '"bzip-pel t�m�r�tve"';

$strCantLoadMySQL = 'nem tudom bet�lteni a MySQL b&#0337v�tm�nyt,<br />ellen&#0337rizd a PHP konfigur�ci�t.';
$strCantLoadRecodeIconv = 'Nem tudom bet�lteni az iconv vagy recode kiterjeszt�st a karakterk�szlet-�talak�t�shoz, �ll�tsd be a php-t, hogy enged�lyezze ezeket a kiterjeszt�seket vagy tiltsd le a karakterk�szlet-�talak�t�st a phpMyAdminban.';
$strCantRenameIdxToPrimary = 'Nem tudom �tnevezni az indexet PRIMARY-v�!';
$strCantUseRecodeIconv = 'Nem tudom haszn�lni az iconv, libiconv sem a recode_string funkci�kat mialatt a kiterjeszt�s-jelent�seket be kell t�lteni. Ellen&#0337rizd a php konfigur�ci�t.';
$strCardinality = 'Sz�moss�g';
$strCarriage = 'Kocsivissza: \\r';
$strChange = 'V�ltoztat';
$strChangeDisplay = 'V�lassz mez&#0337t a megjelen�t�shez';
$strChangePassword = 'Jelsz� megv�ltoztat�sa';
$strCharsetOfFile = 'A f�jl karakterk�szlete:';
$strCheckAll = '�sszeset kijel�li';
$strCheckDbPriv = 'Adatb�zis Privil�giumok Ellen&#0337rz�se';
$strCheckTable = 'T�bla ellen&#0337rz�s';
$strChoosePage = 'V�lassz oldalt a szerkeszt�shez';
$strColComFeat = 'Oszlop megjegyz�sek megjelen�t�se';
$strColumn = 'Oszlop';
$strColumnNames = 'Oszlop nevek';
$strComments = 'Megjegyz�sek';
$strCompleteInserts = 'Mez&#0337neveket is hozz�adja';
$strConfigFileError = 'A phpMyAdmin nem tudja olvasni a konfigur�ci�s f�jlt!<br />Lehet, hogy a php szintaktikai hib�t tal�lt benne, vagy nem tal�lja a f�jlt.<br />Haszn�ld az als� linket a konfigur�ci�s f�jl helyre�ll�t�s�hoz, olvasd el a kapott php hiba�zeneteket. T�bbnyire egy id�z&#0337jel vagy egy pontosvessz&#0337 hi�nyzik valahol.<br />Ha �res oldalt kapsz, minden rendben.';
$strConfigureTableCoord = '�ll�tsd be a(z) $s t�bla koordin�t�it';
$strConfirm = 'Biztos, hogy v�gre akarod hajtani?';
$strCookiesRequired = 'A Cookie-kat most enged�lyezned kell.';
$strCopyTable = 'T�bla m�sol�sa ide (adatb�zis<b>.</b>t�bla):';
$strCopyTableOK = '%s t�bl�t ide m�soltam: %s.';
$strCreate = 'L�trehoz';
$strCreateIndex = 'K�sz�ts egy indexet a(z)&nbsp;%s&nbsp;. oszlopon';
$strCreateIndexTopic = '�j index l�trehoz�sa';
$strCreateNewDatabase = '�j adatb�zis l�trehoz�sa';
$strCreateNewTable = '�j t�bla l�trehoz�sa az adatb�zisban: %s';
$strCreatePage = '�j oldal k�sz�t�se';
$strCreatePdfFeat = 'PDF k�sz�t�se';
$strCriteria = 'Krit�rium';

$strData = 'Adat';
$strDatabase = 'Adatb�zis ';
$strDatabaseHasBeenDropped = '%s adatb�zist eldobtam.';
$strDatabases = 'adatb�zisok';
$strDatabasesStats = 'Adatb�zis statisztika';
$strDatabaseWildcard = 'Adatb�zis (joker-karakterek elfogadva):';
$strDataOnly = 'Csak adatok';
$strDefault = 'Alap�rtelmezett';
$strDelete = 'T�r�l';
$strDeleted = 'A sort t�r�ltem';
$strDeletedRows = 'T�r�lt sorok:';
$strDeleteFailed = 'T�rl�s meghi�sult!';
$strDeleteUserMessage = '%s felhaszn�l�t t�r�ltem.';
$strDescending = 'Cs�kken&#0337';
$strDisabled = 'Tiltott';
$strDisplay = 'Megjelen�t�s';
$strDisplayFeat = 'Megjelen�t�s tulajdons�gok';
$strDisplayOrder = 'Megjelen�t�s rendez�s:';
$strDisplayPDF = 'PDF s�ma kijelz�se';
$strDoAQuery = 'Csin�lj egy "lek�rdez�st" (helyettes�t&#0337 karakter: "%")';
$strDocu = 'Dokument�ci�';
$strDoYouReally = 'Biztos ez akarod? ';
$strDrop = 'Eldob';
$strDropDB = 'Adatb�zis eldob�sa %s';
$strDropTable = 'T�bla eldob�sa';
$strDumpingData = 'T�bla adatok:';
$strDumpXRows = '%s sor ki�r�sa a %s. sorral kezd&#0337dik';
$strDynamic = 'dinamikus';

$strEdit = 'Szerkeszt';
$strEditPDFPages = 'PDF oldalak szerkeszt�se';
$strEditPrivileges = 'Privil�giumok szerkeszt�se';
$strEffective = 'Hat�lyos';
$strEmpty = 'Ki�r�t';
$strEmptyResultSet = 'A MySQL �reset adott vissza (nincsenek sorok).';
$strEnabled = 'Enged�lyezett';
$strEnd = 'V�ge';
$strEndCut = 'Kiv�g�s V�ge';
$strEndRaw = 'Feldolgozatlan V�ge';
$strEnglishPrivileges = ' Megjegyz�s: A MySQL privil�gium nevek az angolb�l sz�rmaznak ';
$strError = 'Hiba';
$strExplain = 'SQL magyar�zat';
$strExport = 'Export';
$strExportToXML = 'Export XML-form�tumba';
$strExtendedInserts = 'Kiterjesztett besz�r�sok';
$strExtra = 'Extra';

$strField = 'Mez&#0337';
$strFieldHasBeenDropped = '%s mez&#0337t eldobtam';
$strFields = 'Mez&#0337k sz�ma';
$strFieldsEmpty = ' A mez&#0337 sz�moss�ga nulla! ';
$strFieldsEnclosedBy = 'Mez&#0337 lez�r�s';
$strFieldsEscapedBy = 'Mez&#0337 escape karakter';
$strFieldsTerminatedBy = 'Mez&#0337 v�ge';
$strFixed = 'r�gz�tett';
$strFlushTable = 'T�bla ki�r�sa ("FLUSH")';
$strFormat = 'Form�tum';
$strFormEmpty = 'Hi�nyz� adat a formban !';
$strFullText = 'Teljes Sz�vegek';
$strFunction = 'Funkci�';

$strGenBy = 'K�sz�tette';
$strGeneralRelationFeat = '�ltal�nos rel�ci�s jellemz&#0337k';
$strGenTime = 'L�trehoz�s ideje';
$strGo = 'V�grehajt';
$strGrants = 'Enged�lyek';
$strGzip = '"gzip-pel t�m�r�tve"';

$strHasBeenAltered = 'megv�ltozott.';
$strHasBeenCreated = 'megsz�letett.';
$strHaveToShow = 'Legal�bb egy oszlopot v�lasztanod kell a megjelen�t�shez';
$strHome = 'Kezd&#0337lap';
$strHomepageOfficial = 'Hivatalos phpMyAdmin Honlap';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Let�lt�s Oldal';
$strHost = 'Hoszt';
$strHostEmpty = 'A hosztn�v �res!';

$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'Ha csak a t�bla n�h�ny oszlop�t akarod megjelen�teni, adj meg egy vessz&#0337kkel elv�lasztott mez&#0337list�t.';
$strIgnore = 'Elutas�t';
$strIndex = 'Index';
$strIndexes = 'Indexek';
$strIndexHasBeenDropped = '%s indexet eldobtam';
$strIndexName = 'Index n�v&nbsp;:';
$strIndexType = 'Index tipus&nbsp;:';
$strInsert = 'Besz�r';
$strInsertAsNewRow = 'Besz�r�s �j sork�nt';
$strInsertedRows = 'Besz�rt sorok:';
$strInsertNewRow = '�j sor besz�r�sa';
$strInsertTextfiles = 'Sz�vegf�jl tartalm�nak besz�r�sa a t�bl�ba';
$strInstructions = 'Parancs';
$strInUse = 'haszn�latban';
$strInvalidName = '"%s" egy fenntartott sz�, nem haszn�lhatod adatb�zis/t�bla/mez&#0337 nevek�nt.';

$strKeepPass = 'Ne v�ltoztasd meg a jelsz�t';
$strKeyname = 'Kulcsn�v';
$strKill = 'Le�ll�t';

$strLength = 'Hossz';
$strLengthSet = 'Hossz/�rt�k*';
$strLimitNumRows = 'Sorok sz�ma oldalank�nt';
$strLineFeed = 'Soremel�s: \\n';
$strLines = 'Sor';
$strLinesTerminatedBy = 'Sorok v�ge';
$strLinkNotFound = 'Link nem tal�lhat�';
$strLinksTo = 'Linkek:';
$strLocationTextfile = 'A sz�vegf�jl helye';
$strLogin = 'Bel�p�s';
$strLogout = 'Kil�p�s';
$strLogPassword = 'Jelsz�:';
$strLogUsername = 'Felhaszn�l�i n�v:';

$strMissingBracket = 'Hi�nyz� sz�gletes z�r�jel';
$strModifications = 'A v�ltoz�sokat elmentettem';
$strModify = 'V�ltoz�s';
$strModifyIndexTopic = 'Index v�ltoz�sa';
$strMoveTable = 'T�bla �thelyez�se ide (adatb�zis<b>.</b>t�bla):';
$strMoveTableOK = '%s t�bl�t �thelyeztem ide: %s.';
$strMySQLCharset = 'MySQL karakterk�szlet';
$strMySQLReloaded = 'MySQL �jrat�ltve.';
$strMySQLSaid = 'MySQL jelzi: ';
$strMySQLServerProcess = 'MySQL %pma_s1%, szerver: %pma_s2%, felhaszn�l�: %pma_s3%';
$strMySQLShowProcess = 'Mutasd meg a folyamatokat';
$strMySQLShowStatus = 'Mutasd meg a MySQL fut�si inform�ci�kat';
$strMySQLShowVars = 'Mutasd meg a MySQL rendszer v�ltoz�kat';

$strName = 'Neve';
$strNext = 'K�vetkez&#0337';
$strNo = 'Nem';
$strNoDatabases = 'Nincs adatb�zis';
$strNoDescription = 'nincs le�r�s';
$strNoDropDatabases = '"DROP DATABASE" utas�t�s le van tiltva.';
$strNoExplain = 'SQL magyar�zat �tugr�sa';
$strNoFrames = 'A phpMyAdmin haszn�lhat�bb egy <b>frame-kezel&#0337</b> b�ng�sz&#0337ben.';
$strNoIndex = 'Nincs index meghat�rozva!';
$strNoIndexPartsDefined = 'Nincs index darab meghat�rozva!';
$strNoModification = 'Nincs v�ltoz�s';
$strNone = 'Nincs';
$strNoPassword = 'Nincs jelsz�';
$strNoPhp = 'PHP k�d n�lk�l';
$strNoPrivileges = 'Nincs privil�gium';
$strNoRights = 'Nincs el�g jogod ennek v�grehajt�s�ra!';
$strNoTablesFound = 'Nincs t�bla az adatb�zisban.';
$strNotNumber = 'Ez nem egy sz�m!';
$strNotOK = 'Nincs rendben';
$strNotSet = '<b>%s</b> t�bl�t nem tal�ltam vagy nincs benne: %s';
$strNotValidNumber = ' nem �rv�nyes sorsz�m!';
$strNoUsersFound = 'Nem tal�ltam felhaszn�l�(ka)t.';
$strNoValidateSQL = 'SQL j�v�hagy�s �tugr�sa';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s tal�lat <i>%s</i> t�bl�ban';
$strNumSearchResultsTotal = '<b>�sszes:</b> <i>%s</i> tal�lat';

$strOftenQuotation = 'Gyakran id�z&#0337jel. Opcion�lisan a char �s varchar mez&#0337k lez�rhat�k a \"lez�r�s\"-karakterrel.';
$strOK = 'Rendben';
$strOperations = 'Tev�kenys�gek';
$strOptimizeTable = 'T�bla optimaliz�l�s';
$strOptionalControls = 'Opcion�lis. Vez�rl&#0337k, amelyekkel �rhatsz �s olvashatsz speci�lis karaktereket.';
$strOptionally = 'Opcion�lis';
$strOptions = 'Opci�k';
$strOr = 'Vagy';
$strOverhead = 'Fel�l�r�s';

$strPageNumber = 'Oldalsz�m:';
$strPartialText = 'R�szleges Sz�vegek';
$strPassword = 'Jelsz�';
$strPasswordEmpty = 'A jelsz� mez&#0337 �res!';
$strPasswordNotSame = 'A jelszavak nem azonosak!';
$strPdfDbSchema = '"%s" adatb�zis s�m�ja - %s oldal';
$strPdfInvalidPageNum = 'Meghat�rozatlan PDF oldalsz�m!';
$strPdfInvalidTblName = '"%s" t�bla nem l�tezik!';
$strPdfNoTables = 'Nincs t�bla';
$strPhp = 'PHP k�d k�sz�t�se';
$strPHPVersion = 'PHP Verzi�';
$strPmaDocumentation = 'phpMyAdmin dokument�ci�';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> �rt�k�t a konfigur�ci�s f�jlban KELL be�ll�tani!';
$strPos1 = 'Kezdet';
$strPrevious = 'El&#0337z&#0337';
$strPrimary = 'Els&#0337dleges';
$strPrimaryKey = 'Els&#0337dleges kulcs';
$strPrimaryKeyHasBeenDropped = 'Az els&#0337dleges kulcsot eldobtam';
$strPrimaryKeyName = 'Az els&#0337dleges kulcs nev�nek "PRIMARY"-nak kell lennie!';
$strPrimaryKeyWarning = '("PRIMARY"-nak <b>kell</b> lennie, �s <b>csak annak</b> szabad lennie az els&#0337dleges kulcsnak!)';
$strPrintView = 'Nyomtat�si n�zet';
$strPrivileges = 'Privil�giumok';
$strProperties = 'Tulajdons�gok';

$strQBE = 'Lek�rdez�s';
$strQBEDel = 'T�r�l';
$strQBEIns = 'Besz�r';
$strQueryOnDb = 'SQL-k�r�s <b>%s</b> adatb�zison:';

$strRecords = 'Sor';
$strReferentialIntegrity = 'Hivatkoz�si s�rtetlens�g ellenorz�se:';
$strRelationNotWorking = 'A munka kieg�sz�t&#0337 tulajdons�gai a vonatkoz� t�bl�kra meg lettek sz�ntetve. Az okok�rt kattints %side%s.';
$strRelationView = 'Rel�ci� n�zet';
$strReloadFailed = 'MySQL �jrat�lt�se sikertelen.';
$strReloadMySQL = 'MySQL �jrat�lt�se';
$strRememberReload = 'Ne felejtd el �jrat�lteni a szervert.';
$strRenameTable = 'T�bla �tnevez�se erre';
$strRenameTableOK = '%s t�bl�t �tneveztem erre: %s';
$strRepairTable = 'T�bla jav�t�s';
$strReplace = 'Csere';
$strReplaceTable = 'T�bla adatok �s f�jl cser�je';
$strReset = 'T�r�l';
$strReType = '�jra�r�s';
$strRevoke = 'Visszavon';
$strRevokeGrant = 'Visszavon�st enged�lyez';
$strRevokeGrantMessage = 'Visszavontad %s privil�giumait';
$strRevokeMessage = 'Visszavontam a %s privil�giumokat';
$strRevokePriv = 'Privil�giumok visszavon�sa';
$strRowLength = 'Sorhossz';
$strRows = 'Sorok';
$strRowsFrom = 'sor kezdve ezzel:';
$strRowSize = ' Sorm�ret ';
$strRowsModeHorizontal = 'v�zszintes';
$strRowsModeOptions = '%s m�don, a fejl�cet %s soronk�nt megism�telve';
$strRowsModeVertical = 'f�gg&#0337leges';
$strRowsStatistic = 'Sor-statisztika';
$strRunning = ': %s';
$strRunQuery = 'K�r�s v�grehajt�sa';
$strRunSQLQuery = 'SQL parancs(ok) futtat�sa a(z) %s adatb�zison';

$strSave = 'Ment';
$strScaleFactorSmall = 'A m�ret elem t�l kicsi, hogy megfelel&#0337 legyen a s�m�hoz egy oldalon';
$strSearch = 'Keres�s';
$strSearchFormTitle = 'Keres�s az adatb�zisban';
$strSearchInTables = 'T�bl�(k)ban:';
$strSearchNeedle = 'Szavak vagy �rt�kek a keres�shez (helyettes�t&#0337 karakter: "%"):';
$strSearchOption2 = '�sszes sz�';
$strSearchOption3 = 'a helyes mondat';
$strSearchOption4 = 'regul�r�ris kifejez�sk�nt';
$strSearchResultsFor = 'Keres�si eredm�nyek "<i>%s</i>" %s:';
$strSearchType = 'Keress:';
$strSelect = 'Kiv�laszt';
$strSelectADb = 'V�lassz egy adatb�zist';
$strSelectAll = 'Mindet kijel�li';
$strSelectFields = 'Mez&#0337k kiv�laszt�sa (legal�bb egyet):';
$strSelectNumRows = 'k�r�sben';
$strSelectTables = 'T�bl�k kiv�laszt�sa';
$strSend = 'F�jln�v megad�sa';
$strServerChoice = 'Szerver V�laszt�s';
$strServerVersion = 'Szerver verzi�';
$strSetEnumVal = 'Ha a mez&#0337 tipusa "enum" vagy "set", akkor az �rt�keket ilyen form�ban �rd be: \'a\',\'b\',\'c\'...<br />Ha backslash-t ("\") vagy aposztr�fot ("\'") akarsz ezen �rt�kek k�z�tt haszn�lni, haszn�ld a backslash escape karaktert (pl \'\\\\xyz\' vagy \'a\\\'b\').';
$strShow = 'Mutat';
$strShowAll = 'Mutasd mindet';
$strShowColor = 'Mutasd a sz�neket';
$strShowCols = 'Mutasd az oszlopokat';
$strShowGrid = 'Mutasd a r�csot';
$strShowingRecords = 'Sorok megjelen�t�se ';
$strShowPHPInfo = 'PHP inform�ci�';
$strShowTableDimension = 'Mutasd a t�bl�k m�ret�t';
$strShowTables = 'Mutasd a t�bl�kat';
$strShowThisQuery = ' Mutasd a parancsot itt �jra ';
$strSingly = '(egyenk�nt)';
$strSize = 'M�ret';
$strSort = 'Sorrendez�s';
$strSpaceUsage = 'Helyfoglal�s';
$strSplitWordsWithSpace = 'A szavak fel vannak osztva sz�k�z karakter szerint (" ").';
$strSQL = 'SQL';
$strSQLParserBugMessage = 'Es�ly van r�, hogy egy hib�t tal�lhatt�l az SQL szintaktikai elemz&#0337ben (parser). Vizsg�ld meg gondosan a lek�rdez�sedet, ellen&#0337rizd, hogy az id�z&#0337jelek j�k �s j�l illeszkednek. M�s lehets�ges hiba oka lehet, hogy bin�risan t�lt�tt�l fel egy f�jlt az id�zett sz�vegmez&#0337n k�v�l. Kipr�b�lhatod a lek�r�sedet a MySQL parancssoros fel�let�n.  A MySQL szerver hibakimenete alul l�that�, ha van ott valami, az seg�thet felder�teni a hiba ok�t. Ha m�g mindig gondjaid vannak, vagy a szintaktiaki elemz&#0337 (parser) hib�t jelez, ahol a parancsoros fel�leten v�grehajt�dik, reduk�ld a probl�m�t okoz� SQL lek�rdez�st egy egyszer&#0369 lek�rdez�ss�, �s k�ldd el egy hibajelz�sben (bug report) az als� Kiv�g�s r�szben lev&#0337 adatokkal egy�tt:';
$strSQLParserUserError = '�gy l�tszik az SQL lek�rdez�sedben van egy hiba. A MySQL szerver hibakimenete alul l�that�, ha van ott valami, az seg�thet felder�teni a hiba ok�t';
$strSQLQuery = 'SQL-k�r�s';
$strSQLResult = 'SQL eredm�ny';
$strSQPBugInvalidIdentifer = '�rv�nytelen azonos�t�';
$strSQPBugUnclosedQuote = 'Lez�ratlan lek�rdez�s';
$strSQPBugUnknownPunctuation = 'Ismeretlen k�zpontozott sztring';
$strStatement = 'Adatok';
$strStrucCSV = 'CSV adat';
$strStrucData = 'Szerkezet �s adatok';
$strStrucDrop = '\'T�bla eldob�s\' hozz�ad�sa';
$strStrucExcelCSV = 'M$ Excel CSV adat';
$strStrucOnly = 'Csak szerkezet';
$strStructPropose = 'T�bla strukt�ra aj�nlat';
$strStructure = 'Strukt�ra';
$strSubmit = 'V�grehajt';
$strSuccess = 'Az SQL-k�r�st sikeresen v�grehajtottam';
$strSum = '�sszesen';

$strTable = 'T�bla';
$strTableComments = 'T�bla megjegyz�sek';
$strTableEmpty = 'A t�blan�v helye �res!';
$strTableHasBeenDropped = '%s t�bl�t eldobtam';
$strTableHasBeenEmptied = '%s t�bl�t ki�r�tettem';
$strTableHasBeenFlushed = '%s t�bl�t ki�rtam';
$strTableMaintenance = 'T�bla karbantart�s';
$strTables = '%s t�bla';
$strTableStructure = 'T�bla szerkezet:';
$strTableType = 'T�bla tipusa';
$strTextAreaLength = ' Mivel ez a hossz,<br /> ez a mez&#0337 nem szerkeszthet&#0337 ';
$strTheContent = 'A f�jl tartalm�t beillesztettem.';
$strTheContents = 'A f�jl �s a kiv�lasztott t�bla sorainak tartalm�t azonos els&#0337dleges vagy egyedi kulccsal cser�li ki.';
$strTheTerminator = 'A mez&#0337k lez�r�ja.';
$strTotal = '�sszesen';
$strType = 'Tipus';

$strUncheckAll = '�sszeset t�rli';
$strUnique = 'Egyedi';
$strUnselectAll = 'Mindet t�rli';
$strUpdatePrivMessage = 'Friss�tettem a(z) %s privil�giumokat.';
$strUpdateProfile = 'Profil friss�t�s:';
$strUpdateProfileMessage = 'A profilt friss�tettem.';
$strUpdateQuery = 'K�r�s friss�t�s';
$strUsage = 'M�ret';
$strUseBackquotes = 'Id�z&#0337jelek haszn�lata a t�bla- �s mez&#0337nevekn�l';
$strUser = 'Felhaszn�l�';
$strUserEmpty = 'A felhaszn�l�i n�v mez&#0337je �res!';
$strUserName = 'Felhaszn�l�i n�v';
$strUsers = 'Felhaszn�l�k';
$strUseTables = 'T�bl�k haszn�lata';

$strValidateSQL = 'SQL j�v�hagy�s';
$strValue = '�rt�k';
$strViewDump = 'T�bla ki�r�s (v�zlat) megn�z�se';
$strViewDumpDB = 'Adatb�zis ki�r�s (v�zlat) megn�z�se';

$strWelcome = '�dv�z�l a %s';
$strWithChecked = 'A kijel�ltekkel v�gzend&#0337 m&#0369velet:';
$strWrongUser = 'Rossz felhaszn�l�i n�v/jelsz�. Hozz�f�r�s megtagadva.';

$strYes = 'Igen';

$strZip = '"zippel t�m�r�tve"';
// To translate

$strNoQuery = 'Nincs SQL k�r�s!';  //to translate

$strSearchOption1 = 'at least one of the words';//to translate

$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate
$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strServer = 'Server %s';  //to translate
$strPutColNames = 'Put fields names at first row';  //to translate
$strImportDocSQL = 'Import docSQL Files';  //to translate
$strDataDict = 'Data Dictionary';  //to translate
$strPrint = 'Print';  //to translate
$strPHP40203 = 'You are using PHP 4.2.3, which has a serious bug with multi-byte strings (mbstring). See PHP bug report 19404. This version of PHP is not recommended for use with phpMyAdmin.';  //to translate
$strCompression = 'Compression'; //to translate
$strNumTables = 'Tables'; //to translate
$strTotalUC = 'Total'; //to translate
$strRelationalSchema = 'Relational schema';  //to translate
$strTableOfContents = 'Table of contents';  //to translate
$strCannotLogin = 'Cannot login to MySQL server';  //to translate
$strShowDatadictAs = 'Data Dictionary Format';  //to translate
$strLandscape = 'Landscape';  //to translate
$strPortrait = 'Portrait';  //to translate

$timespanfmt = '%s days, %s hours, %s minutes and %s seconds'; //to translate

$strAbortedClients = 'Aborted'; //to translate
$strConnections = 'Connections'; //to translate
$strFailedAttempts = 'Failed attempts'; //to translate
$strGlobalValue = 'Global value'; //to translate
$strMoreStatusVars = 'More status variables'; //to translate
$strPerHour = 'per hour'; //to translate
$strQueryStatistics = '<b>Query statistics</b>: Since its startup, %s queries have been sent to the server.';
$strQueryType = 'Query type'; //to translate
$strReceived = 'Received'; //to translate
$strSent = 'Sent'; //to translate
$strServerStatus = 'Runtime Information'; //to translate
$strServerStatusUptime = 'This MySQL server has been running for %s. It started up on %s.'; //to translate
$strServerTabVariables = 'Variables'; //to translate
$strServerTabProcesslist = 'Processes'; //to translate
$strServerTrafficNotes = '<b>Server traffic</b>: These tables show the network traffic statistics of this MySQL server since its startup.';
$strServerVars = 'Server variables and settings'; //to translate
$strSessionValue = 'Session value'; //to translate
$strTraffic = 'Traffic'; //to translate
$strVar = 'Variable'; //to translate

$strCommand = 'Command'; //to translate
$strCouldNotKill = 'phpMyAdmin was unable to kill thread %s. It probably has already been closed.'; //to translate
$strId = 'ID'; //to translate
$strProcesslist = 'Process list'; //to translate
$strStatus = 'Status'; //to translate
$strTime = 'Time'; //to translate
$strThreadSuccessfullyKilled = 'Thread %s was successfully killed.'; //to translate

$strBzError = 'phpMyAdmin was unable to compress the dump because of a broken Bz2 extension in this php version. It is strongly recommended to set the <code>$cfg[\'BZipDump\']</code> directive in your phpMyAdmin configuration file to <code>FALSE</code>. If you want to use the Bz2 compression features, you should upgrade to a later php version. See php bug report %s for details.'; //to translate
$strLaTeX = 'LaTeX';  //to translate

$strAdministration = 'Administration'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strUserOverview = 'User overview'; //to translate
$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate

$strAddPrivilegesOnDb = 'Add privileges on the following database'; //to translate
$strAddPrivilegesOnTbl = 'Add privileges on the following table'; //to translate
$strColumnPrivileges = 'Column-specific privileges'; //to translate
$strDbPrivileges = 'Database-specific privileges'; //to translate
$strLocalhost = 'Local';
$strLoginInformation = 'Login Information'; //to translate
$strTblPrivileges = 'Table-specific privileges'; //to translate
$strThisHost = 'This Host'; //to translate
$strUserNotFound = 'The selected user was not found in the privilege table.'; //to translate
$strUserAlreadyExists = 'The user %s already exists!'; //to translate
$strUseTextField = 'Use text field'; //to translate

$strNoUsersSelected = 'No users selected.'; //to translate
$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate
$strAddedColumnComment = 'Added comment for column';  //to translate
$strWritingCommentNotPossible = 'Writing of comment not possible';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';  //to translate
$strImportFinished = 'Import finished';  //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strIgnoringFile = 'Ignoring file %s';  //to translate
$strThisNotDirectory = 'This was not a directory';  //to translate
$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strImportFiles = 'Import files';  //to translate
$strDBGModule = 'Module';  //to translate
$strDBGLine = 'Line';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGMaxTimeMs = 'Max time, ms';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGContext = 'Context';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
$strDefaultValueHelp = 'For default values, please enter just a single value, without backslash escaping or quotes, using this format: a';  //to translate
$strCheckPrivs = 'Check Privileges';  //to translate
$strCheckPrivsLong = 'Check privileges for database &quot;%s&quot;.';  //to translate
$strDatabasesStatsHeavyTraffic = 'Note: Enabling the Database statistics here might cause heavy traffic between the webserver and the MySQL one.';  //to translate
$strDatabasesStatsDisable = 'Disable Statistics';  //to translate
$strDatabasesStatsEnable = 'Enable Statistics';  //to translate
$strJumpToDB = 'Jump to database &quot;%s&quot;.';  //to translate
$strDropSelectedDatabases = 'Drop Selected Databases';  //to translate
$strNoDatabasesSelected = 'No databases selected.';  //to translate
$strDatabasesDropped = '%s databases have been dropped successfully.';  //to translate
$strGlobal = 'global';  //to translate
$strDbSpecific = 'database-specific';  //to translate
$strUsersHavingAccessToDb = 'Users having access to &quot;%s&quot;';  //to translate
$strChangeCopyUser = 'Change Login Information / Copy User';  //to translate
$strChangeCopyMode = 'Create a new user with the same privileges and ...';  //to translate
$strChangeCopyModeCopy = '... keep the old one.';  //to translate
$strChangeCopyModeJustDelete = ' ... delete the old one from the user tables.';  //to translate
$strChangeCopyModeRevoke = ' ... revoke all active privileges from the old one and delete it afterwards.';  //to translate
$strChangeCopyModeDeleteAndReload = ' ... delete the old one from the user tables and reload the privileges afterwards.';  //to translate
$strWildcard = 'wildcard';  //to translate
$strRowsModeFlippedHorizontal = 'horizontal (rotated headers)';//to translate
$strQueryTime = 'Query took %01.4f sec';//to translate
$strDumpComments = 'Include column comments as inline SQL-comments';//to translate
$strDBComment = 'Database comment: ';//to translate
$strQueryFrame = 'Query window';//to translate
$strQueryFrameDebug = 'Debugging information';//to translate
$strQueryFrameDebugBox = 'Active variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nCurrent variables for the query form:\nDB: %s\nTable: %s\nServer: %s\n\nOpener location: %s\nFrameset location: %s.';//to translate
$strQuerySQLHistory = 'SQL-history';//to translate
$strMIME_MIMEtype = 'MIME-type';//to translate
$strMIME_transformation = 'Browser transformation';//to translate
$strMIME_transformation_options = 'Transformation options';//to translate
$strMIME_transformation_options_note = 'Please enter the values for transformation options using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';//to translate
$strMIME_transformation_note = 'For a list of available transformation options and their MIME-type transformations, click on %stransformation descriptions%s';//to translate
$strMIME_available_mime = 'Available MIME-types';//to translate
$strMIME_available_transform = 'Available transformations';//to translate
$strMIME_without = 'MIME-types printed in italics do not have a seperate transformation function';//to translate
$strMIME_description = 'Description';//to translate
$strMIME_nodescription = 'No Description is available for this transformation.<br />Please ask the author, what %s does.';//to translate
$strMIME_file = 'Filename';//to translate
$strTransformation_text_plain__formatted = 'Preserves original formatting of the field. No Escaping is done.';//to translate
$strTransformation_text_plain__unformatted = 'Displays HTML code as HTML entities. No HTML formatting is shown.';//to translate
$strTransformation_image_jpeg__link = 'Displays a link to this image (direct blob download, i.e.).';//to translate
$strInnodbStat = 'InnoDB Status';  //to translate
$strUpdComTab = 'Please see Documentation on how to update your Column_comments Table';  //to translate
$strTransformation_image_jpeg__inline = 'Displays a clickable thumbnail; options: width,height in pixels (keeps the original ratio)';  //to translate
$strTransformation_image_png__inline = 'See image/jpeg: inline';  //to translate
$strSQLOptions = 'SQL options';//to translate
$strXML = 'XML';//to translate
$strCSVOptions = 'CSV options';//to translate
$strNoOptions = 'This format has no options';//to translate
$strStatCreateTime = 'Creation';//to translate
$strStatUpdateTime = 'Last update';//to translate
$strStatCheckTime = 'Last check';//to translate
$strPerMinute = 'per minute';//to translate
$strPerSecond = 'per second';//to translate
$strAutomaticLayout = 'Automatic layout';  //to translate
$strDelOld = 'The current Page has References to Tables that no longer exist. Would you like to delete those References?';  //to translate
$strFileNameTemplate = 'File name template';//to translate 
$strFileNameTemplateRemember = 'remember template';//to translate 
$strFileNameTemplateHelp = 'Use __DB__ for database name, __TABLE__ for table name and %sany strftime%s options for time specification, extension will be automagically added. Any other text will be preserved.';//to translate
$strTransformation_text_plain__dateformat = 'Takes a TIME, TIMESTAMP or DATETIME field and formats it using your local dateformat. First option is the offset (in hours) which will be added to the timestamp (Default: 0). Second option is a different dateformat according to the parameters available for PHPs strftime().';//to translate
$strTransformation_text_plain__substr = 'Only shows part of a string. First option is an offset to define where the output of your text starts (Default 0). Second option is an offset how much text is returned. If empty, returns all the remaining text. The third option defines which chars will be appended to the output when a substring is returned (Default: ...) .';//to translate
$strTransformation_text_plain__external = 'LINUX ONLY: Launches an external application and feeds the fielddata via standard input. Returns standard output of the application. Default is Tidy, to pretty print HTML code. For security reasons, you have to manually edit the file libraries/transformations/text_plain__external.inc.php and insert the tools you allow to be run. The first option is then the number of the program you want to use and the second option are the parameters for the program. The third parameter, if set to 1 will convert the output using htmlspecialchars() (Default is 1). A fourth parameter, if set to 1 will put a NOWRAP to the content cell so that the whole output will be shown without reformatting (Default 1)';//to translate
$strAutodetect = 'Autodetect';  //to translate
$strTransformation_text_plain__imagelink = 'Displays an image and a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is the width in pixels, third is the height.';  //to translate
$strTransformation_text_plain__link = 'Displays a link, the field contains the filename; first option is a prefix like "http://domain.com/", second option is a title for the link.';  //to translate
$strUseHostTable = 'Use Host Table';  //to translate
$strShowFullQueries = 'Show Full Queries';  //to translate
$strTruncateQueries = 'Truncate Shown Queries';  //to translate
$strSwitchToTable = 'Switch to copied table';  //to translate
$strCharset = 'Charset';  //to translate
$strLaTeXOptions = 'LaTeX options';  //to translate
$strRelations = 'Relations';  //to translate
$strMoveTableSameNames = 'Can\'t move table to same one!';  //to translate
$strCopyTableSameNames = 'Can\'t copy table to same one!';  //to translate
$strMustSelectFile = 'You should select file which you want to insert.';  //to translate
$strSaveOnServer = 'Save on server in %s directory';  //to translate
$strOverwriteExisting = 'Overwrite existing file(s)';  //to translate
$strFileAlreadyExists = 'File %s already exists on server, change filename or check overwrite option.';  //to translate
$strDumpSaved = 'Dump has been saved to file %s.';  //to translate
$strNoPermission = 'The web server does not have permission to save the file %s.';  //to translate
$strNoSpace = 'Insufficient space to save the file %s.';  //to translate
$strInsertedRowId = 'Inserted row id:';  //to translate
$strLoadMethod = 'LOAD method';  //to translate
$strLoadExplanation = 'The best method is checked by default, but you can change if it fails.';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate
$strExcelOptions = 'Excel options';  //to translate
$strReplaceNULLBy = 'Replace NULL by';  //to translate
$strQueryWindowLock = 'Do not overwrite this query from outside the window';  //to translate
$strPaperSize = 'Paper size';  //to translate
$strDatabaseNoTable = 'This database contains no table!';//to translate
$strViewDumpDatabases = 'View dump (schema) of databases';//to translate
$strAddIntoComments = 'Add into comments';//to translate
$strDatabaseExportOptions = 'Database export options';//to translate
$strAddDropDatabase = 'Add DROP DATABASE';//to translate
$strToggleScratchboard = 'toggle scratchboard';  //to translate
$strTableOptions = 'Table options';  //to translate
$strSecretRequired = 'The configuration file now needs a secret passphrase (blowfish_secret).';  //to translate
$strAccessDeniedExplanation = 'phpMyAdmin tried to connect to the MySQL server, and the server rejected the connection. You should check the host, username and password in config.inc.php and make sure that they correspond to the information given by the administrator of the MySQL server.';  //to translate
$strAddAutoIncrement = 'Add AUTO_INCREMENT value';  //to translate
$strCharsets = 'Charsets';  //to translate
$strDescription = 'Description';  //to translate
$strCharsetsAndCollations = 'Character Sets and Collations';  //to translate
$strCollation = 'Collation';  //to translate
$strMultilingual = 'multilingual';  //to translate
$strGerman = 'German';  //to translate
$strPhoneBook = 'phone book';  //to translate
$strDictionary = 'dictionary';  //to translate
$strSwedish = 'Swedish';  //to translate
$strDanish = 'Danish';  //to translate
$strCzech = 'Czech';  //to translate
$strTurkish = 'Turkish';  //to translate
$strEnglish = 'English';  //to translate
$strHungarian = 'Hungarian';  //to translate
$strCroatian = 'Croatian';  //to translate
$strBulgarian = 'Bulgarian';  //to translate
$strLithuanian = 'Lithuanian';  //to translate
$strEstonian = 'Estonian';  //to translate
$strCaseInsensitive = 'case-insensitive';  //to translate
$strCaseSensitive = 'case-sensitive';  //to translate
$strUkrainian = 'Ukrainian';  //to translate
?>
