#!/usr/bin/perl

use CGI ':standard';
print "Content-type: text/html\n\n";
$first = param('first');
$last = param('last');
$year = param('year');
$month = param('month');
$day = param('day');
$type = param('type');
@anime = param('anime');
print "<style> p { display:block; padding:3px 30px; border-radius: 10px; } p:hover { font-weight: 700;} </style>";
print <<"HTML CODE";
<h1 style="text-align:center;"> Thank you for filling out the form!!!</h1>
<p style="background-color: #d39a98;">Hi, $first $last</p>
<p style="background-color: orange;">Your birthday is $year.$month.$day</p>
<p style="background-color: #e1f00e;">Your favorite type of animation is $type </p>
<p style="background-color: #89c08c;">In this season, the animations you like are:</p>
HTML CODE
foreach $ani (@anime){
print "<p style='text-indent:2em;background-color: #7ad8cb;'>- $ani</p>";
}
