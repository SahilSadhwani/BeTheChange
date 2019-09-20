<?php
require_once("pages/includes/functions.php");
// echo "hello";

$ngo=getngo();

$events=getngoevents();

$donations=getngodonations();

$eid=3;
$partcptnforevent=getparticipationcount($eid);

$dnid=2;
$donationcount=getdonationscount($dnid);

$donations=getngodonations();

$nid=3;
$did=9;
$vid=9;

// $eventsexe=geteventsexe();
// $donationsexe=getdonationsexe();

$eventsexe=geteventsexe($nid,$vid);
$donationsexe=getdonationsexe($nid,$did);

// $eventsexe=geteventsexe();
// $donationsexe=getdonationsexe();

// $eventsexe=geteventsexe(null,9);
// $donationsexe=getdonationsexe(3,null);

// $nid=3;
// $desc='Save Old Age Homes';
// $addngoevents=addngoevent($nid,$desc);

// $nid=3;
// $damt=3000;
// $decs='COntribute for Healthy India';
// $addngodonation=addngodonation($damt,$nid,$decs);

// $eid=3;
// $vid=2;
// $op='COntribute for Healthy India';
// $addusertoevent=addusertoevent($eid,$vid);

// $did=2;
// $dnid=3;
// $amnt=1300;
// $adduserdonation=adduserdonation($dnid,$did,$amnt);



echo "<pre>";
echo "get all ngo";
print_r($ngo);
echo "get all events";
print_r($events);
echo "get all donations";
print_r($donations);
echo "get events participation";
print_r($eventsexe);
echo "get donation transaction";
print_r($donationsexe);
echo "get participation for event n";
print_r($partcptnforevent);
echo "get donationcount for donation n";
print_r($donationcount);
?>