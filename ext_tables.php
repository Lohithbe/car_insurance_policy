<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SmartPAYD.CarInsurancePolicy',
            'Informantiononpolicy',
            'InformationOnPolicy'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('car_insurance_policy', 'Configuration/TypoScript', 'CarInsurancePolicy');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_carinsurancepolicy_domain_model_policy', 'EXT:car_insurance_policy/Resources/Private/Language/locallang_csh_tx_carinsurancepolicy_domain_model_policy.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_carinsurancepolicy_domain_model_policy');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_carinsurancepolicy_domain_model_vehicle', 'EXT:car_insurance_policy/Resources/Private/Language/locallang_csh_tx_carinsurancepolicy_domain_model_vehicle.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_carinsurancepolicy_domain_model_vehicle');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_carinsurancepolicy_domain_model_bill', 'EXT:car_insurance_policy/Resources/Private/Language/locallang_csh_tx_carinsurancepolicy_domain_model_bill.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_carinsurancepolicy_domain_model_bill');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_carinsurancepolicy_domain_model_driver', 'EXT:car_insurance_policy/Resources/Private/Language/locallang_csh_tx_carinsurancepolicy_domain_model_driver.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_carinsurancepolicy_domain_model_driver');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_carinsurancepolicy_domain_model_user', 'EXT:car_insurance_policy/Resources/Private/Language/locallang_csh_tx_carinsurancepolicy_domain_model_user.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_carinsurancepolicy_domain_model_user');

    }
);
