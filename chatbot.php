<?php

namespace Google\Cloud\Samples\Dialogflow;
use Google\Cloud\Dialogflow\V2\SessionsClient;
use Google\Cloud\Dialogflow\V2\TextInput;
use Google\Cloud\Dialogflow\V2\QueryInput;

require __DIR__.'/vendor/autoload.php';
require 'config.php';

function detect_intent_texts($projectId, $text, $sessionId, $languageCode = 'en-US')
{
    // new session
    $session_credentials = array('credentials' => 'client-secret.json');
    $sessionsClient = new SessionsClient($session_credentials);
    $session = $sessionsClient->sessionName($projectId, $sessionId ?: uniqid());
   // printf('Session path: %s' . PHP_EOL, $session);

    // create text input
    $textInput = new TextInput();
    $textInput->setText($text);
    $textInput->setLanguageCode($languageCode);

    // create query input
    $queryInput = new QueryInput();
    $queryInput->setText($textInput);

    // get response and relevant info
    $response = $sessionsClient->detectIntent($session, $queryInput);
    $queryResult = $response->getQueryResult();
    $queryText = $queryResult->getQueryText();
    $intent = $queryResult->getIntent();
    $displayName = $intent->getDisplayName();
    $confidence = $queryResult->getIntentDetectionConfidence();
    $fulfilmentText = $queryResult->getFulfillmentText();

    // output relevant info
//    print(str_repeat("=", 20) . PHP_EOL);
//    printf('Query text: %s' . PHP_EOL, $queryText);
//    printf('Detected intent: %s (confidence: %f)' . PHP_EOL, $displayName,
//        $confidence);
//    print(PHP_EOL);
//    printf('Fulfilment text: %s' . PHP_EOL, $fulfilmentText);

    $sessionsClient->close();
    return [
        'message' => $fulfilmentText,
        'intent' => $displayName
    ];
}

$session_id = mt_rand();
$project_id = PROJECT_ID;

if(isset($_POST['msg']) && !empty($_POST['msg'])) {
 $response = detect_intent_texts($project_id,$_POST['msg'],$session_id);
 echo json_encode(['data'=>$response]);
}else {
    echo json_encode(['data'=>[]]);
}
