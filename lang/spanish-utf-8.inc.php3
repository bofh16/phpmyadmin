<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// Atajos para Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab');
$month = array('Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');
// Ver http://www.php.net/manual/es/function.strftime.php para definir
// la variable siguiente
$datefmt = '%d-%m-%Y a las %H:%M:%S';
$timespanfmt = '%s días, %s horas, %s minutos y %s segundos';

$strAPrimaryKey = 'Se añadió una clave primaria en %s';
$strAbortedClients = 'Abortado';
$strAbsolutePathToDocSqlDir = 'Por favor, ingrese la ruta absoluta del servidor hacia el directorio docSQL';
$strAccessDenied = 'Acceso denegado ';
$strAccessDeniedExplanation = 'phpMyAdmin intentó conectarse con el servidor MySQL, y el servidor rechazó esta conexión. Deberá revisar el host, nombre de usuario y contraseña en config.inc.php y asegurarse que corresponden con la información dada por el administrador del servidor MySQL.';
$strAction = 'Acción';
$strAddAutoIncrement = 'Añada el valor AUTO_INCREMENT';
$strAddDeleteColumn = 'Añadir/borrar columna de criterio';
$strAddDeleteRow = 'Añadir/borrar fila de criterio';
$strAddDropDatabase = 'Añada DROP DATABASE';
$strAddIntoComments = 'Añada en los comentarios';
$strAddNewField = 'Insertar nuevo campo';
$strAddPriv = 'Agregar nuevo privilegio';
$strAddPrivMessage = 'Ud. ha añadido un nuevo privilegio.';
$strAddPrivilegesOnDb = 'Añada privilegios en esta base de datos';
$strAddPrivilegesOnTbl = 'Añada privilegios en esta tabla';
$strAddSearchConditions = 'Insertar las condiciones de búsqueda (cuerpo de la cláusula "where"):';
$strAddToIndex = 'Añadido al índice &nbsp;%s&nbsp;columna(s)';
$strAddUser = 'Agregar nuevo usuario';
$strAddUserMessage = 'Ud. ha agregado un nuevo usuario.';
$strAddedColumnComment = 'Se añadió un comentario para la columna';
$strAddedColumnRelation = 'Se añadió una relación para la columna';
$strAdministration = 'Administración';
$strAffectedRows = 'Filas afectadas: ';
$strAfter = 'Después de %s';
$strAfterInsertBack = 'Volver';
$strAfterInsertNewInsert = 'Insertar un nuevo registro';
$strAll = 'Todos/as';
$strAllTableSameWidth = '¿Mostrar todas las tablas que tienen el mismo ancho?';
$strAlterOrderBy = 'Modificar el "Order By" de la tabla';
$strAnIndex = 'Se añadió un índice en %s';
$strAnalyzeTable = 'Analizar la tabla';
$strAnd = 'y luego';
$strAny = 'cualquiera';
$strAnyColumn = 'Cualquier columna';
$strAnyDatabase = 'Cualquier base de datos';
$strAnyHost = 'Cualquier servidor';
$strAnyTable = 'Cualquier tabla';
$strAnyUser = 'Cualquier usuario';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'Al comienzo de la tabla';
$strAtEndOfTable = 'Al final de la tabla';
$strAttr = 'Atributos';
$strAutodetect = 'Autodetecte';  
$strAutomaticLayout = 'Layout automático';  

$strBack = 'Volver';
$strBeginCut = 'INICIO DEL CORTE';
$strBeginRaw = 'INICIO DEL VOLCADO';
$strBinary = ' Binario ';
$strBinaryDoNotEdit = ' Binario - ¡no editar! ';
$strBookmarkDeleted = 'El "bookmark" ha sido borrado.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta guardada en favoritos';
$strBookmarkThis = 'Guardar esta consulta en favoritos';
$strBookmarkView = 'Solamente ver';
$strBrowse = 'Examinar';
$strBzError = 'Si desea usar las opciones de compresión Bz2, deberá actualizar su php a una versión más reciente. phpMyAdmin no fue capaz de comprimir el dump debido a que está dañada la extensión Bz2 en esta versión de php. Le recomendamos que cambie el parámetro <code>$cfg[\'BZipDump\']</code> en su archivo de configuración phpMyAdmin a <code>FALSE</code>. Lea el reporte de "bugs" de php %s para mayor información.';
$strBzip = '"Comprimido con bzip"';

