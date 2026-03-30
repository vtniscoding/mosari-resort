<?php
class HomeController extends Controller {
    
    // Method index() being called from App
    public function index() {

        // Call heper function
        $room_types = get_all_room_types();

        // Method view() from base Controller 
        $this->view('pages/home', [
            'page_title' => 'Trang chủ - Mosari Resort & Spa',
            'current_page' => 'home',
            'room_types' => $room_types,
        ]);
    }
}
?>