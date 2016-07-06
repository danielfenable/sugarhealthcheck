<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro a eliminar.',
  'LBL_ACCEPT_LINK' => 'Aceptar Link',
  'LBL_ACCEPT_STATUS' => 'Aceptar estato',
  'LBL_ACCEPT_THIS' => '¿Aceptar?',
  'LBL_ACCOUNT_NAME' => 'Cuenta',
  'LBL_ACTIVITIES_REPORTS' => 'Informe de Actividad',
  'LBL_ADD_BUTTON' => 'Añadir',
  'LBL_ADD_INVITEE' => 'Añadir Asistentes',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
  'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => '¿Está seguro que desea eliminar todos los registros recurrentes?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_CONTACT_NAME' => 'Nombre Contacto:',
  'LBL_CREATED_BY' => 'Creado por',
  'LBL_CREATED_USER' => 'Usuario Creado',
  'LBL_CREATE_AND_ADD' => 'Crear y Añadir',
  'LBL_CREATE_CONTACT' => 'Nuevo Contacto',
  'LBL_CREATE_INVITEE' => 'Crear una invitación',
  'LBL_CREATE_LEAD' => 'Nuevo Cliente Potencial',
  'LBL_CREATE_MODULE' => 'Programar Reunión',
  'LBL_CREATOR' => 'Creador de reuniones',
  'LBL_DATE' => 'Fecha Inicio:',
  'LBL_DATE_END' => 'Fecha Fin',
  'LBL_DATE_END_ERROR' => 'La fecha de finalización es anterior a la fecha de inicio',
  'LBL_DATE_TIME' => 'Fecha y hora de inicio:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Reuniones',
  'LBL_DEL' => 'Eliminar',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DIRECTION' => 'Dirección:',
  'LBL_DISPLAYED_URL' => 'Ver URL',
  'LBL_DURATION' => 'Duración:',
  'LBL_DURATION_HOURS' => 'Horas Duración:',
  'LBL_DURATION_MINUTES' => 'Minutos Duración:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Editar Todas las Recurrencias',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAIL_REMINDER' => 'Eecordatorio por correo electrónico',
  'LBL_EMAIL_REMINDER_SENT' => 'Recordatorio por correo electrónico enviado',
  'LBL_EMAIL_REMINDER_TIME' => 'Tiempo de recordatorio por correo electrónico',
  'LBL_EMPTY_SEARCH_RESULT' => 'Lo sentimos, no se encontraron resultados. Por favor cree un asistente abajo.',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'Se ha producido un error al iniciar esta reunión. Póngase en contacto con su administrador.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID usuario asignado',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Usuario asignado',
  'LBL_EXPORT_CREATED_BY' => 'Creado por ID',
  'LBL_EXPORT_DATE_END' => 'Fecha y hora de fin',
  'LBL_EXPORT_DATE_START' => 'Fecha y hora de inicio',
  'LBL_EXPORT_DISPLAYED_URL' => 'URL que se muestra',
  'LBL_EXPORT_EXTERNAL_ID' => 'ID externo',
  'LBL_EXPORT_HOST_URL' => 'Host Url',
  'LBL_EXPORT_JOIN_URL' => 'Indicar Url',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado por ID',
  'LBL_EXPORT_PARENT_ID' => 'ID Padre',
  'LBL_EXPORT_PARENT_TYPE' => 'Relacionado con',
  'LBL_EXPORT_REMINDER_TIME' => 'Tiempo de recordatorio (en minutos)',
  'LBL_EXTERNALID' => 'ID App Externa',
  'LBL_EXTNOSTART_HEADER' => 'Error: No se puede iniciar la reunión',
  'LBL_EXTNOSTART_MAIN' => 'No se puede iniciar esta reunión, ya que no es un administrador o el dueño de la reunión.',
  'LBL_EXTNOT_GO_BACK' => 'Volver al registro anterior',
  'LBL_EXTNOT_HEADER' => 'Error: No fue invitado',
  'LBL_EXTNOT_MAIN' => 'No es capaz de unirse a esta reunión, porque usted no es un asistente.',
  'LBL_EXTNOT_RECORD_LINK' => 'Ver reunión',
  'LBL_FIRST_NAME' => 'Nombre',
  'LBL_HELP_CREATE' => 'El módulo {{plural_module_name}} consiste en registros de {{meetings_module}} registrados por usuarios de su organización. {{plural_module_name}} puede tener el estado "Programado", "Celebrado" o "Cancelado". Se pueden añadir usuarios de Sugar, además de {{contacts_module}} y {{leads_module}} como invitados.