$strCSVOptions = 'Opciones CSV';
$strCannotLogin = 'No se consiguió hacer login al servidor MySQL';
$strCantLoad = 'no se pudo cargar la extensión %s,<br />por favor revise su configuración de PHP.';
$strCantLoadMySQL = 'imposible cargar la extensión MySQL,<br />por favor revise la configuración de PHP.';
$strCantLoadRecodeIconv = 'No se puede cargar iconv o recodificar una extensión necesaria para la conversión de juegos de caracteres, configure php para permitir el uso de estas extensiones o desactive la conversión de juegos de caracteres en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No puede cambiar el nombre del índice a ¡PRIMARY!';
$strCantUseRecodeIconv = 'No se puede utilizar iconv ni libiconv ni la función recode_string mientras se carga la extensión de informes. Comprueba la configuración de php.';
$strCardinality = 'Cardinalidad';
$strCarriage = 'Retorno de carro: \\r';
$strChange = 'Cambiar';
$strChangeCopyMode = 'Crear un nuevo usuario con los mismos privilegios y...';
$strChangeCopyModeCopy = '... mantenga el anterior.';
$strChangeCopyModeDeleteAndReload = ' ... borre el viejo de las tablas de usuario y luego recargue los privilegios.';
$strChangeCopyModeJustDelete = ' ... borre el viejo de las tablas de usuario.';
$strChangeCopyModeRevoke = ' ... revocar todos los privilegios activos del viejo y elimínelos después.';
$strChangeCopyUser = 'Cambie la información de Login / Copiar Usuario';
$strChangeDisplay = 'Elija el campo a mostrar';
$strChangePassword = 'Cambio de contraseña';
$strCharset = 'Charset';
$strCharsetOfFile = 'Codificación de los caracteres del archivo:';
$strCheckAll = 'Revisar todos/as';
$strCheckDbPriv = 'Revisar privilegios de la base de datos';
$strCheckPrivs = 'Revise los privilegios';  
$strCheckPrivsLong = 'Revise los privilegios para la base de datos &quot;%s&quot;.';  
$strCheckTable = 'Revisar tabla';
$strChoosePage = 'Elija la página a editar';
$strColComFeat = 'Mostrando los comentarios de la columna';
$strColumn = 'Columna';
$strColumnNames = 'Nombre de las columnas';
$strColumnPrivileges = 'Privilegios específicos para la columna';
$strCommand = 'Comando';
$strComments = 'Comentarios';
$strCompleteInserts = 'Completar los "Inserts"';
$strCompression = 'Compresión';
$strConfigFileError = '¡phpMyAdmin no puede leer el fichero de configuración!<br />Esto puede suceder si php encuentra un error sintáctico en él o bien php no puede encontrar el fichero.<br />Intente acceder al fichero de configuración directamente mediante el siguiente enlace y compruebe el(los) mensaje(s) de error que reciba. En muchas ocasiones falta una coma o punto y coma en algún sitio.<br />Si recibe una página en blanco, todo está correcto.';
$strConfigureTableCoord = 'Configure las coordenadas para la tabla %s';
$strConfirm = '¿Realmente quiere hacerlo?';
$strConnections = 'Conexiones';
$strCookiesRequired = 'Las "cookies" deben estar habilitadas pasado este punto.';
$strCopyTable = 'Copiar la tabla a (base de datos<b>.</b>tabla):';
$strCopyTableOK = 'La tabla %s se copió a %s.';
$strCopyTableSameNames = '¡No es posible copiar la tabla a la misma!';
$strCouldNotKill = 'phpMyAdmin no fue capaz de destruir el thread %s. Probablemente ya ha sido cerrado.';
$strCreate = 'Crear';
$strCreateIndex = 'Crear un índice en&nbsp;%s&nbsp;columnas';
$strCreateIndexTopic = 'Crear un nuevo índice';
$strCreateNewDatabase = 'Crear nueva base de datos';
$strCreateNewTable = 'Crear nueva tabla en la base de datos %s';
$strCreatePage = 'Crear una nueva página';
$strCreatePdfFeat = 'Creación de los PDF';
$strCriteria = 'Criterio';

$strDBComment = 'Comentario de la base de datos: ';
$strDBGContext = 'Contexto';
$strDBGContextID = 'ID del contexto';
$strDBGHits = 'Hits';
$strDBGLine = 'Línea';
$strDBGMaxTimeMs = 'Tiempo máximo, ms';
$strDBGMinTimeMs = 'Tiempo mínimo, ms';
$strDBGModule = 'Módulo';
$strDBGTimePerHitMs = 'Tiempo/Hit, ms';
$strDBGTotalTimeMs = 'Tiempo total, ms';
$strData = 'Datos';
$strDataDict = 'Diccionario Datos';
$strDataOnly = 'Solamente datos';
$strDatabase = 'Base de datos ';
$strDatabaseExportOptions = 'Opciones de exportación de la base de datos';
$strDatabaseHasBeenDropped = 'La base de datos %s ha sido eliminada.';
$strDatabaseNoTable = '¡Esta base de datos no contiene tablas!';
$strDatabaseWildcard = 'Bases de datos (se permiten comodines):';
$strDatabases = 'Bases de datos';
$strDatabasesDropped = '%s bases de datos han sido eliminadas exitosamente.';
$strDatabasesStats = 'Estadísticas de la base';
$strDatabasesStatsDisable = 'Desactive las estadísticas';
$strDatabasesStatsEnable = 'Active las estadísticas';
$strDatabasesStatsHeavyTraffic = 'Nota: Activando las estadísticas de la base de datos aquí podrían causar tráfico pesado entre el servidor web y el servidor MySQL.';
$strDbPrivileges = 'Privilegios específicos para la base de datos';
$strDbSpecific = 'específico para la base de datos';
$strDefault = 'Predeterminado';
$strDefaultValueHelp = 'Para valores predeterminados, por favor ingrese solamente un valor, sin "backslash escaping" ni comillas, usando este formato: a';
$strDelOld = 'La página actual tiene referencias a tablas que ya no existen.  ¿Desea eliminar esas referencias?';  
$strDelete = 'Borrar';
$strDeleteAndFlush = 'Borre a los usuarios y vuelva a cargar los privilegios posteriormente.';
$strDeleteAndFlushDescr = 'Este es el modo más limpio, pero volver a cargar los privilegios puede tomar un tiempo.';
$strDeleteFailed = '¡La operación de borrado falló!';
$strDeleteUserMessage = 'Ud. ha borrado el usuario %s.';
$strDeleted = 'La fila se ha borrado';
$strDeletedRows = 'Filas borradas: ';
$strDeleting = 'Borrando %s';
$strDescending = 'Descendente';
$strDisabled = 'Deshabilitado';
$strDisplay = 'Mostrar';
$strDisplayFeat = 'Mostrar las opciones';  //Features = ¿opciones, componentes?
$strDisplayOrder = 'Mostrar en este orden:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Hacer una consulta (comodín: "%")';
$strDoYouReally = 'Realmente desea ';
$strDocu = 'Documentación';
$strDrop = 'Eliminar';
$strDropDB = 'Eliminar la base de datos %s';
$strDropSelectedDatabases = 'Elimine la base de datos seleccionada';
$strDropTable = 'Borrar la tabla';
$strDropUsersDb = 'Eliminar las bases de datos que tienen los mismos nombres de los usuarios.';
$strDumpComments = 'Incluya los comentarios de la columna como comentarios-SQL integrados';
$strDumpSaved = 'Su archivo (dump) ha sido guardado con el nombre %s.';
$strDumpXRows = 'Volcar %s filas empezando por la fila %s.';
$strDumpingData = 'Volcar la base de datos para la tabla';
$strDynamic = 'dinámico/a';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar las páginas PDF';
$strEditPrivileges = 'Editar los privilegios';
$strEffective = 'Efectivo/a';
$strEmpty = 'Vaciar';
$strEmptyResultSet = 'MySQL ha devuelto un valor vacío (i.e. cero columnas).';
$strEnabled = 'Habilitado';
$strEnd = 'Fin';
$strEndCut = 'FIN DEL CORTE';
$strEndRaw = 'FIN DEL VOLCADO';
$strEnglishPrivileges = ' Nota: Los nombres de los privilegios de MySQL están expresados en inglés ';
$strError = 'Error';
$strExcelOptions = 'Opciones de Excel';
$strExecuteBookmarked = 'Ejecute la consulta marcada previamente';
$strExplain = 'Explicar el SQL';
$strExport = 'Exportar';
$strExportToXML = 'Exportar a formato XML';
$strExtendedInserts = '"Inserts" extendidos';
$strExtra = 'Extra';

