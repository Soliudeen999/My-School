@extends('layouts.header')
@section('title', 'Parent Dashboard')
@section('notifications')
  @if($msg[0]->messages_count > 0)
  <span class="badge bg-green">
  {{ $msg[0]->messages_count }}
  </span>
  @endif
@endsection 
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="page-title">
            <div class="title_left">
                <h4>User Profile</h4>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for..">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
                    <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title" >
                    <h2>My Profile </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-thumbnail avatar-view " src="{{ asset('storage/uploads/'.Auth::user()->image) }}" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>{{ Auth::user()->fullName }}</h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> 
                            {{ Auth::user()->address }}
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> 
                          {{ Auth::user()->occupation }}
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          {{ Auth::user()->about }}
                        </li>
                        <li class="m-top-xs">
                          <i class="fa fa-phone user-profile-icon"></i>
                          {{ Auth::user()->phoneNo }}
                        </li>
                      </ul>

                      <a class="btn btn-success" 
                      href="{{ route('createProfile', ['edit' => Auth::id()]) }}"
                      ><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                      <!-- start skills -->
                      {{-- <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Web Applications</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                      </ul> --}}
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">

                      <div class="profile_title">
                        <div class="col-md-6">
                          <h4>My Baby Profile</h4>
                        </div>
                        <div class="col-md-6">
                          
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      {{-- <div id="graph_bar" style="width:100%; height:280px;"></div> --}}
                      <!-- end of user-activity-graph -->
                      @if(count($Guardian) <= 0)
                        <blockquote class="blockquote">
                            {{ "Please register  your child to view" }}
                        </blockquote>
                      @else
                    <ul class="list-unstyled msg_list">
                            @foreach($Guardian as $Guard)
                              
                    
                    <li>
                      <a href="/view/{{ $Guard->id }}">
                        <span class="image">
                          <img src="{{ asset('storage/uploads/'.$Guard->image) }}" alt="img">
                        </span>
                        <span>
                          <span><b>{{ $Guard->surname }}</b></span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message" style="padding-left: 70px">
                          {{ $Guard->about }}
                          Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that <br>
                          <b>Hobbies: </b>{{ $Guard->hobbies }} <br>
                          <b>Class: </b>{{ $Guard->class_id }} <br>
                        </span>
                          {{-- <a href="" class=" btn btn-link btn-default"> View Student</a> --}}
                      </a>
                    </li>
                    
                            @endforeach
                  </ul>

                      @endif


                      <div class="profile_title">
                        <div class="col-md-6">
                          <h4>My Messages</h4>
                        </div>
                        <div class="col-md-6">
                          
                        </div>
                      </div>
                      <!-- start of user-activity-graph -->
                      {{-- <div id="graph_bar" style="width:100%; height:280px;"></div> --}}
                      <!-- end of user-activity-graph -->
                      @if(count($messages) <= 0)
                        <blockquote>
                            {{ "Please register  your child to view" }}
                        </blockquote>
                      @else

                        <div class="col-sm-12 mail_list_column">
                            @foreach($messages as $message)


                            
                          
                        <a href="/view-message/{{ $message->id }}/{{ $message->viewed }}">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                            </div>
                            <div class="right">
                              <h3>{{ $message->sender }} <small>{{ date('d - m - Y',strtotime($message->created_at)) }}</small></h3>

                              @if($message->viewed == 0)
                              <a href="{{ route('viewMessage',[$message->id,$message->viewed,'guardian']) }}">
                              <b><p>{{ stringPart($message->body) }}</p></b>
                              </a>
                              @else
                              <a href="{{ route('viewMessage',[$message->id,$message->viewed,'guardian']) }}">
                              <p>{{ stringPart($message->body) }}</p>
                              </a>

                              @endif
                            </div>
                            <button id="compose" class="btn btn-sm btn-success pull-right" type="button">Reply</button>
                          </div>
                        </a>
                          @break($loop->iteration == 5)
                          @endforeach
                      </div>

                      @endif
                        <a href=""><button class="btn btn-success pull-right btn-xs">View All Messages</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
    </div>
</div>
@endsection