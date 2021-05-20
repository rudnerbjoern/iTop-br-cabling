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
    // --- GenericPhysCommConnector
    'Class:GenericCommProtocol' => 'Connection Protocol',
    'Class:GenericCommProtocol+' => 'This is the low level protocol of communication between the devices on this interface (also known as \'Layer Two protocol\' for network connections)',
    'Class:GenericCommProtocol/Attribute:description' => 'Description',
    'Class:GenericCommProtocol/Attribute:genericcomminterface_list' => 'Interfaces using this protocol',
    'Class:GenericCommProtocol/UniquenessRule:name' => 'There is already a connection protocol with that name',
    // --- GenericCommSpeed
    'Class:GenericCommSpeed' => 'Interface Speed',
    'Class:GenericCommSpeed/Attribute:name' => 'Human readable interface speed',
    'Class:GenericCommSpeed/Attribute:name+' => 'This field is read only, and calculated from the speed in bit per second',
    'Class:GenericCommSpeed/Attribute:bitspeed' => 'interface speed in bit per second',
    'Class:GenericCommSpeed/Attribute:description' => 'Description',
    'Class:GenericCommSpeed/Attribute:genericcomminterface_list' => 'Interfaces running at this speed',
    'Class:GenericCommSpeed/UniquenessRule:bitspeed' => 'That speed is already defined',
    // --- GenericPhysCommConnector - not implemented yet
    //'Class:GenericPhysCommConnector' => 'Connector Type',
    //'Class:GenericPhysCommConnector+' => 'This is the form of the connector (RJ-45, Fiber LC...)',
    //'Class:GenericPhysCommConnector/Attribute:description' => 'Description',
    //'Class:GenericPhysCommConnector/Attribute:genericcommphysinterface_list' => 'Interfaces with this connector',
    //'Class:GenericPhysCommConnector/UniquenessRule:name' => 'There is already a connector type with that name',
    // --- VirtualCommRedundancy
    'Class:VirtualCommRedundancy' => 'Redundancy Mode',
    'Class:VirtualCommRedundancy/Attribute:name' => 'Functional redundancy name',
    'Class:VirtualCommRedundancy/Attribute:name+' => 'This is the kind of protocol used by the device to ensure redundancy (LACP, Active/Standby...)',
    'Class:VirtualCommRedundancy/Attribute:description' => 'Description',
    'Class:VirtualCommRedundancy/Attribute:virtualcommredundancy_list' => 'Virtual interfaces using this redundancy protocol',
    'Class:VirtualCommRedundancy/UniquenessRule:name' => 'There is already a redundancy mode with that name',
));