$strFailedAttempts = 'Intentos fallidos';
$strField = 'Campo';
$strFieldHasBeenDropped = 'Se eliminó el campo %s';
$strFields = 'Campos';
$strFieldsEmpty = 'El número de campos está ¡vacío!';
$strFieldsEnclosedBy = 'Campos encerrados por';
$strFieldsEscapedBy = 'Campos escapados por';
$strFieldsTerminatedBy = 'Campos terminados en';
$strFileAlreadyExists = 'El archivo %s ya existe en el servidor, cambie el nombre del archivo o revise la opción de sobreescritura.';
$strFileCouldNotBeRead = 'No fue posible leer el archivo';
$strFileNameTemplate = 'Plantilla del nombre del archivo'; 
$strFileNameTemplateHelp = 'Use __DB__ para nombre de la base de datos, __TABLE__ para el nombre de la tabla y las opciones %sany strftime%s para especificaciones de tiempo; la extensión se añadirá automáticamente. Cualquier otro texto será conservado.';
$strFileNameTemplateRemember = 'recuerde la plantilla'; 
$strFixed = 'fijo';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin obtiene los privilegios users\' directamente de las tablas de privilegios MySQL\'. El contenido de estas tablas puede diferir de los privilegios que usa el servidor si es que se han realizado cambios manuales en él. En este caso, deberá %sreload los privilegios%s antes de continuar.';
$strFlushTable = 'Vaciar el caché de la tabla ("FLUSH")';
$strFormEmpty = '¡Falta un valor en el formulario!';
$strFormat = 'Formato';
$strFullText = 'Textos completos';
$strFunction = 'Función';

$strGenBy = 'Generado por';
$strGenTime = 'Tiempo de generación';
$strGeneralRelationFeat = 'Opciones de relación general';  //Features = ¿opciones, componentes?
$strGlobal = 'global';
$strGlobalPrivileges = 'Privilegios globales';
$strGlobalValue = 'Valor global';
$strGo = 'Continúe';
$strGrantOption = 'Conceder';
$strGrants = 'Permisos';
$strGzip = '"Comprimido con gzip"';

$strHasBeenAltered = 'fue modificada.';
$strHasBeenCreated = 'se creó.';
$strHaveToShow = 'Debe elegir al menos una columna para mostrar';
$strHome = 'Página de inicio';
$strHomepageOfficial = 'Página oficial de phpMyAdmin';
$strHomepageSourceforge = 'Descargar phpMyAdmin de Sourceforge';
$strHost = 'Servidor';
$strHostEmpty = '¡¡El nombre del servidor está vacío!!';

$strId = 'Identificación';
$strIdxFulltext = 'Texto completo';
$strIfYouWish = 'Si desea cargar solamente una de las columnas de la tabla, especifíquelo, separando los campos con una coma.';
$strIgnore = 'Ignorar';
$strIgnoringFile = 'Ignorando el archivo %s';
$strImportDocSQL = 'Importar archivos docSQL';
$strImportFiles = 'Importar archivos';
$strImportFinished = 'Importación culminada';
$strInUse = 'en uso';
$strIndex = 'Índice';
$strIndexHasBeenDropped = 'El índice %s ha sido eliminado';
$strIndexName = 'Nombre del índice&nbsp;:';
$strIndexType = 'Tipo de índice&nbsp;:';
$strIndexes = 'Índices';
$strInnodbStat = 'Estado del InnoDB';  
$strInsecureMySQL = 'Su archivo de configuración contiene parámetros (root sin contraseña) que corresponden a la cuenta privilegiada predeterminada de MySQL. Su servidor de MySQL está usando estos valores, que constituyen una vulnerabilidad.  Se le recomienda corregir esta brecha de seguridad.';
$strInsert = 'Insertar';
$strInsertAsNewRow = 'Insertar como una nueva fila';
$strInsertNewRow = 'Insertar nueva fila';
$strInsertTextfiles = 'Insertar archivo de texto en la tabla';
$strInsertedRowId = 'Se insertó la id de la fila:';
$strInsertedRows = 'Filas insertadas:';
$strInstructions = 'Instrucciones';
$strInvalidName = '"%s" es una palabra reservada, no puede usarla como nombre de /Base de datos/tabla/campo.';

