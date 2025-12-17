<?php
$files = _skipNodeFiles(scandir(NETWORKSDEFINEDAT));
$networkName = urldecode(getQueryParameter('network', variable('network')));

contentBox('networks', 'toolbar text-center my-3');
h2('Network: ' . $networkName, 'h4 m-1');
echo linkBuilder::factory('Default', nodeValue(), 'margins btn-secondary');
foreach ($files as $name)
	echo linkBuilder::factory($name, nodeValue() . '/?network=' . $name, 'margins ' . ($networkName == $name ? 'btn-warning' : 'btn-info'));
contentBox('end');

runFrameworkFile('site/listing');
