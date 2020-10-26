<?php

require_once 'bootstrap.php';

// Load credentials from .env
$credentials = new Aws\Credentials\Credentials(config('AWS_ACCESS_KEY_ID'), config('AWS_SECRET_ACCESS_KEY'));

// Your aws code goes here
$s3 = new Aws\S3\S3Client([
    'version'     => 'latest',
    'region'      => 'eu-west-2',
    //'debug'       => true,
    'credentials' => $credentials
]);

try {
  $result = $s3->listBuckets();
  foreach ($result['Buckets'] as $index => $bucket) {
    echo ++$index . '. ' . $bucket['Name'] . ' - ' . $bucket['CreationDate'] . '</br>';
  }
} catch (\Throwable $th) {
  render_error($th->getMessage());
}