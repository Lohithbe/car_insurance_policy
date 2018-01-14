<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SmartPAYD.CarInsurancePolicy',
            'Informantiononpolicy',
            [
                'Car' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Policy' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    informantiononpolicy {
                        iconIdentifier = car_insurance_policy-plugin-informantiononpolicy
                        title = LLL:EXT:car_insurance_policy/Resources/Private/Language/locallang_db.xlf:tx_car_insurance_policy_informantiononpolicy.name
                        description = LLL:EXT:car_insurance_policy/Resources/Private/Language/locallang_db.xlf:tx_car_insurance_policy_informantiononpolicy.description
                        tt_content_defValues {
                            CType = list
                            list_type = carinsurancepolicy_informantiononpolicy
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'car_insurance_policy-plugin-informantiononpolicy',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:car_insurance_policy/Resources/Public/Icons/user_plugin_informantiononpolicy.svg']
			);
		
    }
);
