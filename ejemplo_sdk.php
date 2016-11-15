<?php
// Connect to Couchbase Server

$cluster = new CouchbaseCluster("couchbase://127.0.0.1");
$bucket = $cluster->openBucket("default");

// Store a document
echo "Storing u:king_arthur\n";
$result = $bucket->upsert('u:king_arthur', array(
    "email" => "kingarthur@couchbase.com",
    "interests" => array("African Swallows")
));

var_dump($result);

// Retrieve a document
echo "Getting back u:king_arthur\n";
$result = $bucket->get("u:king_arthur");
var_dump($result->value);

// Replace a document
echo "Replacing u:king_arthur\n";
$doc = $result->value;
array_push($doc->interests, 'PHP 7');
$bucket->replace("u:king_arthur", $doc);
var_dump($result);

echo "Creating primary index\n";
// Before issuing a N1QL Query, ensure that there is
// is actually a primary index.
try {
    // Do not override default name, fail if it is exists already, and wait for completion
    $bucket->manager()->createN1qlPrimaryIndex('', false, false);
    echo "Primary index has been created\n";
} catch (CouchbaseException $e) {
    printf("Couldn't create index. Maybe it already exists? (code: %d)\n", $e->getCode());
}

// Query with parameters
$query = CouchbaseN1qlQuery::fromString("SELECT * FROM `default` WHERE \$p IN interests");
$query->namedParams(array("p" => "African Swallows"));
echo "Parameterized query:\n";
var_dump($query);
$rows = $bucket->query($query);
echo "Results:\n";
var_dump($rows);