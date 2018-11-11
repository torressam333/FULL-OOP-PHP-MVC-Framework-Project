<?php
//share model

class ShareModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM shares ORDER BY create_date DESC');
        $rows = $this->resultSet();
        return $rows;
    }

    public function add(){
        //Santize The Post Array
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if($post['submit']){

        //Form validation for blank fields
        if($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){
            Messages::setMessage('Please Fill In All Fields', 'error');
            return;
        }          

            //Insert into MySQL
            $this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', 1);
            $this->execute();

            //Verify
            if($this->lastInsertId){
                //Redirecr
                header('Location: ' . ROOT_URL. 'shares');
            }
        }
        return;
    }
}