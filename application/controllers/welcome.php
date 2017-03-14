 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {

    public function person(){
        if($this->session->userdata('loginedUser')){
            $user_Id=$this->session->userdata('loginedUser')->user_Id;
            $this->load->model('person_model');
            $row=$this->person_model->find_person_by_userId($user_Id);
            if($row){
                redirect("welcome/person_perfect");
            }
            else{
                redirect("welcome/person_imperfect");
            }
        }else{
            redirect("welcome/login");
        }

    }
    public function person_perfect(){
        $loginedUser = $this->session->userdata("loginedUser");
//        echo $loginedUser->user_Id;
        $this->load->model('person_model');
        $person_info = $this->person_model->get_info_by_userId($loginedUser->user_Id);
//        echo "<pre>";
//        var_dump($person_info);
//        echo "</pre>";
//        die;
        $this->load->view('person_perfect',array(
            'person_info' => $person_info
        ));
    }
    public function person_imperfect(){
        $loginedUser = $this->session->userdata("loginedUser");
        $this->load->model('user_model');
        $img = $this->user_model->get_headImg_by_pictId($loginedUser->pict_Id);
        $this->load->view('person_imperfect',array(
            'img' => $img
        ));
    }
    public function do_person_imperfect(){
        $loginedUser = $this->session->userdata("loginedUser");
        $user_Id= $loginedUser->user_Id;

        $username=$this->input->post('username');
        $sex=$this->input->post('sex');
        $date=$this->input->post('date');
        $height=$this->input->post('height');
        $weight=$this->input->post('weight');
        $waist=$this->input->post('waist');
        $hipline=$this->input->post('hipline');
        $telephone=$this->input->post('telephone');
        $sign=$this->input->post("sign");

        $this->load->model('person_model');
        $persons=$this->person_model->find_person_by_userId($user_Id);
        if($persons){//如果当前这个人已经完善过信息，表明此人要修改信息
            $result=$this->person_model->update_person_imperfect($user_Id,$username,$sex,$date,$height,$weight,$waist,$hipline,$telephone,$sign);
            if($result){//如果修改成功了，那么跳回主页
                redirect("welcome/index");
            }else{//否则跳回修改页面重新修改
                $this->load->view('person_imperfect');
            }
        }
//        $this->load->model('person_model');
        else{//如果当前这个人没有完善过信息，那么让这个人去完善信息
            $str = "";
            if($sex == 1) $str = "man";
            else if($sex == 2){
                $str = "woman";
            }else{
                $str = "default";
            }
            $this->load->model("picture_model");
            $img = $this->picture_model->get_img_by_sex($str);
            $this->load->model("user_model");
            $user_row = $this->user_model->update_pictId_by_userId($loginedUser->user_Id, $img->pict_Id);
            if($user_row){
                $row=$this->person_model->do_person_imperfect($user_Id,$username,$sex,$date,$height,$weight,$waist,$hipline,$telephone,$sign);
                if($row){//如果插入数据库成功，证明完善信息成功
                    redirect("welcome/person_perfect");
                }
            }else{
                echo "pict_Id in user update failed";
            }

        }

    }
    public function complete_person_imperfect(){
        $user_Id=$this->session->userdata("loginedUser")->user_Id;
        $this->load->model("person_model");
        $persons= $this->person_model->find_person_by_userId($user_Id);
        $this->load->view('person_imperfect',array(
            'persons'=>$persons
        ));
    }
    public function index(){
//        $sex=$this->input->get('sex');
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
    public function article(){
        $this->load->model("article_model");
        $this->load->model("user_model");
        $articles=$this->article_model->get_articles();
        $users=$this->user_model->get_users();
        $this->load->view("article",array(
            'articles'=>$articles,
            'users'=>$users
        ));
    }
     public function check_reg(){
        $username=$this->input->post("username");
        $password=$this->input->post("password");
        $repassword=$this->input->post("repassword");

        $this->load->model("user_model");
        $rows=$this->user_model->save($username,$password);
        if($rows>0&&$password==$repassword){
            redirect("welcome/login");
        }else{
            $this->load->view("reg");
        }
    }
     public function forum_content(){
         $arti_Id=$this->input->get('arti_Id');
         $this->load->model('article_model');
         $this->load->model('user_model');
         $forum_content=$this->article_model->forum_content($arti_Id);
         $user=$this->user_model->user_by_article($arti_Id);
         $this->load->view('forum_content',array(
             'user'=>$user,
             'forum_content'=>$forum_content,
             'arti_Id'=>$arti_Id
         ));
     }
    public function forum_content_comments(){
        $arti_Id=$this->input->get('arti_Id');
        $user_Id=$this->input->get('user_Id');
        $comm_Content=$this->input->get('comm_Content');
        date_default_timezone_set("Asia/Shanghai");
//        $comm_Date=$this->input->get('comm_Date');
        $comm_Date=date('Y-m-d H:i:s');
        $user_Name=$this->session->userdata("loginedUser")->user_Name;
        $this->load->model('picture_model');
        $pict_Url=$this->picture_model->find_pictUrl_by_userId($user_Id);
        $this->load->model('comment_model');
        $query=$this->comment_model->forum_content_comments($user_Id,$arti_Id,$comm_Content,$comm_Date);
        $data=$this->comment_model->find_comments_by_artiId_now($arti_Id);

        if($query&&$data){
            echo json_encode($data);
        }else{
            echo 'no';
        }
//        echo('2324');
    }
    public function find_comments_by_artiId(){
        $arti_Id=$this->input->get('arti_Id');
        $this->load->model('comment_model');
        $comments=$this->comment_model->find_comments_by_artiId($arti_Id);
        if($comments){
            echo json_encode($comments);
        }
    }
     public function push_content(){
         $push_Id=$this->input->get('push_Id');
         $this->load->model('push_model');
         $push_content=$this->push_model->push_content($push_Id);
         $this->load->view('push_content',array(
             'push_content'=>$push_content
         ));
     }
     public function layout(){
         $user=$this->session->userdata("loginedUser");
         $this->session->set_userdata("loginedUser","");
//         $this->load->view("login");
         redirect("welcome/login");
     }
}

