<?php
class Controller {
    
    // Get Model
    public function model($model) {
        require_once BACKEND_PATH . '/models/' . $model . '.php';
        return new $model();
    }

    // Get View
    public function view($view, $data = []) {

        extract($data);

        // Get Header
        require_once FRONTEND_PATH . '/views/layouts/header.php';

        // Get Page
        if (file_exists(FRONTEND_PATH . '/views/' . $view . '.php')) {
            require_once FRONTEND_PATH . '/views/' . $view . '.php';
        } else {
            // Nếu không tìm thấy file view, có thể hiển thị trang 404
            echo "<h1>LỖI: Không tìm thấy giao diện " . $view . ".php</h1>";
        }

        // Get Footer
        require_once FRONTEND_PATH . '/views/layouts/footer.php';
    }

    // JSON Responser for API
    public function json($data, $statusCode = 200) {
        header('Content-Type: application/json');
        http_response_code($statusCode);
        echo json_encode($data);
        exit();
    }
}
?>