Para crear un {{meetings_singular_module}}:
1. Introduzca los valores deseados en los campos correspondientes.
    - Los campos marcados como "Necesario" se deben completar antes de guardar.
    - Haga clic en "Mostrar más" para mostrar campos adicionales si fuera necesario.
2. Añadir invitados al {{meetings_singular_module}}.
    - Haga clic en "Seleccionar un invitado" para añadir in usuario, contacto o cliente potencial existente al {{meetings_singular_module}}.
    - Haga clic en el símbolo + a la derecha de "Seleccionar un invitado" para crear un invitado al{{meetings_singular_module}} como nuevo registro de Sugar.
3. Haga clic en "Guardar" para finalizar el nuevo registro y volver a la página anterior.
    - Elija "Guardar y ver" para abrir la nueva reunión en la vista de registros.
    - Elija "Guardar y crear nuevo" para crear inmediatamente otro nuevo {{meetings_singular_module}}.',
  'LBL_HELP_RECORD' => 'El módulo {{plural_module_name}} consiste en registros de {{meetings_singular_module}} registrados por usuarios de su organización. {{plural_module_name}} puede tener el estado "Programado", "Celebrado" o "Cancelado". Se pueden añadir usuarios de Sugar, además de {{contacts_module}} y {{leads_module}} como invitados.

- Edite los campos de este registro haciendo clic en el campo individual a en el botón de Editar.
- Vea o modifique enlaces a otros registros en los subpaneles cambiando el panel inferior izquierdo a "Vista de datos".
- Escriba y vea comentarios de usuarios y el historial de cambios del registro en el canal de actividad cambiando el panel inferior izquierdo a "Canal de actividad".
- Siga o marque este registro como favorito con los iconos de la derecha del nombre del registro.
- En el menú desplegable Acciones a la derecha del botón de Editar existen acciones adicionales disponibles.',
  'LBL_HELP_RECORDS' => 'El módulo {{plural_module_name}} consiste en registros de reuniones que pueden tener el estado "Programada", "Celebrada" o "Cancelada". Reuniones próximas programadas en las siguientes 24 horas muestran la fecha de inicio marcada en azul. Las reuniones cuya fecha ya ha pasado muestran la fecha de inicio marcada en rojo.

En esta vista de lista {{plural_module_name}} puede ver y editar en línea información de reuniones. También hay acciones adicionales disponibles en el menú al final de cada fila de reunión. Puede seleccionar "Cerrar" en el menú de cualquier fila de reunión programada para marcarla como ya celebrada.

