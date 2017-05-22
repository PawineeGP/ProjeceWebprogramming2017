<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{

  public function add()
  {
    return view('adminInsert');
  }
  //   public function getIndex()
  //   {
  //     $lunch=lunch::orderBy('Lcalories')-->limit(5)->get();
  //     return viwe('pages.calculator')->withlunch($lunch);
  //   }
  // public function getAbout()
  // {
  //   $Lname='Lname';
  //   $Lcalories='Lcalories';
  //
  //   $fullMenu=$Bname."".$Bcalories;
  //   $data=[];
  //   $data['$fullMenu']=$fullMenu;
  //   return view('pages.about')->withData($data);
  // }
  // public function getContact()
  // {
  //   return view('pages.contact');
  // }

}