$strJumpToDB = 'Salte a la base de datos &quot;%s&quot;.';  
$strJustDelete = 'Solamente borre a los usuarios de la tabla de privilegios.';
$strJustDeleteDescr = 'Los usuarios &quot;borrados&quot; aún podrán acceder al servidor de manera usual hasta que los privilegios se hayan vuelto a cargar.';

$strKeepPass = 'No cambiar la contraseña';
$strKeyname = 'Nombre de la clave';
$strKill = 'Matar el proceso';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'opciones LaTeX';
$strLandscape = 'Orientación horizontal';
$strLength = 'Longitud';
$strLengthSet = 'Longitud/Valores*';
$strLimitNumRows = 'registros por página';
$strLineFeed = 'Retorno de carro: \\n';
$strLines = 'Líneas';
$strLinesTerminatedBy = 'Líneas terminadas en';
$strLinkNotFound = 'Enlace no encontrado';
$strLinksTo = 'Enlaces a';
$strLoadExplanation = 'El mejor método es revisado en forma predeterminada, pero puede cambiarla si fracasa.'; 
$strLoadMethod = 'CARGAR método';
$strLocalhost = 'Local';
$strLocationTextfile = 'Localización del archivo de texto';
$strLogPassword = 'Contraseña:';
$strLogUsername = 'Usuario:';
$strLogin = 'Identificación';
$strLoginInformation = 'Información acerca del login';
$strLogout = 'Salir';

$strMIME_MIMEtype = 'MIME-type';
$strMIME_available_mime = 'MIME-types disponibles';
$strMIME_available_transform = 'Transformaciones disponibles';
$strMIME_description = 'Descripción';
$strMIME_file = 'Nombre del archivo';
$strMIME_nodescription = 'No hay una descripción disponible para esta transformación.<br />Por favor pregunte al autor lo que %s hace.';
$strMIME_transformation = 'Transformación del navegador';
$strMIME_transformation_note = 'Para una lista de opciones de transformación disponibles y sus transformaciones MIME-type transformations, dé clic en %stransformation descriptions%s';
$strMIME_transformation_options = 'Opciones de transformación';
$strMIME_transformation_options_note = 'Por favor ingrese los valores para las opciones de transformación usando este formato: \'a\',\'b\',\'c\'...<br />Si alguna vez requiere insertar un Backslash ("\") o comilla sencilla ("\'") entre esos valores, use backslash (por ejemplo \'\\\\xyz\' o \'a\\\'b\').';
$strMIME_without = 'MIME-types impresos en itálicas no tienen una función de transformación adicional';
$strMissingBracket = 'Falta una llave (\{ o \})';
$strModifications = 'Se han guardado las modificaciones';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modificar un índice';
$strMoreStatusVars = 'Más variables del estado actual';
$strMoveTable = 'Mover tabla a (Base de datos<b>.</b>tabla):';
$strMoveTableOK = 'La tabla %s ha sido movida a %s.';
$strMoveTableSameNames = '¡No es posible mover la tabla a la misma!';
$strMustSelectFile = 'Debe seleccionar el archivo que desea insertar.';
$strMySQLCharset = 'Juegos de caracteres de MySQL';
$strMySQLReloaded = 'Reinicio de MySQL.';
$strMySQLSaid = 'MySQL ha dicho: ';
$strMySQLServerProcess = 'MySQL %pma_s1% ejecutándose en %pma_s2% como %pma_s3%';
$strMySQLShowProcess = 'Mostrar procesos';
$strMySQLShowStatus = 'Mostrar información de marcha de MySQL';
$strMySQLShowVars = 'Mostrar las variables del sistema MySQL';

$strName = 'Nombre';
$strNext = 'Próxima';
$strNo = 'No';
$strNoDatabases = 'No hay bases de datos';
$strNoDatabasesSelected = 'No se seleccionaron bases de datos.';  
$strNoDescription = 'Sin descripción';
$strNoDropDatabases = '"DROP DATABASE" los enunciados ("sentences") están deshabilitados.';
$strNoExplain = 'Saltarse la explicación del SQL';
$strNoFrames = 'phpMyAdmin funciona mejor con un navegador que <b>soporte marcos (frames)</b>.';
$strNoIndex = '¡No se ha definido el índice!';
$strNoIndexPartsDefined = '¡No se han definido las partes del índice!';
$strNoModification = 'Sin cambios';
$strNoOptions = 'Este formato no tiene opciones';
$strNoPassword = 'Sin contraseña';
$strNoPermission = 'El servidor web no tiene permiso para guardar el archivo %s.';
$strNoPhp = 'Sin código PHP';
$strNoPrivileges = 'Sin privilegios';
$strNoQuery = '¡No existe la consulta SQL!';
$strNoRights = '¡Usted no tiene suficientes privilegios para estar aquí ahora!';
$strNoSpace = 'No hay suficiente espacio para guardar el archivo %s.';
$strNoTablesFound = 'No se han encontrado tablas en la base de datos.';
$strNoUsersFound = 'Usuario(s) no encontrado(s).';
$strNoUsersSelected = 'No se seleccionaron usuarios.';
$strNoValidateSQL = 'Saltarse la validación del SQL';
$strNone = 'Ninguna';
$strNotNumber = '¡Ésto no es un número!';
$strNotOK = 'no recibió el OK';
$strNotSet = 'La tabla <b>%s</b> no fue hallada o no fue definida en %s';
$strNotValidNumber = '¡no es un número de fila válido!';
$strNull = 'Nulo';
$strNumSearchResultsInTable = '%s resultado(s) en la tabla <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultado(s)';
$strNumTables = 'Tablas';

