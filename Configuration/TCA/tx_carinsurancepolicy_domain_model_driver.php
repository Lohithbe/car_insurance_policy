<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:car_insurance_policy/Resources/Private/Language/locallang_db.xlf:tx_carinsurancepolicy_domain_model_driver',
        'label' => 'policy_i_d',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'policy_i_d,first_name,last_name,email_i_d,phone_num,license_number,license_expires,user',
        'iconfile' => 'EXT:car_insurance_policy/Resources/Public/Icons/tx_carinsurancepolicy_domain_model_driver.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, policy_i_d, first_name, last_name, email_i_d, phone_num, license_number, license_expires, user',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, policy_i_d, first_name, last_name, email_i_d, phone_num, license_number, license_expires, user, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_carinsurancepolicy_domain_model_driver',
                'foreign_table_where' => 'AND tx_carinsurancepolicy_domain_model_driver.pid=###CURRENT_PID### AND tx_carinsurancepolicy_domain_model_driver.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'policy_i_d' => [
            'exclude' => false,
            'label' => 'LLL:EXT:car_insurance_policy/Resources/Private/Language/locallang_db.xlf:tx_carinsurancepolicy_domain_model_driver.policy_i_d',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'first_name' => [
            'exclude' => false,
            'label' => 'LLL:EXT:car_insurance_policy/Resources/Private/Language/locallang_db.xlf:tx_carinsurancepolicy_domain_model_driver.first_name',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required'
            ]
        ],
        'last_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_insurance_policy/Resources/Private/Language/locallang_db.xlf:tx_carinsurancepolicy_domain_model_driver.last_name',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'email_i_d' => [
            'exclude' => false,
            'label' => 'LLL:EXT:car_insurance_policy/Resources/Private/Language/locallang_db.xlf:tx_carinsurancepolicy_domain_model_driver.email_i_d',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email,required'
            ]
        ],
        'phone_num' => [
            'exclude' => false,
            'label' => 'LLL:EXT:car_insurance_policy/Resources/Private/Language/locallang_db.xlf:tx_carinsurancepolicy_domain_model_driver.phone_num',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'license_number' => [
            'exclude' => false,
            'label' => 'LLL:EXT:car_insurance_policy/Resources/Private/Language/locallang_db.xlf:tx_carinsurancepolicy_domain_model_driver.license_number',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'license_expires' => [
            'exclude' => false,
            'label' => 'LLL:EXT:car_insurance_policy/Resources/Private/Language/locallang_db.xlf:tx_carinsurancepolicy_domain_model_driver.license_expires',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date,required',
                'default' => '0000-00-00'
            ],
        ],
        'user' => [
            'exclude' => true,
            'label' => 'LLL:EXT:car_insurance_policy/Resources/Private/Language/locallang_db.xlf:tx_carinsurancepolicy_domain_model_driver.user',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_carinsurancepolicy_domain_model_user',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
    
    ],
];
