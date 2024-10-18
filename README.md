# iTop-br-cabling

Copyright (c) 2021-2022 Björn Rudner
[![License](https://img.shields.io/github/license/rudnerbjoern/iTop-br-cabling)](https://github.com/rudnerbjoern/iTop-br-cabling/blob/main/LICENSE)

iTop Extension to add cabling between CIs

## Archive

This project is now archived, since the extension of [TeemIP Cable Management](https://store.itophub.io/en_US/products/teemip-cable-mgmt).

## Patch

You can use my fork at: https://github.com/rudnerbjoern/teemip-core-ip-mgmt/tree/2.7.1-cabling

OR

In order to see the virtual server interfaces in the Interfaces' IPs you need to patch the following file: ```.../data/production-modules/teemip-core-ip-mgmt/teemip-config-mgmt-adaptor/datamodel.teemip-config-mgmt-adaptor.xml```

In function ```public function OnDisplayRelations($oObject, WebPage $oPage, $bEditMode = false)``` add the if statement with ```if($oObject->Get('finalclass') == 'Server')``` :

``` php
if($oObject->Get('finalclass') == 'NetworkDevice')
{
    $sOQL .= " UNION SELECT lnkIPInterfaceToIPAddress AS l1 JOIN NetworkDeviceVirtualInterface AS int ON l1.ipinterface_id = int.id JOIN NetworkDevice AS n ON int.networkdevice_id = n.id WHERE n.id = :ci_id";
    $sDisplayClass = 'NetworkDevice';
}
// add from here
if($oObject->Get('finalclass') == 'Server')
{
    $sOQL .= " UNION SELECT lnkIPInterfaceToIPAddress AS l2 JOIN ServerVirtualInterface AS int ON l2.ipinterface_id = int.id JOIN Server AS s ON int.server_id = s.id WHERE s.id = :ci_id";
    $sDisplayClass = 'Server';
}
// to here
$oLnkSet =  new CMDBObjectSet(DBObjectSearch::FromOQL($sOQL), array(), array('ci_id' => $oObject->GetKey()));
```
