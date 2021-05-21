<?php

/**
 * @copyright   Copyright (C) 2021 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-04-15
 *
 * Localized data
 */

//
// Typology Information
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:InterfaceSpeed/Attribute:bitspeed' => 'interface speed in bit per second',
    'Class:InterfaceSpeed/UniquenessRule:bitspeed' => 'That speed is already defined',
    'Class:PatchCableType' => 'Patch Cable Type',
    'Class:PatchCableType/Attribute:name' => 'Name',
    'Class:PatchCableType/Attribute:description' => 'Description',
    'Class:PatchCableType/Attribute:patchcable_list' => 'Patch Cable List',
    'Class:PatchCableColor' => 'Patch Cable Color',
    'Class:PatchCableColor/Attribute:name' => 'Name',
    'Class:PatchCableColor/Attribute:description' => 'Description',
    'Class:PatchCableColor/Attribute:patchcable_list' => 'Patch Cable List',
));

//
// Server Virtual Interfaces
//
Dict::Add('EN US', 'English', 'English', array(
    'Class:Server/Attribute:servervirtualinterfaces_list' => 'Virtual interfaces',
    'Class:Server/Attribute:servervirtualinterfaces_list+' => 'All the virtual interfaces configured onthis server',
    'Class:VLAN/Attribute:servervirtualinterfaces_list' => 'Virtual server interfaces',
    'Class:VLAN/Attribute:servervirtualinterfaces_list+' => 'List of all virtual server network interfaces attached to the VLAN',
    'Class:ServerVirtualInterface' => 'Server Virtual Interface',
    'Class:ServerVirtualInterface+' => '',
    'Class:ServerVirtualInterface/Attribute:server_id' => 'Server',
    'Class:ServerVirtualInterface/Attribute:vlans_list' => 'VLANs',
    'Class:ServerVirtualInterface/Attribute:vrfs_list' => 'VRFs',
    'Class:ServerVirtualInterface/Attribute:status' => 'Status',
    'Class:ServerVirtualInterface/Attribute:status/Value:active' => 'Active',
    'Class:ServerVirtualInterface/Attribute:status/Value:inactive' => 'Inactive',

    'Class:lnkServerVirtualInterfaceToVLAN' => 'Link Server Virtual Interface / VLAN',
    'Class:lnkServerVirtualInterfaceToVLAN/Attribute:servervirtualinterface_id' => 'Server virtual interface',
    'Class:lnkServerVirtualInterfaceToVLAN/Attribute:servervirtualinterface_name' => 'Server virtual interface name',
    'Class:lnkServerVirtualInterfaceToVLAN/Attribute:servervirtualinterface_device_id' => 'Server',
    'Class:lnkServerVirtualInterfaceToVLAN/Attribute:servervirtualinterface_device_name' => 'Server name',
    'Class:lnkServerVirtualInterfaceToVLAN/Attribute:vlan_id' => 'VLAN',
    'Class:lnkServerVirtualInterfaceToVLAN/Attribute:vlan_tag' => 'Tag',

    'Class:lnkServerVirtualInterfaceToVRF' => 'Link Server Virtual Interface / VRF',
    'Class:lnkServerVirtualInterfaceToVRF/Attribute:servervirtualinterface_id' => 'Server virtual interface',
    'Class:lnkServerVirtualInterfaceToVRF/Attribute:servervirtualinterface_name' => 'Server virtual interface name',
    'Class:lnkServerVirtualInterfaceToVRF/Attribute:servervirtualinterface_device_id' => 'Server',
    'Class:lnkServerVirtualInterfaceToVRF/Attribute:physicalinterface_device_name' => 'Server name',
    'Class:lnkServerVirtualInterfaceToVRF/Attribute:vrf_id' => 'VRF',
    'Class:lnkServerVirtualInterfaceToVRF/Attribute:vfr_name' => 'Name',

    'Class:lnkPhysicalInterfaceToServerVirtualInterface' => 'Link Physical Interface / Server Virtual interface',
    'Class:lnkPhysicalInterfaceToServerVirtualInterface/Attribute:physicalinterface_id' => 'Physical interface',
    'Class:lnkPhysicalInterfaceToServerVirtualInterface/Attribute:servervirtualinterface_id' => 'Server virtual interface',
    'Class:lnkPhysicalInterfaceToServerVirtualInterface/Attribute:servervirtualinterface_id+' => '',
));

//
// Class: PatchCable
//
Dict::Add('EN US', 'English', 'English', array(
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
