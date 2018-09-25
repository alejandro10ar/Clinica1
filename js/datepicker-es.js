/ * Inicialización en español para la extensión 'UI Date Picker' para jQuery. * /
/ * Traducido por Vester (xvester@gmail.com). * /
( función ( fábrica ) {
	if ( typeof define ===  " function "  &&  define . amd ) {

		// AMD. Registrarse como un módulo anónimo.
		define ([ " ../widgets/datepicker " ], fábrica);
	} else {

		// Browser globals
		fábrica ( jQuery . datepicker );
	}
} ( función ( datepicker ) {

datepicker . regional . es  = {
	closeText :  " Cerrar " ,
	prevText :  " & # x3C; Ant " ,
	nextText :  " Sig y # x3E; " ,
	currentText :  " Hoy " ,
	monthNames : [ " enero " , " febrero " , " marzo " , " abril " , " mayo " , " junio " ,
	" julio " , " agosto " , " septiembre " , " octubre " , " noviembre " , " diciembre " ],
	monthNamesShort : [ " ene " , " feb " , " mar " , " abr " , " may " , " jun " ,
	" jul " , " ago " , " sep " , " oct " , " nov " , " dic " ],
	dayNames : [ " domingo " , " lunes " , " martes " , " miércoles " , " jueves " , " viernes " , " sábado " ],
	dayNamesShort : [ " dom " , " lun " , " mar " , " mié " , " jue " , " vie " , " sáb " ],
	dayNamesMin : [ " D " , " L " , " M " , " X " , " J " , " V " , " S " ],
	WeekHeader :  " Sm " ,
	dateFormat :  " dd / mm / aa " ,
	primer día :  1 ,
	isRTL :  falso ,
	showMonthAfterYear :  falso ,
	yearSuffix :  " " };
datepicker . setDefaults ( datepicker . regional . es );

return  datepicker . regional . es ;

}));