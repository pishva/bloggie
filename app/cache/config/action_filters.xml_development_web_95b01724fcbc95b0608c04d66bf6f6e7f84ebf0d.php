<?php

// This is a compiled Agavi configuration file
// Compiled from: C:/workspace/bloggie/app/config/action_filters.xml
// Generated by: AgaviFilterConfigHandler
// Date: 2013-01-30T06:02:41+0000

$filter = new AgaviExecutionTimeFilter();
$filter->initialize($this->context, array (
  'comment' => true,
  'output_types' => 
  array (
    0 => 'html',
  ),
));
$filters[] = $filter;

?>