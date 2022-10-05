<?php
//this is for the displaying the referral table for GUIDANCE 
public function ref_room ($STUD_ID) {

    $posts = $this-> db-> select (['student_tbl.STUD_ID' , 'referral_tbl.STUD_FNAME' , 
                                    'referral_tbl.STUD_LNAME' , 'referral_tbl.REF_SOURCE' ,
                                    'referral_tbl.REF_DATE' ,'referral_tbl.REF_NATURE' ,
                                    'referral_tbl.REF_REASON' ,'referral_tbl.REF_ACT'
                                    'referral_tbl.REF_REMARK',' referral_tbl.REF_STAT']) ;
    $this->db->from(' student_tbl ') ;
    $this->db-> join ( 'referral_tbl' , ' student_tbl.STUD_ID  = referral_tbl.STUD_ID' ) ;
    $this->db-> join ( '`individual_basicinfo_tbl' , ' referral_tbl.STUD_ID = `individual_basicinfo_tbl.STUD_ID ' ) ;
    $this->db-> where ( ' referral_tbl.STUD_ID  ' , $STUD_ID ) ;
    $this->db-> order_by ( ' referral_tbl.REFERRAL_ID' , ' DESC ' ) ;
    $this->db-> get ( ) ; $ref_room
    return $ref_room->result();

}
//this for the status updating for referral

public function ref_chck($)
{

}



    //this for the students
public function edit_stud($STUD_FNAME,$STUD_MNAME,$STUD_LNAME,$STUD_CONTACT)
{



}

public function student_info()
{


}

public function delete_stud()
{

}

public function update_stud()
{

}

//this for the teacher or staffs
public function edit_stud()
{

}

public function delete_stud()
{

}

public function update_stud()
{

}







?>