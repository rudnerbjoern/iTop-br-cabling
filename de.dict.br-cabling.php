<?php

/**
 * @copyright   Copyright (C) 2021 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-04-15
 *
 * Localized data
 */

//
// Class: PatchCable
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PatchCable' => 'Patchkabel',
    'Class:PatchCable:baseinfo' => 'Allgemeine Informationen',
    'Class:PatchCable:sidea' => 'Seite \'A\'',
    'Class:PatchCable:sideb' => 'Seite \'B\'',
    'Class:PatchCable/Attribute:location_id' => 'Standort',
    'Class:PatchCable/Attribute:location_name' => 'Standort Name',
    'Class:PatchCable/Attribute:patchcablecolor_id' => 'Farbe',
    'Class:PatchCable/Attribute:patchcablecolor_name' => 'Farbe Name',
    'Class:PatchCable/Attribute:patchcabletype_id' => 'Kabelart',
    'Class:PatchCable/Attribute:patchcabletype_name' => 'Kabelart Name',
    'Class:PatchCable/Attribute:length' => 'Länge',
    'Class:PatchCable/Attribute:interfaceconnector_a_id' => 'Anschluss Seite A',
    'Class:PatchCable/Attribute:interfaceconnector_a_name' => 'Anschluss Seite A Name',
    'Class:PatchCable/Attribute:remote_a_ci_id' => 'Seite \'A\' verbunden mit CI',
    'Class:PatchCable/Attribute:remote_a_ci_name' => 'Seite \'A\' verbunden mit CI Name',
    'Class:PatchCable/Attribute:remote_a_interface_id' => 'Seite \'A\' verbunden mit Port',
    'Class:PatchCable/Attribute:remote_a_interface_id_finalclass_recall' => 'CI Typ an Seite \'A\'',
    'Class:PatchCable/Attribute:remote_a_interface_name' => 'Seite \'A\' verbunden mit Port Name',
    'Class:PatchCable/Attribute:interfaceconnector_b_id' => 'Anschluss Seite B',
    'Class:PatchCable/Attribute:interfaceconnector_b_name' => 'Anschluss Seite B Name',
    'Class:PatchCable/Attribute:remote_b_ci_id' => 'Seite \'B\' verbunden mit CI',
    'Class:PatchCable/Attribute:remote_b_ci_name' => 'Seite \'B\' verbunden mit CI Name',
    'Class:PatchCable/Attribute:remote_b_interface_id' => 'Seite \'B\' verbunden mit Port',
    'Class:PatchCable/Attribute:remote_b_interface_id_finalclass_recall' => 'CI Typ an Seite \'B\'',
    'Class:PatchCable/Attribute:remote_b_interface_name' => 'Seite \'B\' verbunden mit Port Name',
    'Class:PatchCable/Attribute:straight-crossed' => 'Normal oder gekreuztes Kabel',
    'Class:PatchCable/Attribute:straight-crossed/Value:straight' => 'Normal',
    'Class:PatchCable/Attribute:straight-crossed/Value:crossed' => 'Gekreuzt',
));

//
// Class: PatchCableColor
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PatchCableColor' => 'Patchkabel Farbe',
    'Class:PatchCableColor/Attribute:name' => 'Name',
    'Class:PatchCableColor/Attribute:comment' => 'Anmerkung',
    'Class:PatchCableColor/Attribute:patchcable_list' => 'Patchkabel Liste',
));

//
// Class: PatchCableType
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PatchCableType' => 'Patchkabel Art',
    'Class:PatchCableType/Attribute:name' => 'Name',
    'Class:PatchCableType/Attribute:comment' => 'Anmerkung',
    'Class:PatchCableType/Attribute:patchcable_list' => 'Patchkabel Liste',
));

//
// Class: PhysicalInterface
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PhysicalInterface:patchcable' => 'Patchkabel',
    'Class:PhysicalInterface/Attribute:patchcable_id' => 'Patchkabel id',
    'Class:PhysicalInterface/Attribute:patchcable_name' => 'Patchkabel Name',
    'Class:PhysicalInterface/Attribute:patchcable_remote_port_id' => 'Patchkabel Remote Port',
    'Class:PhysicalInterface/Attribute:patchcable_remote_port_name' => 'Patchkabel Remote Port Name',
));

//
// Class: PatchPanel
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PatchPanel' => 'Patchpanel',
    'Class:PatchPanel+' => '',
    'Class:PatchPanel/Attribute:patchpanelport_list' => 'Ports',
    'Class:PatchPanel/Attribute:patchpanelport_list+' => '',
));

//
// Class: PatchPanelPort
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PatchPanelPort' => 'Patchpanel Port',
    'Class:PatchPanelPort/Attribute:connectableci_id' => 'Patchpanel zu diesem Port',
    'Class:PatchPanelPort/Attribute:connectableci_name' => 'Patchpanels zu diesem Port Name',
    'Class:PatchPanelPort/Attribute:remotebackpanelport_id' => 'Verbidnung zu anderem Patchpanel Port',
    'Class:PatchPanelPort/Attribute:remotebackpanelport_name' => 'Verbidnung zu anderem Patchpanel Port Name',
));
