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
  'ERR_NO_OPPS' => 'Por favor, cree al menos una Oportunidad para ver sus gráficos.',
  'LBL_ALL_OPPORTUNITIES' => 'El valor total de todas las oportunidades es',
  'LBL_CAMPAIGN_ROI_TITLE_DESC' => 'Muestra la respuesta a la campaña por retorno de inversión.',
  'LBL_CHART_ACTION' => 'Acción',
  'LBL_CHART_DCE_ACTIONS_MONTH' => 'Acciones de DCE por tipos (Mes Actual)',
  'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Fuente de Prospecto por Resultado',
  'LBL_CHART_MODULES_USED_DIRECT_REPORTS_30_DAYS' => 'Módulos Utilizados Por Mis Informes Directos (Últimos 30 Días)',
  'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'Mis Módulos Utilizados (Últimos 30 Días)',
  'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Mi Embudo de Ventas por Etapa de Ventas',
  'LBL_CHART_OPPORTUNITIES_THIS_QUARTER' => 'Oportunidades de éste Trimestre',
  'LBL_CHART_OUTCOME_BY_MONTH' => 'Resultado por Mes',
  'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Embudo de Ventas por Fuente de Prospecto',
  'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Embudo de Ventas por Etapa de Ventas',
  'LBL_CHART_PIPELINE_BY_SALES_STAGE_FUNNEL' => 'Embudo de Ventas por Ventas en etapa canalizada',
  'LBL_CHART_TYPE' => 'Tipo de Gráfico',
  'LBL_CLOSE_DATE_END' => 'Fecha Estimada de Cierre - Hasta:',
  'LBL_CLOSE_DATE_START' => 'Fecha Estimada de Cierre - Desde:',
  'LBL_CREATED_ON' => 'Ejecutado por última vez eln',
  'LBL_DATE_END' => 'Fecha de Fin:',
  'LBL_DATE_RANGE' => 'El rango de fechas es',
  'LBL_DATE_RANGE_TO' => 'a',
  'LBL_DATE_START' => 'Fecha de Inicio:',
  'LBL_EDIT' => 'Editar',
  'LBL_LEAD_SOURCES' => 'Toma de Contacto:',
  'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Todas las Oportunidades por Toma de Contacto por Resultado',
  'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Muestra las cantidades acumuladas de oportunidades por la toma de contacto seleccionada por el resultado para los usuarios seleccionados. El resultado se basa en si el etapa de venta es Ganado, Perdido o cualquier otro valor.',
  'LBL_LEAD_SOURCE_FORM_DESC' => 'Muestra las cantidades acumuladas de oportunidades por la toma de contacto seleccionada por los usuarios seleccionados.',
  'LBL_LEAD_SOURCE_FORM_TITLE' => 'Todas las oportunidades por Toma de Contacto',
  'LBL_LEAD_SOURCE_OTHER' => 'Otro',
  'LBL_MODULE_NAME' => 'Cuadro de Mando',
  'LBL_MODULE_NAME_SINGULAR' => 'Cuadro de Mando',
  'LBL_MODULE_TITLE' => 'Cuadro de Mando: Inicio',
  'LBL_MONTH_BY_OUTCOME_DESC' => 'Muestra las cantidades acumuladas de oportunidades por mes y por resultado para los usuarios seleccionados donde la fecha estimada de cierre está dentro del rango de fechas especificado.  El resultado se basa en si el etapa de venta es Ganado, Perdido o cualquier otro valor.',
  'LBL_MY_MODULES_USED_SIZE' => 'Número de Accesos',
  'LBL_NUMBER_OF_OPPS' => 'Número de Oportunidades',
  'LBL_OPPS_IN_LEAD_SOURCE' => 'oportunidades donde la toma de contacto es',
  'LBL_OPPS_IN_STAGE' => 'en donde la etapa de venta es',
  'LBL_OPPS_OUTCOME' => 'donde el resultado es',
  'LBL_OPPS_WORTH' => 'valor total de oportunidades',
  'LBL_OPP_SIZE' => 'Valor de la oportunidad en',
  'LBL_OPP_THOUSANDS' => 'K',
  'LBL_PIPELINE_FORM_TITLE_DESC' => 'Muestra las cantidades acumuladas por los etapas de venta seleccionados para sus oportunidades donde la fecha de cierre esperada está dentro del rango de fechas especificado.',
  'LBL_REFRESH' => 'Actualizar',
  'LBL_ROLLOVER_DETAILS' => 'Mueva el cursor sobre una barra para más detalles.',
  'LBL_ROLLOVER_WEDGE_DETAILS' => 'Mueva el cursor sobre una sección para más detalles.',
  'LBL_SALES_STAGES' => 'Etapas de venta:',
  'LBL_SALES_STAGE_FORM_DESC' => 'Muestra las cantidades acumuladas de oportunidades por los etapas de venta seleccionados para los usuarios seleccionados donde la fecha estimada de cierre está dentro del rango de fechas especificado.',
  'LBL_SALES_STAGE_FORM_TITLE' => 'Embudo por etapa de venta',
  'LBL_TITLE' => 'Título',
  'LBL_TOTAL_PIPELINE' => 'Total en el embudo de ventas',
  'LBL_USERS' => 'Usuarios:',
  'LBL_YEAR' => 'Año:',
  'LBL_YEAR_BY_OUTCOME' => 'Embudo de ventas por Mes por Resultado',
  'LNK_NEW_ACCOUNT' => 'Crear Cuenta',
  'LNK_NEW_CALL' => 'Registrar Llamada',
  'LNK_NEW_CASE' => 'Crear Caso',
  'LNK_NEW_CONTACT' => 'Crear Contacto',
  'LNK_NEW_ISSUE' => 'Informe de Error',
  'LNK_NEW_LEAD' => 'Crear Cliente Potencial',
  'LNK_NEW_MEETING' => 'Programar Reunión',
  'LNK_NEW_NOTE' => 'CrearNota o Adjunto',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
  'LNK_NEW_QUOTE' => 'Crear Cotización',
  'LNK_NEW_TASK' => 'Crear Tarea',
  'NTC_NO_LEGENDS' => 'Ninguno',
);

