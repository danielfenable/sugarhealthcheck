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
  'LBL_ACCEPT_STATUS' => 'Aceptar Estato',
  'LBL_ACCOUNT_NAME' => 'Cuenta',
  'LBL_ACTIVITIES_REPORTS' => 'Informe de Actividad',
  'LBL_ADD_BUTTON' => 'Añadir',
  'LBL_ADD_INVITEE' => 'Añadir asistentes',
  'LBL_ASSIGNED_TO_ID' => 'Usuario Asignado',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_BLANK' => '-vacío-',
  'LBL_CALL' => 'Llamada:',
  'LBL_CALL_INFORMATION' => 'Visión General',
  'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => '¿Está seguro que desea eliminar todos los registros recurrentes?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_CONTACT_NAME' => 'Contacto:',
  'LBL_CREATE_AND_ADD' => 'Crear y Añadir',
  'LBL_CREATE_CONTACT' => 'Nuevo Contacto',
  'LBL_CREATE_INVITEE' => 'Crear una invitación',
  'LBL_CREATE_LEAD' => 'Nuevo Cliente Potencial',
  'LBL_CREATE_MODULE' => 'Registrar Llamada',
  'LBL_DATE' => 'Fecha de Inicio:',
  'LBL_DATE_END' => 'Fecha de Fin',
  'LBL_DATE_END_ERROR' => 'La fecha de finalización es anterior a la fecha de inicio',
  'LBL_DATE_TIME' => 'Inicio:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Llamadas',
  'LBL_DEL' => 'Eliminar',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DIRECTION' => 'Dirección:',
  'LBL_DURATION' => 'Duración:',
  'LBL_DURATION_HOURS' => 'Horas de Duración:',
  'LBL_DURATION_MINUTES' => 'Minutos de Duración:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Editar Todas las Recurrencias',
  'LBL_EMAIL' => 'Correo Electrónico',
  'LBL_EMAIL_REMINDER' => 'Recordatorio por correo electrónico',
  'LBL_EMAIL_REMINDER_SENT' => 'Recordatorio por correo electrónico enviado',
  'LBL_EMAIL_REMINDER_TIME' => 'Tiempo de recordatorio por correo electrónico',
  'LBL_EMPTY_SEARCH_RESULT' => 'Lo sentimos, no se encontraron resultados. Por favor cree una invitación abajo.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Usuario Asignado',
  'LBL_EXPORT_CREATED_BY' => 'Creado por ID',
  'LBL_EXPORT_DATE_START' => 'Fecha y Hora de Inicio',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado por ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Relacionado con el módulo',
  'LBL_EXPORT_REMINDER_TIME' => 'Tiempo de Recordatorio (en minutos)',
  'LBL_FIRST_NAME' => 'Nombre',
  'LBL_HELP_CREATE' => 'El módulo {{plural_module_name}} consite de registros {{calls_singular_module}} ingresados por usuarios en su organización. {{plural_module_name}} debe encontrarse en estado de "Agendada", "En espera" o "Cancelada". Los usuarios Sugar así como contactos y clientes potenciales deberán ser agregados como invitados.

Para crear una {{calls_singular_module}}:
1. Ingresa los valores a los campos desedos.
    - Los campos marcados como "Requeridos" deben ser completados para guardar.
    - Clic en "Mostrar Más" para habilitar más campos en caso de ser necesario.
2. Agregar invitados a {{calls_singular_module}}.
    - Clic en "Seleccionar un Asistente" para agregar un usuario, contacto o cliente potencial para la {{calls_singular_module}}.
    - Clic en ícono más a la derecha de "Seleccionar un Asistente" para crear un asistente {{calls_singular_module}} como registro nuevo de Sugar.
3. Clic en "Guardar" para finalizar el registro nuevo y regresar a la página anterior.
    - Escoja "Guardar y ver" para abrir el nuevo {{calls_singular_module}} en la vista de registros.
    - Escoja "Guardar y crear nuevo" para crear inmediatamente otro nuevo {{calls_singular_module}}.',
  'LBL_HELP_RECORD' => 'El módulo {{plural_module_name}} consite de registros {{calls_singular_module}} ingresados por usuarios en su organización. {{plural_module_name}} debe encontrarse en estado de "Agendada", "En espera" o "Cancelada". Los usuarios Sugar así como {{contacts_module}} y {{leads_module}} deberán ser agregados como invitados.

- Editar los campos de registro dando click en un campo individual o en el botón de Editar.
- Ver o modificar vínculos hacia otros registros en los subpaneles alternando el botón izquierdo del panel hacia "Vista de Datos".
- Crear y ver comentarios de usuarios e historial de cambios en registro dentro de la visualización de actividad alternando el botón izquierdo de panel hacia "Visualización de Actividad".
- Seguir o marcar como favorito este registro usando los iconos a la derecha del nombre.
- Para más acciones se encuentran disponibles al deslizar el menú de acciones a la derecha del botón de Editar.',
  'LBL_HELP_RECORDS' => 'El módulo {{plural_module_name}} consiste de llamadas registradas que se encuentran en un estado de "Agendado", "En espera", o "Cancelado". Las llamadas agendadas siguientes que estén dentro de 24 horas tendrán la fecha de inicio resaltado en color azul. Las llamadas vencidas se mostrarán en color rojo.

Desde esta vista {{plural_module_name}} puedes observar y editar la información de la llamada en el renglón. Para más acciones se encuentran disponibles en el menú al final de cada renglón de llamada. Puedes seleccionar "Cerrar" desde el menú sobre cualquier llamada agendada para cambiar a "En espera".

