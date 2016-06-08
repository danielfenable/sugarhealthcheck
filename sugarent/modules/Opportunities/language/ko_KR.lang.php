<?php

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

$mod_strings = array(
    'LBL_MODULE_NAME' => '영업기회관리',
    'LBL_MODULE_NAME_SINGULAR' => '영업기회',
    'LBL_MODULE_TITLE' => '영업기회관리: 홈',
    'LBL_SEARCH_FORM_TITLE' => '영업기회 검색',
    'LBL_VIEW_FORM_TITLE' => '영업기회 상세정보',
    'LBL_LIST_FORM_TITLE' => '영업기회 목록',
    'LBL_OPPORTUNITY_NAME' => '영업기회명',
    'LBL_OPPORTUNITY' => '영업기회',
    'LBL_NAME' => '영업기회명',
    'LBL_INVITEE' => '연락처목록',
    'LBL_CURRENCIES' => '통화목록',
    'LBL_LIST_OPPORTUNITY_NAME' => '이름',
    'LBL_LIST_ACCOUNT_NAME' => '거래처명',
    'LBL_LIST_DATE_CLOSED' => '마감일',
    'LBL_LIST_AMOUNT' => '가능성',
    'LBL_LIST_AMOUNT_USDOLLAR' => '금액',
    'LBL_ACCOUNT_ID' => '거래처 ID',
    'LBL_CURRENCY_RATE' => '환율',
    'LBL_CURRENCY_ID' => '통화 ID',
    'LBL_CURRENCY_NAME' => '통화명',
    'LBL_CURRENCY_SYMBOL' => '통화기호',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => '영업기회 - 통화 변경',
    'UPDATE_DOLLARAMOUNTS' => 'USD로 변경',
    'UPDATE_VERIFY' => '금액 인증',
    'UPDATE_VERIFY_TXT' => '영업기회의 금액항목의 입력값이 숫자로만 기입이되었는지 확인합니다.',
    'UPDATE_FIX' => '합계 수정',
    'UPDATE_FIX_TXT' => '잘못된 구분자를 포함하여 현재 합계값을 수정하였습니다. 모든 수정된 합계는 데이터베이스의 amount_backup 에 백업되어있습니다. 만약 현재 작업을 진행하시고 문제점이 발생한 경우 재실행하시기전에 amount_backup에 저장되어있는 값으로 본원하시고 재실행해주십시오. 기존의 백업된 자료가 잘못된 자료로 덮어질 수 있습니다.',
    'UPDATE_DOLLARAMOUNTS_TXT' => '현재 통화의 환률을 기반으로 미화통화값을 수정합니다. 이 값은 보고서 통계 그래프와 리스트보기의 현재 통화 총합계값을 표시할 때 이용됩니다.',
    'UPDATE_CREATE_CURRENCY' => '새 통화 추가하기:',
    'UPDATE_VERIFY_FAIL' => '자료 인증 실패',
    'UPDATE_VERIFY_CURAMOUNT' => '현재 금액',
    'UPDATE_VERIFY_FIX' => '수정작업을 실행하시는동안 다음이 발생하였습니다:',
    'UPDATE_INCLUDE_CLOSE' => '완료된 레코드 포함',
    'UPDATE_VERIFY_NEWAMOUNT' => '새 금액',
    'UPDATE_VERIFY_NEWCURRENCY' => '새 통화',
    'UPDATE_DONE' => '완료',
    'UPDATE_BUG_COUNT' => '문제가 발견되어 다음과 같이 해결을 시도하였습니다:',
    'UPDATE_BUGFOUND_COUNT' => '문제점이 발견되었습니다:',
    'UPDATE_COUNT' => '레코드가 갱신되었습니다:',
    'UPDATE_RESTORE_COUNT' => '금액이 재정장되었습니다:',
    'UPDATE_RESTORE' => '합계금액 재저장하기',
    'UPDATE_RESTORE_TXT' => '교정작업하는 동안에 백업해두었던 금액으로 복원합니다.',
    'UPDATE_FAIL' => '업데이트에 실패하였습니다 -',
    'UPDATE_NULL_VALUE' => '금액에 빈값을 입력하였습니다. 0 혹은 -로 대체해주세요.',
    'UPDATE_MERGE' => '통화 통합하기',
    'UPDATE_MERGE_TXT' => '여러 통화를 하나의 통화값으로 병합합니다. 현재 병합하려는 통화값을이 사용된 레코드들이 있으면 모든 레코드의 통화가 병합된 통화값으로 변경됩니다. 통화값 병합은 모든 모듈에 적용됩니다.',
    'LBL_ACCOUNT_NAME' => '거래처명',
    'LBL_CURRENCY' => '통화',
    'LBL_DATE_CLOSED' => '예정 마감일',
    'LBL_DATE_CLOSED_TIMESTAMP' => '예상 마감일 타임스탬프',
    'LBL_TYPE' => '종류',
    'LBL_CAMPAIGN' => '캠페인',
    'LBL_NEXT_STEP' => '다음 단계',
    'LBL_LEAD_SOURCE' => '잠재고객 출처',
    'LBL_SALES_STAGE' => '영업단계',
    'LBL_SALES_STATUS' => '상태',
    'LBL_PROBABILITY' => '성공확률 (%):',
    'LBL_DESCRIPTION' => '설명',
    'LBL_DUPLICATE' => '중복 가능성 높은 영업기회',
    'MSG_DUPLICATE' => '이미 존재하는 영업기회와 중복 가능성이 높은 자료를 발견하였습니다. 다음 자료를 확인하시고 중복된 자료가 아닐 경우 저장을 눌러 현재 자료를 새 자료로 저장하시고 그렇지 않을 경우 취소를 누르시면 현재 자료를 저장하지 않고 이전 페이지로 돌아갑니다.',
    'LBL_NEW_FORM_TITLE' => '영업기회 추가하기',
    'LNK_NEW_OPPORTUNITY' => '영업기회 추가하기',
    'LNK_CREATE' => '신규 거래추가하기',
    'LNK_OPPORTUNITY_LIST' => '영업기회 보기',
    'ERR_DELETE_RECORD' => '자료를 삭제하시려면 자료 고유번호가 정확하여야 합니다.',
    'LBL_TOP_OPPORTUNITIES' => '내 주요 영업기회 10개',
    'NTC_REMOVE_OPP_CONFIRMATION' => '영업기회에서 이 연락처를 삭제하시겠습니까?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => '프로젝트에서 이 영업기회를 삭제하시겠습니까?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '영업기회',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '예정된 활동',
    'LBL_HISTORY_SUBPANEL_TITLE' => '완료된 활동',
    'LBL_RAW_AMOUNT' => '초기 금액',
    'LBL_LEADS_SUBPANEL_TITLE' => '관심고객',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '연락처',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '계약',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '프로젝트',
    'LBL_ASSIGNED_TO_NAME' => '담당자',
    'LBL_LIST_ASSIGNED_TO_NAME' => '담당자',
    'LBL_LIST_SALES_STAGE' => '영업단계',
    'LBL_MY_CLOSED_OPPORTUNITIES' => '내 완료된 영업기회',
    'LBL_TOTAL_OPPORTUNITIES' => '총 영업기회 합계',
    'LBL_CLOSED_WON_OPPORTUNITIES' => '수주 성공된 영업기회',
    'LBL_ASSIGNED_TO_ID' => '담당자',
    'LBL_CREATED_ID' => '생성자 ID',
    'LBL_MODIFIED_ID' => '수정자 ID',
    'LBL_MODIFIED_NAME' => '수정자',
    'LBL_CREATED_USER' => '생성자',
    'LBL_MODIFIED_USER' => '수정자',
    'LBL_CAMPAIGN_OPPORTUNITY' => '캠페인 목록',
    'LBL_PROJECT_SUBPANEL_TITLE' => '프로젝트',
    'LABEL_PANEL_ASSIGNMENT' => '배정된 작업',
    'LNK_IMPORT_OPPORTUNITIES' => '영업기회 가져오기',
    'LBL_EDITLAYOUT' => '레이아웃수정' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => '캠페인 ID',
    'LBL_OPPORTUNITY_TYPE' => '영업기회 종류',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => '담당자명',
    'LBL_EXPORT_ASSIGNED_USER_ID' => '담당자 ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => '수정자 ID',
    'LBL_EXPORT_CREATED_BY' => '생성자 ID',
    'LBL_EXPORT_NAME' => '이름',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => '관련 연락처의 이메일',
    'LBL_FILENAME' => '첨부',
    'LBL_PRIMARY_QUOTE_ID' => '기본 견적',
    'LBL_CONTRACTS' => '연락처',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => '계약',
    'LBL_PRODUCTS' => '견적 라인아이템',
    'LBL_RLI' => '매출 라인아이템',
    'LNK_OPPORTUNITY_REPORTS' => '영업기회와 관련된 보고서 보기',
    'LBL_QUOTES_SUBPANEL_TITLE' => '견적',
    'LBL_TEAM_ID' => '팀 ID',
    'LBL_TIMEPERIODS' => '기간',
    'LBL_TIMEPERIOD_ID' => '기간 ID',
    'LBL_COMMITTED' => '배정',
    'LBL_FORECAST' => '예측에 포함',
    'LBL_COMMIT_STAGE' => '커밋 단계',
    'LBL_COMMIT_STAGE_FORECAST' => '예상',
    'LBL_WORKSHEET' => '워크시트',


    'LBL_QUOTE_SUBPANEL_TITLE' => '견적 목록',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => '기회 계층 구조',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => '예상 종료 날짜 필드를 기존  영업선 항목 품목의 최초 또는가장 최근의 가까운 날짜로 생성 된 기록으로 설정',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => '파이프라인 총합은',

    'LBL_OPPORTUNITY_ROLE'=>'영업기회 역할',
    'LBL_NOTES_SUBPANEL_TITLE' => '메모 목록',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => '확인을 클릭해, 모든 예측 데이터를 삭제하고 기회보기를 변경하십시오. 이것을 원하지 않는 경우, 이전 설정으로 돌아가려면 취소를 클릭하십시오.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => '모든 영업선 항목이 폐쇄되고,  적어도 하나의 항목이 승인된다면,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => '기회 판매 단계는 "청산 원"으로 설정되어 있습니다.',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => '모든 영업선 항목이 "비승인" 판매 단계에 있다면,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => '기회 판매 단계는 "비승인"로 설정됩니다.',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => '모든 영업선 항목이 여전히 열려있다면,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => '기회는 최소 고급 판매 단계로 표시됩니다.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}} 모듈은 통해 개별 판매 및 그 판매에 속한 라인 항목을 처음부터 끝까지 추적할 수 있습니다.  각 {{module_name}} 레코드는 {{revenuelineitems_module}} 그룹에 대한 헤더뿐만 아니라 {{quotes_module}}, {{contacts_module}} 등의 다른 중요 레코드 관련사항을 나타냅니다. 각 {{revenuelineitems_singular_module}}은 특정 제품의 예상 매출이며, 관련된 판매 데이터가 포함되어 있습니다. 일반적으로, 각 {{revenuelineitems_singular_module}}는 "Closed Won"이나 "Closed Lost"가 표시될 때까지는 몇 가지 판매 단계에 걸쳐 진행됩니다. {{module_name}} 레코드는 {{revenuelineitems_module}}의 예상 마감일과 금액을 반영합니다. {{plural_module_name}} 및 {{revenuelineitems_module}}은 Sugar의 {{forecasts_singular_module}} 모듈을 통해서도 극대화하여 판매 할당량을 달성하기 위한 주요 작업은 물론 판매 추세를 이해하고 예측할 수 있습니다.',

    // Record View Help Text
    'LBL_HELP_RECORD' => '{{plural_module_name}} 모듈은 통해 개별 판매 및 그 판매에 속한 라인 항목을 처음부터 끝까지 추적할 수 있습니다.  각 {{module_name}} 레코드는 {{revenuelineitems_module}} 그룹에 대한 헤더뿐만 아니라 {{quotes_module}}, {{contacts_module}} 등의 다른 중요 레코드 관련사항을 나타냅니다.

- 개별 필드나 편집 버튼을 클릭하여 이 레코드의 필드를 편집하십시오.
- 하단 왼쪽 패널을 "데이터 보기"로 토글하여, {{revenuelineitems_module}}을 포함한 서브패널 내 다른 레코드들로 연결되는 링크를 수정하거나 보십시오.
- 하단 왼쪽 패널을 "활동 스트림"으로 토글하여, 사용자 코멘트 및 {{activitystream_singular_module}} 내 레코드 변경 내역을 작성하고 보십시오.
- 레코드 이름의 오른쪽에 있는 아이콘들을 이용하여 이 레코드를 팔로우하거나 즐겨찾기 하십시오.
- 추가 실행은 편집 보튼 왼쪽의 드롭다운 실행(Actions)에서 이용 가능합니다.',

    // Create View Help Text
    'LBL_HELP_CREATE' => '{{plural_module_name}} 모듈은개별 판매 및 처음부터 끝까지 그 판매에 속한 라인 항목들을 추적할 수 있습니다. 각 {{module_name}} 기록은 {{revenuelineitems_module}} 그룹에대한헤더뿐만아니라 {{quotes_module}}, {{contacts_module}} 등의다른중요기록관련사항을나타냅니다.

{{module_name}} 만들기:
1. 원하는필드의값을 지정합니다.
- "필수"로표시된 필드는 저장하기 전에완료해야 합니다. 
- 필요한경우추가필드를노출하려면 "더보기"를클릭합니다. 
2. “저장하기”를 클릭하여 새 기록을 완성하고 이전 페이지로 돌아갑니다.
3. 저장후, {{revenuelineitems_module}} 서브패널을사용하여{{module_name}} 에라인 항목들을 추가합니다.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Marketo® 동기화',
    'LBL_MKTO_ID' => 'Marketo 리드 ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => '상위 10 판매 기회',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => '버블 차트에 상위 10 판매 기회 표시.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => '내 기회',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "우리 팀의 기회",
);
