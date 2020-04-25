<?php
Class User extends CI_Model
{ 
  	function __construct() 
    {
  	 parent::__construct();
    }
 
   function login($username, $password)
   {
       $this -> db -> select('id, username, password');
       $this -> db -> from('admin');
       $this -> db -> where('username', $username);
       $this -> db -> where('password', $password);
       $this -> db -> limit(1);
     
       $query = $this -> db -> get();
     
       if($query -> num_rows() == 1)
       {
       		return true;
         //return $query->result();
       }
       else
       {
         return false;
       }
   }
  
function emp_login($username, $password)
   {
       $this -> db -> select('id, username, password');
       $this -> db -> from('emp');
       $this -> db -> where('username', $username);
       $this -> db -> where('password', $password);
       $this -> db -> limit(1);
     
       $query = $this -> db -> get();
     
       if($query -> num_rows() == 1)
       {
          return true;
         //return $query->result();
       }
       else
       {
         return false;
       }
   }

  function studentlogin($username, $password)
   {
       $this -> db -> select('*');
       $this -> db -> from('studentinfo');
       $this -> db -> where('rollno', $username);
       $this -> db -> where('password', $password);
       $this -> db -> limit(1);
     
       $query = $this -> db -> get();
      
       $row = $query->row_array();   

       if($query -> num_rows() == 1)
       {
          return $row;
         //return $query->result();
       }
       else
       {
         return false;
       }
   }

  function insertcentre($data)
  {
    $this->db->insert('centre', $data);
  }

  function insertemp($data)
  {
    $this->db->insert('emp', $data);
  }

  function insertstu($data)
  {
    $this->db->insert('studentinfo', $data);
  }

  function updatestart($data)
  {
      $where = "id = 1"; 
      //$this->db->insert('start_regi', $data);   
      //$this -> db -> where('id', 1);
      $this->db->update('start_regi', $data, $where);
  }

  function updatestop($data)
  {
      $where = "id = 1"; 
      //$this->db->insert('start_regi', $data);   
      //$this -> db -> where('id', 1);
      $this->db->update('stop_regi', $data, $where);
  }

  function prefrences()
  {
    $this -> db -> distinct();
    $this -> db -> select('city');
    $this -> db -> from('centre');
    $query = $this -> db -> get();
    
    return $query->result();
  }

  function student_info()
  {
    $this -> db -> select('*');
    $this -> db -> from('studentinfo');
    $query = $this -> db -> get();
    
    return $query->result();
  }

  function regi_start()
  {
    $this -> db -> select('yesno');
    $this -> db -> from('start_regi');
    $this -> db -> where('id', 1);
    $query = $this -> db -> get();
    
    $row = $query->row_array();

    if($row['yesno']==1){
      return true;  
    }else{
      return false;  
    }
    
  }

  function regi_stop()
  {
    $this -> db -> select('yesno');
    $this -> db -> from('stop_regi');
    $this -> db -> where('id', 1);
    $query = $this -> db -> get();
    
    $row = $query->row_array();

    if($row['yesno']==1){
      return true;  
    }else{
      return false;  
    }
    
  }

  function regi_count()
  {
    $this -> db -> select('count');
    $this -> db -> from('regi_count');
    $this -> db -> where('id', 1);
    $query = $this -> db -> get();
    
    $row = $query->row_array();

    return $row['count'];
  }

  function regi_count_inc()
  {
      $this -> db -> select('count');
      $this -> db -> from('regi_count');
      $this -> db -> where('id', 1);
      
      $query = $this -> db -> get();
      $row = $query->row_array();
      
      $temp = $row['count']+1;
      
      $data = array
        (
          'count' => $temp
          );

      $where = "id = 1"; 
      $this->db->update('regi_count', $data, $where); 
  }
}

?>