@extends('layouts.main')

@section('content')
<br><br>
        <div class="main-panel bg-success">
            <div class="content-header bg-info text-center"><h2><b>YOUR REFERALS</b></h2></div>
            <div class="content">
              
              
              <!------------------------------------------------------->
              
              
              
              
              
              
                        
<table id="" class=" table table-stripped table-hover">
    <thead>
        <tr>                
            <th> {{ __('firstName') }} </th>
            <th> {{ __('Username') }} </th>
            <th> {{ __('phone') }} </th>
            <th> {{ __('st') }} </th>   
        </tr>
    </thead>
    <tbody>

        <?php
            // $activities = App\User::where('referal', $user->username)->orderby('id', 'desc')->get();
              $activities = App\User::where('referal', $user->username)->where('status', 1)->orderby('id', 'desc')->get();
        ?>
        @if(count($activities) > 0 )
            @foreach($activities as $activity)
                <tr>                                                            
                    <td>{{$activity->firstname}} {{$activity->lastname}}</td>
                    <td>{{$activity->username}}</td>
                  <td>{{$activity->phone}}</td>                                                                            
                    <td>{{$activity->status}}</td>                     
                </tr>
            @endforeach
        @else
            
        @endif
    </tbody>
</table>

              
   
  
            </div>
</div>
           

@endSection
            