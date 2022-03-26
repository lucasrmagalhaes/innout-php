<?php

$errors = [];

if ($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if (get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}

$alertType = '';

if ($message['type'] === 'error') {
    $alertType = 'danger';
} else {
    $alertType = 'success';
}

?>

<?php if ($message): ?>
    <div 
        role="alert"
        class="mt-3 alert alert-<?= $alertType ?>" 
    >
        <?= $message['message'] ?>
    </div>
<?php endif ?>