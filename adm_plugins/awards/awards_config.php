<?php
/******************************************************************************
 * Awards
 *
 * Diese Plugin ordnet Mitgliedern Ehrungen/Auszeichnungen/Lehrgänge zu
 * 
 * https://github.com/sistlind/awards
 *                  
 *****************************************************************************/

// Soll die Möglichkeit Auszeichnungen direkt an alle Mitglieder einer Rolle zuzuweisen zur Verfügung stehen?
// Should the possibility to allocate Awards to all members of a role be available?
// 1 = Die Zuweisungen von Auszeichnungen für komplette Rollen ist aktiviert
// 1 = The allocation of Awards to all members of a role is enabled
// 0 = (Default) Die Zuweisung von Auszeichnungen für komplette Rollen ist deaktiviert
// 0 = (Default) The allocation of Awards to all members of a role is disabled
$plg_role_enabled = 0;

// Soll der Leiter der Rolle Standardmäßig ebenfalls die Auszeichnung erhalten? (kann manuell per Checkbox trotzdem noch geändert werden)
// Should the Leader of a Role get the Award as well by default?
// 0 = Die Checkbox für Leiter ist per Standard deaktiviert
// 0 = The Checkbox for the Role-Leader(s) is unchecked
// 1 = (Default) Die Checkbox für Leiter ist per Standard aktiviert
// 1 = (Default) The Checkbox for the Role-Leader(s) is checked
$plg_leader_checked = 0;
 
// Sollen nur Rollen einer bestimmten Kategorie zur Verfügung stehen?
// Are there only Roles of a special Categorie available in the drop-down-list?
// 0 = (Default) Alle Rollen stehen in der Auswahl zur Verfügung
// 0 = (Default) All Roles are shown in the drop-down-list
// cat_id = Nur die Rollen der entsprechenden Kategorie werden angezeigt
// cat_id = Only the Roles of the given Categorie are shown in the drop-down-list
$plg_cat_id = 0;

// Debug-Modus aktiv?
// Debug-mode active?
// 0 = (Default) Debug-Modus deaktiviert
// 0 = (Default) Debug-mode is not active
// 1 = Debug-Ausgaben sind aktiv
// 1 = Debug-mode is active
$plg_debug_enabled = 0;


?>
