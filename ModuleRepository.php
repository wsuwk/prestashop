<?php
/*
 * Prestashop 1.7 Nettoyer la liste des modules
 * src/Core/Addon/Module/ModuleRepository.php
 */
 
public function getList()
{
    // Affichage seuls les modules physiquement présents sur le serveur
    return $this->getModulesOnDisk();
    /*
    return array_merge(
        $this->getAddonsCatalogModules(),
        $this->getModulesOnDisk()
    );
    */
}