$strOK = 'OK';
$strOftenQuotation = 'A menudo son comillas. OPCIONALMENTE significa que únicamente los campos char y varchar están encerrados por el caracter "comillas".';
$strOperations = 'Operaciones';
$strOptimizeTable = 'Optimizar la tabla';
$strOptionalControls = 'Es opcional. Controla el modo de escribir o leer caracteres especiales.';
$strOptionally = 'OPCIONALMENTE';
$strOptions = 'Opciones';
$strOr = 'O';
$strOverhead = 'Residuo a depurar';
$strOverwriteExisting = 'Sobreescribir el(los) archivo(s) existente(s)';

$strPHP40203 = 'Usted está usando PHP 4.2.3, el cual tiene un error de codificación en cuanto a los "strings multi-byte" (mbstring). Lea el reporte 19404 de PHP. Esta versión de PHP no está recomendada para ser usada con phpMyAdmin.';
$strPHPVersion = 'Versión de PHP';
$strPageNumber = 'Número de página:';
$strPaperSize = 'Tamaño del papel';
$strPartialText = 'Textos parciales';
$strPassword = 'Contraseña';
$strPasswordChanged = 'La contraseña para %s fue cambiada exitosamente.';
$strPasswordEmpty = '¡La contraseña está vacía!';
$strPasswordNotSame = '¡Las contraseñas no coinciden!';
$strPdfDbSchema = 'Esquema de la base de datos "%s" - Página %s';
$strPdfInvalidPageNum = '¡No se ha definido el número de página PDF!';
$strPdfInvalidTblName = '¡La tabla "%s" no existe!';
$strPdfNoTables = 'No existen tablas';
$strPerHour = 'por hora';
$strPerMinute = 'por minuto';
$strPerSecond = 'por segundo';
$strPhp = 'Crear código PHP';
$strPmaDocumentation = 'Documentación de phpMyAdmin';
$strPmaUriError = 'La directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> ¡DEBE constar en el fichero de configuración!';
$strPortrait = 'Orientación vertical';
$strPos1 = 'Empezar';
$strPrevious = 'Previo';
$strPrimary = 'Primaria';
$strPrimaryKey = 'Clave Primaria';
$strPrimaryKeyHasBeenDropped = 'La clave primaria ha sido eliminada';
$strPrimaryKeyName = 'El nombre de la clave primaria debe ser... ¡PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>debe</b> ser el nombre de y <b>únicamente de</b> ¡una clave primaria!)';
$strPrint = 'Imprimir';
$strPrintView = 'Vista de impresión';
$strPrivDescAllPrivileges = 'Incluye todos los privilegios excepto CONCEDER (GRANT).';
$strPrivDescAlter = 'Permite alterar la estructura de las tablas existentes.';
$strPrivDescCreateDb = 'Permite crear nuevas bases de datos y tablas.';
$strPrivDescCreateTbl = 'Permite la creación de tablas nuevas.';
$strPrivDescCreateTmpTable = 'Permite la creación de tablas temporales.';
$strPrivDescDelete = 'Permite borrar datos.';
$strPrivDescDropDb = 'Permite eliminar bases de datos y tablas.';
$strPrivDescDropTbl = 'Permite eliminar tablas.';
$strPrivDescExecute = 'Permite correr procedimientos guardados; no tiene efecto en esta versión de MySQL.';
$strPrivDescFile = 'Permite importar y exportar datos de y hacia archivos.';
$strPrivDescGrant = 'Permite añadir usuarios y privilegios sin conectarse nuevamente a la tabla de privilegios.';
$strPrivDescIndex = 'Permite crear y eliminar índices.';
$strPrivDescInsert = 'Permite insertar y reemplazar datos.';
$strPrivDescLockTables = 'Permite poner candados a las tablas para el "thread" actual.';
$strPrivDescMaxConnections = 'Limita el número de conexiones nuevas que el usuario puede abrir por hora.';
$strPrivDescMaxQuestions = 'Limita el número de consultas que el usuario puede enviar al servidor por hora.';
$strPrivDescMaxUpdates = 'Limita el número de comandos que cambian cualquier tabla o base de datos que el usuario puede ejecutar por hora.';
$strPrivDescProcess3 = 'Permite destruir los procesos de otros usuarios.';
$strPrivDescProcess4 = 'Permite ver las consultas completas en la lista de procesos.';
$strPrivDescReferences = 'No tiene efecto en esta versión de MySQL.';
$strPrivDescReload = 'Permite volver a cargar los parámetros del servidor y depurar los cachés del servidor.';
$strPrivDescReplClient = 'Da el derecho al usuario para preguntar dónde están los "slaves / masters".';
$strPrivDescReplSlave = 'Necesario para los "slaves" de replicación.';
$strPrivDescSelect = 'Permite leer los datos.';
$strPrivDescShowDb = 'Concede acceso a la lista completa de bases de datos.';
$strPrivDescShutdown = 'Permite desconectar el servidor.';
$strPrivDescSuper = 'Permite la conexión, incluso si el número máximo de conexiones ha sido alcanzado; Necesario para la mayor parte de operaciones administrativas tales como montar parámetros de variables globales o matar "threads" de otros usuarios.';
$strPrivDescUpdate = 'Permite cambiar los datos.';
$strPrivDescUsage = 'Sin privilegios.';
$strPrivileges = 'Privilegios';
$strPrivilegesReloaded = 'Los privilegios fueron cargados nuevamente de manera exitosa.';
$strProcesslist = 'Lista de procesos';
$strProperties = 'Propiedades';
$strPutColNames = 'Ponga los nombres de campo en la primera hilera';

