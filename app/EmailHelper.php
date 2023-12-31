<?php

class EmailHelper
{
    protected $postData = [];
    protected $errors = [];

    protected $notificationService;

    public function __construct()
    {
        require_once __DIR__ . '/NotificationService.php';
        $this->notificationService = new NotificationService();
    }

    public function subscribe()
    {
        $email = $_POST['email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            mail($GLOBALS['vars']['admin_email'], 'new subscribe request', 'subscribe request from '.$email);
            return json_encode(['status' => 'success']);
        }
        return json_encode(['status' => 'error', 'message' => 'Invalid email address']);
    }

    public function sendMail()
    {
        $this->postData = $_POST;
        if (empty($this->postData)) {
            $this->notificationService->deleteAll();
            return;
        }
        if (!$this->validate()) {
            foreach ($this->errors as $error) {
                $this->notificationService->setNotification($error['message'], $error['status']);
            }
            return false;
        }
        $this->send();
        $this->notificationService->setNotification('Thanks you, your request has been sent', 'success');
    }

    public function getMessages()
    {
        return $this->notificationService->getAllNotifications();
    }

    public function deleteMessages()
    {
        $this->notificationService->deleteAll();
    }

    protected function send()
    {
        $message = '<pre>' . print_r($this->postData, true) . '</pre>';
        mail($GLOBALS['vars']['admin_email'], 'new request from site', $message);
    }

    protected function validate()
    {
        foreach ($this->postData as $key => $value) {
            if ($this->validateFieldByName($key)) {
                $this->addError(ucfirst($key) . ' is required');
            }
        }
        return empty($this->errors);
    }

    private function validateFieldByName($key)
    {
        return empty($this->postData[$key]);
    }

    private function addError($message, $status = 'error')
    {
        array_push($this->errors, [
            'message' => $message,
            'status' => $status,
        ]);
    }
}