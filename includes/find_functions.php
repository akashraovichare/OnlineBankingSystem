<?php
	define("DBHOST","localhost");
	define("DBUSER","root");
	define("DBPWD","");
	define("DB","onlinebanking");
	
	date_default_timezone_set("Asia/Kolkata");
	error_reporting(E_ALL ^ E_DEPRECATED);
	
	class DB_FUNCTIONS{	
	
		public function __construct(){
				$this->db=mysqli_connect(DBHOST,DBUSER,DBPWD,DB);//$this->db=new mysqli(DBHOST,DBUSER,DBPWD,DB);
			}
		
		public function cust_otp($otp,$email){
			$query = "UPDATE customer SET OTP = '$otp' WHERE email = '$email'";
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function regcustomer($user_name,$password,$email){
			$query = "UPDATE customer SET user_name = '$user_name',password = '$password' WHERE email = '$email'";
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function regsuperuser($user_name,$password,$emp_no){
			$query = "UPDATE super_user SET user_name = '$user_name',password = '$password' WHERE emp_no = '$emp_no'";
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function regEmployee($username,$password,$emp_no){
			$query = "UPDATE staff_master SET user_name = '$username' ,password = '$password' WHERE emp_no = '$emp_no';";
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function regManager($username,$password,$emp_no){
			$query = "UPDATE manager_master SET user_name = '$username', password = '$password' WHERE emp_no = '$emp_no';";
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function getofficedata(/*$orgid*/){
			$query = "select * from branch_data"; 
			/* where orgid = '$orgid';";*/
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0) {
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}
		}
		
		public function fetchallfromcustomer(){
			$query="SELECT * FROM customer";
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}
		}
		
		public function fetchallfromstate(){
			$query="SELECT * FROM state_master";
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}
		}
		
		public function fetchallfromdesignation(){
			$query="SELECT * FROM designation_master";
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}
		}
		
		public function fetchallfromdepartment(){
			$query="SELECT * FROM department_master";
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}
		}
		
		public function fetchallfromdegree(){
			$query="SELECT * FROM degree_master";
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}
		}
		
		public function fetchallfromcity(){
			$query="SELECT * FROM city_master";
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}
		}
		
		public function fetchallfromdistrict(){
			$query="SELECT * FROM district_master";
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}
		}
		
		public function fetchallfromtehsil(){
			$query="SELECT * FROM tehsil_master";
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}
		}
		
		public function fetchallfromsuperuser(){
			$query="SELECT * FROM super_user";
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}		
		}
		
		public function fetchallfromstaff(){
			$query="SELECT * FROM staff_master";
			$result=@mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}	
		}
		
		public function fetchallfromsaving(){
			$query="SELECT * FROM customer WHERE saving = '1'";
			$result=@mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}	
		}
		
		public function fetchallfromcurrent(){
			$query="SELECT * FROM customer WHERE current = '1'";
			$result=@mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}	
		}
		
		public function fetchallfromfd(){
			$query="SELECT * FROM customer WHERE fd = '1'";
			$result=@mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}	
		}
		
		public function fetchallfromrd(){
			$query="SELECT * FROM customer WHERE rd = '1'";
			$result=@mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}	
		}
		
		public function fetchallfrommanager(){
			$query="SELECT * FROM manager_master";
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			if($num_rows>0){
				while($row=@mysqli_fetch_assoc($result)){
					$data[]=$row;
				}
				return $data;
			}
		}
			
		public function fetchacustomerbyemail($email){
			$query="SELECT * FROM customer WHERE email = '$email'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function fetchasupebyusername($name){
			$query="SELECT * FROM super_user WHERE user_name = '$name'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function fetchamngrbyusername($name){
			$query="SELECT * FROM manager_master WHERE user_name = '$name'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function fetchastaffbyusername($name){
			$query="SELECT * FROM staff_master WHERE user_name = '$name'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function fetchacustomerbyusername($name){
			$query="SELECT * FROM customer WHERE user_name = '$name'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function fetchamanager($emp_no){
			$query="SELECT * FROM manager_master WHERE emp_no = '$emp_no'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function fetchasuperuser($emp_no){
			$query="SELECT * FROM super_user WHERE emp_no = '$emp_no'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
				
		
		public function fetchastaff($emp_no){
			$query="SELECT * FROM staff_master WHERE emp_no = '$emp_no'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function add_branch($br_code,$ifsc,$br_name,$br_mngr,$br_asmngr,$br_email,$br_contact,$br_building,$br_area,$br_street,$br_milestone,$br_pincode,$br_city,$br_teh,$br_dist,$br_state,$br_fax,$br_mngr_phone,$br_mngr_mob,$br_mngr_email,$br_asm_phone,$br_asm_mob,$br_asm_email,$superuser){
			$branch_uid = $this->generateuidforbranch();
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "INSERT into branch_data(br_uid,ifsc,br_code,br_name,manager,asm,br_email,br_contact,building,area,street,milestone,pin_code,city,tehsil,district,state,fax,mngr_phone,mngr_mobile,mngr_email,asm_phone,asm_mobile,asm_email,created_by,created_date) VALUES ('$branch_uid','$ifsc','$br_code','$br_name','$br_mngr','$br_asmngr','$br_email','$br_contact','$br_building','$br_area','$br_street','$br_milestone','$br_pincode','$br_city','$br_teh','$br_dist','$br_state','$br_fax','$br_mngr_phone','$br_mngr_mob','$br_mngr_email','$br_asm_phone','$br_asm_mob','$br_asm_email','$superuser','$datetime')"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function add_employe($emp_fname,$emp_mname,$emp_sname,$emp_sex,$emp_marriage,$emp_adhar,$emp_pan,$emp_dob,$emp_building,$emp_area,$emp_street,$emp_milestone,$emp_pincode,$emp_city,$emp_teh,$emp_dist,$emp_state,$emp_phone,$emp_mob,$emp_email,$emp_quali,$emp_branch,$emp_department,$emp_designation,$emp_hired_date,$superuser){
			$emp_uid = $this->generateuidforemployee();
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "INSERT into staff_master(emp_uid,first_name,middle_name,sir_name,sex,is_married,adhar_card,pan_card,birthdate,building_block,area,street,milestone,pin_code,city,tehsil,district,state,phone_no,mobile_no,email_id,qualification,branch,department,designation,joining_date,created_by,created_date) VALUES ('$emp_uid','$emp_fname','$emp_mname','$emp_sname','$emp_sex','$emp_marriage','$emp_adhar','$emp_pan','$emp_dob','$emp_building','$emp_area','$emp_street','$emp_milestone','$emp_pincode','$emp_city','$emp_teh','$emp_dist','$emp_state','$emp_phone','$emp_mob','$emp_email','$emp_quali','$emp_branch','$emp_department','$emp_designation','$emp_hired_date','$superuser','$datetime')"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function add_customer($savacc_fname,$savacc_mname,$savacc_sname,$savacc_sex,$savacc_marriage,$savacc_adhar,$savacc_pan,$savacc_dob,$savacc_building,$savacc_area,$savacc_street,$savacc_milestone,$savacc_pincode,$savacc_city,$savacc_teh,$savacc_dist,$savacc_state,$savacc_phone,$savacc_mob,$savacc_email,$savacc_quali,$savacc_amount,$savacc_branch,$is_savacc,$is_curacc,$is_fdacc,$is_rdacc,$superuser/*,$savacc_joining*/){
			$sav_acc_uid = $this->generateuidforsavacc();
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "INSERT into customer (customer_uid,first_name,middle_name,sir_name,sex,is_married,adhar,pan,birth_date,building,area,street,milestone,pin_code,city,tehsil,district,state,phone_no,mobile_no,email,qualification,balance,branch,created_by,created_date,saving,current,fd,rd) VALUES ('$sav_acc_uid','$savacc_fname','$savacc_mname','$savacc_sname','$savacc_sex','$savacc_marriage','$savacc_adhar','$savacc_pan','$savacc_dob','$savacc_building','$savacc_area','$savacc_street','$savacc_milestone','$savacc_pincode','$savacc_city','$savacc_teh','$savacc_dist','$savacc_state','$savacc_phone','$savacc_mob','$savacc_email','$savacc_quali','$savacc_amount','$savacc_branch','$superuser','$datetime','$is_savacc','$is_curacc','$is_fdacc','$is_rdacc')"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function add_state($state_name,$state_abbr,$superuser){
			$state_uid = $this->generateuidforstate();
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "INSERT into state_master(state_uid,state_name,state_abbr,created_by,created_date) VALUES ('$state_uid','$state_name','$state_abbr','$superuser','$datetime')"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function add_dist($dist_name,$dist_state_abbr,$superuser){
			$dist_uid = $this->generateuidfordistrict();
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "INSERT into district_master(district_uid,district_name,state,created_by,created_date) VALUES ('$dist_uid','$dist_name','$dist_state_abbr','$superuser','$datetime')"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function add_tehsil($tehsil_name,$tehsil_dist,$tehsil_state,$superuser){
			$tehsil_uid = $this->generateuidfortehsil();
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "INSERT into tehsil_master(tehsil_uid,tehsil_name,district,state,created_by,created_date) VALUES ('$tehsil_uid','$tehsil_name','$tehsil_dist','$tehsil_state','$superuser','$datetime')"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function add_city($city_name,$city_abbr,$city_teh,$city_dist,$city_state,$superuser){
			$city_uid = $this->generateuidforcity();
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "INSERT into city_master(city_uid,city_name,city_abbr,tehsil,district,state,created_by,created_date) VALUES ('$city_uid','$city_name','$city_abbr','$city_teh','$city_dist','$city_state','$superuser','$datetime')"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function add_designation($designation_name,$designation_code,$superuser){
			$des_uid = $this->generateuidfordesignation();
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "INSERT into designation_master(des_uid,designation,desi_code,created_by,created_date) VALUES ('$des_uid','$designation_name','$designation_code','$superuser','$datetime')"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}

		public function add_department($department_name,$department_code,$superuser){
			$department_uid = $this->generateuidfordepartment();
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "INSERT into department_master(department_uid,department,department_code,created_by,created_date) VALUES ('$department_uid','$department_name','$department_code','$superuser','$datetime')"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function add_degree($degree_name,$degree_code,$superuser){
			$degree_uid = $this->generateuidfordegree();
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "INSERT into degree_master(degree_uid,degree,degree_code,created_by,created_date) VALUES ('$degree_uid','$degree_name','$degree_code','$superuser','$datetime')"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function generateuidforbranch(){
			$branch_uid = $this->get_rand_id(6);
			$checkifbranchuidexist = $this->checkifbranchuidexist($branch_uid);
			if(!$checkifbranchuidexist){
				return $branch_uid;
			}
			else{
				$this->generateuidforbranch();
			}
		}
		
		public function generateuidforstate(){
			$state_uid = $this->get_rand_id(6);
			$checkifstateuidexist = $this->checkifstateuidexist($state_uid);
			if(!$checkifstateuidexist){
				return $state_uid;
			}
			else{
				$this->generateuidforstate();
			}
		}
		
		public function generateuidfordistrict(){
			$dist_uid = $this->get_rand_id(6);
			$checkifdistrictuidexist = $this->checkifdistrictuidexist($dist_uid);
			if(!$checkifdistrictuidexist){
				return $dist_uid;
			}
			else{
				$this->generateuidfordistrict();
			}
		}
		
		public function generateuidfortehsil(){
			$tehsil_uid = $this->get_rand_id(6);
			$checkiftehsiluidexist = $this->checkiftehsiluidexist($tehsil_uid);
			if(!$checkiftehsiluidexist){
				return $tehsil_uid;
			}
			else{
				$this->generateuidfortehsil();
			}
		}
		
		public function generateuidforcity(){
			$city_uid = $this->get_rand_id(6);
			$checkifcityuidexist = $this->checkifcityuidexist($city_uid);
			if(!$checkifcityuidexist){
				return $city_uid;
			}
			else{
				$this->generateuidforcity();
			}
		}
		
		public function generateuidfordesignation(){
			$des_uid = $this->get_rand_id(6);
			$checkifdesignationuidexist = $this->checkifdesignationuidexist($des_uid);
			if(!$checkifdesignationuidexist){
				return $des_uid;
			}
			else{
				$this->generateuidforcity();
			}
		}
		
		public function generateuidfordepartment(){
			$department_uid = $this->get_rand_id(6);
			$checkifdepartmentuidexist = $this->checkifdepartmentuidexist($department_uid);
			if(!$checkifdepartmentuidexist){
				return $department_uid;
			}
			else{
				$this->generateuidforcity();
			}
		}
		
		public function generateuidfordegree(){
			$degree_uid = $this->get_rand_id(6);
			$checkifdegreeuidexist = $this->checkifdegreeuidexist($degree_uid);
			if(!$checkifdegreeuidexist){
				return $degree_uid;
			}
			else{
				$this->generateuidforcity();
			}
		}
		
		public function checkifbranchuidexist($branch_uid){
			$saltquery = "select branch_uid from branch_data where branch_uid = '$branch_uid';";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function checkifstateuidexist($state_uid){
			$saltquery = "select state_uid from state_master where state_uid = '$state_uid';";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function checkifdistrictuidexist($dist_uid){
			$saltquery = "select dist_uid from district_master where dist_uid = '$dist_uid';";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function checkiftehsiluidexist($tehsil_uid){
			$saltquery = "select tehsil_uid from tehsil_master where tehsil_uid = '$tehsil_uid';";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function checkifcityuidexist($city_uid){
			$saltquery = "select city_uid from city_master where city_uid = '$city_uid';";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function checkifdesignationuidexist($des_uid){
			$saltquery = "select des_uid from designation_master where des_uid = '$des_uid';";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function checkifdepartmentuidexist($department_uid){
			$saltquery = "select department_uid from department_master where department_uid = '$department_uid';";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function checkifdegreeuidexist($degree_uid){
			$saltquery = "select degree_uid from degree_master where degree_uid = '$degree_uid';";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function fetchabranch($branch_uid){
			$query="SELECT * FROM branch_data WHERE br_uid = '$branch_uid'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function fetchadepartment($department_uid){
			$query="SELECT * FROM department_master WHERE department_uid = '$department_uid'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function fetchadesignation($des_uid){
			$query="SELECT * FROM designation_master WHERE des_uid = '$des_uid'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function fetchadegree($degree_uid){
			$query="SELECT * FROM degree_master WHERE degree_uid = '$degree_uid'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function fetchacustomer($customer_uid){
			$query="SELECT * FROM customer WHERE customer_uid = '$customer_uid'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function fetchaemp($employee_uid){
			$query="SELECT * FROM staff_master WHERE emp_uid = '$employee_uid'" ;
			$result = @mysqli_query($this->db,$query);
			$num_rows = @mysqli_num_rows($result);
			$row = @mysqli_fetch_assoc($result);
			return $row;
		}
		
		public function update_branch($updt_br_uid,$updt_br_code,$ifsc,$updt_br_name,$updt_br_mngr,$updt_br_asmngr,$updt_br_email,$updt_br_contact ,$updt_br_building,$updt_br_area,$updt_br_street,$updt_br_milestone,$updt_br_pincode,$updt_br_city,$updt_br_teh,$updt_br_dist,$updt_br_state,$updt_br_fax,$updt_br_mngr_phone,$updt_br_mngr_mob,$updt_br_mngr_email,$updt_br_asm_phone ,$updt_br_asm_mob,$updt_br_asm_email,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE branch_data SET br_code = '$updt_br_code',ifsc = '$ifsc',br_name = '$updt_br_name',manager = '$updt_br_mngr',asm = '$updt_br_asmngr',br_email = '$updt_br_email',br_contact = '$updt_br_contact',building = '$updt_br_building',area = '$updt_br_area',street = '$updt_br_street',milestone = '$updt_br_milestone',pin_code = '$updt_br_pincode',city = '$updt_br_city',tehsil = '$updt_br_teh',district = '$updt_br_dist',state = '$updt_br_state',fax = '$updt_br_fax',mngr_phone = '$updt_br_mngr_phone',mngr_mobile = '$updt_br_mngr_mob',mngr_email = '$updt_br_mngr_email',asm_phone = '$updt_br_asm_phone',asm_mobile = '$updt_br_asm_mob',asm_email = '$updt_br_asm_email',updated_by = '$superuser',updated_date = '$datetime' WHERE br_uid = '$updt_br_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_emp($employee_uid,$updt_emp_fname,$updt_emp_mname,$updt_emp_sname,$updt_emp_sex,$updt_emp_marriage,$updt_emp_adhar,$updt_emp_pan,$updt_emp_dob,$updt_emp_building,$updt_emp_area,$updt_emp_street,$updt_emp_milestone,$updt_emp_pincode,$updt_emp_city,$updt_emp_teh,$updt_emp_dist,$updt_emp_state,$updt_emp_phone,$updt_emp_mob,$updt_emp_email,$updt_emp_quali,$updt_emp_branch,$updt_emp_department,$updt_emp_designation,$updt_emp_hired_date,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE staff_master SET first_name = '$updt_emp_fname',middle_name = '$updt_emp_mname',sir_name = '$updt_emp_sname',sex = '$updt_emp_sex',is_married = '$updt_emp_marriage',adhar_card = '$updt_emp_adhar',pan_card = '$updt_emp_pan',birthdate = '$updt_emp_dob',building_block = '$updt_emp_building',area = '$updt_emp_area',street = '$updt_emp_street',milestone = '$updt_emp_milestone',pin_code = '$updt_emp_pincode',city = '$updt_emp_city',tehsil = '$updt_emp_teh',district = '$updt_emp_dist',state = '$updt_emp_state',phone_no = '$updt_emp_phone',mobile_no = '$updt_emp_mob',email_id = '$updt_emp_email',qualification = '$updt_emp_quali',branch = '$updt_emp_branch',department = '$updt_emp_department',designation = '$updt_emp_designation',joining_date = '$updt_emp_hired_date',modified_by = '$superuser',modified_date = '$datetime' WHERE emp_uid = '$employee_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_customer($customer_uid,$updt_savacc_fname,$updt_savacc_mname,$updt_savacc_sname,$updt_savacc_sex,$updt_savacc_marriage,$updt_savacc_adhar,$updt_savacc_pan,$updt_savacc_dob,$updt_savacc_building,$updt_savacc_area,$updt_savacc_street,$updt_savacc_milestone,$updt_savacc_pincode,$updt_savacc_city,$updt_savacc_teh,$updt_savacc_dist,$updt_savacc_state,$updt_savacc_phone,$updt_savacc_mob,$updt_savacc_email,$updt_savacc_quali,$updt_savacc_amount,$updt_savacc_branch,$updt_savacc_joining,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE customer SET first_name = '$updt_savacc_fname',middle_name = '$updt_savacc_mname',sir_name = '$updt_savacc_sname',sex = '$updt_savacc_sex',is_married = '$updt_savacc_marriage',adhar = '$updt_savacc_adhar',pan = '$updt_savacc_pan',birth_date = '$updt_savacc_dob',building ='$updt_savacc_building',area = '$updt_savacc_area',street = '$updt_savacc_street',milestone = '$updt_savacc_milestone',pin_code = '$updt_savacc_pincode',city = '$updt_savacc_city',tehsil = '$updt_savacc_teh',district = '$updt_savacc_dist',state = '$updt_savacc_state',phone_no = '$updt_savacc_phone',mobile_no = '$updt_savacc_mob',email = '$updt_savacc_email',qualification = '$updt_savacc_quali',branch = '$updt_savacc_branch',balance = '$updt_savacc_amount', created_date = '$updt_savacc_joining',updated_by = '$superuser',updated_date = '$datetime' WHERE customer_uid = '$customer_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_curacc($customer_uid,$updt_curacc_fname,$updt_curacc_mname,$updt_curacc_sname,$updt_curacc_sex,$updt_curacc_marriage,$updt_curacc_adhar,$updt_curacc_pan,$updt_curacc_dob,$updt_curacc_building,$updt_curacc_area,$updt_curacc_street,$updt_curacc_milestone,$updt_curacc_pincode,$updt_curacc_city,$updt_curacc_teh,$updt_curacc_dist,$updt_curacc_state,$updt_curacc_phone,$updt_curacc_mob,$updt_curacc_email,$updt_curacc_quali,$updt_curacc_amount,$updt_curacc_branch,$updt_curacc_joining,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE current_account SET first_name = '$updt_curacc_fname',middle_name = '$updt_curacc_mname',sir_name = '$updt_curacc_sname',sex = '$updt_curacc_sex',is_married = '$updt_curacc_marriage',adhar = '$updt_curacc_adhar',pan = '$updt_curacc_pan',birth_date = '$updt_curacc_dob',building ='$updt_curacc_building',area = '$updt_curacc_area',street = '$updt_curacc_street',milestone = '$updt_curacc_milestone',pin_code = '$updt_curacc_pincode',city = '$updt_curacc_city',tehsil = '$updt_curacc_teh',district = '$updt_curacc_dist',state = '$updt_curacc_state',phone_no = '$updt_curacc_phone',mobile_no = '$updt_curacc_mob',email = '$updt_curacc_email',qualification = '$updt_curacc_quali',branch = '$updt_curacc_branch',balance = '$updt_curacc_amount', created_date = '$updt_curacc_joining',modified_by = '$superuser',modified_date = '$datetime' WHERE customer_uid = '$customer_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_fdacc($customer_uid,$updt_fdacc_fname,$updt_fdacc_mname,$updt_fdacc_sname,$updt_fdacc_sex,$updt_fdacc_marriage,$updt_fdacc_adhar,$updt_fdacc_pan,$updt_fdacc_dob,$updt_fdacc_building,$updt_fdacc_area,$updt_fdacc_street,$updt_fdacc_milestone,$updt_fdacc_pincode,$updt_fdacc_city,$updt_fdacc_teh,$updt_fdacc_dist,$updt_fdacc_state,$updt_fdacc_phone,$updt_fdacc_mob,$updt_fdacc_email,$updt_fdacc_quali,$updt_fdacc_amount,$updt_fdacc_branch,$updt_fdacc_joining,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE fd_account SET first_name = '$updt_fdacc_fname',middle_name = '$updt_fdacc_mname',sir_name = '$updt_fdacc_sname',sex = '$updt_fdacc_sex',is_married = '$updt_fdacc_marriage',adhar = '$updt_fdacc_adhar',pan = '$updt_fdacc_pan',birth_date = '$updt_fdacc_dob',building ='$updt_fdacc_building',area = '$updt_fdacc_area',street = '$updt_fdacc_street',milestone = '$updt_fdacc_milestone',pin_code = '$updt_fdacc_pincode',city = '$updt_fdacc_city',tehsil = '$updt_fdacc_teh',district = '$updt_fdacc_dist',state = '$updt_fdacc_state',phone_no = '$updt_fdacc_phone',mobile_no = '$updt_fdacc_mob',email = '$updt_fdacc_email',qualification = '$updt_fdacc_quali',branch = '$updt_fdacc_branch',balance = '$updt_fdacc_amount', created_date = '$updt_fdacc_joining',modified_by = '$superuser',modified_date = '$datetime' WHERE customer_uid = '$customer_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_rdacc($customer_uid,$updt_rdacc_fname,$updt_rdacc_mname,$updt_rdacc_sname,$updt_rdacc_sex,$updt_rdacc_marriage,$updt_rdacc_adhar,$updt_rdacc_pan,$updt_rdacc_dob,$updt_rdacc_building,$updt_rdacc_area,$updt_rdacc_street,$updt_rdacc_milestone,$updt_rdacc_pincode,$updt_rdacc_city,$updt_rdacc_teh,$updt_rdacc_dist,$updt_rdacc_state,$updt_rdacc_phone,$updt_rdacc_mob,$updt_rdacc_email,$updt_rdacc_quali,$updt_rdacc_amount,$updt_rdacc_branch,$updt_rdacc_joining,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE rd_account SET first_name = '$updt_rdacc_fname',middle_name = '$updt_rdacc_mname',sir_name = '$updt_rdacc_sname',sex = '$updt_rdacc_sex',is_married = '$updt_rdacc_marriage',adhar = '$updt_rdacc_adhar',pan = '$updt_rdacc_pan',birth_date = '$updt_rdacc_dob',building ='$updt_rdacc_building',area = '$updt_rdacc_area',street = '$updt_rdacc_street',milestone = '$updt_rdacc_milestone',pin_code = '$updt_rdacc_pincode',city = '$updt_rdacc_city',tehsil = '$updt_rdacc_teh',district = '$updt_rdacc_dist',state = '$updt_rdacc_state',phone_no = '$updt_rdacc_phone',mobile_no = '$updt_rdacc_mob',email = '$updt_rdacc_email',qualification = '$updt_rdacc_quali',branch = '$updt_rdacc_branch',balance = '$updt_rdacc_amount', created_date = '$updt_rdacc_joining',modified_by = '$superuser',modified_date = '$datetime' WHERE customer_uid = '$customer_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_dep($department_uid,$updt_dep_name,$updt_dep_code,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE department_master SET department = '$updt_dep_name',department_code = '$updt_dep_code',updated_by = '$superuser',updated_date = '$datetime' WHERE department_uid = '$department_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_desi($desi_uid,$updt_desi_name,$updt_desi_code,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE designation_master SET designation = '$updt_desi_name',desi_code = '$updt_desi_code',updated_by = '$superuser',updated_date = '$datetime' WHERE des_uid = '$desi_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_degree($degree_uid,$updt_deg_name,$updt_deg_code,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE degree_master SET degree = '$updt_deg_name',degree_code = '$updt_deg_code',updated_by = '$superuser',updated_date = '$datetime' WHERE degree_uid = '$degree_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_state($state_uid,$updt_state_name,$updt_state_abbr,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE state_master SET state_name = '$updt_state_name',state_abbr = '$updt_state_abbr',modified_by = '$superuser',modified_date = '$datetime' WHERE state_uid = '$state_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_distr($district_uid,$updt_dist_name,$updt_dist_state,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE district_master SET district_name = '$updt_dist_name',state = '$updt_dist_state',updated_by = '$superuser',updated_date = '$datetime' WHERE district_uid = '$district_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_teh($tehsil_uid,$updt_teh_name,$updt_teh_dist,$updt_teh_state,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE tehsil_master SET tehsil_name = '$updt_teh_name',district = '$updt_teh_dist',state = '$updt_teh_state',updated_by = '$superuser',updated_date = '$datetime' WHERE tehsil_uid = '$tehsil_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function update_city($city_uid,$updt_city_name,$updt_city_abbr,$updt_city_teh,$updt_city_dist,$updt_city_state,$superuser){
			$datetime = date("Y-m-d H:i:s" ,time());
			$query = "UPDATE city_master SET city_name = '$updt_city_name',city_abbr = '$updt_city_abbr',tehsil = '$updt_city_teh',district = '$updt_city_dist',state = '$updt_city_state',modified_by = '$superuser',modified_date = '$datetime' WHERE city_uid = '$city_uid'"; 
			$result = @mysqli_query($this->db,$query);
			return $result;
		}
		
		public function generateuidforemployee(/*$orgid*/){
			$emp_uid = $this->get_rand_id(6);
			$checkifemployeeuidexist = $this->checkifemployeeuidexist($emp_uid/*,$orgid*/);
			if(!$checkifemployeeuidexist){
				return $emp_uid;
			}
			else{
				$this->generateuidforemployee($orgid);
			}
		}
		
		public function generateuidforsavacc(/*$orgid*/){
			$sav_acc_uid = $this->get_rand_id(6);
			$checkifsavuidexist = $this->checkifsavuidexist($sav_acc_uid/*,$orgid*/);
			if(!$checkifsavuidexist){
				return $sav_acc_uid;
			}
			else{
				$this->generateuidforsavacc($orgid);
			}
		}
		
		public function generateuidforcuracc(/*$orgid*/){
			$cur_acc_uid = $this->get_rand_id(6);
			$checkifcuruidexist = $this->checkifcuruidexist($cur_acc_uid/*,$orgid*/);
			if(!$checkifcuruidexist){
				return $cur_acc_uid;
			}
			else{
				$this->generateuidforcuracc($orgid);
			}
		}
		
		public function generateuidforfdacc(/*$orgid*/){
			$fd_acc_uid = $this->get_rand_id(6);
			$checkiffduidexist = $this->checkiffduidexist($fd_acc_uid/*,$orgid*/);
			if(!$checkiffduidexist){
				return $fd_acc_uid;
			}
			else{
				$this->generateuidforfdacc($orgid);
			}
		}

		public function generateuidforrdacc(/*$orgid*/){
			$rd_acc_uid = $this->get_rand_id(6);
			$checkifrduidexist = $this->checkifrduidexist($rd_acc_uid/*,$orgid*/);
			if(!$checkifrduidexist){
				return $rd_acc_uid;
			}
			else{
				$this->generateuidforrdacc($orgid);
			}
		}
		
		public function checkifemployeeuidexist($emp_uid/*,$orgid*/){
			$saltquery = "select emp_uid from staff_master where emp_uid = '$emp_uid'";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function checkifsavuidexist($sav_acc_uid/*,$orgid*/){
			$saltquery = "select customer_uid from saving_account where customer_uid = '$sav_acc_uid'";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function checkifcuruidexist($cur_acc_uid/*,$orgid*/){
			$saltquery = "select customer_uid from current_account where customer_uid = '$cur_acc_uid'";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function checkiffduidexist($fd_acc_uid/*,$orgid*/){
			$saltquery = "select customer_uid from fd_account where customer_uid = '$fd_acc_uid'";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function checkifrduidexist($rd_acc_uid/*,$orgid*/){
			$saltquery = "select customer_uid from rd_account where customer_uid = '$rd_acc_uid'";
			$result = @mysqli_query($this->db,$saltquery);
			$data = @mysqli_fetch_assoc($result);
			return $data;
		}
		
		public function get_rand_id($length){
			if($length>0){ 
				$rand_id="";
					mt_srand((double)microtime() * 1000000);
				for($i=1; $i<=$length; $i++){
					$numone = mt_rand(1,36);
					$rand_id .= $this->assign_rand_value($numone);
				}
			}
			return strtoupper($rand_id);
		}
			
		public function assign_rand_value($numone){
			// accepts 1 - 36
			switch($numone){
				case "1":
				$rand_value = "a";
				break;
				case "2":
				$rand_value = "b";
				break;
				case "3":
				$rand_value = "c";
				break;
				case "4":
				$rand_value = "d";
				break;
				case "5":
				$rand_value = "e";
				break;
				case "6":
				$rand_value = "f";
				break;
				case "7":
				$rand_value = "g";
				break;
				case "8":
				$rand_value = "h";
				break;
				case "9":
				$rand_value = "i";
				break;
				case "10":
				$rand_value = "j";
				break;
				case "11":
				$rand_value = "k";
				break;
				case "12":
				$rand_value = "l";
				break;
				case "13":
				$rand_value = "m";
				break;
				case "14":
				$rand_value = "n";
				break;
				case "15":
				$rand_value = "o";
				break;
				case "16":
				$rand_value = "p";
				break;
				case "17":
				$rand_value = "q";
				break;
				case "18":
				$rand_value = "r";
				break;
				case "19":
				$rand_value = "s";
				break;
				case "20":
				$rand_value = "t";
				break;
				case "21":
				$rand_value = "u";
				break;
				case "22":
				$rand_value = "v";
				break;
				case "23":
				$rand_value = "w";
				break;
				case "24":
				$rand_value = "x";
				break;
				case "25":
				$rand_value = "y";
				break;
				case "26":
				$rand_value = "z";
				break;
				case "27":
				$rand_value = "0";
				break;
				case "28":
				$rand_value = "1";
				break;
				case "29":
				$rand_value = "2";
				break;
				case "30":
				$rand_value = "3";
				break;
				case "31":
				$rand_value = "4";
				break;
				case "32":
				$rand_value = "5";
				break;
				case "33":
				$rand_value = "6";
				break;
				case "34":
				$rand_value = "7";
				break;
				case "35":
				$rand_value = "8";
				break;
				case "36":
				$rand_value = "9";
				break;
			}
			return $rand_value;
		}
		
		public function get_rand_otp($length){
			if($length>0){ 
				$rand_otp="";
					mt_srand((double)microtime() * 1000000);
				for($i=1; $i<=$length; $i++){
					$numone = mt_rand(1,10);
					$rand_otp .= $this->assign_rand_otp($numone);
				}
			}
			return $rand_otp;
		}
		
		public function assign_rand_otp($numone){
			// accepts 1 - 10
			switch($numone){
				case "1":
				$rand_value = "0";
				break;
				case "2":
				$rand_value = "1";
				break;
				case "3":
				$rand_value = "2";
				break;
				case "4":
				$rand_value = "3";
				break;
				case "5":
				$rand_value = "4";
				break;
				case "6":
				$rand_value = "5";
				break;
				case "7":
				$rand_value = "6";
				break;
				case "8":
				$rand_value = "7";
				break;
				case "9":
				$rand_value = "8";
				break;
				case "10":
				$rand_value = "9";
				break;
			}
			return $rand_value;
		}
		
		public function __destruct()
			{
				mysqli_close($this->db);//$this->db->close();
			}
		}
?>	