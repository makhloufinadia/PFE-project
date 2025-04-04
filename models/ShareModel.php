<?php
class ShareModel extends Model {
    public function Index() {
        $this->query('SELECT * FROM shares ORDER BY create_date DESC');
        return $this->resultSet();
    }
}