$strQBE = 'Generar una consulta';
$strQBEDel = 'Borrar';
$strQBEIns = 'Insertar';
$strQueryFrame = 'Ventana de consulta';
$strQueryFrameDebug = 'Información para hacer la depuración (Debugging)';
$strQueryFrameDebugBox = 'Variables activas para el formulario de consulta:\nDB: %s\nTabla: %s\nServidor: %s\n\nVariables actuales para el formulario de consulta:\nDB: %s\nTabla: %s\nServidor: %s\n\nLocalización del punto de apertura: %s\nLocalización del Frameset: %s.';
$strQueryOnDb = 'Consulta a la base de datos <b>%s</b>:';
$strQuerySQLHistory = 'Historial-SQL';
$strQueryStatistics = '<b>Estadísticas de consulta</b>: Desde su inicio, %s consultas han sido enviadas al servidor.';
$strQueryTime = 'La consulta tardó %01.4f seg';
$strQueryType = 'Tipo de consulta';
$strQueryWindowLock = 'No sobreescriba esta consulta desde fuera de la ventana';

$strReType = 'Re-escriba';
$strReceived = 'Recibido';
$strRecords = 'Registros';
$strReferentialIntegrity = 'Compruebe la integridad referencial:';
$strRelationNotWorking = 'Las opciones adicionales para trabajar con tablas vinculadas fueron desactivadas. Para saber porqué, dé clic %saquí%s.';  //Features = ¿opciones, componentes?
$strRelationView = 'Vista de relaciones';
$strRelationalSchema = 'Esquema relacionado';
$strRelations = 'Relaciones';
$strReloadFailed = 'El reinicio de MySQL ha fallado.';
$strReloadMySQL = 'Reinicio de MySQL';
$strReloadingThePrivileges = 'Cargando los privilegios nuevamente';
$strRememberReload = 'Recuerde reiniciar el servidor.';
$strRemoveSelectedUsers = 'Retire a los usuarios seleccionados';
$strRenameTable = 'Cambiar el nombre de la tabla a';
$strRenameTableOK = 'Tabla %s ahora se llama %s';
$strRepairTable = 'Reparar la tabla';
$strReplace = 'Reemplazar';
$strReplaceNULLBy = 'Reemplace NULL con';
$strReplaceTable = 'Reemplazar los datos de la tabla con archivo';
$strReset = 'Reset';
$strResourceLimits = 'Límites de recursos';
$strRevoke = 'Revocar';
$strRevokeAndDelete = 'Revocar todos los privilegios activos de los usuarios y bórrelos después.';
$strRevokeAndDeleteDescr = 'Los usuarios aún tendrán el privilegio "USAGE" hasta que los privilegios se hayan vuelto a cargar.';
$strRevokeGrant = 'Revocar la concesión de privilegios';
$strRevokeGrantMessage = 'Ud. ha revocado la concesión de privilegios para %s';
$strRevokeMessage = 'Ud. ha revocado los privilegios para %s';
$strRevokePriv = 'Revocar los privilegios';
$strRowLength = 'Longitud de la fila';
$strRowSize = ' Tamaño de la fila ';
$strRows = 'Filas';
$strRowsFrom = 'filas empezando de';
$strRowsModeFlippedHorizontal = 'horizontal (encabezados rotados)';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions = 'en modo %s y repite encabezados cada %s celdas';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estadísticas de la fila';
$strRunQuery = 'Ejecutar la consulta';
$strRunSQLQuery = 'Ejecute la/s consulta/s SQL en la base de datos %s';
$strRunning = 'ejecutándose en %s';

