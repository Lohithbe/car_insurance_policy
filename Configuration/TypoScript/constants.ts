
plugin.tx_carinsurancepolicy_informantiononpolicy {
    view {
        # cat=plugin.tx_carinsurancepolicy_informantiononpolicy/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:car_insurance_policy/Resources/Private/Templates/
        # cat=plugin.tx_carinsurancepolicy_informantiononpolicy/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:car_insurance_policy/Resources/Private/Partials/
        # cat=plugin.tx_carinsurancepolicy_informantiononpolicy/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:car_insurance_policy/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_carinsurancepolicy_informantiononpolicy//a; type=string; label=Default storage PID
        storagePid =
    }
}