Se puede añadir usuarios de Sugar, contactos y clientes potenciales como invitados a la reunión. {{plural_module_name}} se puede crear a través del módulo {{plural_module_name}}, del módulo del Calendario, se puede importar y también se puede crear por medio del subpanel de Actividades (en módulos heredados) o en el dashlet de Actividades planeadas (en módulos Sidecar) de registros de módulos relacionados (por ejemplo, Contactos, Cuentas, etc.), que automáticamente crea una relación entre ambos registros.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
  'LBL_HOST_EXT_MEETING' => 'Iniciar una reunión',
  'LBL_HOST_URL' => 'Host URL',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINS' => '(horas/minutos)',
  'LBL_INVITEE' => 'Asistentes',
  'LBL_JOIN_EXT_MEETING' => 'Unirser a la reunión',
  'LBL_JOIN_MEETING' => 'Unirse a {{meetingType}}',
  'LBL_LAST_NAME' => 'Apellidos',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciales',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
  'LBL_LIST_CLOSE' => 'Cerrado',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_LIST_DATE' => 'Fecha Inicio',
  'LBL_LIST_DATE_MODIFIED' => 'Fecha de Modificación',
  'LBL_LIST_DIRECTION' => 'Dirección',
  'LBL_LIST_DUE_DATE' => 'Fecha de Vencimiento',
  'LBL_LIST_FORM_TITLE' => 'Lista de Reuniones',
  'LBL_LIST_JOIN_MEETING' => 'Unirser a la reunión',
  'LBL_LIST_MY_MEETINGS' => 'Mis Reuniones',
  'LBL_LIST_RELATED_TO' => 'Relacionado con',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_TIME' => 'Hora Inicio',
  'LBL_LOCATION' => 'Lugar:',
  'LBL_MEETING' => 'Reunión:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'Reunión cerrada correctamente.',
  'LBL_MEETING_INFORMATION' => 'Resumen de la Reunión',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODIFIED_BY' => 'Modificado por',
  'LBL_MODIFIED_USER' => 'Usuario Modificado',
  'LBL_MODULE_NAME' => 'Reuniones',
  'LBL_MODULE_NAME_SINGULAR' => 'Reunión',
  'LBL_MODULE_TITLE' => 'Reuniones: Inicio',
  'LBL_MY_SCHEDULED_MEETINGS' => 'Mis reuniones programadas',
  'LBL_NAME' => 'Nombre',
  'LBL_NEW_FORM_TITLE' => 'Crear Cita',
  'LBL_NO_ACCESS' => 'No tiene permisos para crear registros en el módulo $module',
  'LBL_OUTLOOK_ID' => 'ID Outlook',
  'LBL_PARENT_ID' => 'ID Padre',
  'LBL_PARENT_TYPE' => 'Tipo de Padre',
  'LBL_PASSWORD' => 'Contraseña de la reunión',
  'LBL_PHONE' => 'Teléfono',
  'LBL_POPUP_REMINDER' => 'Recordatorio emergente',
  'LBL_POPUP_REMINDER_TIME' => 'Hora de recordatorio emergente',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Ha programado {{moduleSingularLower}} para el {{formatDate date_start}}, pero no tiene permiso de acceso.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Ha programado el {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> para el {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Repetir',
  'LBL_RECURRING_LIMIT_ERROR' => 'Esta reunión recurrente no se puede programar debido a que excede el máximo de $límite recurrencias permitidas.',
  'LBL_RECURRING_SOURCE' => 'Fuente periódica',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Se reunió con {{{this}}}',
  'LBL_RELATED_TO' => 'Relacionado con:',
  'LBL_REMINDER' => 'Aviso:',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Enviar correo electrónico a todos los asistentes',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Hora Aviso',
  'LBL_REMINDER_TITLE' => 'Reunión:',
  'LBL_REMOVE' => 'quit',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminar Todas las Recurrencias',
  'LBL_REPEAT_COUNT' => 'Número de repeticiones',
  'LBL_REPEAT_DOW' => 'Repita el Dow',
  'LBL_REPEAT_END' => 'Fin',
  'LBL_REPEAT_END_AFTER' => 'Después de',
  'LBL_REPEAT_END_BY' => 'Por',
  'LBL_REPEAT_INTERVAL' => 'Intervalo de repetición',
  'LBL_REPEAT_OCCURRENCES' => 'Recurrencias',
  'LBL_REPEAT_PARENT_ID' => 'Repita el ID principal',
  'LBL_REPEAT_TYPE' => 'Repetición',
  'LBL_REPEAT_UNTIL' => 'Repetir hasta',
  'LBL_REVENUELINEITEMS' => 'Líneas de Ingreso',
  'LBL_SCHEDULING_FORM_TITLE' => 'Planificación',
  'LBL_SEARCH_BUTTON' => 'Búsqueda',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Reuniones',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Guardar y Enviar Invitaciones',
  'LBL_SEND_BUTTON_TITLE' => 'Guardar y Enviar Invitaciones',
  'LBL_SEND_INVITES' => 'Enviar Invitaciones',
  'LBL_SEQUENCE' => 'Secuencia de actualización de la reunión',
  'LBL_START_MEETING' => 'Iniciar {{meetingType}}',
  'LBL_STATUS' => 'Estado:',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_SYNCED_RECURRING_MSG' => 'Esta convocatoria se originó en otro sistema y se sincronizan con el Sugar. Para realizar cambios, vaya a la reunión original en el otro sistema. Los cambios realizados en el otro sistema se puede sincronizar con este registro.',
  'LBL_TIME' => 'Hora Inicio:',
  'LBL_TYPE' => 'Tipo de reunión',
  'LBL_URL' => 'Iniciar/Unirse a la reunión',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuarios',
  'LNK_IMPORT_MEETINGS' => 'Importar Reuniones',
  'LNK_MEETING_LIST' => 'Ver Reuniones',
  'LNK_NEW_APPOINTMENT' => 'Crear Cita',
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'NOTICE_DURATION_TIME' => 'El tiempo de duración debe ser mayor que 0',
  'NTC_REMOVE_INVITEE' => '¿Está seguro que desea quitar a este asistente de la reunión?',
);