$strSQL = 'SQL';
$strSQLOptions = 'Opciones SQL';
$strSQLParserBugMessage = 'Hay la posibilidad de que usted haya encontrado un error en el intérprete de SQL. Por favor examine cuidadosamente su consulta, y verifique que las comillas son usadas adecuadamente y hacen juego. Otra posible causa del fallo es que usted este subiendo un archivo con datos binarios por fuera del área de texto delimitado. Intente su consulta en la interfaz de comandos de MySQL. La salida generada por el servidor de MySQL, de existir, aparece abajo, en cuyo caso puede ayudar a diagnosticar el problema. Si aún tiene problemas o el intérprete falla en tanto que en la interfaz de comandos funciona, por favor reduzca la salida de su consulta de SQL a la consulta que genera el problema, y envíe un reporte de error con la cadena de datos en la sección de CORTE indicada abajo:';
$strSQLParserUserError = 'Parece haber un error en su consulta de SQL. La salida generada por el servidor de MySQL, de existir, aparece abajo, en cuyo caso puede ayudar a diagnosticar el problema.';
$strSQLQuery = 'consulta SQL';
$strSQLResult = 'Resultado SQL';
$strSQPBugInvalidIdentifer = 'El identificador no es válido';
$strSQPBugUnclosedQuote = 'Comillas sin cerrar';
$strSQPBugUnknownPunctuation = 'Signo de puntuación desconocido';
$strSave = 'Grabar';
$strSaveOnServer = 'Guardar en el servidor, en el directorio %s ';
$strScaleFactorSmall = 'El factor de la escala es demasiado pequeño para poner el esquema en una página';
$strSearch = 'Buscar';
$strSearchFormTitle = 'Buscar en la base de datos';
$strSearchInTables = 'En la(s) tabla(s):';
$strSearchNeedle = 'Palabra(s) o valor(es) a buscar (comodín: "%"):';
$strSearchOption1 = 'al menos una de estas palabras';
$strSearchOption2 = 'Todas las palabras';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'como expresión regular';
$strSearchResultsFor = 'Resultados de la búsqueda por "<i>%s</i>" %s:';
$strSearchType = 'Encontrado:';
$strSecretRequired = 'El archivo de configuración ahora necesita salvoconducto (una frase secreta) (blowfish_secret).';
$strSelect = 'Seleccionar';
$strSelectADb = 'Seleccione una base de datos';
$strSelectAll = 'Seleccione todo';
$strSelectFields = 'Seleccionar campos (al menos uno):';
$strSelectNumRows = 'en la consulta';
$strSelectTables = 'Seleccionar tablas';
$strSend = 'Enviar';
$strSent = 'Enviado';
$strServer = 'Servidor %s';
$strServerChoice = 'Elección del servidor';
$strServerStatus = 'Información acerca del tiempo de marcha';
$strServerStatusUptime = 'Este servidor MySQL ha estado corriendo durante %s. Se inició en %s.';
$strServerTabProcesslist = 'Procesos';
$strServerTabVariables = 'Variables';
$strServerTrafficNotes = '<b>Tráfico del servidor</b>: Estas tablas las estadísticas de tráfico en la red de este servidor MySQL desde su inicio.';
$strServerVars = 'Variables y parámetros del servidor';
$strServerVersion = 'Versión del servidor';
$strSessionValue = 'Valor de la sesión';
$strSetEnumVal = 'Si el tipo de campo es "enum" o "set", por favor ingrese los valores usando este formato: \'a\',\'b\',\'c\'...<br />Si alguna vez necesita poner una barra invertida("\") o una comilla simple ("\'") entre esos valores, siempre ponga una barra invertida. (Por ejemplo \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostrar';
$strShowAll = 'Mostrar todo';
$strShowColor = 'Mostrar color';
$strShowCols = 'Mostrar columnas';
$strShowDatadictAs = 'Formato del Diccionario de Datos';
$strShowFullQueries = 'Muestre las consultas enteras';  
$strShowGrid = 'Mostrar cuadrícula';
$strShowPHPInfo = 'Mostrar información de PHP';
$strShowTableDimension = 'Mostrar la dimensión de las tablas';
$strShowTables = 'Mostrar las tablas';
$strShowThisQuery = ' Mostrar esta consulta otra vez ';
$strShowingRecords = 'Mostrando registros ';
$strSingly = '(solo)';
$strSize = 'Tamaño';
$strSort = 'Ordenar';
$strSpaceUsage = 'Espacio utilizado';
$strSplitWordsWithSpace = 'Palabras separadas por un espacio (" ").';
$strStatCheckTime = 'Última revisión';
$strStatCreateTime = 'Creación';
$strStatUpdateTime = 'Última actualización';
$strStatement = 'Enunciado';
$strStatus = 'Estado actual';
$strStrucCSV = 'Datos CSV ';
$strStrucData = 'Estructura y datos';
$strStrucDrop = 'Añadir \'drop table\'';
$strStrucExcelCSV = 'CSV para datos de MS Excel';
$strStrucOnly = 'Únicamente la estructura ';
$strStructPropose = 'Planteamiento de una estructura de tabla';
$strStructure = 'Estructura';
$strSubmit = 'Enviar';
$strSuccess = 'Su consulta ha sido ejecutada con éxito';
$strSum = 'Número de filas';
$strSwitchToTable = 'Cambie (switch) a la tabla copiada';

