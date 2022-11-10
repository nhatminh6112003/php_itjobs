<?php
class Account extends Controller
{
    public function index(){
       $this->register();
    }
    public function register(){
        if(count($_POST) > 0){
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                //1 là ứng viên
                $user_type_id=1;
                //kiểm tra email đã tồn tại chưa
                $sql="select * from user_account where user_type_id=1 and email='$email' ";
                echo   $sql;
                $result=$this->model("AccountUserModel")->query($sql);

               
                if($result->rowCount()==0){
                    $data = [
                        "firstname"=>"'$firstname'",
                        "lastname"=>"'$lastname'",
                        "email"=>"'$email'",
                        "password"=>"'$password'",
                        "user_type_id"=>"'$user_type_id'",
    
                    ];
                    $this->model("AccountUserModel")->insertUser($data);
                    // $this->redirect("account/login");
                }
                else{
                  $this->data["sub_content"]["error"]="Email của bạn đã tồn tại";
                }

              
        }

        $this->data["sub_content"][]="";

        $this->data["content"]="clients/register";
        $this->render('layouts/client_layout',$this->data);
    }
  
    public function login(){
        if(Auth_user::logged_in()){
            $this->redirect("home");
        }
        if(count($_POST) > 0){
            $email=$_POST["email"];
            $password=$_POST["password"];
            $remember=isset($_POST["chkSave"])?true:false;
            
         
            $result= $this->model("AccountUserModel")->CheckLoginUser($email,$password);
            $token=uniqid('user_',true);  
            if($result->rowCount()==1){
               $user=$result->fetchAll(PDO::FETCH_ASSOC);
                foreach ($user  as $row) {
                 Auth_user::authenticate($row);
                }
                if($remember){
                 setcookie('remember',$_SESSION["user"]["id"],time()+60*60*24*30);
                 }
                $this->redirect('home');
            }
    
    
        //     if(empty($_POST["email"]) || empty($_POST["password"])  ){
            
        //      $errors['empty']="Bạn phải nhập đầy đủ các trường";
        //     }
        //    else { 
        //      $errors['login']="Tên đăng nhập hoặc mật khẩu không chính xác";
        //     }
        
            }
        
        $this->data["sub_content"][]="";

        $this->data["content"]="clients/login";
        $this->render('layouts/client_layout',$this->data);
    }

    public function logout(){
    Auth_user::logout();
 	$this->redirect('account/login');
    }
}