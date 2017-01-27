<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Member;
class MemberController extends Controller
{
    public function index()
    {
      $members = Member::all();
      return view('member', ['members' => $members]);
    }

    public function show($id)
    {
      $member = Member::find($id);
      return view('single', ['member ' => $member]);
    }
}
?>
