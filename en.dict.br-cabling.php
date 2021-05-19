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

Dict::Add('EN US', 'English', 'English', array(
    'Class:GenericPhysCommConnector' => 'Connector Type',
    'Class:GenericPhysCommConnector+' => 'This is the form of the connector (RJ-45, Fiber LC...)',
    'Class:GenericPhysCommConnector/Attribute:description' => 'Description',
    'Class:GenericPhysCommConnector/Attribute:genericcommphysinterface_list' => 'Interfaces with this connector',
    'Class:GenericPhysCommConnector/UniquenessRule:name' => 'There is already a connector type with that name',
    'Class:GenericCommProtocol' => 'Connection Protocol',
    'Class:GenericCommProtocol+' => 'This is the low level protocol of communication between the devices on this interface (also known as \'Layer Two protocol\' for network connections)',
    'Class:GenericCommProtocol/Attribute:description' => 'Description',
    'Class:GenericCommProtocol/Attribute:genericcomminterface_list' => 'Interfaces using this protocol',
    'Class:GenericCommProtocol/UniquenessRule:name' => 'There is already a connection protocol with that name',
    'Class:GenericCommSpeed' => 'Interface Speed',
    'Class:GenericCommSpeed/Attribute:name' => 'Human readable interface speed',
    'Class:GenericCommSpeed/Attribute:name+' => 'This field is read only, and calculated from the speed in bit per second',
    'Class:GenericCommSpeed/Attribute:bitspeed' => 'interface speed in bit per second',
    'Class:GenericCommSpeed/Attribute:description' => 'Description',
    'Class:GenericCommSpeed/Attribute:genericcomminterface_list' => 'Interfaces running at this speed',
    'Class:GenericCommSpeed/UniquenessRule:bitspeed' => 'That speed is already defined',
    'Class:VirtualCommRedundancy' => 'Redundancy Mode',
    'Class:VirtualCommRedundancy/Attribute:name' => 'Functional redundancy name',
    'Class:VirtualCommRedundancy/Attribute:name+' => 'This is the kind of protocol used by the device to ensure redundancy (LACP, Active/Standby...)',
    'Class:VirtualCommRedundancy/Attribute:description' => 'Description',
    'Class:VirtualCommRedundancy/Attribute:virtualcommredundancy_list' => 'Virtual interfaces using this redundancy protocol',
    'Class:VirtualCommRedundancy/UniquenessRule:name' => 'There is already a redundancy mode with that name',
    'Class:PatchCable' => 'Patch Cable',
    'Class:PatchCable:baseinfo' => 'General Information',
    'Class:PatchCable:sidea' => 'Side \'A\'',
    'Class:PatchCable:sideb' => 'Side \'B\'',
    'Class:PatchCable/Attribute:location_id' => 'Location',
    'Class:PatchCable/Attribute:location_name' => 'Location name',
    'Class:PatchCable/Attribute:patchcablecolor_id' => 'Color',
    'Class:PatchCable/Attribute:patchcablecolor_name' => 'Color name',
    'Class:PatchCable/Attribute:patchcabletype_id' => 'Cable type',
    'Class:PatchCable/Attribute:patchcabletype_name' => 'Cable type name',
    'Class:PatchCable/Attribute:length' => 'Length',
    'Class:PatchCable/Attribute:interfaceconnector_a_id' => 'Connector type on side A',
    'Class:PatchCable/Attribute:interfaceconnector_a_name' => 'Connector type on side A name',
    'Class:PatchCable/Attribute:remote_a_ci_id' => '\'A\' side connected to device',
    'Class:PatchCable/Attribute:remote_a_ci_name' => '\'A\' side connected to device name',
    'Class:PatchCable/Attribute:remote_a_interface_id' => 'Interface on \'A\' side device',
    'Class:PatchCable/Attribute:remote_a_interface_id_finalclass_recall' => 'Device type on \'A\' side',
    'Class:PatchCable/Attribute:remote_a_interface_name' => 'Interface on \'A\' side device name',
    'Class:PatchCable/Attribute:interfaceconnector_b_id' => 'Connector type on side B',
    'Class:PatchCable/Attribute:interfaceconnector_b_name' => 'Connector type on side B name',
    'Class:PatchCable/Attribute:remote_b_ci_id' => '\'B\' side connected to device',
    'Class:PatchCable/Attribute:remote_b_ci_name' => '\'B\' side connected to device name',
    'Class:PatchCable/Attribute:remote_b_interface_id' => 'Interface on \'B\' side device',
    'Class:PatchCable/Attribute:remote_b_interface_id_finalclass_recall' => 'Device type on \'B\' side',
    'Class:PatchCable/Attribute:remote_b_interface_name' => 'Interface on \'B\' side device name',
    'Class:PatchCable/Attribute:straight-crossed' => 'Straight or Crossed Cable',
    'Class:PatchCable/Attribute:straight-crossed/Value:straight' => 'Straight',
    'Class:PatchCable/Attribute:straight-crossed/Value:crossed' => 'Crossed',
));

//
// Class: PatchCableColor
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:PatchCableColor' => 'Patch Cable Color',
    'Class:PatchCableColor/Attribute:name' => 'Name',
    'Class:PatchCableColor/Attribute:comment' => 'Comment',
    'Class:PatchCableColor/Attribute:patchcable_list' => 'Patch Cable List',
));

//
// Class: PatchCableType
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:PatchCableType' => 'Patch Cable Type',
    'Class:PatchCableType/Attribute:name' => 'Name',
    'Class:PatchCableType/Attribute:comment' => 'Comment',
    'Class:PatchCableType/Attribute:patchcable_list' => 'Patch Cable List',
));

//
// Class: PhysicalInterface
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:PhysicalInterface:patchcable' => 'Patch Cable',
    'Class:PhysicalInterface/Attribute:patchcable_id' => 'Patch Cable',
    'Class:PhysicalInterface/Attribute:patchcable_name' => 'Patch Cable Name',
    'Class:PhysicalInterface/Attribute:patchcable_remote_port_id' => 'Patch Cable Remote Port',
    'Class:PhysicalInterface/Attribute:patchcable_remote_port_name' => 'Patch Cable Remote Port Name',
));

//
// Class: PatchPanel
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:PatchPanel' => 'Patch Panel',
    'Class:PatchPanel+' => '',
    'Class:PatchPanel/Attribute:patchpanelport_list' => 'Ports',
    'Class:PatchPanel/Attribute:patchpanelport_list+' => '',
));

//
// Class: PatchPanelPort
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:PatchPanelPort' => 'Patch Panel Port',
    'Class:PatchPanelPort/Attribute:connectableci_id' => 'Patch Panel this port belongs',
    'Class:PatchPanelPort/Attribute:connectableci_name' => 'Name of Patch Panel this port belongs',
    'Class:PatchPanelPort/Attribute:remotebackpanelport_id' => 'Connected to Remote Patch Panel Port',
    'Class:PatchPanelPort/Attribute:remotebackpanelport_name' => 'Connected to Remote Patch Panel Port Name',
));
