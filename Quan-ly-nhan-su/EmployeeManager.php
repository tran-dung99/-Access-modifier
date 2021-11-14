<?php
include_once "Employee.php";
class EmployeeManager
{
    public $path ;
    public $employees;
 public function __construct()
 {
     $this->path =  "list.json";
     $this->employees = $this->load();
 }
 public function save($data)
 {
     $dataJson = json_encode($data);
     file_put_contents($this->path,$dataJson);
 }
    public function load()
    {
        $dataJson = file_get_contents($this->path);
        if(!empty($dataJson)) {
            $data = json_decode($dataJson,true);
            $obj = $this->convertToObject($data);
            return $obj;
        }else{
            return [];
        }

    }
    public function add($request)
    {
     $employees = $this->load();
     $employee = new Employee($request["ho"],$request["name"],$request["birthday"],$request["address"],$request["job"]);
     array_push($employees,$employee);
     $this->save($employees);
    }
   public function delete($index)
   {
       $employees = $this->load();
       array_splice($employees,$index,1);
       $this->save($employees);

   }
   public function edit($index)
   {
       $employees = $this->load();
       $employee = new Employee($_REQUEST["ho"],$_REQUEST["name"],$_REQUEST["birthday"],$_REQUEST["address"],$_REQUEST["job"]);
       $employees[$index] = $employee;
       $this->save($employees);

   }
    public function convertToObject($arr)
    {
        $employees = array();
        foreach($arr as $value) {
            $obj = new Employee($value["ho"],$value["name"],$value["birthday"],$value["address"],$value["job"]);
            array_push($employees,$obj);
        }
        return $employees;
    }
}