$strTable = 'Tabla';
$strTableComments = 'Comentarios de la tabla';
$strTableEmpty = '¡El nombre de la tabla está vacío!';
$strTableHasBeenDropped = 'Se ha eliminado la tabla %s';
$strTableHasBeenEmptied = 'Se ha vaciado la tabla %s';
$strTableHasBeenFlushed = 'Se ha vaciado el caché de la tabla %s';
$strTableMaintenance = 'Mantenimiento de la tabla';
$strTableOfContents = 'Tabla de contenidos';
$strTableOptions = 'Opciones de la tabla';
$strTableStructure = 'Estructura de tabla para la tabla';
$strTableType = 'Tipo de tabla';
$strTables = '%s tabla(s)';
$strTblPrivileges = 'Privilegios específicos para la tabla';
$strTextAreaLength = ' Debido a su longitud,<br /> este campo puede no ser editable ';
$strTheContent = 'Se insertó el contenido de su archivo.';
$strTheContents = 'El contenido del archivo reemplaza el contenido de la tabla seleccionada para las columnas idénticas primarias o únicas.';
$strTheTerminator = 'El terminador de los campos.';
$strThisHost = 'Este Host';
$strThisNotDirectory = 'Esto no fue un directorio';
$strThreadSuccessfullyKilled = 'El thread %s fue destruido exitosamente.';
$strTime = 'Tiempo';
$strToggleScratchboard = 'toggle scratchboard';
$strTotal = 'total';
$strTotalUC = 'Total';
$strTraffic = 'Tráfico';
$strTransformation_image_jpeg__inline = 'Muestra un thumbnail que puede abrirse mediante un clic; opciones: width,height en píxeles (mantiene la proporción original)';  
$strTransformation_image_jpeg__link = 'Muestra un enlace a esta imagen (blob download directo, i.e.).';
$strTransformation_image_png__inline = 'Ver imagen/jpeg: inline';  
$strTransformation_text_plain__dateformat = 'Toma un campo TIME, TIMESTAMP o DATETIME y lo formatea usando su formato de fechas local. La primera opción es el offset (en horas) que se añadirá al timestamp (Predeterminado: 0). La segunda opción es un dateformat diferente de acuerdo con los parámetros disponibles para el strftime() del PHP.';
$strTransformation_text_plain__external = 'LINUX SOLAMENTE: Ejecuta una aplicación externa y alimenta el fielddata mediante input estándar. Retorna el output estándar de la aplicación. El predeterminado es Tidy, para mostrar código HTML agradable para la impresión. Por razones de seguridad, debe editar manualmente el archivo libraries/transformations/text_plain__external.inc.php e insertar las herramientas que permitirá se ejecuten. La primera opción será el número del programa que querrá utilizar y la segunda opción son los parámetros para el programa. El tercer parámetro, de ser 1 convertirá el output usando htmlspecialchars() (el predeterminado es 1). Un cuarto parámetro, de ser 1 pondrá un NOWRAP a la celda de contenido para que todo el output se muestre sin reformatear (Predeterminado 1)';
$strTransformation_text_plain__formatted = 'Mantiene el formato original del campo. No se puede hacer Escape.';
$strTransformation_text_plain__imagelink = 'Muestra una imagen y un enlace, el campo contiene el nombre del archivo; la primera opción es un prefijo como "http://dominio.com/", la segunda opción es el ancho en píxeles, el tercero es el alto.';
$strTransformation_text_plain__link = 'Muestra un enlace, el campo contiene el nombre del archivo; la primera opción es un prefijo como "http://dominio.com/", la segunda opción es un título para el enlace.';
$strTransformation_text_plain__substr = 'Solamente muestra una parte del string. La primera opción es un offset para definir en dónde empieza el output de su texto (Predeterminado 0). La segunda opción es un offset para definir cuánto texto es retornado. Si está vacío, regresa todo el texto restante. La tercera opción define cuáles chars se adjuntarán al output cuando se regrese un substring (Predeterminado: ...) .';
$strTransformation_text_plain__unformatted = 'Muestra el código HTML como entidades HTML. No se muestra formato HTML.';
$strTruncateQueries = 'Trunque las consultas que ya se han mostrado';  
$strType = 'Tipo';

$strUncheckAll = 'Desmarcar todos';
$strUnique = 'Único';
$strUnselectAll = 'Deseleccione todo';
$strUpdComTab = 'Para actualizar su tabla Columna_comentarios (Column_comments), por favor revise la documentación';
$strUpdatePrivMessage = 'Ud. ha actualizado los privilegios para %s.';
$strUpdateProfile = 'Actualiza el perfil:';
$strUpdateProfileMessage = 'Se ha actualizado el perfil.';
$strUpdateQuery = 'Modificar la consulta';
$strUsage = 'Uso';
$strUseBackquotes = 'Usar "backquotes" con tablas y nombres de campo';
$strUseHostTable = 'Use la tabla Anfitrión (Host)';  
$strUseTables = 'Usar tablas';
$strUseTextField = 'Use el campo de texto';
$strUser = 'Usuario';
$strUserAlreadyExists = '¡El usuario %s ya existe!';
$strUserEmpty = '¡El nombre de usuario está vacío!';
$strUserName = 'Nombre de usuario';
$strUserNotFound = 'El usuario que seleccionó no fue hallado en la tabla de privilegios.';
$strUserOverview = 'Vista global del usuario';
$strUsers = 'Usuarios';
$strUsersDeleted = 'Los usuarios seleccionados fueron borrados exitosamente.';
$strUsersHavingAccessToDb = 'Usuarios con acceso a &quot;%s&quot;';

$strValidateSQL = 'Validar el SQL';
$strValidatorError = 'El validador de SQL no pudo inicializarse. Por favor revise si ha instalado las extensiones php necesarias, como fueron descritas en la %sdocumentación%s.';
$strValue = 'Valor';
$strVar = 'Variable';
$strViewDump = 'Mostrar el volcado esquema de la tabla';
$strViewDumpDB = 'Ver el volcado esquema de la base de datos';
$strViewDumpDatabases = 'Ver el dump (schema) de la base de datos';

$strWebServerUploadDirectory = 'directorio en el servidor web para subir los archivos';
$strWebServerUploadDirectoryError = 'No está disponible el directorio que usted habilitó para subir las tareas';
$strWelcome = 'Bienvenido a %s';
$strWildcard = 'comodín';
$strWithChecked = 'Con marca:';
$strWritingCommentNotPossible = 'No fue posible escribir el comentario';
$strWritingRelationNotPossible = 'No fue posible escribir la relación';
$strWrongUser = 'Usuario/contraseña equivocado. Acceso denegado.';

$strXML = 'XML';

$strYes = 'Sí';

$strZeroRemovesTheLimit = 'Nota: si cambia los parámetros de estas opciones a 0 (cero), remueve el límite.';
$strZip = '"comprimido con zip"';
// To translate

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