Usuarios, contactos y clientes potenciales de Sugar pueden agregarse como invitados. {{plural_module_name}} debe ser creado a través de módulo {{plural_module_name}}. El módulo Calendario, hace la importación de la misma manera a través del subpanel de Actividades (para módulos Legado) o Actividades Planeadas (para módulos Laterales) sobre los módulos de registros relacionados (eje. Contactos, Cuentas, etc.), quien automáticamente crea la vinculación entre ambos registros.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINUTES' => '(horas/minutos)',
  'LBL_INVITEE' => 'Participantes',
  'LBL_LAST_NAME' => 'Apellido',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciales',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
  'LBL_LIST_CLOSE' => 'Cerrar',
  'LBL_LIST_CONTACT' => 'Contacto',
  'LBL_LIST_DATE' => 'Fecha de Inicio',
  'LBL_LIST_DIRECTION' => 'Dirección',
  'LBL_LIST_DURATION' => 'Duración',
  'LBL_LIST_FORM_TITLE' => 'Lista de Llamadas',
  'LBL_LIST_MY_CALLS' => 'Mis Llamadas',
  'LBL_LIST_RELATED_TO' => 'Relacionado con',
  'LBL_LIST_RELATED_TO_ID' => 'Relacionado con ID',
  'LBL_LIST_SUBJECT' => 'Asunto',
  'LBL_LIST_TIME' => 'Hora de Inicio',
  'LBL_LOG_CALL' => 'Registrar Llamada',
  'LBL_MEMBER_OF' => 'Miembro De',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Llamadas',
  'LBL_MODULE_NAME_SINGULAR' => 'Llamada',
  'LBL_MODULE_TITLE' => 'Llamadas: Inicio',
  'LBL_MY_SCHEDULED_CALLS' => 'Mis Llamadas Agendadas',
  'LBL_NAME' => 'Nombre',
  'LBL_NEW_FORM_TITLE' => 'Crear Cita',
  'LBL_NO_ACCESS' => 'No tiene permisos para crear registros en el módulo $module',
  'LBL_OUTLOOK_ID' => 'ID de Outlook',
  'LBL_PARENT_ID' => 'ID de Registro Padre',
  'LBL_PHONE' => 'Teléfono',
  'LBL_POPUP_REMINDER_TIME' => 'Recordatorio de Hora Popup',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Has agendado el {{moduleSingularLower}} para {{formatDate date_start}}, pero no tienes permiso para acceder.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Has agendado el {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> para {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Repetir',
  'LBL_RECURRING_LIMIT_ERROR' => 'Esta llamada recurrente no se puede programar debido a que excede el máximo de $límite recurrencias permitidas.',
  'LBL_RECURRING_SOURCE' => 'Fuente periódica',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Llamada con {{{this}}}',
  'LBL_RELATED_TO' => 'Relacionado con',
  'LBL_REMINDER' => 'Aviso',
  'LBL_REMINDER_EMAIL' => 'Correo Electrónico',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Enviar correo electrónico a todos los asistentes',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Hora de Aviso',
  'LBL_REMINDER_TITLE' => 'Llamar:',
  'LBL_REMOVE' => 'quit',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminar Todas las Recurrencias',
  'LBL_REPEAT_COUNT' => 'Número de repeticiones',
  'LBL_REPEAT_DOW' => 'Repita el Dow',
  'LBL_REPEAT_END' => 'Fin',
  'LBL_REPEAT_END_AFTER' => 'Después de',
  'LBL_REPEAT_END_BY' => 'Por',
  'LBL_REPEAT_INTERVAL' => 'Intervalo de repetición',
  'LBL_REPEAT_OCCURRENCES' => 'recurrencias',
  'LBL_REPEAT_PARENT_ID' => 'Repita el ID principal',
  'LBL_REPEAT_TYPE' => 'Repetición',
  'LBL_REPEAT_UNTIL' => 'Repetir Hasta',
  'LBL_REVENUELINEITEMS' => 'Ganancia de Artículo',
  'LBL_SCHEDULING_FORM_TITLE' => 'Planificación',
  'LBL_SEARCH_BUTTON' => 'Buscar',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Llamadas',
  'LBL_SELECT_FROM_DROPDOWN' => 'Por favor, seleccione antes un elemento de la lista desplegable Relacionado Con.',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Enviar Invitaciones',
  'LBL_SEND_BUTTON_TITLE' => 'Enviar Invitaciones [Alt+I]',
  'LBL_SEND_INVITES' => 'Enviar Invitaciones',
  'LBL_STATUS' => 'Estado:',
  'LBL_SUBJECT' => 'Asunto:',
  'LBL_SYNCED_RECURRING_MSG' => 'Esta convocatoria se originó en otro sistema y se sincronizan con el Sugar. Para realizar cambios, vaya a la llamada original en el otro sistema. Los cambios realizados en el otro sistema se puede sincronizar con este registro.',
  'LBL_TIME' => 'Hora inicio:',
  'LBL_TIME_END' => 'Hora de Fin',
  'LBL_USERS_SUBPANEL_TITLE' => 'Usuarios',
  'LNK_CALL_LIST' => 'Ver Llamadas',
  'LNK_IMPORT_CALLS' => 'Importar Llamadas',
  'LNK_NEW_ACCOUNT' => 'Nueva Cuenta',
  'LNK_NEW_APPOINTMENT' => 'Crear Cita',
  'LNK_NEW_CALL' => 'Registrar Llamada',
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'LNK_NEW_OPPORTUNITY' => 'Nueva Oportunidad',
  'LNK_SELECT_ACCOUNT' => 'Seleccionar Cuenta',
  'NOTICE_DURATION_TIME' => 'El tiempo de duración debe ser mayor que 0',
  'NTC_REMOVE_INVITEE' => '¿Está seguro de que desea quitar a este participante de la llamada?',
  'TPL_CALL_STATUS_CHANGED' => 'Llamada marcada {{estatus}} como',
);

