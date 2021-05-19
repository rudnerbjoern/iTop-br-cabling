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
    'Class:GenericPhysCommConnector' => 'Stecker Typ',
    'Class:GenericPhysCommConnector/Attribute:description' => 'Beschreibung',
    'Class:GenericPhysCommConnector/Attribute:genericcommphysinterface_list' => 'Schnittstellen mit diesem Stecker',
    'Class:GenericPhysCommConnector/UniquenessRule:name' => 'Es gibt schon einen Stecker mit diesem Namen',
    'Class:GenericCommProtocol' => 'Verbindungsprotokoll',
    'Class:GenericCommProtocol/Attribute:description' => 'Beschreibung',
    'Class:GenericCommProtocol/Attribute:genericcomminterface_list' => 'Schnittstellen mit diesem Protokoll',
    'Class:GenericCommProtocol/UniquenessRule:name' => 'Es gibt schon ein Protokoll mit diesem Namen',
    'Class:GenericCommSpeed' => 'Interface Geschwindigkeit',
    'Class:GenericCommSpeed/Attribute:name' => 'Human readable interface speed',
    'Class:GenericCommSpeed/Attribute:name+' => 'This field is read only, and calculated from the speed in bit per second',
    'Class:GenericCommSpeed/Attribute:bitspeed' => 'interface speed in bit per second',
    'Class:GenericCommSpeed/Attribute:description' => 'Beschreibung',
    'Class:GenericCommSpeed/Attribute:genericcomminterface_list' => 'Interfaces running at this speed',
    'Class:GenericCommSpeed/UniquenessRule:bitspeed' => 'That speed is already defined',
    'Class:VirtualCommRedundancy' => 'Redundanzmodus',
    'Class:VirtualCommRedundancy/Attribute:name' => 'Functional redundancy name',
    'Class:VirtualCommRedundancy/Attribute:name+' => 'This is the kind of protocol used by the device to ensure redundancy (LACP, Active/Standby...)',
    'Class:VirtualCommRedundancy/Attribute:description' => 'Beschreibung',
    'Class:VirtualCommRedundancy/Attribute:virtualcommredundancy_list' => 'Virtual interfaces using this redundancy protocol',
    'Class:VirtualCommRedundancy/UniquenessRule:name' => 'There is already a redundancy mode with that name',
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
