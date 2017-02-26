 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index(){
        $this->load->model('push_model');
        $messages=$this->push_model->push_messages();
        $this->load->model("picture_model");
        $carousels=$this->picture_model->Carousel();
        $this->load->view('index',array(
            'messages'=>$messages,
            'carousels'=>$carousels
        ));
    }
    public function login(){
        $this->load->view('login');
    }
    public function do_login(){
        $username=$this->input->post("username");
        $password=$this->input->post("password");
        $this -> load -> model('user_model');//加载model文件
        $result = $this -> user_model -> get_by_name_pwd($username, $password);

        if($result){//查到结果
            $this -> session -> set_userdata('loginedUser', $result);
            redirect('welcome/index');
        }else{//未查到结果
            redirect('welcome/login');
        }
    }
    public function reg(){
        $this->load->view('reg');
    }
    public function check_name(){
        $name=$this->input->get('username');
        $this->load->model('user_model');
        $query=$this->user_model->get_by_name($name);
        if($query){
            echo "fail";
        }else{
            echo "success";
        }
    }
//    public function check_name(){
//       $name=$this->input->get("username");
//        //console.log($name);
//
//        $this->load->model("user_model");
//        $result=$this->user_model->get_by_name($name);
////        echo $result;
//        if($result){
//            echo "fail";
//        }else{
//            echo "success";
//        }
//    }
    public function check_reg(){
        $username=$this->input->post("username");
        $password=$this->input->post("password");
        $repassword=$this->input->post("repassword");

        $this->load->model("user_model");
        $rows=$this->user_model->save($username,$password);
//        var_dump($rows);
//        die();
        if($rows>0&&$password==$repassword){
            redirect("welcome/login");
        }else{
            $this->load->view("reg");
        }
    }
}

