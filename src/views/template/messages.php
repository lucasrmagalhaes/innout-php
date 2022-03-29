<?php
$errors = [];

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
} else if ($exception) {
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