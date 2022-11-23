<?php
class Register extends Controller
{
    
    public function index(){
        
        $company_type=$this->model("CompanyModel")->get("company_type")->fetchAll(PDO::FETCH_ASSOC);


        $this->data["sub_content"]["company_type"]=$company_type;

        $this->data["content"]="employer/register";
        $this->render('layouts/employer_layout',$this->data);
    }
    public function insertUser(){
       if(count($_POST) > 0){
        $email=$_POST["email"];
        $password=$_POST["password"];
        $company_name=$_POST["company_name"];
        $email=$_POST["email"];
        $company_type_id=$_POST["company_type"];
     
        $company_address=$_POST["company_address"];
        $contact_name=$_POST["contact_name"];
        $contact_phone=$_POST["contact_phone"];
        $tax_code=$_POST["taxid"];
        $company_summary=$_POST["company_summary"];
        $location_id=$_POST["location_id"];
        $districts=$_POST["districts"];


        

        //bảng company

       $company_id= $this->model("CompanyModel")->insertData([
            "company_type_id "=>"'$company_type_id'",
            "company_name "=>"'$company_name'",
            "tax_code "=>"'$tax_code'",
      
            "company_summary "=>"'$company_summary'",



        ]);
        //Thêm địa chỉ công ty bảng address_company
        $this->model("CompanyModel")->insert("address_company",[
            "company_id  "=>"'$company_id'",
            "provinces "=>"'$location_id'",
            "address "=>"'$company_address'",
            "districts "=>"'$districts'",


        ]);



        //Thêm tài khoản người tuyển dụng bảng user_account
      $user_account_id =  $this->model("AccountUserModel")->insertUser([
            "user_type_id "=>"'2'",
            "email"=>"'$email'",
            "password"=>"'$password'",
        ]);


        //bảng employer_infomation
        $this->model("AccountUserModel")->insert("employer_infomation",[
            "user_account_id"=>"'$user_account_id'",
            "company_id"=>"'$company_id'",
            "contact_name "=>"'$contact_name'",
            "contact_phone"=>"'$contact_phone'"

        ]);

        $this->redirect('employer/login');
       }
        $this->redirect('employer/register');
        
    }
}