//
// Classes: Generic
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:GenericCommLayer1Interface' => 'Connection General Interface - Layer 1 part',
    'Class:GenericCommLayer1Interface/Attribute:name' => 'Name',
    'Class:GenericCommLayer1Interface/Attribute:comment' => 'Comments',
    'Class:GenericCommLayer1Interface/Attribute:connectableci_id' => 'Device containing this interface',
    'Class:GenericCommLayer1Interface/Attribute:connectableci_name' => 'Device containing this interface name',
    'Class:GenericCommLayer1Interface/Attribute:connectableci_id_finalclass_recall' => 'Device Type',

    'Class:GenericCommInterface' => 'Connection General Interface',
    'Class:GenericCommInterface/Attribute:physicaladdress' => 'Physical Layer Address',
    'Class:GenericCommInterface/Attribute:physicaladdress+' => 'Something like a MAC address, a WWN. In Networking, a \'Layer two\' address',
    'Class:GenericCommInterface/Attribute:commproto_id' => 'Connection Protocol',
    'Class:GenericCommInterface/Attribute:commproto_name' => 'Connection Protocol Name',
    'Class:GenericCommInterface/Attribute:genericcommvirtinterface_list' => 'Virtual interfaces bound to this interface',
    'Class:GenericCommInterface/Attribute:humanspeed_id' => 'Interface speed',
    'Class:GenericCommInterface/Attribute:humanspeed_speed' => 'Interface speed name',
    'Class:GenericCommInterface/Attribute:connectabledevice_id' => 'Local Device Name',

    'Class:GenericCommPhysInterface' => 'Physical Connection Interface',
    'Class:GenericCommPhysInterface/Attribute:physcommtype_id' => 'Physical connector type',
    'Class:GenericCommPhysInterface/Attribute:physcommtype_name' => 'Physical connector type name',
    'Class:GenericCommPhysInterface/Attribute:connected_to_device_id' => 'Connected to remote device',
    'Class:GenericCommPhysInterface/Attribute:connected_to_device_name' => 'Connected to remote device name',
    'Class:GenericCommPhysInterface/Attribute:connected_to_device_id_finalclass_recall' => 'Remote device type',
    'Class:GenericCommPhysInterface/Attribute:connected_to_id' => 'Interface connected on remote device',
    'Class:GenericCommPhysInterface/Attribute:connected_to_name' => 'Interface connected on remote device name',
    'Class:GenericCommPhysInterface/Attribute:connection_impact' => 'Impacts other side or depends on it?',
    'Class:GenericCommPhysInterface/Attribute:connection_impact+' => 'If the loss of this connection impacts me, I depend on it. If the loss impacts the other side, I impact',
    'Class:GenericCommPhysInterface/Attribute:connection_impact/Value:depends' => 'Depends on',
    'Class:GenericCommPhysInterface/Attribute:connection_impact/Value:impacts' => 'Impacts',

    'Class:GenericCommVirtInterface' => 'Virtual Connection Interface',
    'Class:GenericCommVirtInterface/Attribute:virtualcommredundancy_id' => 'Redundancy kind',
    'Class:GenericCommVirtInterface/Attribute:virtualcommredundancy_id+' => 'Select the Redundancy kind used on this virtual interface, if any',
    'Class:GenericCommVirtInterface/Attribute:virtualcommredundancy_name' => 'Redundancy kind name',
    'Class:GenericCommVirtInterface/Attribute:virtualcommredundancy_name+' => 'Select the Redundancy kind used on this virtual interface, if any',
    'Class:GenericCommVirtInterface/Attribute:virttogenericredundancy' => 'High Availability',
    'Class:GenericCommVirtInterface/Attribute:virttogenericredundancy/disabled' => 'The virtual Interface is up if all parent interfaces are up',
    'Class:GenericCommVirtInterface/Attribute:virttogenericredundancy/count' => 'The virtual Interface is up if at least %1$s parent interfaces are up',
    'Class:GenericCommVirtInterface/Attribute:virttogenericredundancy/percent' => 'The virtual Interface is up if at least %1$s %% of parent interfaces are up',
    'Class:GenericCommVirtInterface/Attribute:genericcomminterface_list' => 'Parent Interfaces',

    'Class:lnkGenericCommInterfaceToGenericCommVirtInterface' => 'Link Generic Comm Interface to Virtual Comm Interface',
    'Class:lnkGenericCommInterfaceToGenericCommVirtInterface/Attribute:genericcomminterface_id' => 'Generic Interface',
    'Class:lnkGenericCommInterfaceToGenericCommVirtInterface/Attribute:genericcomminterface_id_friendlyname' => 'Generic Interface Name',
    'Class:lnkGenericCommInterfaceToGenericCommVirtInterface/Attribute:genericcommvirtinterface_id' => 'Virtual Interface',
    'Class:lnkGenericCommInterfaceToGenericCommVirtInterface/Attribute:genericvirtcomminterface_id_friendlyname' => 'Virtual Interface Name',

    'Class:GenericCommDeviceType' => 'Generic Connection Device Category',
    'Class:GenericCommDeviceType/Attribute:name' => 'Category Name',
    'Class:GenericCommDeviceType/Attribute:comment' => 'Comments',
    'Class:GenericCommDeviceType/Attribute:genericcommdevices_list' => 'Devices of this category',
    'Class:GenericCommDeviceType/UniquenessRule:name' => 'There is already a device category with that name',

    'Class:GenericCommDevice' => 'Generic Connection Device',
    'Class:GenericCommDevice/Attribute:name' => 'Device Name',
    'Class:GenericCommDevice/Attribute:genericcommdevicetype_id' => 'Device category',
    'Class:GenericCommDevice/Attribute:genericcommdevicetype_name' => 'Device category name',
    'Class:GenericCommDevice/Attribute:iosversion_id' => 'OS / Firmware version',
    'Class:GenericCommDevice/Attribute:iosversion_name' => 'OS / Firmware version name',
    'Class:ConnectableCI/Attribute:genericcommphysinterface_list' => 'Physical Connection Interface(s)',
    'Class:ConnectableCI/Attribute:genericcommvirtinterface_list' => 'Virtual Connection Interface(s)',

    'Class:lnkConnectableCIToConnectableCI0' => 'Link Generic Connected Impactor / impacted CI Table 0',
    'Class:lnkConnectableCIToConnectableCI0/Attribute:impactorci_id' => 'Impactor Connected CI',
    'Class:lnkConnectableCIToConnectableCI0/Attribute:dependantci_id' => 'Dependant Connected CI',
    'Class:lnkConnectableCIToConnectableCI1' => 'Link Generic Connected Impactor / impacted CI Table 1',
    'Class:lnkConnectableCIToConnectableCI1/Attribute:impactorci_id' => 'Impactor Connected CI',
    'Class:lnkConnectableCIToConnectableCI1/Attribute:dependantci_id' => 'Dependant Connected CI',
    'Class:lnkConnectableCIToConnectableCI2' => 'Link Generic Connected Impactor / impacted CI Table 2',
    'Class:lnkConnectableCIToConnectableCI2/Attribute:impactorci_id' => 'Impactor Connected CI',
    'Class:lnkConnectableCIToConnectableCI2/Attribute:dependantci_id' => 'Dependant Connected CI',
    'Class:lnkConnectableCIToConnectableCI3' => 'Link Generic Connected Impactor / impacted CI Table 3',
    'Class:lnkConnectableCIToConnectableCI3/Attribute:impactorci_id' => 'Impactor Connected CI',
    'Class:lnkConnectableCIToConnectableCI3/Attribute:dependantci_id' => 'Dependant Connected CI',
    'Class:lnkConnectableCIToConnectableCI4' => 'Link Generic Connected Impactor / impacted CI Table 4',
    'Class:lnkConnectableCIToConnectableCI4/Attribute:impactorci_id' => 'Impactor Connected CI',
    'Class:lnkConnectableCIToConnectableCI4/Attribute:dependantci_id' => 'Dependant Connected CI',
    'Class:lnkConnectableCIToConnectableCI5' => 'Link Generic Connected Impactor / impacted CI Table 5',
    'Class:lnkConnectableCIToConnectableCI5/Attribute:impactorci_id' => 'Impactor Connected CI',
    'Class:lnkConnectableCIToConnectableCI5/Attribute:dependantci_id' => 'Dependant Connected CI',
    'Class:lnkConnectableCIToConnectableCI6' => 'Link Generic Connected Impactor / impacted CI Table 6',
    'Class:lnkConnectableCIToConnectableCI6/Attribute:impactorci_id' => 'Impactor Connected CI',
    'Class:lnkConnectableCIToConnectableCI6/Attribute:dependantci_id' => 'Dependant Connected CI',
    'Class:lnkConnectableCIToConnectableCI7' => 'Link Generic Connected Impactor / impacted CI Table 7',
    'Class:lnkConnectableCIToConnectableCI7/Attribute:impactorci_id' => 'Impactor Connected CI',
    'Class:lnkConnectableCIToConnectableCI7/Attribute:dependantci_id' => 'Dependant Connected CI',
    'Class:lnkConnectableCIToConnectableCI8' => 'Link Generic Connected Impactor / impacted CI Table 8',
    'Class:lnkConnectableCIToConnectableCI8/Attribute:impactorci_id' => 'Impactor Connected CI',
    'Class:lnkConnectableCIToConnectableCI8/Attribute:dependantci_id' => 'Dependant Connected CI',
    'Class:lnkConnectableCIToConnectableCI9' => 'Link Generic Connected Impactor / impacted CI Table 9',
    'Class:lnkConnectableCIToConnectableCI9/Attribute:impactorci_id' => 'Impactor Connected CI',
    'Class:lnkConnectableCIToConnectableCI9/Attribute:dependantci_id' => 'Dependant Connected CI',

    'Class:ConnectableCI/Attribute:dependantgencommci0_list' => 'List of devices depending from this device, Set 0',
    'Class:ConnectableCI/Attribute:impactorgencommci0_list' => 'List of devices impacting this device, Set 0',
    'Class:ConnectableCI/Attribute:GenCommRedundancy0' => 'Redundancy type for set 0',
    'Class:ConnectableCI/Attribute:dependantgencommci1_list' => 'List of devices depending from this device, Set 1',
    'Class:ConnectableCI/Attribute:impactorgencommci1_list' => 'List of devices impacting this device, Set 1',
    'Class:ConnectableCI/Attribute:GenCommRedundancy1' => 'Redundancy type for set 1',
    'Class:ConnectableCI/Attribute:dependantgencommci2_list' => 'List of devices depending from this device, Set 2',
    'Class:ConnectableCI/Attribute:impactorgencommci2_list' => 'List of devices impacting this device, Set 2',
    'Class:ConnectableCI/Attribute:GenCommRedundancy2' => 'Redundancy type for set 2',
    'Class:ConnectableCI/Attribute:dependantgencommci3_list' => 'List of devices depending from this device, Set 3',
    'Class:ConnectableCI/Attribute:impactorgencommci3_list' => 'List of devices impacting this device, Set 3',
    'Class:ConnectableCI/Attribute:GenCommRedundancy3' => 'Redundancy type for set 3',
    'Class:ConnectableCI/Attribute:dependantgencommci4_list' => 'List of devices depending from this device, Set 4',
    'Class:ConnectableCI/Attribute:impactorgencommci4_list' => 'List of devices impacting this device, Set 4',
    'Class:ConnectableCI/Attribute:GenCommRedundancy4' => 'Redundancy type for set 4',
    'Class:ConnectableCI/Attribute:dependantgencommci5_list' => 'List of devices depending from this device, Set 5',
    'Class:ConnectableCI/Attribute:impactorgencommci5_list' => 'List of devices impacting this device, Set 5',
    'Class:ConnectableCI/Attribute:GenCommRedundancy5' => 'Redundancy type for set 5',
    'Class:ConnectableCI/Attribute:dependantgencommci6_list' => 'List of devices depending from this device, Set 6',
    'Class:ConnectableCI/Attribute:impactorgencommci6_list' => 'List of devices impacting this device, Set 6',
    'Class:ConnectableCI/Attribute:GenCommRedundancy6' => 'Redundancy type for set 6',
    'Class:ConnectableCI/Attribute:dependantgencommci7_list' => 'List of devices depending from this device, Set 7',
    'Class:ConnectableCI/Attribute:impactorgencommci7_list' => 'List of devices impacting this device, Set 7',
    'Class:ConnectableCI/Attribute:GenCommRedundancy7' => 'Redundancy type for set 7',
    'Class:ConnectableCI/Attribute:dependantgencommci8_list' => 'List of devices depending from this device, Set 8',
    'Class:ConnectableCI/Attribute:impactorgencommci8_list' => 'List of devices impacting this device, Set 8',
    'Class:ConnectableCI/Attribute:GenCommRedundancy8' => 'Redundancy type for set 8',
    'Class:ConnectableCI/Attribute:dependantgencommci9_list' => 'List of devices depending from this device, Set 9',
    'Class:ConnectableCI/Attribute:impactorgencommci9_list' => 'List of devices impacting this device, Set 9',
    'Class:ConnectableCI/Attribute:GenCommRedundancy9' => 'Redundancy type for set 9',
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
